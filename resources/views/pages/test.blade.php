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
                    <h1 class="arrow">About the Event</h1>
                    <hr />
                    <p>Lorem ipsum dolor sit amet, ad eos iriure corpora prodesset. Partem timeam at vim, mel veritus accusata ea. Ius ei dicam inciderint, eleifend deseruisse ei mea. Alia dicam eam te, summo exerci ei mei.Ei sea debet choro omittantur. Ea nam quis aeterno, et usu semper senserit.</p>
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