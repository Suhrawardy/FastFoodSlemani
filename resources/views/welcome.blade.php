@extends('layouts')
@section('content')

    <!-- BEGIN HOME GRID -->
    <div id="home-map">
        <div id="properties_map"></div>


    </div>
    <!-- END HOME GRID -->

    <!-- BEGIN ACTION BOX -->
    <div class="action-box">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>We are making things easier <strong>HouSe FooD</strong></h3>

                </div>
                <div class="col-md-4">
                    <div id="newsletter" class="center">
                        <h3>You can stay in Touch with us</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- BEGIN SOCIAL NETWORKS -->
                    <ul class="social-networks">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    </ul>
                    <!-- END SOCIAL NETWORKS -->
                </div>
            </div>
        </div>
    </div>
    <!-- END ACTION BOX -->


    <!-- BEGIN CONTENT WRAPPER -->
    <div class="content">
        <div class="container">
            <div class="row">

                <!-- BEGIN MAIN CONTENT -->
                <div class="main col-sm-12">

                    <div id="listing-header" class="clearfix">


                        <div class="view-mode">
                            <span>View Mode:</span>
                            <ul>
                                <li data-view="grid-style1" data-target="property-listing" class="active"><i class="fa fa-th"></i></li>
                                <li data-view="list-style" data-target="property-listing"><i class="fa fa-th-list"></i></li>
                            </ul>
                        </div>
                    </div>

                    <!-- BEGIN PROPERTY LISTING -->
                    <div id="property-listing" class="grid-style1 clearfix">
                        @php($a=0)
                            @foreach($posts as $post)
                                @if($a%4==0)
                            <div class="row">
                                @endif
                            <div class="item col-md-3"><!-- Set width to 4 columns for grid view mode only -->
                                <div class="image">
                                    <a href="/post\{{$post->id}}">
                                        <span class="btn btn-default"><i class="fa fa-file-o"></i> Details</span>
                                    </a>
                                    <img src="/images/profile\{{$post->photo}}" alt="" />
                                </div>
                                <div class="price">
                                    <i class="fa fa-home"></i>{{$post->delivery_status}}
                                </div>
                                <div class="info">
                                    <h3>
                                        <a href="/post\{{$post->id}}">Luxury Apartment with great views </a>
                                        <small>{{$post->address}}</small>
                                    </h3>
                                    <p>Sed rutrum urna id tellus euismod gravida. Praesent placerat, mauris ac pellentesque fringilla, tortor libero condimen.</p>


                                </div>
                            </div>
                                @if($a%4==3)
                        </div>
                                @endif
                                @php($a++)
                            @endforeach



                    </div>
                    <!-- END PROPERTY LISTING -->


                    <!-- BEGIN PAGINATION -->
                    <div class="pagination">
                        <ul>
                        {!! $posts->links()!!}
                        </ul>

                    </div>
                    <!-- END PAGINATION -->

                </div>
                <!-- END MAIN CONTENT -->






            </div>
        </div>
    </div>
    <!-- END CONTENT WRAPPER -->


    <!-- BEGIN CONTENT 2 WRAPPER -->
    <div class="content gray">
        <div class="container">
            <div class="row">

                <!-- BEGIN MAIN CONTENT 2 -->
                <div class="main col-sm-8">



                    <h1 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">Latest News</h1>

                    <div id="latest-news-slider" class="owl-carousel latest-news-slider" data-animation-direction="from-bottom" data-animation-delay="250">
                        <div class="item">
                            <div class="image">
                                <a href="blog-detail.html"><span class="btn btn-default"><i class="fa fa-file-o"></i> Read More</span></a>
                                <img src="http://placehold.it/766x515" alt="" />
                            </div>

                            <div class="tag"><i class="fa fa-file-text"></i></div>

                            <div class="info">
                                <ul class="top-info">
                                    <li><i class="fa fa-calendar"></i> July 30, 2014</li>
                                    <li><i class="fa fa-comments-o"></i> 2</li>
                                    <li><i class="fa fa-tags"></i> Properties, Prices, best deals</li>
                                </ul>

                                <h3><a href="blog-detail.html">How to get your dream property for the best price?</a></h3>
                                <p>Pellentesque elementum libero enim, eget gravida nunc laoreet et. Nullam ac enim auctor, fringilla risus at, imperdiet turpis. Pellentesque elementum libero enim, eget gravida nunc laoreet et.</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="image">
                                <a href="blog-detail.html"><span class="btn btn-default"><i class="fa fa-file-o"></i> Read More</span></a>
                                <img src="http://placehold.it/766x515" alt="" />
                            </div>

                            <div class="tag"><i class="fa fa-film"></i></div>

                            <div class="info">
                                <ul class="top-info">
                                    <li><i class="fa fa-calendar"></i> July 24, 2014</li>
                                    <li><i class="fa fa-comments-o"></i> 4</li>
                                    <li><i class="fa fa-tags"></i> Tips, Mortgage</li>
                                </ul>

                                <h3><a href="blog-detail.html">7 tips to get the best mortgage.</a></h3>
                                <p>Nullam ac enim auctor, fringilla risus at, imperdiet turpis. Pellentesque elementum libero enim, eget gravida nunc laoreet et. Nullam ac enim auctor, fringilla risus at, imperdiet turpis.</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="image">
                                <a href="blog-detail.html"><span class="btn btn-default"><i class="fa fa-file-o"></i> Read More</span></a>
                                <img src="http://placehold.it/766x515" alt="" />
                            </div>

                            <div class="tag"><i class="fa fa-file-text"></i></div>

                            <div class="info">
                                <ul class="top-info">
                                    <li><i class="fa fa-calendar"></i> July 05, 2014/li>
                                    <li><i class="fa fa-comments-o"></i> 1</li>
                                    <li><i class="fa fa-tags"></i> Image, Text</li>
                                </ul>

                                <h3><a href="blog-detail.html">House, location or price: What's the most important factor?</a></h3>
                                <p>Fringilla risus at, imperdiet turpis. Pellentesque elementum libero enim, eget gravida nunc laoreet et. Nullam ac enim auctor, fringilla risus at, imperdiet turpis.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END MAIN CONTENT -->

                <!-- BEGIN SIDEBAR -->
                <div class="sidebar gray col-sm-4">

                    <p class="text-highlight center" data-animation-direction="from-bottom" data-animation-delay="50"><strong>Cozy</strong> it's an Awesome Real Estate Template!<p>




                    <h2 class="section-title" data-animation-direction="from-bottom" data-animation-delay="50">Our Partners</h2>

                    <div id="partners">
                        <div class="item" data-animation-direction="from-bottom" data-animation-delay="250">
                            <a href="#"><img src="http://placehold.it/194x45" alt="" onmouseover="this.src='http://placehold.it/194x45';" onmouseout="this.src='http://placehold.it/194x45';" /></a>
                        </div>
                        <div class="item" data-animation-direction="from-bottom" data-animation-delay="450">
                            <a href="#"><img src="http://placehold.it/194x45" alt="" onmouseover="this.src='http://placehold.it/194x45';" onmouseout="this.src='http://placehold.it/194x45';" /></a>
                        </div>
                        <div class="item" data-animation-direction="from-bottom" data-animation-delay="650">
                            <a href="#"><img src="http://placehold.it/194x45" alt="" onmouseover="this.src='http://placehold.it/194x45';" onmouseout="this.src='http://placehold.it/194x45';" /></a>
                        </div>
                        <div class="item" data-animation-direction="from-bottom" data-animation-delay="850">
                            <a href="#"><img src="http://placehold.it/194x45" alt="" onmouseover="this.src='http://placehold.it/194x45';" onmouseout="this.src='http://placehold.it/194x45';" /></a>
                        </div>
                    </div>

                </div>
                <!-- END SIDEBAR 2 -->

            </div>
        </div>
    </div>
    <!-- END CONTENT 2 WRAPPER -->


    <!-- BEGIN TWITTER WRAPPER WITH COLORED BACKGROUND-->
    <div class="parallax colored-bg pattern-bg" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div id="twitter-slider" class="owl-carousel twitter" data-animation-direction="from-bottom" data-animation-delay="50">
                    <div class="item"> <h2 class="section-title">We love you, so we care about you</h2></div><!-- This div (with class "item") will be automatically popuplated with a single tweet from your last tweets -->

                    <div class="item"><h2 class="section-title">Stay with us you never get hungry</h2></div><!-- This div (with class "item") will be automatically popuplated with a single tweet from your last tweets -->

                </div>

            </div>
        </div>
    </div>
    <!-- END TWITTER WRAPPER WITH COLORED BACKGROUND-->
    </div>

</body>


</div>
<!-- END WRAPPER -->

@include('partials.footer')
<!-- Libs -->
<script src="{{ asset('js/common.js') }}"></script>
<script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/chosen.jquery.min.js') }}"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script src="{{ asset('js/markerclusterer.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/countUp.min.js') }}"></script>
<script src="{{ asset('twitter/jquery.tweet.min.js') }}" type="text/javascript" charset="utf-8"></script>

<!-- Template Scripts -->
<script src="{{ asset('js/variables.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>

<!-- Properties list -->
<script > //List of properties
    var properties =[
            @foreach($posts as $post)
        {
            "id": 2,
            "title": "{{$post->post_name}}",
            "latitude":"{{$post->latitude}}",
            "longitude":"{{$post->longitude}}",
            "image":"images/profile/{{$post->photo}}",
            "description":"{{$post->address}}",
            "link":"post/{{$post->id}}",
            "map_marker_icon":"images/markers/coral-marker-commercial.png"
        },
        @endforeach
    ]
</script>

<script type="text/javascript">
    (function($){
        "use strict";

        $(document).ready(function(){
            //Create porperties map
            Cozy.propertiesMap(properties, 'properties_map');
        });
    })(jQuery);
</script>
</html>
@endsection