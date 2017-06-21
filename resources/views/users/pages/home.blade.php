@extends('users.master')
@section('content')
<!-- banner -->
<div id="decorative1" style="position:relative">
    <div class="container">
        <div class="divPanel headerArea">
            <div class="row-fluid">
                <div class="span12">
                    <div id="headerSeparator"></div>
                    <div class="row-fluid">
                        <div class="span6">
                            <div id="divHeaderText" class="page-content">
                                <div id="divHeaderLine1">Welcome to Luxury Nails, Inc.!</div><br />
                                <div id="divHeaderLine3"><a class="btn btn-danger" href="about">Read More</a></div>
                            </div>
                        </div>
                        <div class="span6">
                            <!--Edit Camera Slider here-->
                            <div id="camera_wrap">
                                <div data-src="{{ config('images.default_url') . 'a.jpg' }}" ></div>
                                <div data-src="{{ config('images.default_url') . 'b.jpg' }}" ></div>
                            </div>
                            <!--End Camera Slider here-->
                        </div>
                    </div>
                    <div id="headerSeparator2"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="contentOuterSeparator"></div>
<div class="container">
    <div class="divPanel page-content">
        <!--Edit Main Content Area here-->
        <div class="row-fluid">
            <div class="span12" id="divMain">
                <h1 align="center">Welcome</h1>
                <p>Treat yourself to a refreshing and rejuvenating break while we create a refined and relaxing
                    atmosphere in which your every need is attended to with care and expertise.
                    Our priority is to reward you with a well-deserved, stress-relieving and luxurious experience.
                    Indulge yourself in our specialized services, many of which can only be found at Luxury Nails,
                    Inc.com</p>
                <div class="lead">
                    <h1>Events</h1>
                </div>
                <br />
                <div class="list_carousel responsive">
                    <ul id="list_photos">
                            @foreach($events as $item)
                            {{-- <li><img src="{{ config('settings.url_upload_img') . $item->images->first()->url }}" class="img-polaroid"> {{$item->title}}  </li> --}}
                            @endforeach
                    </ul>
                </div>
                </br>
            </div>
            <!--End Main Content Area here-->
        <div id="footerInnerSeparator"></div>
    </div>
</div>
<!-- services -->
@endsection
