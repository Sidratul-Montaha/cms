<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewadmin()
    {
$adminlist=Admin::all();
        return view('backend.layouts.admin.admin',compact("adminlist"));

    }

    public function viewadminlist()
    {
        return view('backend.layouts.admin.adminlist');
    }
public function viewadminform(Request $request)
{
    Admin::Create([
       'name'=>$request->adminname,
        'password'=>$request->password,
        'email'=>$request->email,
        'number'=>$request->number,
    ]);
    return redirect()->route('admin.view');
}

}
