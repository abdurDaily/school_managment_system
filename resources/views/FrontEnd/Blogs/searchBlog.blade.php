@extends('FrontEnd.layout.app')
@section('frontEnd-layour')
    
<div class="event-area pt-130 pb-130">
    <div class="container">
        <div class="row">
            @forelse ($searchBlog as $data)
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
                    {{-- {{ $searchBlog->links() }} --}}
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection