<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use DB;
use Session;

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
            ->orderBy('courses.id','DESC')
            ->where('teachers.id',Session::get('teacher_id'))
            ->get();

//        return  $coursesWithTeacher;

        return view('teacher.course.manage',[
            'courses'=>$coursesWithTeacher,
        ]);

    }


}
