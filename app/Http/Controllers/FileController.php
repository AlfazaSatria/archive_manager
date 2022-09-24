<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\File;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DataTables;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->department_id == 1 || Auth::user()->department_id == 2 || Auth::user()->department_id == 3) {
            $departments = Department::all();
            $files=File::with('department')->get();
        }else if(Auth::user()->department_id == 4){
            $departments = Department::whereIn('id', [4,5,6])->get();
            $files=File::with('department')->whereIn('department_id', [4,5,6])->get();
        }else if(Auth::user()->department_id == 8 || Auth::user()->department_id == 9){
            $departments = Department::whereIn('id', [8,9])->get();
            $files=File::with('department')->whereIn('department_id', [8,9])->get();
        }else if(Auth::user()->department_id == 10 || Auth::user()->department_id == 11 || Auth::user()->department_id == 12){
            $departments = Department::whereIn('id', [10,11,12])->get();
            $files=File::with('department')->whereIn('department_id', [10,11,12])->get();
        }else if(Auth::user()->department_id == 14 || Auth::user()->department_id == 15 || Auth::user()->department_id == 16){
            $departments = Department::whereIn('id', [14,15,16])->get();
            $files=File::with('department')->whereIn('department_id', [14,15,16])->get();
        }else{
            $departments = Department::firstwhere('id', Auth::user()->department_id);
            $files=File::where('department_id', Auth::user()->department_id)->get();
        }
       
        if (request()->ajax()) {
            
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
        if (Auth::user()->department_id == 1 || Auth::user()->department_id == 2) {
            $departments = Department::all();
            
        }else if(Auth::user()->department_id == 3){
            $departments = Department::whereIn('id', [3,17])->get();
          
        }else if(Auth::user()->department_id == 4){
            $departments = Department::whereIn('id', [4,13,14])->get();
            
        }else if(Auth::user()->department_id == 5){
            $departments = Department::whereIn('id', [5,6,7])->get();
          
        }else{
            $departments = Department::where('id', Auth::user()->department_id)->get();
           
        }
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

    public function changePasswordView(){
        return view('auth.reset')->with('title', 'Ganti Password');
    }

    public function changePassword(Request $request){
        try{
            $user = User::firstwhere('id', Auth::user()->id);
            
            $user->password = Hash::make($request->password);

            $user->save();

            return response()->json([
                'status' => '200',
                'message' => 'Success change password',
            ], 200);

        }catch(Exception $err){
            return response()->json([
                'status' => '500',
                'error' => $err->getMessage()
            ], 500);
        }
    }
}
