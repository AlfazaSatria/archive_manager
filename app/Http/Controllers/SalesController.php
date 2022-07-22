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
        $months= Month::all();
        return view('admin.sales.addSales')->with('title', 'Tambah Sales')->with('bumbuexport', $bumbuexport)->with('minyak', $minyak)->with('bumbu', $bumbu)->with('bulkexport', $bulkexport)->with('sayur', $sayur)->with('months', $months);
    }

    public function addSales(Request $request)
    {
        try {
            $request->validate([
                'month_id' => 'required',
                'year' => 'required',
                'order' => 'required',
                'sales' => 'required',
            ]);
            $sales = new Sales();
            $sales->month_id = $request->month_id;
            $sales->year = $request->year;


            if($request->sales_id ==1){
                $sales->bumbu_id = $request->delivery_id;
            }else if($request->sales_id ==2){
                $sales->bumbu_export_id = $request->delivery_id;
            }else if($request->sales_id ==3){
                $sales->minyak_id = $request->delivery_id;
            }else if($request->sales_id ==4){
                $sales->bulkexport_id = $request->delivery_id;
            }else{
                $sales->sayur_id = $request->delivery_id;
            }

            $sales->order = $request->order;
            $sales->sales = $request->sales;
            $sales->acv= $request->sales/$request->order*100;
            $sales->save();


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

    public function showSales($id){
        
        if($id==1){
            $delivery=Bumbu::all()->pluck("name","id");
        }else if($id==2){
            $delivery=BumbuExport::all()->pluck("name","id");
        }else if($id==3){
            $delivery=Minyak::all();
        }else if($id==4){
            $delivery=BulkExport::all()->pluck("name","id");
        }else{
            $delivery=Sayur::all()->pluck("name","id");
        }
        return json_encode($delivery);
    }
}
