<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    body{
background:#eee;
margin-top:20px;
}
.text-danger strong {
        	color: #9f181c;
		}
		.receipt-main {
			background: #ffffff none repeat scroll 0 0;
			border-bottom: 12px solid #333333;
			border-top: 12px solid #9f181c;
			margin-top: 50px;
			margin-bottom: 50px;
			padding: 40px 46px !important;
			position: relative;
			box-shadow: 0 1px 21px #acacac;
			color: #333333;
			font-family: open sans;
		}
		.receipt-main p {
			color: #333333;
			font-family: open sans;
			line-height: 1.42857;
		}
		.receipt-footer h1 {
			font-size: 15px;
			font-weight: 400 !important;
			margin: 0 !important;
		}
		.receipt-main::after {
			background: #414143 none repeat scroll 0 0;
			content: "";
			height: 5px;
			left: 0;
			position: absolute;
			right: 0;
			top: -13px;
		}
		.receipt-main thead {
			background: #414143 none repeat scroll 0 0;
		}
		.receipt-main thead th {
			color:#fff;
		}
		.receipt-right h5 {
			font-size: 16px;
			font-weight: bold;
			margin: 0 0 7px 0;
		}
		.receipt-right p {
			font-size: 12px;
			margin: 0px;
		}
		.receipt-right p i {
			text-align: center;
			width: 18px;
		}
		.receipt-main td {
			padding: 9px 20px !important;
		}
		.receipt-main th {
			padding: 13px 20px !important;
		}
		.receipt-main td {
			font-size: 13px;
			font-weight: initial !important;
		}
		.receipt-main td p:last-child {
			margin: 0;
			padding: 0;
		}	
		.receipt-main td h2 {
			font-size: 20px;
			font-weight: 900;
			margin: 0;
			text-transform: uppercase;
		}
		.receipt-header-mid .receipt-left h1 {
			font-weight: 100;
			margin: 34px 0 0;
			text-align: right;
			text-transform: uppercase;
		}
		.receipt-header-mid {
			margin: 24px 0;
			overflow: hidden;
		}
		
		#container {
			background-color: #dcdcdc;
		}
  </style>
</head>
<body>


  
  <div class="col-md-12">
    
    <div class="row">  
           <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div style="display: inline-block; width:55%;">
              {{-- {!!  QrCode::size(100)->generate(Request::url());  !!} --}}
              <br>
                  <img style="width: 100px;" src="{{ public_path('custom_images/iiuc-logo.png') }}" alt="">
              <br>
          
              <span><strong>Name : </strong> {{ Auth::user()->name }}</span><br>
              <span><strong>Email :</strong> {{ Auth::user()->email }} </span><br>
              <span><strong>Date : </strong>{{ date('Y-M-d') }} </span><br>
            </div>

            <div style="display: inline-block;">
              
              <h1 class="text-info">INVOICE</h1>
              <div class="address">
                <strong>BDvromon</strong><br>
                <span>bdvromon@gmail.com</span><br>
                <span>chawkbazar,chittagong,bangladesh</span>
              </div>
          </div>
         
               <div>
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th>Description</th>
                               <th>Add tk</th>
                               <th>Cost</th>
                               <th>Total</th>
                           </tr>
                       </thead>
                       <tbody>
                        @foreach ($totals as $total)
                          <tr>
                              <td class="col-md-9">{{ $total->user->name }}</td>
                              <td class="col-md-3"><i class="fa fa-inr"></i> {{ $total->total_sales }}/-</td>
                              <td class="col-md-3"><i class="fa fa-inr"></i> {{ $total->total_cost }}/-</td>
                              <td class="col-md-3 {{ $total->total_sales - $total->total_cost  < 0 ? 'text-danger' : 'text-dark' }}"><i class="fa fa-inr"></i> <strong>{{ $total->total_sales - $total->total_cost  }}/-</strong></td>
                          </tr>
                        @endforeach

                           <tr>
                            <td></td>
                            <td></td>
                               <td class="text-right">
                               <p>
                                   <strong>Total Add Amount: </strong>
                               </p>
                               <p>
                                   <strong>Total Cost Amount: </strong>
                               </p>

                 </td>
                               <td>
                               <p>
                                   <strong><i class="fa fa-inr"></i> {{ $addAmount }}/-</strong>
                               </p>
                               <p>
                                   <strong><i class="fa fa-inr"></i> {{ $costAmount }}/-</strong>
                               </p>

                 </td>
                           </tr>
                           <tr>
                            <td></td>
                            <td></td>
                              
                               <td class="text-right"><h2><strong>Total : </strong></h2></td>
                               <td class="text-left {{ $availableAmount < 0 ? 'text-danger' : 'text-dark' }} "><h2><strong><i class="fa fa-inr"></i> {{ $availableAmount }}/-</strong></h2></td>
                           </tr>
                       </tbody>
                   </table>
               </div>
         
         <div class="row">
           <div class="receipt-header receipt-header-mid receipt-footer">
             <div class="col-xs-8 col-sm-8 col-md-8 text-left">
               <div class="receipt-right">
                <p><b>Date :</b>{{ date('Y-M-d') }} </p>
                 <h5 style="color: rgb(140, 140, 140);">Thanks for shopping.!</h5>
                </div>
              </div>
              <div class="qr-code bg-light" style="height: 100px;">
                <img  class="float-right" src="data:image/png;base64,{{ base64_encode(QrCode::size(110)->generate(Request::url())) }}">
              </div>
              
             <div class="col-xs-4 col-sm-4 col-md-4">

             </div>
           </div>
               </div>
               <span><strong>N.B. </strong>if total amount shows in red color, company will get money from users. on the other hend if user total amount shows red color this specific person has to pay this money to the company.</span>
           </div>    
     </div>
   </div>

</body>
</html>









































