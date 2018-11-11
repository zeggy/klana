@include('template/header')
        <section class="section fullscreen background parallax" style="background-image:url('images/bromo.png');"
            data-img-width="1920" data-img-height="1133" data-diff="100">
            <div class="container">
                <div class="row homeform">
                    <form action="{{ route('send_email', $trips[0]) }}" method="post">
                        {{ csrf_field() }}
                
                        <input type="text" name="quantity">quantity
                        <input type="submit">Submit
                    </form>
                    <div class="col-md-5 col-xs-12">
                        <div class="home-form">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <!-- <li class="active"><a href="#tab_01" aria-controls="tab_01" role="tab" data-toggle="tab"><i
                                            class="icon-hotel68"></i></a></li> -->
                               <!--  <li class="active" style="width: 100%"><a href="#tab_02" aria-controls="tab_02" role="tab"
                                        data-toggle="tab"><i class="icon-airplane70"></i></a></li> -->
                                <!-- <li><a href="#tab_03" aria-controls="tab_03" role="tab" data-toggle="tab"><i class="icon-sedan3"></i></a></li>
                                <li><a href="#tab_04" aria-controls="tab_04" role="tab" data-toggle="tab"><i class="icon-location38"></i></a></li>
                                <li><a href="#tab_05" aria-controls="tab_05" role="tab" data-toggle="tab"><i class="icon-bicycle12"></i></a></li> -->
                            </ul>

                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="tab_01">
                                    <h6>Find Destination By City</h6>
                                    <form class="bookform form-inline row" action="{{ route('search_trip') }}" method="post">
                                        {{ csrf_field() }}
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" name="destination" class="form-control" placeholder=" Destination: Jawa Barat, Sumatera ..">
                                        </div>
                                        
                                        <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                            <button type="submit" class="btn btn-primary btn-block"><i class="icon-search"></i>
                                                Find Destination</button>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- end tab-content -->
                        </div><!-- end homeform -->
                    </div><!-- end col -->

                    <div class="col-md-7 col-xs-12">
                        <div class="home-message">
                            <h1>TRAVEL THE ETHNIC, <br>LIVING LOCAL</h1>
                            <p><strong style="color: white;">KLANA is for those who want cross things off their bucket list and live an authentic experience. We are an easy to use platform that connects travelers to community-based tourism destinations across indonesia, or as we locals know them: desa wisata. KLANA invites you to live local.</strong></p>
                            <a href="{{route('explore')}}" class="btn btn-primary btn-lg border-radius">EXPLORE</a>
                        </div><!-- end homemessage -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="section clearfix">
            <div class="container">
                <div class="hotel-title">
                    <h4>Popular Open Trips</h4>
                </div><!-- end hotel-title -->
                @foreach ($trips as $trip)
                <div class="row">
                    <div class="col-md-6">
                        <div class="mini-desti row">
                            <div class="col-md-4">
                                <img src="{{ asset('storage/' . $trip->photos[0]->path) }}" alt="" class="img-responsive">
                            </div><!-- end col -->
                            <div class="col-md-8">
                                <div class="mini-desti-title">
                                    <div class="pull-left">
                                        <h6>{{ $trip->title }}</h6>
                                        <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span><!-- end rating -->
                                    </div>
                                    <div class="pull-right">
                                        <h6>IDR {{ number_format($trip->price) }}</h6>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mini-desti-desc">
                                        <p>Template based on deep research on the most popular travel booking websites
                                            such as</p>
                                    </div>
                                </div><!-- end title -->
                            </div><!-- end col -->
                        </div><!-- end mini-desti -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->
        @endforeach

        <section class="section fullscreen background parallax" style="background-image:url('images/parallax_03.jpg');"
            data-img-width="1920" data-img-height="586" data-diff="10">
            <div class="container">
                <div id="testimonials">
                    <div class="testi-item">
                        <div class="hotel-title text-center">
                            <h3>THE TRIPS SAVED MY LIFE!</h3>
                            <hr>
                            <p>Template based on deep research on the most popular travel booking websites such as
                                booking.com, tripadvisor, yahoo<br>
                                travel, expedia, priceline, hotels.com, travelocity, kayak, orbitz, etc. This guys
                                can’t be wrong.<br>
                                You should definitely give it a shot :)</p>
                            <h6>- DAVID / CEO AGODA -</h6>
                        </div>
                    </div><!-- end testi-item -->

                    <div class="testi-item">
                        <div class="hotel-title text-center">
                            <h3>THANKS YOU TRIPS! THIS IS AMAZING TRAVEL!</h3>
                            <hr>
                            <p>Template based on deep research on the most popular travel booking websites such as
                                booking.com, tripadvisor, yahoo<br>
                                travel, expedia, priceline, hotels.com, travelocity, kayak, orbitz, etc. This guys
                                can’t be wrong.<br>
                                You should definitely give it a shot :)</p>
                            <h6>- DAVID / CEO AGODA -</h6>
                        </div>
                    </div><!-- end testi-item -->
                </div><!-- end testimonials -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="nopadding clearfix">
            <div class="owl-fullwidth">
                <div class="owl-item-full">
                    <img src="upload/home_mini_slider_02.jpg" alt="">
                </div>
                <div class="owl-item-full">
                    <img src="upload/home_mini_slider_01.jpg" alt="">
                </div>
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="section clearfix section-bottom">
            <div class="container">
                <div class="hotel-title">
                    <h3>WHY HAVE A TRIPS WITH US:</h3>
                    <hr class="left">
                </div><!-- end hotel-title -->
                <div class="row">
                    <div class="col-md-9">
                        <div class="service-style row">
                            <div class="icon-container border-radius col-md-3 col-sm-3 col-xs-3">
                                <i class="icon-hotel16"></i>
                            </div>
                            <div class="col-md-10 col-xs-10 col-sm-10">
                                <h5>AUTHENTICITY</h5>
                                <p>Co-living with the locals and feel the warmth of their hospitality by booking our trip. Experience the local live like no other.</p>
                            </div>
                        </div><!-- end service -->

                        <div class="service-style row">
                            <div class="icon-container border-radius col-md-3 col-sm-3 col-xs-3">
                                <i class="icon-airplane51"></i>
                            </div>
                            <div class="col-md-10 col-xs-10 col-sm-10">
                                <h5>EMPOWERING COMMUNITY</h5>
                                <p>Create a positive impact that can improve the locals quality of life.</p>
                            </div>
                        </div><!-- end service -->

                        <div class="service-style row">
                            <div class="icon-container border-radius col-md-3 col-sm-3 col-xs-3">
                                <i class="icon-sedan3"></i>
                            </div>
                            <div class="col-md-10 col-xs-10 col-sm-10">
                                <h5>BILINGUAL ASSISTANCE</h5>
                                <p>Have a hassle and worry-free local trip with our bilingual English speaking guide.</p>
                            </div>
                        </div><!-- end service -->

                        <div class="service-style row">
                            <div class="icon-container border-radius col-md-3 col-sm-3 col-xs-3">
                                <i class="icon-location38"></i>
                            </div>
                            <div class="col-md-10 col-xs-10 col-sm-10">
                                <h5>TRANSPARENT PRICE</h5>
                                <p>No annoying, extra teeny-weeny bits that you need to pay once you get there. It’s an all-inclusive package, baby!</p>
                            </div>
                        </div><!-- end service -->
                    </div><!-- end col -->

                    <div class="col-md-3">
                        <img src="upload/girl.png" alt="" class="img-responsive">
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->


        <section class="section fullscreen background parallax" style="background-image:url('images/parallax_05.jpg');"
            data-img-width="1921" data-img-height="665" data-diff="20">
            <div class="container">
                <div class="home-message text-center">
                    <h1>LET’S EXPLORE THE LOCAL<br>TOGETHER</h1>
                    <p>KLANA is for those who want cross things off their bucket list and live an authentic experience. We are an easy to use platform that connects travelers to community-based tourism destinations across indonesia, or as we locals know them: desa wisata. KLANA invites you to live local.</p>
                    <a href="#" class="btn btn-primary btn-lg border-radius">EXPLORE!</a>
                </div><!-- end homemessage -->
            </div><!-- end container -->
        </section><!-- end section -->

@include('template/footer')
