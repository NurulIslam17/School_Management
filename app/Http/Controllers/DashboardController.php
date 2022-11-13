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
        $enrollInfo = Enroll::latest()->get();
        return view('admin.enroll.manage',[
            'allEnrollInfo'=>$enrollInfo,
        ]);
    }

    public function enrollStatus($id)
    {
        Enroll::changeStatus($id);
        return back()->with('success','Enroll status updated');
    }
}
