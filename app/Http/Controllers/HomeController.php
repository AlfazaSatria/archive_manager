<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Sales;
use App\Models\Bumbu;
use App\Models\Minyak;
use App\Models\BumbuExport;
use App\Models\BulkExport;
use App\Models\Sayur;
use App\Models\Month;
use Carbon\Carbon;
use Carbon\CarbonPeriod;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $getMonth = Month::all();

        $month = 7;

        $bumbus = DB::table('sales')
            ->select('sales.id as sales_id', 'bumbus.name', 'sales.acv', 'sales.bumbu_id as bumbu_id')
            ->join('bumbus', 'bumbus.id', '=', 'sales.bumbu_id')
            ->whereNotNull('sales.bumbu_id')
            ->whereMonth('sales.created_at', $month)
            ->get();


        $minyakFilterbyMonth = DB::table('sales')
            ->join('minyaks', 'minyaks.id', '=', 'sales.minyak_id')
            ->whereNotNull('sales.minyak_id')
            ->whereMonth('sales.created_at', $month)
            ->select('sales.id as sales_id', 'minyaks.name', 'sales.acv', 'sales.minyak_id as minyak_id')
            ->get();

        $bumbuexportFilterbyMonth = DB::table('sales')
            ->join('bumbu_exports', 'bumbu_exports.id', '=', 'sales.bumbu_export_id')
            ->whereNotNull('sales.bumbu_export_id')
            ->whereMonth('sales.created_at', $month)
            ->select('sales.id as sales_id', 'bumbu_exports.name', 'sales.acv', 'sales.bumbu_export_id as bumbu_export_id')
            ->get();



        return view('home')->with('title', 'Home Dashboard')->with('bumbufilter', $bumbus);
    }
}
