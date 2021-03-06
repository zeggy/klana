@include('template/header-unhome')

<section id="page-header" class="section background">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="c1 breadcrumb text-left">
                            <li><a href="#">Explore</a></li>
                            <li>Trips</li>
                        </ul>
                        @if (!$destination)
                        <h3>Explore Our Trips</h3>
                        @else
                        <h3>Explore Our Trips in {{ $destination }}</h3>
                        @endif
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
</section><!-- end section -->

<section class="section clearfix">
    <div class="container">
        <div class="row">
            <div id="fullwidth" class="col-sm-12">

                
                <!-- START CONTENT -->
                <div class="row">

                    @foreach ($trips as $trip)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="post-wrapper clearfix border-bottom">
                            <div class="hotel-wrapper">
                                <div class="post-media">
                                    <a href="{{ route('get_trip_detail', $trip) }}"><img src="{{ asset('storage/' . $trip->photos[0]->path) }}" alt="" class="img-responsive"></a>
                                </div><!-- end media -->
                                <div class="post-title clearfix">
                                    <div class="pull-left">
                                        <h5><a href="hotel-single.html" title="">{{ $trip->title }}</a></h5>
                                    </div><!-- end left -->
                                    <div class="pull-right">
                                    <h6>USD {{ number_format($trip->price) }}</h6>
                                    </div><!-- end left -->
                                </div><!-- end title -->
                                <span class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>                                    
                                </span><!-- end rating -->
                                <p>{{ substr($trip->description, 0, 150) }}...</p>
                            </div><!-- end hotel-wrapper -->
                        </div><!-- end post-wrapper -->
                    </div><!-- end col -->

                    @endforeach

                  <!--   <nav class="text-center">
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav> -->


                </div><!-- end row -->
                <!-- END CONTENT -->

            </div><!-- end fullwidth -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->


@include('template/footer')