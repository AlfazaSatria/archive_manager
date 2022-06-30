<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marketplace\Payment;
use App\Models\Marketplace\Product;
use App\Models\Marketplace\OrderSummary;
use App\Models\Marketplace\Order;
use App\Models\Marketplace\Month;
use Illuminate\Support\Facades\DB;
use App\Models\Marketplace\Seller;
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
    public function index()
    {
        return view('home')->with('title', 'Home Dashboard');
    }

   
}
