<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class EnrollController extends Controller
{
    public function newEnroll($id)
    {
//        return Course::find($id);
        return view('website.courses.enroll-course',[
            'course'=>Course::find($id),
        ]);
    }
}
