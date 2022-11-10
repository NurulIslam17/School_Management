<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    private static $enroll;
    use HasFactory;

    public static function storeEnroll($request,$student_id,$course_id)
    {
        self::$enroll = new Enroll();

        self::$enroll->student_id       = $student_id;
        self::$enroll->course_id        = $course_id;
        self::$enroll->enroll_date      = date('Y-m-d');
        self::$enroll->enroll_timestamp = strtotime('Y-m-d');
        self::$enroll->payment_type     = $request->payment_type;

        self::$enroll->save();
    }
}
