@extends('layouts')
@section('content')



        <!-- BEGIN PAGE TITLE/BREADCRUMB -->
        <div class="parallax colored-bg pattern-bg" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="page-title">Property Detail</h1>

                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE TITLE/BREADCRUMB -->


        <!-- BEGIN CONTENT WRAPPER -->
        <div class="content">
            <div class="container">
                <div class="row">

                    <!-- BEGIN MAIN CONTENT -->
                    <div class="main col-sm-8">

                        <h1 class="property-title">{{$post->post_name}} <small>{{$post->address}}</small></h1>



                        <!-- BEGIN PROPERTY DETAIL SLIDERS WRAPPER -->
                        <div id="property-detail-wrapper" class="style1">

                            <div class="price">
                                <i class="fa fa-home"></i>For Sale
                                <span>$950,000</span>
                            </div>

                            <!-- BEGIN PROPERTY DETAIL LARGE IMAGE SLIDER -->
                            <div id="property-detail-large" class="owl-carousel">
                                @foreach($photos as $photo)
                                <div class="item">
                                    <img src="/images/extra-images\{{$photo->path}}" alt="" />
                                </div>

                                @endforeach
                            </div>
                            <!-- END PROPERTY DETAIL LARGE IMAGE SLIDER -->

                            <!-- BEGIN PROPERTY DETAIL THUMBNAILS SLIDER -->
                            <div id="property-detail-thumbs" class="owl-carousel">
                                @foreach($photos as $thumb)
                                <div class="item"><img  src="/images/extra-images/{{$thumb->path}}" alt="" /></div>
                             @endforeach
                            </div>
                            <!-- END PROPERTY DETAIL THUMBNAILS SLIDER -->

                        </div>

                        <!-- END PROPERTY AMENITIES LIST -->


                        <h1 class="section-title">Menu</h1>
                        {!! $post->post_desc !!}
                        <!-- BEGIN PROPERTY FEATURES LIST -->
                        <h1 class="section-title">Restaurant informations</h1>
                        <!-- BEING AGENT INFORMATION -->
                        <div class="property-agent-info">
                            <div class="agent-detail col-md-12">
                                <div class="image">
                                    <img alt="" src="/images/profile\{{$post->photo}}" />
                                </div>

                                <div class="info">
                                    <header>
                                        <h2>{{$post->name}}</h2>
                                    </header>

                                    <ul class="contact-us">
                                        <li><i class="fa fa-envelope"></i><a href="mailto:{{$post->email}}">{{$post->email}}</a></li>
                                        <li><i class="fa fa-map-marker"></i> {{$post->address}}</li>
                                        <li><i class="fa fa-phone"></i> {{$post->phone}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="share-wraper col-sm-12">
                            <h5>Share this Property:</h5>
                            <ul class="social-networks">
                                <li><a target="_blank" href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                <li><a target="_blank" href="https://twitter.com/intent/tweet?url=http://www.wiselythemes.com/html/cozy/properties-detail.html&amp;text=Cozy%20Property"><i class="fa fa-twitter"></i></a></li>
                                <li><a target="_blank" href="https://plus.google.com/share?url=http://www.wiselythemes.com/html/cozy/properties-detail.html"><i class="fa fa-google"></i></a></li>
                                <li><a target="_blank" href="http://pinterest.com/pin/create/button/?url=http://www.wiselythemes.com/html/cozy/properties-detail.html&amp;description=Cozy%20Property&amp;media=http%3A%2F%2Fwww.wiselythemes.com%2Fhtml%2Fcozy%2Fimages%2Fdetail-img1.jpg"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="mailto:?subject=Check%20out%20this%20property%20I%20found!&amp;body=http://www.wiselythemes.com/html/cozy/properties-detail.html"><i class="fa fa-envelope"></i></a></li>
                            </ul>

                        </div>

                        <!-- END AGENT INFORMATION -->


                        <!-- END PROPERTIES ASSIGNED -->

                    </div>
                    <!-- END MAIN CONTENT -->


                    <!-- BEGIN SIDEBAR -->
                    <div class="sidebar gray col-sm-4">


                        <!-- END ADVANCED SEARCH -->

                        <!-- BEGIN LATEST NEWS -->
                        <h2 class="section-title">Latest News</h2>

                        <!-- END LATEST NEWS -->

                        <!-- BEGIN NEWSLETTER -->
                        <div id="newsletter" class="col-sm-12">
                            <h2 class="section-title">Subscribe our weekly<br><span>Newsletter</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit lorem ipsum dolor sit amet consectetur adipiscing elit.</p>

                            <div class="input-group">
                                <input type="text" placeholder="Enter your E-mail" name="newsletter_email" id="newsletter_email" class="form-control" />
								<span class="input-group-btn">
									<button class="btn btn-default-color" type="button">Subscribe</button>
								</span>
                            </div>
                        </div>
                        <!-- END NEWSLETTER -->

                    </div>
                    <!-- END SIDEBAR -->

                </div>
            </div>
        </div>
        <!-- END CONTENT WRAPPER -->



@include('partials.footer')


    <!-- END WRAPPER -->


    <!-- Libs -->
    <script src="{{ asset('js/common.js') }}"></script>
    <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/chosen.jquery.min.js') }}"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyB11DQ3ggDF6i74IFdBM-TZCuLcnX-vABM" type="text/javascript"></script>
    <script src="{{ asset('js/markerclusterer.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/countUp.min.js') }}"></script>
    <script src="{{ asset('twitter/jquery.tweet.min.js') }}" type="text/javascript" charset="utf-8"></script>

    <!-- Template Scripts -->
    <script src="{{ asset('js/variables.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>



    </body>
    </html>


@endsection