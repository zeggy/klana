@include('template/header-unhome')

<section id="page-header" class="section background">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h3>{{ $trip->title }}</h3>
                        <p>
                            <span class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span><!-- end rating -->
                        {{ $trip->location }}</p>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
</section><!-- end section -->

<section class="section clearfix">
    <div class="container">
        <div class="row">
            <div id="fullwidth" class="col-sm-12">

                <!-- START CONTENT -->
                <div class="single-hotel-wrapper">
                    <div class="single-hotel-image">
                        <img src="{{ asset('storage/' . $trip->photos[0]->path) }}" alt="" class="img-responsive">
                        <div class="price">
                            <h6>{{ $trip->title }}</h6>
                            <h2>USD{{ number_format($trip->price) }}<span>( {{ $trip->estimated_time }} )</span></h2>
                            <a href="{{ route('send_email', $trip) }}" class="btn btn-primary btn-lg">BOOK NOW</a>
                        </div><!-- end price -->

                        <div class="thumbnails">
                            @for ($i = 1; $i < count($trip->photos); $i++)
                        <a data-gal="prettyPhoto[product-gallery]" rel="bookmark" title="" href="{{ asset('storage/' . $trip->photos[$i]->path) }}"><img
                                    src="{{ asset('storage/' . $trip->photos[$i]->path) }}" alt="" class="img-responsive"></a>
                            @endfor
                        </div><!-- end price -->
                    </div><!-- end image -->

                    <hr class="hotel-hr">

                    <div class="row">
                        <div id="content" class="col-md-9 col-sm-12 col-xs-12">
                            <div class="book-widget">

                                <div class="row hotel-desc">
                                    <div class="col-md-12">
                                        <h5>What to bring</h5>
                                        <?php echo $trip->belonging ?>
                                    </div>
                                </div><!-- end row -->

                                <br>

                              
                                <hr>
                                <br>

                                <div class="row hotel-desc">
                                    <div class="col-md-12">
                                        <h5>ABOUT THE TRIPS</h5>
                                        <p><?php echo $trip->description ?></p>
                                    </div><!-- end col -->
                                </div><!-- end hote-desc -->
                            </div><!-- end book-widget -->

                            <div class="clearfix"></div>
                            <hr>
                            <br>

                            <hr>

                            <div class="leave-a-feedback text-center clearfix">
                                <h6>PLEASE <a href="login.html">LOGIN / REGISTER</a> TO LEAVE A FEEDBACK</h6>
                            </div><!-- end leave-a-feedback -->

                        </div><!-- end content -->

                        <div id="sidebar" class="col-md-3 col-sm-12 col-xs-12">
                            <div class="widget clearfix">
                                <div class="widget-title">
                                    <h6>TRAVELLER LIKE THIS HOTEL FOR:</h6>
                                </div><!-- end title -->

                                <div class="hotel-widget clearfix">
                                    <p><i class="icon-car82"></i> Nearest transport:</p>
                                    <small>Marina Bay MRT Station (0.8 Km / 10 min walk)</small>
                                </div><!-- end listwidget -->

                                <div class="hotel-widget clearfix">
                                    <p><i class="icon-location38"></i> Area recommended for:</p>
                                    <small>restaurants</small>
                                    <small>shopping</small>
                                    <small>sightseeing</small>
                                </div><!-- end listwidget -->

                                <div class="hotel-widget clearfix">
                                    <p><i class="icon-air6"></i> Distance to airport:</p>
                                    <small>Seletar Airport (14.9 Km)</small>
                                    <small>Changi International Airport (16.8 Km)</small>
                                </div><!-- end listwidget -->

                                <div class="hotel-widget clearfix">
                                    <p><i class="icon-camera"></i> Top attractions in the area:</p>
                                    <small>Marina Bay Sands Casino (0.0 Km)</small>
                                    <small>Merlion (0.7 Km / 9 min walk)</small>
                                    <small>Marina Bay Floating Platform (0.8 Km / 10 min walk)</small>
                                    <small>Esplanade Theatres on the Bay (0.9 Km / 11 min walk)</small>
                                </div><!-- end listwidget -->

                                <div class="hotel-widget clearfix">
                                    <span class="notice">Note:Note: Distances are measured as a straight line,
                                        calculated from a starting point to a destination point.</span>
                                </div><!-- end listwidget -->

                                <div class="sidebar-price clearfix">
                                    <h6>{{ $trip->title }}</h6>
                                    <h2>USD{{ number_format($trip->price) }}<span> <br>( {{ $trip->estimated_time }} )</span></h2>
                                    <a href="{{ route('send_email', $trip) }}" class="btn btn-primary btn-lg">BOOK NOW</a>
                                </div><!-- end price -->

                            </div><!-- end widget -->
                        </div><!-- end sidebar -->
                    </div><!-- end row -->
                </div><!-- end single-hotel-wrapper -->
                <!-- END CONTENT -->

            </div><!-- end fullwidth -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->

@include('template/footer')
