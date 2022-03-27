<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogViewController extends Controller
{
    public function viewBlog()
    {
        return view('front.blog.blog', [
            'blogs' => Blog::all(),
        ]);
    }

    public function singleBlog($id)
    {
        return view('front.blog.single_blog',[
            'blog' => Blog::find($id),
        ]);

    }
}
