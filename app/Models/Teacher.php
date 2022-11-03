<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    private static $teacher,$image,$imageName,$imageDir,$imageUrl;
    private static $deleteData;

    public static  function getImageUrl($request)
    {
        self::$image = $request->file('t_image');
        self::$imageName = 'sms_'.time().'.'.self::$image->getClientOriginalExtension();
        self::$imageDir = 'Uploads/teachers/';
        self::$image->move(self::$imageDir,self::$imageName);
        self::$imageUrl=self::$imageDir.self::$imageName;

        return self::$imageUrl;

    }

    public static function saveTeacher($request)
    {
        self::$teacher               = new Teacher();

        self::$teacher->t_name       = $request->t_name;
        self::$teacher->t_email      = $request->t_email;
        self::$teacher->t_phone      = $request->t_phone;
        self::$teacher->t_password   = bcrypt($request->t_password);
        self::$teacher->description  = $request->t_description;
        self::$teacher->t_image      = self::getImageUrl($request);

        self::$teacher->save();
    }


    public static function deleteTeacher($id)
    {
        self::$deleteData = Teacher::find($id);

        if(self::$deleteData->t_image)
        {
            unlink(self::$deleteData->t_image);
            self::$deleteData->delete();
        }
        else{
            self::$deleteData->delete();
        }
    }
}
