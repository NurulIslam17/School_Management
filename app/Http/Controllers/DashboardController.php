<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.home.index');
    }
    public  function manageEnroll()
    {
        $enrollInfo = Enroll::get();
        return view('admin.enroll.manage',[
            'allEnrollInfo'=>$enrollInfo,
        ]);
    }
}
