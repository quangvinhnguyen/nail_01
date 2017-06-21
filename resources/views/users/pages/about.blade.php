@extends('users.master')
@section('content')
<div class="container">
    <div class="divPanel page-content">
        <div class="breadcrumbs">
            <a href="{{ action('HomeController@index') }}">Home</a> &nbsp;/&nbsp; <span>About Us</span>
        </div>
        <!--Edit Main Content Area here-->
        <div class="row-fluid">
            <div class="span8" id="divMain">
                <h1>About Us</h1>
                <p>
                <p>Welcome to Luxury Nails, Inc.</p>
                <p>  Conveniently located at 410 Miracle Mile Plaza in Lebanon, NH, Luxury Nails, Inc has been the best nail salon in the Upper Valley for over 17 years. We take pride in delivering the highest level of customer satisfaction in a clean and sanitary environment. Our skilled and professional staff, ranging from 10 to 25 years of experience, consistently provides our clientele with the highest quality of service while carefully tailoring it to their individual needs.</p>
                <img src="images/fingerfood-main.jpg" class="img-polaroid" style="margin:12px 0px;">  </p>
                <p>A Luxurious Experience</p>
                <p>  Treat yourself to a refreshing and rejuvenating break while we create a refined and relaxing atmosphere in which your every need is attended to with care and expertise. Our priority is to reward you with a well-deserved, stress-relieving and luxurious experience. Indulge yourself in our specialized services, many of which can only be found at Luxury Nails, Inc.com </p>
                <p>Specialized Services</p>
                <p>Our specialized services include:</p>
                <p>·     Gel nails</p>
                <p>·     acrylic nails</p>
                <p>.     solar nails (pink or white)</p>
                <p>·     gel manicure</p>
                <p>·     silk wraps</p>
                <p>·     pedicure</p>
                <P>·     manicure</P>
                <p>·     foot massage</p>
                <p>.     paraffin wax</p>
                <p>·     waxing</p>
                <p>·     nail art (freehand or airbrush design)
                    with a vast selection of beautiful and stylish designs.
                        Choose from thousands of gel colors, nail lacquers and dip powders.
                </p>
                <p> Our famous brand names include Shellac, CND, OPI, LCN, Gelish, IBD, Color Club, and Light Elegance.</p>
                <p>Group parties are always welcome.
                    Bring your birthday guests as a special treat.
                        We invite wedding parties, both the bride and groom’s side,
                    to come in for a relaxing round of mani-pedi’s as a part of your big celebration.</p>
                <p>Gifts</p>
                <p>Gifts certificates are available for any occasion.
                        In addition to our salon services, we also have a large selection of products for sale.</p>
                <p>Learn all about our unique services by visiting our “Services” page.</p>
            </div>
            <!--Edit Sidebar Content Area here-->
            <div class="span4 sidebar">
                <div class="sidebox">
                    <h3 class="sidebox-title" align="center">Events</h3>
                    <hr>
                    @foreach($events as $item)
                        <div class="row-fluid">
                            <div class="span4">
                                <img src="{{ config('images.default_url') . 'a.jpg' }}" class="img-polaroid" style="margin:5px 0px 15px;" alt="">
                            </div>
                            <div class="span8">
                                <p>{{$item->title}} <a href="#">Read More</a> </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!--End Sidebar Area here-->
        </div>
        <!--End Main Content Area here-->
        <div id="footerInnerSeparator"></div>
    </div>
</div>
@endsection
