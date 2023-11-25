@extends('layouts.app')
@section('general-report')
  <div class="container">
    <div class="row">
        <div class="col-lg-4 my-2 ">
            <div class="card shadow">
                <div class="card-header">
                 <h4>total users</h4>
                </div>
                <div class="card-body text-center">
                    <h1 style="font-size: 30px; font-weight:bold; color: blue;">{{ $totalUsers }}</h1>
                </div>
            </div>
        </div>
        {{-- PAINDING USERS LIST --}}
        <div class="col-lg-4 my-2">
            <div class="card shadow">
                <div class="card-header">
                 <h4>Painding Users</h4>
                </div>
                <div class="card-body text-center">
                    <h1 style="font-size: 30px; font-weight:bold; color: blue;">{{ $userPainding != 0 ? $userPainding : 'No' }}</h1>
                </div>
            </div>
        </div>
        {{-- PAINDING USERS LIST END--}}


        {{-- ADD AMOUNT --}}
        <div class="col-lg-4 my-2">
            <div class="card shadow">
                <div class="card-header">
                 <h4>Added Money</h4>
                </div>
                <div class="card-body text-center">
                    <h1 style="font-size: 30px; font-weight:bold; color: blue;">{{ $addAmount }}</h1>
                </div>
            </div>
        </div>
        {{-- ADD AMOUNT END--}}


        {{-- COST AMOUNT --}}
        <div class="col-lg-4 my-2">
            <div class="card shadow">
                <div class="card-header">
                 <h4>Cost Money</h4>
                </div>
                <div class="card-body text-center">
                    <h1 style="font-size: 30px; font-weight:bold; color: blue;">{{ $costAmount }}</h1>
                </div>
            </div>
        </div>
        {{-- COST AMOUNT END--}}


        {{-- COST AMOUNT --}}
        <div class="col-lg-4 my-2">
            <div class="card shadow">
                <div class="card-header">
                 <h4>Available Money</h4>
                </div>
                <div class="card-body text-center">
                    <h1 style="font-size: 30px; font-weight:bold; color: blue;">{{ $availableAmount }}</h1>
                </div>
            </div>
        </div>
        {{-- COST AMOUNT END--}}
    </div>
    
    <div class="test" style="width:100%;">
        {!! $chart->container() !!}
    </div>
  </div>


  
  @push('niceSelect2')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
  {!! $chart->script() !!}
  @endpush
@endsection


