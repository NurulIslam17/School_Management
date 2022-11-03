<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherAuthController extends Controller
{
    public function loginForm()
    {
        return view('teacher.auth.login');
    }
}
