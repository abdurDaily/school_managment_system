@extends('FrontEnd.secondaryLayout.navFoot')
@section('missingFitch')

<div class="container">
    <div class="row" style="margin: 50px 0">
             <div class="col-lg-4 text-lg-center my-5 my-lg-0">
                <img class="img-fluid" src="{{ $teacherDetails->image }}" alt="">
             </div>

            <div class="col-lg-8">
                <h4>{{ $teacherDetails->name }}</h4>
                <small>{{ $teacherDetails->designation }}</small> <br>

                <br>
                {{-- Contact  --}}
                <div class="contact">
                    <strong>Phone : </strong><small><a style="color: #000;" href="tel:{{ $teacherDetails->phone }}">{{ $teacherDetails->phone }}</a></small> <br>
                    
                    <strong>Email : </strong><small>{{ $teacherDetails->email }}</small> <br>

                    {{-- SOCICAL ICONS --}}
                    <strong>
                        <a style="color: #000;" href="{{ $teacherDetails->website }}">Facebook Profile</a>
                    </strong> <br> <br>

                    {{-- EDU INFO --}}
                    <div class="edu-info">
                        <h4>Educational Information</h4> <br>
                        {!! $teacherDetails->edu_info !!} 
                        <br>
                    </div>
                    

                    {{-- Biography INFO --}}
                    <div class="edu-info">
                        <h4>Biography</h4>  <br>
                        {!! $teacherDetails->biography !!}
                        <br>
                    </div>
                    

                    {{-- Research INFO --}}
                    <div class="edu-info">
                        <h4>Research</h4> <br>
                        {!! $teacherDetails->research !!} <br>
                    </div>
                    

                    {{-- Teaching_sub INFO --}}
                    <div class="edu-info">
                        <h4>Teaching Subject Info</h4>
                        {!! $teacherDetails->teaching_sub !!}
                    </div>
                    

                </div>
            </div>
        
    </div>
</div>
    
@endsection