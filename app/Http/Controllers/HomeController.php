<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\CostSheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
        return view('Admin.home.secondaryHome');
    }
    public function waite()
    {
        return view('test.waitingPage');
    }

    // general report 
    public function report(){
        $addAmount =  CostSheet::all()->sum('add_amout');
        $costAmount =  CostSheet::all()->sum('cost_amout');
        $availableAmount = $addAmount - $costAmount; 
        $costInfo = CostSheet::with('user')->latest()->paginate(5);
        //dd($costInfo[0]->user->name);
       // $allCost = User::with('costSheet')->get();
        
        /**
         * INDVIDUAL COST SHEET *
        **/
        
        $totals = CostSheet::with('user')
        ->select('user_id', DB::raw('SUM(add_amout) as total_sales'),DB::raw('SUM(cost_amout) as total_cost'))
        ->groupBy('user_id')
        ->get();

        
        //dd($totals);
        


        return view('Admin.generalReport',compact('availableAmount','costInfo','totals'));

        }
    



}