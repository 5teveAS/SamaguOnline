<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function profile()
    {
        $employees = Employee::all();
        return view('user-profile', ['employees'=>$employees]);

    }
}
