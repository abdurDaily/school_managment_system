<?php

namespace App\Http\Controllers\Backend\Balance;

// use PDF;
use App\Models\User;
use App\Models\CostSheet;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;



class BalanceController extends Controller
{
   public function insert(){
    return view('Admin.blanceReport.insertBalance');
   }

   /**
    * 
      BALIDATION && INSERT DATA INTO DATABASE
    *
    */
    public function insertCost(Request $request){

     $data = new CostSheet();
    //  $data->author_name = $request->name;
    //  $data->author_email = $request->email;
    //  $data->cost_details = $request->details;
     $data->user_id = Auth::user()->id;
     $data->add_amout = $request->add_cost;
     $data->cost_amout = $request->cost;
     $data->save();
     return redirect()->route('insert.blance')->with('success','new record inserted');
     
    }
    
   /**
    * INVOICE 
    */
    
    public function generate_pdf()
    {
        $data = CostSheet::with('user')->get();
        
        // INDIVIDUAL AMOUNT 
        $totals = CostSheet::with('user')
        ->select('user_id', DB::raw('SUM(add_amout) as total_sales'),DB::raw('SUM(cost_amout) as total_cost'))
        ->groupBy('user_id')
        ->get();

       // dd($totals);
        //  RESEVE AMOUNT  
        $addAmount =  CostSheet::all()->sum('add_amout');
        $costAmount =  CostSheet::all()->sum('cost_amout');
        $availableAmount = $addAmount - $costAmount; 


        $url = 'https://example.com'; // Replace with your desired URL

        // Generate the QR code
        $qrCode = QrCode::size(100)->generate($url);
        
        $pdf = Pdf::loadView('Admin.invoice.invoice',compact('data','totals','availableAmount','addAmount','costAmount','qrCode'));
        return $pdf->stream('billing-invoice.pdf');
        //return $pdf->download('invoice.pdf');
      
    }


    /*
     * UPDATE COST SHEET 
     */
    public function updateCost(){
      $costSheet = CostSheet::with('user')->latest()->paginate(10);
      //dd($costSheet);
      return view('Admin.blanceReport.updateBalance',compact('costSheet'));
    }
    
    /*
    * COST EDIT  */
    public function costEdit($id){
       $costs = CostSheet::find($id);
       return view('Admin.blanceReport.editCost',compact('costs'));
    }

    /*
    * UPDATE COST 
    */
    public function costSheetUpdateData(Request $request, $id){
      $updateCost = CostSheet::find($id);
      // dd($updateCost);
      $updateCost->user_id = Auth::user()->id;
      $updateCost->add_amout = $request->add_money;
      $updateCost->cost_amout = $request->cost_money;
      $updateCost->save();
      return redirect()->route('update.blance')->with('success','your balance updated !');
    }

    /*
    * DELETE COST SHEET 
    */

    public function costSheetDeleteData($id){
      DB::table('cost_sheets')->where('id', $id)->delete();
      return redirect()->route('update.blance')->with('success','your balance has been deleted !');
    }
   
}