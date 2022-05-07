<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AppController extends Controller
{
    public function index(Request $request)
    {
        if ($request->method() == 'POST') {
            $data =  $request->validate([
                'message' => 'required',
                'ulasan' => 'required',
            ]);
            Feedback::create([
                'user_id' => auth()->user()->id,
                'message' => $data['message'],
                'ulasan' => $data['ulasan']
            ]);
            return back()->with(['feedback_success' => 'Selamat anda berhasil mengirim feedback']);
        } else {
            $session = $request->session()->all();
            return view('index', [
                'session' => $session, 
                'user' => $request->user(), 
                'list_feedback' => Feedback::latest()->where('is_show', true)->get(),
            ]);
        }
    }

    public function login(Request $request)
    {
        if ($request->method() == "POST") {
            $data = $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);
            $cek = User::where('email', $request->email)->first();
            if(!isset($cek) || $cek->is_admin){
                return redirect()->back()->with('alert', 'Akun anda tidak ditemukan');
            }
            if (Auth::attempt($data)) {
                session()->put('user', $cek);
                $request->session()->regenerate();
                return redirect()->route('index');
            }
            return back()->with(['signin_failed' => 'Maaf password atau email anda salah']);
        } else {
            $session = $request->session()->all();
            return view('login', ['session' => $session]);
        }
    }

    public function register(Request $request)
    {
        if ($request->method() == 'POST') {
            $request->validate([
                'nama' => 'required',
                'email' => 'required|unique:users',
                'password' => 'required'
            ]);
            if (User::where('email', $request->email)->first()) {
                return back()->with(['signup_failed' => 'Email tersebut sudah terpakai, silahkan gunakan email lain.']);
            } else {
                $data = $request->all();
                $data['is_admin'] = '0';
                $data['alamat'] = $request->alamat;
                $data['no_hp'] = $request->no_hp;
                $data['tanggal_lahir'] = $request->tanggal_lahir;
                $data['password'] = Hash::make($data['password']);
                User::create($data);
                return redirect()->route('login');
            }
        } else {
            $session = $request->session()->all();
            return view('register', ['session' => $session]);
        }
    }
}
