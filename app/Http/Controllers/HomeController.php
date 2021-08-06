<?php

namespace App\Http\Controllers;

use App\Models\Doc_gobierno;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Post;
use App\Models\Document;
use App\Models\Portfolio;
use App\Models\Post_document;

class HomeController extends Controller
{
    public function index()
    {
        $posts=Post::where('status',2)->take(10)->get();
       $sliders = Slider::all();
       $docs=Post_document::all()->take(5);
       $portfolios=Portfolio::all();
      
        return view('home.index',compact('sliders','posts','docs','portfolios'));
    }
}
