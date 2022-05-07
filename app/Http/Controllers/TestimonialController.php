<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function detail($status)
    {
        $feedbacks = Feedback::where('ulasan',$status)->where('is_show', '1')->get();

        return view('testimonial.detail', compact('feedbacks','status'));
    }
}
