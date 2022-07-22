<?php

namespace App\Http\Controllers;

use App\Models\BulkExport;
use App\Models\Bumbu;
use App\Models\BumbuExport;
use App\Models\Minyak;
use App\Models\Month;
use App\Models\Sales;
use App\Models\Sayur;
use Illuminate\Http\Request;
use DataTables;
use Exception;

class SalesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sales = Sales::all();
        if (request()->ajax()) {
            return Datatables::of($sales)
            ->addIndexColumn()
            ->addColumn('action', function ($sales) {
                $button = '<button id="delete" class="btn  btn-danger" data-id="' . $sales->id . '">Delete</button>';
                return $button;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('admin.sales.index')->with('title', 'Sales');

    }

    public function showAddSales()
    {
        $bumbuexport = BumbuExport::all();
        $minyak = Minyak::all();
        $bumbu = Bumbu::all();
        $bulkexport = BulkExport::all();
        $sayur = Sayur::all();
        $month= Month::all();
        return view('admin.sales.addSales')->with('title', 'Tambah Sales')->with('bumbuexport', $bumbuexport)->with('minyak', $minyak)->with('bumbu', $bumbu)->with('bulkexport', $bulkexport)->with('sayur', $sayur)->with('month', $month);
    }

    public function addSales(Request $request)
    {
        try {
            $request->validate([
                'month_id' => 'required',
                'year' => 'required|numeric',
                'order' => 'required|numeric',
                'sales' => 'required|numeric',
            ]);

            $sales = Sales::create([
                'month_id' =>  $request['month_id'],
                'year' =>  $request['year'],
                'bumbu_export_id' =>  $request['bumbu_export_id'],
                'minyak_id' =>  $request['minyak_id'],
                'bumbu_id' =>  $request['bumbu_id'],
                'bulkexport_id' =>  $request['bulkexport_id'],
                'sayur_id' =>  $request['sayur_id'],
                'order' =>  $request['order'],
                'sales' =>  $request['sales'],
                'acv' =>  $request['sales']/$request['order']*100,
            ]);

            return response()->json([
                'status' => '200',
                'message' => 'Success add data',
            ], 200);
        } catch (Exception $err) {
            return response()->json([
                'status' => '500',
            ], 500);
        }
    }
}
