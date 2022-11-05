<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index()
    {
       $coursesWithTeacher = DB::table('courses')
            ->join('teachers','teachers.id','courses.teacher_id')
            ->select('teachers.*','courses.*')
            ->latest('courses.id','DESC')
            ->take(4)
            ->where('c_status',1)
            ->get();
        return view('website.home.index',[
            'latestCourses' => $coursesWithTeacher,
        ]);
    }

    public function courseDetails($id)
    {

        $coursesWithTeacher = DB::table('courses')
            ->join('teachers','teachers.id','courses.teacher_id')
            ->select('teachers.*','courses.*')
            ->latest('courses.id','DESC')
            ->take(4)
            ->where('courses.id',$id)
            ->first();
        return view('website.courses.details',[
            'detailsCourse'=>$coursesWithTeacher,
        ]);
    }

    public function about()
    {
        return view('website.about.index');
    }

    public function allCourse()
    {
        $coursesWithTeacher = DB::table('courses')
            ->join('teachers','teachers.id','courses.teacher_id')
            ->select('teachers.*','courses.*')
            ->take(8)
            ->where('c_status',1)
            ->get();
        return view('website.courses.index',[
            'latestCourses' => $coursesWithTeacher,
        ]);
    }

    public function contactUs()
    {
        return view('website.contact.index');
    }
    public function fontLogin()
    {
        return view('website.auth.login');
    }

    public function fontRegister()
    {
        return view('website.auth.register');
    }


}
