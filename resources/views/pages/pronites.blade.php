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
    <section class="intro text-center section-padding" id="intro">
        <div class="container wow animated fadeInLeft animated" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="row">
                <div class="col-lg-8 align-center about">
                    <h1 class="arrow">Coming Soon</h1>
                    <hr />
                    <p>This part is under construction</p>
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