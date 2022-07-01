<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use DataTables;
use Exception;

class DepartmentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $departments = Department::all();
        if (request()->ajax()) {
            return Datatables::of($departments)
            ->addIndexColumn()
            ->addColumn('action', function ($departments) {
                $button = '<button id="delete" class="btn  btn-danger" data-id="' . $departments->id . '">Delete</button>';
                return $button;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('admin.departments.index')->with('title', 'Departemen');

    }

    public function showAddDepartment()
    {
        return view('admin.departments.addDepartments')->with('title', 'Tambah Departemen');
    }

   

    public function addDepartments(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
            ]);

            $departments = Department::create([
                'name' =>  $request['name'],
                'description' =>  $request['description'],
                   
            ]);

            return response()->json([
                'status' => '200',
                'message' => 'Success add data',
            ]);
        } catch (Exception $err) {
            return response()->json([
                'status' => '500',
                'error' => $err->getMessage()
            ], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $department = Department::firstwhere('id', $id);
            $department->delete();

            return response()->json([], 200);
        } catch (Exception $err) {
            return response()->json([
                'status' => '500',
                'error' => $err->getMessage(),
            ], 500);
        }
    }


}
