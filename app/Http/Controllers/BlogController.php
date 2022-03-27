<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $blog;

    public function addBlog()
    {
        return view('admin.blog.add', [
            'categories' => Category::where('status', 1)->get(),
        ]);
    }

    public function newBlog(Request $request)
    {
        Blog::saveBlogData($request);
        return redirect()->back()->with('message', 'Blog Added Successfully');
    }

    public function manageBlog()
    {
        return view('admin.blog.manage', [
            'blogs' => Blog::all(),
        ]);
    }

    public function changeStatus($id)
    {
        $this->blog = Blog::find($id);
        if($this->blog->status == 1)
        {
            $this->blog->status = 0;
        }
        elseif ($this->blog->status == 0)
        {
            $this->blog->status = 1;
        }
        $this->blog->save();
        return redirect()->back()->with('message', 'Changed Status Successfully');
    }

    public function deleteBlog($id)
    {
        $this->blog = Blog::find($id);
        if(file_exists($this->blog->blog_image))
        {
            unlink($this->blog->blog_image);
        }
        $this->blog->delete();
        return redirect()->back()->with('message', 'Blog Deleted Successfully');
    }

    public function editBlog($id)
    {
        return view('admin.blog.edit', [
            'blog' => Blog::find($id),
            'categories' => Category::where('status', 1)->get(),
        ]);
    }

    public function updateBlog(Request $request)
    {
        Blog::updateBlogData($request);
        return redirect('manage-blog')->with('message', 'Blog Updated successfully');
    }

}
