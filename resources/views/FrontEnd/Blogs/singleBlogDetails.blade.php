@extends('FrontEnd.layout.app')
@section('frontEnd-layour')
@foreach ($subCategoryDetails as $data)
<div class="event-details-area pt-130">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="event-left-wrap mr-40">
                    <div class="event-description">
                        <div class="description-date-social mb-45">
                            <div class="description-date-time">
                                <div class="description-date">
                                    <span class="event-date">{{ $data->created_at->format('d') }}</span>
                                    <span>{{ $data->created_at->format('M') }}</span>
                                </div>
                                <div class="description-meta-wrap">
                                    <div class="description-meta">
                                        <i class="fa fa-location-arrow"></i>
                                        <span>{{ $data->CategoryBlog->title }}</span>
                                    </div>
                                    <div class="description-meta">
                                        <i class="fa fa-clock-o"></i>
                                        <span>{{ $data->created_at->format('H : I : s') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="description-social-wrap">
                                <div class="description-social">
                                    <ul>
                                        <li><a class="facebook" href="event-details.html#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="instagram" href="event-details.html#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a class="twitter" href="event-details.html#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="google" href="event-details.html#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <img src="{{ $data->image }}" alt="">
                        <h3>{{ $data->title }}</h3>
                        <p>{{ $data->blog_details }}</p>
                        <div class="event-gallery text-center mt-40">
                            <div class="event-gallery-active nav-style-3 owl-carousel">
                                <img src="{{ asset('assets/img/event/event-gallery-1.jpg') }}" alt="">
                                <img src="{{ asset('assets/img/event/event-gallery-2.jpg') }}" alt="">
                            </div>
                            <h4>View Our Event Gallery</h4>
                        </div>
                        <div class="seat-book-wrap bg-img mt-80 " style="background-image:url({{ asset('assets/img/event/seat-book.jpg') }});">
                            <div class="seat-book-title text-center">
                                <h3>Book Your Seat Now</h3>
                                <p> natus error sit voluptatem accu antium dolorem laudantium, totam rem aperiam, eaque entore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                            <div class="seat-book-form">
                                <form action="{{ route('send.message') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <input required placeholder="Name" type="text" name="name">
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <input required placeholder="Email" type="email" name="email">
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <input required placeholder="Department" type="text" name="dept">
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <input required autocomplete="off" placeholder="Blood Group" type="text" name="blood_group">
                                        </div>
                                        <div class="col-lg-12">
                                            <textarea required placeholder="Message" name="detail"></textarea>
                                            <button class="seat-book-btn" type="submit">BOOK NOW</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="location-area mt-80">
                            <div id="location"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4">
                <div class="sidebar-style">
                    <div class="sidebar-search mb-40">
                        <div class="sidebar-title mb-40">
                            <h4>Search</h4>
                        </div>
                        <form action="{{ route('blog.search') }}" method="GET">
                            @csrf
                            <input type="search" name="search" placeholder="Search by post title">
                            <button><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="sidebar-about mb-40">
                        <div class="sidebar-title mb-15">
                            <h4>About Us</h4>
                        </div>
                        <p>quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolors eos qui ratione voluptatem sad.</p>
                        <a href="event-details.html#"><img src="assets/img/banner/banner-4.jpg" alt=""></a>
                        <div class="sidebar-social">
                            <ul>
                                <li><a class="facebook" target="_blank" href="https://www.facebook.com/ETEIIUC"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="youtube" target="_blank" href="https://youtu.be/Q9tqAGPCHVs"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a class="twitter" href="event-details.html#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="google" href="event-details.html#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-recent-post mb-35">
                        <div class="sidebar-title mb-40">
                            <h4>Recent Post</h4>
                        </div>
                        <div class="recent-post-wrap">
                            @forelse ($sideLink as $subData)
                                <div class="single-recent-post">
                                    <div class="recent-post-img">
                                        <a href="{{ route('singleBlog.details',$subData->slug) }}"><img src="{{ $subData->image  }}" alt=""></a>
                                    </div>
                                    <div class="recent-post-content">
                                        <h5><a href="#">Blog title will be here.</a></h5>
                                        <span>Blog Category</span>
                                        <p>Datat non proident qui offici.hafw adec qart.</p>
                                    </div>
                                </div>   
                            @empty
                                <h4>No Resent post Found</h4>
                            @endforelse
                            {{ $sideLink->links() }}
                        </div>
                    </div>
                    <div class="sidebar-category mb-40">
                        <div class="sidebar-title mb-40">
                            <h4>Blog Summary </h4>
                        </div>
                        <div class="category-list">
                            <ul>
                                <li><a href="#">Total Post <span>{{ $subBlogs }}</span></a></li>
                                <li><a href="#">Total Category <span>{{ $totalCategory }}</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-tag-wrap">
                        <div class="sidebar-title mb-40">
                            <h4>Tag</h4>
                        </div>
                        <div class="sidebar-tag">
                            <ul>
                                @foreach ($parentCategory as $parentData)
                                  <li><a href="{{ route('blog.category.post',$parentData->id) }}">{{ $parentData->title }}</a></li>   
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection