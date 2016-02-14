@extends('pages.template')
 
@section('content')
    

    <div id="" class="ignite-cta text-center" style="background:#212739">
        <div class="col-md-8 align-center  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
        </div>
        <div id="slider1_container">
            <div class="inner_carousal" data-u="slides">
            	<div></div>
        	</div>
        </div>
                <!-- Jssor Slider End -->
    </div>

    
     <!--ABOUT-->
    <section class="intro text-center section-padding" id="portfolio">
        <div class="container wow animated fadeInLeft animated" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="row">
                <div class="col-lg-12 align-center about">
                    <h1 class="arrow">Our Team</h1>
                    <hr />
                    <div class="row">
                        <div class="pricing-wrap">
                            <ul class="slides">
                                <li>
                                    @foreach($people as $name => $data)
                                    <div class="col-md-3 col-sm-6 col-xs-6 wow animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                                        <ul class="planContainer">
                                            <li class="price"><p>{{$name}}</p></li>
                                            <li ><p><strong>{{$data[0]}}</strong></p></li>
                                        </ul>             
                                    </div>
                                    @endforeach
                                  
                                </li>
                            </ul>                
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--/ABOUT-->


   
@endsection
@section('script')
<!--PRELOADER-->
    <div class="preloader">
        <div class="status"></div>
    </div>
    <!--/PRELOADER-->
    <script type="text/javascript" src="{{asset('templates/mievent/assets/js/xmastriangles.js')}}"></script>
    
@endsection