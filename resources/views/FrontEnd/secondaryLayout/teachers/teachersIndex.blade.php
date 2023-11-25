@extends('FrontEnd.secondaryLayout.navFoot')
@section('missingFitch')
    <div class="slider-area ">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>Faculty's</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-area pt-160 pb-160">
        <div class="container">
            <div class="row">
                @forelse ($allTeachers as $data)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="{{ $data->image }}" alt>

                                <ul class="team-social">
                                    <li><a href="{{ $data->website }}"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="instructor.html#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="instructor.html#"><i class="fas fa-globe"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-caption">
                                <h3><a href="{{ route('teacher.details', $data->slug) }}">{{ $data->name }}</a></h3>
                                <p>{{ $data->designation }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <h4>No teachers data found..</h4>
                @endforelse
            </div>
        </div>
    </div>
@endsection
