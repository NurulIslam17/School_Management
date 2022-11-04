<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Course extends Model
{
    use HasFactory;
    private static $course,$image,$imageName,$imageDir,$imageUrl;

    public static function saveImage($request)
    {
        self::$image = $request->file('c_image');
        self::$imageName = 'course'.'_'.time().'.'.self::$image->getClientOriginalExtension();
        self::$imageDir = 'Uploads/courses/';
        self::$image->move(self::$imageDir,self::$imageName);
        self::$imageUrl= (self::$imageDir.self::$imageName);

        return self::$imageUrl;

    }

    public static function create($request)
    {
         self::$course                = new Course();
         self::$course->c_title       = $request->c_title;
         self::$course->teacher_id    = Session::get('teacher_id');
         self::$course->c_fee         = $request->c_fee;
         self::$course->c_start_date  = $request->c_start_date;
         self::$course->c_duration    = $request->c_duration;
         self::$course->c_image       = self::saveImage($request);
         self::$course->c_description = $request->c_description;

         self::$course->save();
    }
}
