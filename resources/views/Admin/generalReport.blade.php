@extends('layouts.app')
@section('general-report')
<div class="grid columns-12 gap-6">
    <div class="g-col-12 g-col-xxl-9">
        <div class="grid columns-12 gap-6">
            <!-- BEGIN: General Report -->
            <div class="g-col-12 mt-8">
                <div class="intro-y d-flex align-items-center h-10">
                    <h2 class="fs-lg fw-medium truncate me-5">
                        General Report
                    </h2>
                    <a style="border: 1px solid rgb(110, 106, 106);" target="_blank" href="{{ route('invoice.index') }}" class="btn btn-light px-5 text-dark  ms-auto d-flex align-items-center text-theme-1 dark-text-theme-10"> <img style="width: 30px;" src="{{ asset('fonts_icon/file-pdf-solid.svg') }}" alt=""> <strong class="mr-5"> Download PDF</strong> </a>
                </div>
                <div class="grid columns-12 gap-6 mt-5">
                    <div class="g-col-12 g-col-sm-6 g-col-xl-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="d-flex">
                                    <i data-feather="shopping-cart" class="report-box__icon text-theme-10"></i> 
                                    <div class="ms-auto">
                                        <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="33% Higher than last month"> 33% <i data-feather="chevron-up" class="w-4 h-4 ms-0.5"></i> </div>
                                    </div>
                                </div>
                                <div class="report-box__total fs-3xl fw-medium mt-6">{{ $availableAmount }}</div>
                                <div class="fs-base text-gray-600 mt-1">Available Balance</div>
                            </div>
                        </div>
                    </div>

                    @foreach ($totals as $cost)
                        <div class="g-col-12 g-col-sm-6 g-col-xl-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="d-flex">
                                        <i data-feather="user" class="report-box__icon text-theme-9"></i> 
                                        <div class="ms-auto">
                                            <div class="report-box__indicator bg-theme-6 tooltip cursor-pointer" title="2% Lower than last month"> 2% <i data-feather="chevron-down" class="w-4 h-4 ms-0.5"></i></div>
                                            <span>{{ $cost->user->name }}</span>
                                        </div>
                                    </div>
                                    
                                    <div class="report-box__total fw-medium mt-1"><span>Added Mony : </span> <strong style="font-size: 18px;">{{ $cost->total_sales }} BDT</strong></div>
                                    <div class="report-box__total fw-medium mt-1"><span>cost Mony : </span> <strong style="font-size: 18px;">{{ $cost->total_cost }} BDT</strong></div>
                                    <div class="report-box__total fw-medium mt-1"><span>update : </span> <strong style="font-size: 18px;">{{ $cost->total_cost - $cost->total_sales }} BDT</strong></div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <!-- END: General Report -->

        </div>
    </div>
    <div class="g-col-12 g-col-xxl-3">
        <div class="border-start-xxl border-theme-5 dark-border-dark-3 mb-n10 pb-10">
            <div class="ps-xxl-6 grid grid-cols-12 gap-6">
                <!-- BEGIN: Transactions -->
                <div class="g-col-12 g-col-md-6 g-col-xl-4 g-col-xxl-12 mt-3 mt-xxl-8">
                    <div class="intro-x d-flex align-items-center h-10">
                        <h2 class="fs-lg fw-medium truncate me-5">
                            Transactions
                        </h2>
                    </div>
                    {{-- <div class="mt-5 ">
                        <div class="intro-x">
                            <div class="box px-5 py-3 mb-3 d-flex align-items-center zoom-in">
                                <div class="w-10 h-10 flex-none image-fit rounded-circle overflow-hidden">
                                    <img alt="Rubick Bootstrap HTML Admin Template" src="dist/images/profile-8.jpg">
                                </div>
                                <div class="ms-4 me-auto">
                                    <div class="fw-medium">{{ Auth::user()->name }}</div>
                                    <div class="text-gray-600 fs-xs mt-0.5">16 July 2021</div>
                                </div>
                                <div class="text-theme-6">-$62</div>
                            </div>
                        </div>

                        <a href="index.html" class="intro-x w-full d-block text-center rounded-2 py-3 border border-dotted border-theme-15 dark-border-dark-5 text-theme-16 dark-text-gray-600">View More</a> 
                    </div> --}}
                </div>
                <!-- END: Transactions -->

                
                
            </div>
        </div>
    </div>
</div>



@endsection


{{-- @push('pagination')
    <style>
        .pagination .page-item {
            margin: 0 3px;
        }
        .pagination span{
           background: rgb(124, 13, 214) !important;
           color: #fff !important;
        }
    </style>
@endpush --}}