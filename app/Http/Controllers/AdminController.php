<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        if (!Auth::check() || (!$request->user()->is_admin)) return redirect()->route('admin-login');
        if ($request->method() == 'POST') {
            $data = $request->validate([
                'feedback' => 'required'
            ]);
            $feedback = Feedback::where('id', $data['feedback']);
            $show = ($feedback->first()->is_show);
            $feedback->update([
                'is_show' => (!$show)
            ]);
            return back()->with(['feedback_update' => $show ? 'Feedback anda berhasil disembunyikan' : 'Feedback anda berhasil ditampilkan']);
        } else if ($request->method() == 'DELETE') {
            $data = $request->validate([
                'id' => 'required'
            ]);

            User::where('id', $data['id'])->delete();
            return back()->with(['admin_deleted' => 'Admin sudah berhasil terhapus']);
        } else {
            $context = [
                'feedback' => Feedback::all(),
                'admin' => User::where('is_admin', true)->get(),
                'session' => $request->session()->all(),
                'news' => News::all()
            ];
            return view('admin.index', $context);
        }
    }

    public function login(Request $request)
    {
        if ($request->method() == 'POST') {
            $data = $request->validate([
                'email' => ['required', 'email'],
                'password' => 'required'
            ]);
            $user = User::where('email', $data['email'])->first();
            if ($user && $user->is_admin && Auth::attempt($data)) {
                $request->session()->regenerate();
                return redirect()->route('admin');
            } else {
                return back()->with(['login_failed' => 'Login gagal, email atau password anda mungkin salah']);
            }
        } else {
            $session = $request->session()->all();
            return view('admin.login', ['session' => $session]);
        }
    }

    public function register(Request $request)
    {
        if (!Auth::check() || (!$request->user()->is_admin)) return redirect()->route('admin-login');
        if ($request->method() == 'POST') {
            $request->validate([
                'nama' => 'required',
                'email' => 'required|unique:users',
                'password' => 'required'
            ]);

            if (User::where('email', $request->email)->get()->count() == 0) {
                User::create([
                    'nama' => $request->nama,
                    'email' => $request->email,
                    'alamat' => $request->alamat,
                    'tanggal_lahir' => $request->tanggal_lahir,
                    'is_admin' => '1',
                    'no_hp' => $request->no_hp,
                    'password' => Hash::make($request->password)
                ]);
                return back()->with(['register_success' => 'Selamat anda berhasil menambahkan admin']);
            } else {
                return back()->with(['register_failed' => 'Register anda gagal, silahkan ulangi lagi.'])->withInput();
            }
        } else {
            $session = $request->session()->all();
            return view('admin.register', ['session' => $session]);
        }
    }

    public function logout(Request $request)
    {
        $user = $request->user();
        Auth::logout();
        if ($user->is_admin) {
            return redirect()->route('admin-login');
        } else {
            return redirect()->route('index');
        }
    }
}
