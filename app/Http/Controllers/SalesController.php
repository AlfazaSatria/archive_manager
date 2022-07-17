<?php

namespace App\Http\Controllers;

use App\Models\Sales;
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
        return view('admin.sales.addSales')->with('title', 'Tambah Sales');
    }
}
