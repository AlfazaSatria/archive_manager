<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getAllDepartments()
    {
        $departments=Department::all();

        return view('auth.login')->with('departments', $departments);
    }


}
