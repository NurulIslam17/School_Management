<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enroll;
use Illuminate\Http\Request;
use Session;

class TeacherEnrollController extends Controller
{
    public  function manageEnroll()
    {
        $coursesUnderTeacher = Course::where('teacher_id',Session::get('teacher_id'))->get();
       //return $coursesUnderTeacher;

        foreach ($coursesUnderTeacher as $courseUnderTeacher)
        {
            $enrollInfo = Enroll::where('course_id',$courseUnderTeacher->id)
                ->where('enroll_status','Completed')
                ->get();
        }

        //return $enrollInfo;

        return view('teacher.enroll.manage',[
            'enrollInformation' => $enrollInfo,
        ]);
    }
}
