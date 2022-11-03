<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public  function index()
    {
        return view('admin.teacher.index');
    }

    public  function manage()
    {
        return view('admin.teacher.manage');
    }

    public  function createTeacher(Request $request)
    {
        Teacher::saveTeacher($request);
        return back()->with('success','Teacher Created Successfully');
    }
}
