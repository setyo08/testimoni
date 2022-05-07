<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminNewsController extends Controller
{
    public function store(Request $request)
    {
        $requestAll = $request->all();
        $this->validate($request, [
            'image' => 'image'
        ]);
        //upload image baru
        $image = $request->file('image');
        $image->storeAs('public/gambar', $image->hashName());
        $requestAll['image'] = $image->hashName();

        News::create($requestAll);
        return redirect()->back()->with('success','News berhasil ditambahkan');
    }
    public function delete($id)
    {
        $new = News::find($id);
        $new->delete();
        return redirect()->back()->with('success','News berhasil dihapus');
    }
}
