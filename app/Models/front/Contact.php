<?php

namespace App\Models\front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected static $contact;

    public static function saveContactData($request)
    {

        self::$contact = new Contact();
        self::$contact->name     = $request->name;
        self::$contact->email    = $request->email;
        self::$contact->subject  = $request->subject;
        self::$contact->message  = $request->message;
        self::$contact->save();
    }
}
