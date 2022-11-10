<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enroll;
use App\Models\Student;
use Illuminate\Http\Request;

class EnrollController extends Controller
{
    public $student;
    public function newEnroll($id)
    {
//        return Course::find($id);
        return view('website.courses.enroll-course',[
            'course'=>Course::find($id),
        ]);
    }

    public function enrollNewCourse(Request $request ,$id)
    {

        $this->student=Student::newStudent($request);
        Enroll::storeEnroll($request,$id);
        return back()->with('success','Your enroll request is sent');

    }
}
