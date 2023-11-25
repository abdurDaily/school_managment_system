<?php

namespace App\Http\Controllers\Backend;

use App\Charts\BalanceSheet;
use App\Charts\UserChart;
use App\Http\Controllers\Controller;
use App\Models\CostSheet;
use App\Models\User;
use Illuminate\Http\Request;

class SecondaryHomeController extends Controller
{
    /**
     * DASHBOARD INDEX 
     */
    public function homeIndex(){
        $chart = new UserChart;
        for ($m=1; $m<=12; $m++) {
            $month[] = date('F', mktime(0,0,0,$m, 1, date('Y')));
            $userSets[] = User::whereMonth('created_at', $m)->count();
        }

        $chart->labels($month);
        $chart->dataset('total users', 'line', $userSets);
   

        $totalUsers = User::count();
        $userPainding = User::where('status', 0)->count();
        $addAmount =  CostSheet::all()->sum('add_amout');
        $costAmount =  CostSheet::all()->sum('cost_amout');
        $availableAmount = $addAmount - $costAmount; 
        return view('Admin.home.secondaryHome',compact('totalUsers','userPainding','addAmount','costAmount','availableAmount','chart'));
    }


}
