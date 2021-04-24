<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmpController extends Controller

{
    public function viewemployee()
    {
        $empform = Employee::all();
        return view('backend.layouts.employee.employee', compact("empform"));

    }

    public function viewaempform()
    {
        return view('backend.layouts.employee.empform');
    }

    public function vieweplist(Request $request)
    {
        Admin::Create([
            'name' => $request->adminname,
            'password' => $request->password,
            'email' => $request->email,
            'number' => $request->number,
        ]);
        return redirect()->route('emp.view');
    }


}


