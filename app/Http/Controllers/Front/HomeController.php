<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homeview()
    {
        return view('front.home.home', [
            'blogs' => Blog::where('status', 1)->take(3)->latest()->get(),
            'services' => Service::where('status', 1)->take(3)->latest()->get(),
        ]);
    }

    public function Service()
    {
        return view('front.service.service');
    }

    public function blogDetails($id)
    {

        return view('front.blog.single_blog', [
            'blog' => Blog::find($id),
        ]);
    }

}
