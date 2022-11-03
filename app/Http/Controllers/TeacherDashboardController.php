<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('teacher.course.manage');
    }


}
