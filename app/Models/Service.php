<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected static $service;
    protected static $image;
    protected static $imageName;
    protected static $directory;
    protected static $imageUrl;

    public static function saveServiceData($request)
    {
        self::$image = $request->file('service_image');
        self::$imageName = time().rand(10,1000).'.'.self::$image->getClientOriginalExtension();
        self::$directory = 'assets/images/service-image/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;

        self::$service = new Service();
        self::$service->service_title    = $request->service_title;
        self::$service->service_image    = self::$imageUrl;
        self::$service->service_content  = $request->service_content;
        self::$service->status           = $request->status;
        self::$service->hit_count        = $request->hit_count;
        self::$service->save();
    }

    public static function updateServiceData($request)
    {
        self::$service = Service::find($request->service_id);
        self::$image = $request->file('service_image');
        if (self::$image)
        {
            if (file_exists(self::$service->service_image))
            {
                unlink(self::$service->service_image);
            }
            self::$imageName = time().rand(10,1000).'.'.self::$image->getClientOriginalExtension();
            self::$directory = 'assets/images/service-image/';
            self::$image->move(self::$directory, self::$imageName);
            self::$imageUrl = self::$directory.self::$imageName;
        } else {
            self::$imageUrl = self::$service->service_image;
        }

        self::$service->service_title    = $request->service_title;
        self::$service->service_image    = self::$imageUrl;
        self::$service->service_content  = $request->service_content;
        self::$service->status        = $request->status;
        self::$service->hit_count     = $request->hit_count;
        self::$service->save();
    }


}
