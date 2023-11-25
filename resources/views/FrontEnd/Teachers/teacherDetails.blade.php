@extends('FrontEnd.layout.app')
@section('frontEnd-layour')
    <div class="container my-5">
        <div class="row">
            @foreach ($teacherData  as $data)
            <div class="col-lg-4">
                <img class="image" style="border: 3px solid #00a651;width: 300px; height:300px; border-radius:10px;" src="{!! $data->image !!}" alt="">
            </div>
            <div class="col-lg-6" style="border-bottom: #00a651 3px solid">
                <div class="header">
                    <h1 style="color: #00a651;font-weight:bold;">{{ $data->name }}</h1>
                    <strong style="font-size: 20px">{{ $data->designation }}</strong>
                </div>

                <div class="details mt-4">
                    <i style="font-size: 20px;" class="fa fa-phone"><strong style="margin-left:10px;">Phone : </strong> <span>{{ $data->phone }}</span></i> <br>
                    <i style="font-size: 20px;" class="fa fa-envelope"><strong style="margin-left:10px;">Email : </strong> <span>{{ $data->email }}</span></i><br>
                    <a target="_blank" href="{{ $data->website }}"><i style="font-size: 20px;" class="fa fa-globe"><strong style="margin-left:10px;">Protfolio Website</i></a>
                    
                    {{-- BIOGRAPHY   --}}
                      <div class="edu-info mt-5">
                        <h3 style="color: #00a651;font-weight:bold;">Biography</h3>
                        <p style="font-size: 18px;">
                            {!! $data->biography !!}
                        </p>
                      </div>

                            {{-- EDUCATION INFO  --}}
                            <div class="edu-info mt-5">
                                <h3 style="color: #00a651;font-weight:bold;">Education Info.</h3>
                                <span style="font-size: 18px;">
                                    {!! $data->edu_info !!}
                                </span>
                            </div>

                                    {{-- RESEARCH ARE  --}}
                                    <div class="research mt-5">
                                        <h3 style="color: #00a651;font-weight:bold;">Research Area</h3>
                                        <span style="font-size: 18px;">
                                            {!! $data->research !!}
                                        </span>
                                    </div>

                                            {{--  TEACHING AREA --}}
                                            <div class="research mt-5">
                                                <h3 style="color: #00a651;font-weight:bold;">Teaching Subject's</h3>
                                                <span style="font-size: 18px;">
                                                    {!! $data->teaching_sub !!}
                                                </span>
                                            </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
@push('frontEndCSS')
    <style>
@media (min-width: 576px) and (max-width: 991.98px) {
            .header{
                margin-top: 40px !important;
            }
            .col-lg-4 > .image{
                margin: 0 auto;
            }
         }

    </style>
@endpush