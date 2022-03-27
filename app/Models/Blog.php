<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected static $blog;
    protected static $image;
    protected static $imageName;
    protected static $directory;
    protected static $imageUrl;

    public static function saveBlogData($request)
    {
        self::$image = $request->file('blog_image');
        self::$imageName = time().rand(10,1000).'.'.self::$image->getClientOriginalExtension();
        self::$directory = 'assets/images/blog-image/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;

        self::$blog = new Blog();
        self::$blog->category_id    = $request->category_id;
        self::$blog->blog_title    = $request->blog_title;
        self::$blog->blog_image    = self::$imageUrl;
        self::$blog->blog_content  = $request->blog_content;
        self::$blog->status        = $request->status;
        self::$blog->hit_count     = $request->hit_count;
        self::$blog->save();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);  //ORM table relationship
    }

    public static function updateBlogData($request)
    {
        self::$blog = Blog::find($request->blog_id);
        self::$image = $request->file('blog_image');
        if (self::$image)
        {
            if (file_exists(self::$blog->blog_image))
            {
                unlink(self::$blog->blog_image);
            }
            self::$imageName = time().rand(10,1000).'.'.self::$image->getClientOriginalExtension();
            self::$directory = 'assets/images/blog-image/';
            self::$image->move(self::$directory, self::$imageName);
            self::$imageUrl = self::$directory.self::$imageName;
        } else {
            self::$imageUrl = self::$blog->blog_image;
        }

        self::$blog->category_id    = $request->category_id;
        self::$blog->blog_title    = $request->blog_title;
        self::$blog->blog_image    = self::$imageUrl;
        self::$blog->blog_content  = $request->blog_content;
        self::$blog->status        = $request->status;
        self::$blog->hit_count     = $request->hit_count;
        self::$blog->save();
    }

}


