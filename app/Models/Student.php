<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    private static $student,$image,$imageName,$imageDir,$imgUrl;
    use HasFactory;

    public static function saveImage($request)
    {
        self::$image            = $request->file('image');
        self::$imageName        = 'student_'.time().'.'.self::$image->getClientOriginalExtension();
        self::$imageDir         = 'Uploads/student/';
        self::$image->move(self::$imageDir,self::$imageName);
        self::$imgUrl         = (self::$imageDir.self::$imageName);

        return self::$imgUrl;

    }


    public static function newStudent($request)
    {
        self::$student = new Student();

        self::$student->name        = $request->name;
        self::$student->email       = $request->email;
        self::$student->mobile      = $request->mobile;
        self::$student->password    = bcrypt($request->mobile);

        self::$student->save();
        return self::$student;
    }

    public static function updateProfile($request,$id)
    {
        self::$student              = Student::find($id);

        self::$student->name        = $request->name;
        self::$student->email       = $request->email;
        self::$student->mobile      = $request->mobile;
        self::$student->address     = $request->address;
        if($request->file('image'))
        {
            if(file_exists(self::$student->image ))
            {
                unlink(self::$student->image);
                self::$student->image       = self::saveImage($request);
            }
            else{
                self::$student->image       = self::saveImage($request);
            }
        }
        else{
            self::$student->image       = self::saveImage($request);
        }

        self::$student->save();
    }

}
