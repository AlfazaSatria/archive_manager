<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\File;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DataTables;
use Exception;

class FileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $departments = Department::all();
        if (request()->ajax()) {
            $files=File::with('department')->get();
            return Datatables::of($files)
            ->addIndexColumn()
            
            ->addColumn('action', function ($files) {
                $button = '<a target="_blank" href="' . route('files.download.file', $files->id) . '"  class="btn btn-sm btn-success" ><i class="fas fa-print"></i>Download</a>';
                $button .= '<button id="delete" class="btn btn-sm btn-danger" data-id="'.$files->id.'">Delete</button>';
                return $button;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('admin.files.index')->with('title', 'File')->with('departments', $departments);
    }

    public function showAddFile()
    {   
        $departments= Department::all();
        return view('admin.files.addFiles')->with('title', 'Tambah File')->with('departments', $departments);
    }

    public function addFiles(Request $request)
    {
        try{
            $time= Carbon::now()->format('d-m-Y');
            if ($request->hasFile('file_name')) {
                $department= Department::firstwhere('id', $request->department_id);

                $file = $request->file('file_name');
                // $filename =$time . '_' . $department->name . '_' .$file->getClientOriginalName();
                $file_name=$department->name . '_' .$file->getClientOriginalName();
                $file->storeAs('/Files_'.$department->name,$file_name, 'public');

                $files=File::create([
                    'department_id' => $request->department_id,
                    'description' => $request->description,
                    'file_name' => $file_name,
                ]);
            }
            return response()->json([
                'status' => '200',
                'message' => 'Success add files',
                'data' => $files
            ], 200);
             
        }catch(Exception $err){
            return response()->json([
                'status' => '500',
                'error' => $err->getMessage()
            ], 500);
        }
    }

    public function destroy($id){
        try{
            $file= File::firstwhere('id', $id);
            $file->delete();

            return response()->json([

            ], 200);
        }catch(Exception $err){
            return response()->json([
                'status' => '500',
                'error' => $err->getMessage()
            ], 500);
        }
    }

    public function downloadFile($id){
        try{
            $file= File::firstwhere('id', $id);
            $department= Department::firstwhere('id', $file->department_id);
            $file_path = storage_path('app/public/'.'Files_'. $department->name .'/'. $file->file_name);
            return response()->download($file_path);

        }catch(Exception $err){
            return response()->json([
                'status' => '500',
                'error' => $err->getMessage()
            ], 500);
        }
    }
}
