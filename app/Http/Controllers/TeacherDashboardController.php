<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use DB;

class TeacherDashboardController extends Controller
{
    public function index()
    {
        return view('teacher.home.index');
    }

    public function addCourse()
    {
        return view('teacher.course.index');
    }
    public function manageCourse()
    {
        $coursesWithTeacher = DB::table('courses')
            ->join('teachers','teachers.id','courses.teacher_id')
            ->select('teachers.*','courses.*')
            ->get();

//        return  $coursesWithTeacher;

        return view('teacher.course.manage',[
            'courses'=>$coursesWithTeacher,
        ]);

    }


}
