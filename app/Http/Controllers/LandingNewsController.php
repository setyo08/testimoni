<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class LandingNewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }
    public function show($id)
    {
        $new = News::find($id);
        return view('news.show', compact('new'));
    }
}
