@extends('FrontEnd.layout.app')
@section('frontEnd-layour')

{{-- BANNER SECTION --}}
<div class="slider-area">
    <div class="slider-active owl-carousel">
        <div class="single-slider slider-height-1 bg-img">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-7 col-12 col-sm-12">
                        <div class="slider-content slider-animated-1 pt-230">
                            <h1 class="animated">MakeYour Own World</h1>
                            <p class="animated">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
                            <div class="slider-btn">
                                <a class="animated default-btn btn-green-color" href="about-us.html">ABOUT US</a>
                                <a class="animated default-btn btn-white-color" href="contact.html">CONTACT US</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-single-img slider-animated-1">
                    {{-- <img class="animated" src="assets/img/slider/single-slide-1.png" alt=""> --}}
                </div>
            </div>
        </div>
        <div class="single-slider slider-height-1 bg-img" style="background-image:url(assets/img/slider/slider-1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-7 col-12 col-sm-12">
                        <div class="slider-content slider-animated-1 pt-230">
                            <h1 class="animated">MakeYour Own World</h1>
                            <p class="animated">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
                            <div class="slider-btn">
                                <a class="animated default-btn btn-green-color" href="about-us.html">ABOUT US</a>
                                <a class="animated default-btn btn-white-color" href="contact.html">CONTACT US</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-single-img slider-animated-1">
                    <img class="animated" src="assets/img/slider/single-slide-1.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="choose-us section-padding-1">
    <div class="container-fluid">
        <div class="row no-gutters choose-negative-mrg">
            <div class="col-lg-3 col-md-6">
                <div class="single-choose-us choose-bg-light-blue">
                    <div class="choose-img">
                        <img class="animated" src="assets/img/icon-img/service-1.png" alt="">
                    </div>
                    <div class="choose-content">
                        <h3>Scholarship Facility</h3>
                        <p>magna aliqua. Ut enim ad minim veniam conse ctetur adipisicing elit, sed do exercitation. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-choose-us choose-bg-yellow">
                    <div class="choose-img">
                        <img class="animated" src="assets/img/icon-img/service-2.png" alt="">
                    </div>
                    <div class="choose-content">
                        <h3>Scholarship Facility</h3>
                        <p>magna aliqua. Ut enim ad minim veniam conse ctetur adipisicing elit, sed do exercitation. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-choose-us choose-bg-blue">
                    <div class="choose-img">
                        <img class="animated" src="assets/img/icon-img/service-3.png" alt="">
                    </div>
                    <div class="choose-content">
                        <h3>Scholarship Facility</h3>
                        <p>magna aliqua. Ut enim ad minim veniam conse ctetur adipisicing elit, sed do exercitation. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-choose-us choose-bg-green">
                    <div class="choose-img">
                        <img class="animated" src="assets/img/icon-img/service-4.png" alt="">
                    </div>
                    <div class="choose-content">
                        <h3>Scholarship Facility</h3>
                        <p>magna aliqua. Ut enim ad minim veniam conse ctetur adipisicing elit, sed do exercitation. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- BANNER SECTION END --}}

{{-- TEACHER PANEL --}}
<div class="course-area bg-img pt-130">
    <div class="container">
        <div class="section-title mb-75 course-mrg-small">
            <h2>Our Honarable <span>Teacher's</span></h2>
            <p>
                Welcome to our university's distinguished faculty page.their innovative teaching methods and commitment to academic excellence create an engaging and enriching learning environment.Join us in exploring the exciting world of Engineering under the guidance of our expart teachers where curiosity knows no bounds and knowledge knows no limits.</p>
        </div>
        <div class="course-slider-active-3">
            @forelse ($allInfoTeachers as $data)
            <div class="single-course">
                <div class="course-img">
                    <a href="{{ route('faculty.details',$data->slug) }}"><img class="animated" src="{{ $data->image }}" alt=""></a>
                    <span>{{ $data->designation }}</span>
                </div>
                <div class="course-content">
                    <h4><a style="cursor: none;" href="#">{{ $data->name }}</a></h4>
                    <p>{!! Str::limit($data->edu_info, 100, '...<strong>see more</strong>') !!}</p>
                    
                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">
                        <div class="sin-credit-duration">
                            <i class="fa fa-diamond"></i>
                            <span>Phone :{{ $data->phone }}</span>
                        </div>
                        <div class="sin-credit-duration">
                            <i class="fa fa-clock-o"></i>
                            <span>Email :{{ $data->email }}</span>
                        </div>
                    </div>
                    <div class="course-btn">
                        <a class="default-btn" href="{{ route('faculty.details',$data->slug) }}">About More</a>
                    </div>
                </div>
            </div>
            @empty
                <h4 class="text-danger">No teacher's data found</h4>
            @endforelse
        </div>
    </div>
</div>

{{-- EVENT POST  --}}

<div class="event-area pt-130 pb-130">
    <div class="container">
        <div class="row">
            @forelse ($blogDetails as $data)
                <div class="col-lg-4 col-md-6">
                    <div class="single-event mb-55 event-gray-bg">
                        <div class="event-img">
                            <a href="{{ route('singleBlog.details',$data->slug) }}"><img src="{{ $data->image }}" alt=""></a>
                            <div class="event-date-wrap">
                                <span class="event-date">{{ $data->created_at->format('d') }}</span>
                                <span>{{ $data->created_at->format('M') }}</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <h3><a href="event-details.html">{{ Str::limit($data->title,40) }}</a></h3>
                            <p>Pvolupttem accusantium doloremque laudantium, totam erspiciatis unde omnis iste natus error .</p>
                            <div class="event-meta-wrap">
                                <div class="event-meta">
                                    <i class="fa fa-location-arrow"></i>
                                    <span>{{ $data->CategoryBlog->title }}</span>
                                </div>
                                <div class="event-meta">
                                    <i class="fa fa-clock-o"></i>
                                    <span>{{ $data->created_at->format('h,I,s') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <h4>No event post found</h4>
            @endforelse
        </div>
        <div class="pro-pagination-style text-center mt-25">
            <ul>
                <li>
                    {{ $blogDetails->links() }}
                </li>
            </ul>
        </div>
    </div>
</div>

{{-- BLOOD GROUP  --}}
<section id="blood" class="mb-5">
    <div class="container">
        <div class="section-title mb-75 course-mrg-small">
            <h2><span class="text-danger">Blood</span> Group</h2>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="row g-3 blood-btn">
            <div class="col-md-4">
                <a href=""> <h2 style="padding:30px 0px;border-radius:0px;text-align:center;color:#ffffff">A+</h2> </a>
            </div>
            <div class="col-md-4">
                <a href=""> <h2 style="padding:30px 0px;border-radius:0px;text-align:center;color:#ffffff">A+</h2> </a>
            </div>
            <div class="col-md-4">
                <a href=""> <h2 style="padding:30px 0px;border-radius:0px;text-align:center;color:#ffffff">A+</h2> </a>
            </div>
            <div class="col-md-4">
                <a href=""> <h2 style="padding:30px 0px;border-radius:0px;text-align:center;color:#ffffff">A+</h2> </a>
            </div>
        </div>
    </div>
</section>

@endsection


