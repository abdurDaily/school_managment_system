@extends('FrontEnd.layout.app')
@section('frontEnd-layour')
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-3 pt-100 pb-95" style="background-image:url({{ asset('assets/img/bg/bg-4.jpg') }});">
        <div class="container">
            <h2>Blog Grid</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore .</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="blog.html#">Home</a> <span><i class="fa fa-angle-double-right"></i>Blog Grid</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="event-area pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="blog-all-wrap mr-40">
                    <div class="row">
       
                    @forelse ($blogDetails as $data)
    
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="single-blog mb-30">
                            <div class="blog-img">
                                <a href="blog-details.html"><img style="width: 260px;height:202px; background-position: center;" src="{!! $data->image !!}" alt=""></a>
                            </div>
                            <div class="blog-content-wrap">
                                <span>{{ Str::limit($data->CategoryBlog->title,25) }}</span>
                                <div class="blog-content">
                                    <h4><a href="{{ route('blog.detail',$data->slug) }}">{{ Str::limit($data->title,30) }}</a></h4>
                                    <p>{!! Str::limit($data->editor,100) !!}</p>
                                    <div class="blog-meta">
                                        <ul>
                                            <li><a href="blog.html#"><i class="fa fa-user"></i>{{ $data->author }}</a></li>
                                            <li><a href="blog.html#"><i class="fa fa-comments-o"></i> 10</a></li>
                                        </ul>
                                    </div>
                                </div>
                                {{-- <div class="blog-date">
                                    <a href="blog.html#"><i class="fa fa-calendar-o"></i> {{ $detail->created_at->format('d-M-Y H:i:s') }}</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    @empty
                        <h2>No Data Found</h2>
                    @endforelse
                    <div class="row">
                        <div class="col-6 mx-auto">
                            {{ $blogDetails->links() }}
                        </div>
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
                        <form>
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="sidebar-about mb-40">
                        <div class="sidebar-title mb-15">
                            <h4>About Us</h4>
                        </div>
                        <p>quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolors eos qui ratione voluptatem sad.</p>
                        <a href="blog.html#"><img src="assets/img/banner/banner-4.jpg" alt=""></a>
                        <div class="sidebar-social">
                            <ul>
                                <li><a class="facebook" href="blog.html#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="youtube" href="blog.html#"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a class="twitter" href="blog.html#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="google" href="blog.html#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-recent-post mb-35">
                        <div class="sidebar-title mb-40">
                            <h4>Recent Post's</h4>
                        </div>
                        <div class="recent-post-wrap">
                            @forelse ($blogResent as $data)
                            <div class="single-recent-post">
                                <div class="recent-post-img">
                                    <a href="#"><img src="{!! $data->image !!}" alt=""></a>
                                </div>
                                <div class="recent-post-content">
                                    <h5><a href="{{ route('blog.detail',$data->slug) }}">{{ Str::limit($data->title,30) }}</a></h5>
                                    <span>{{ Str::limit($data->CategoryBlog->title,20) }} | {{ $data->created_at->format('d-M-Y') }}</span>
                                    <p>{!! Str::limit($data->editor,30) !!}</p>
                                </div>
                            </div>
                            @empty
                              <h2>No Data Found</h2>
                            @endforelse
                        </div>
                    </div>
                    <div class="sidebar-category mb-40">
                        <div class="sidebar-title mb-40">
                            <h4>Course Category</h4>
                        </div>
                        <div class="category-list">
                            <ul>
                                <li><a href="blog.html#">MBA <span>04</span></a></li>
                                <li><a href="blog.html#">Graduate <span>08</span></a></li>
                                <li><a href="blog.html#">Under Graduate <span>04</span></a></li>
                                <li><a href="blog.html#">BBA <span>06</span></a></li>
                                <li><a href="blog.html#">Engineering <span>04</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-recent-course-wrap mb-40">
                        <div class="sidebar-title mb-40">
                            <h4>Recent Courses</h4>
                        </div>
                        <div class="sidebar-recent-course">
                            <div class="sin-sidebar-recent-course">
                                <div class="sidebar-recent-course-img">
                                    <a href="blog.html#"><img src="assets/img/blog/recent-post-1.jpg" alt=""></a>
                                </div>
                                <div class="sidebar-recent-course-content">
                                    <h4><a href="blog.html#">Course Title</a></h4>
                                    <ul>
                                        <li>Credits : 125</li>
                                        <li class="duration-color">Duration : 4yrs</li>
                                    </ul>
                                    <p>Datat non proident qui offici.hafw adec qart.</p>
                                </div>
                            </div>
                            <div class="sin-sidebar-recent-course">
                                <div class="sidebar-recent-course-img">
                                    <a href="blog.html#"><img src="assets/img/blog/recent-post-2.jpg" alt=""></a>
                                </div>
                                <div class="sidebar-recent-course-content">
                                    <h4><a href="blog.html#">Course Title</a></h4>
                                    <ul>
                                        <li>Credits : 125</li>
                                        <li class="duration-color">Duration : 4yrs</li>
                                    </ul>
                                    <p>Datat non proident qui offici.hafw adec qart.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-tag-wrap">
                        <div class="sidebar-title mb-40">
                            <h4>Tag</h4>
                        </div>
                        <div class="sidebar-tag">
                            <ul>
                                <li><a href="blog.html#">Loremsite</a></li>
                                <li><a href="blog.html#">Loreipsum</a></li>
                                <li><a href="blog.html#">Dolar</a></li>
                                <li><a href="blog.html#">Site ament dollar</a></li>
                                <li><a href="blog.html#">Loremsite</a></li>
                                <li><a href="blog.html#">Dummy Text</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="brand-logo-area pb-130">
    <div class="container">
        <div class="brand-logo-active owl-carousel">
            <div class="single-brand-logo">
                <a href="blog.html#"><img src="assets/img/brand-logo/1.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="blog.html#"><img src="assets/img/brand-logo/2.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="blog.html#"><img src="assets/img/brand-logo/3.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="blog.html#"><img src="assets/img/brand-logo/4.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="blog.html#"><img src="assets/img/brand-logo/5.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="blog.html#"><img src="assets/img/brand-logo/6.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="blog.html#"><img src="assets/img/brand-logo/2.png" alt=""></a>
            </div>
        </div>
    </div>
</div>
@endsection