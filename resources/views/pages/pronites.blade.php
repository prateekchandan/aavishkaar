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

    
    

    <section class="intro text-center section-padding" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 wow animated fadeInUp align-center" data-wow-duration="1s" data-wow-delay="1s">
                    <h1 class="arrow">Pronites</h1>
                    <hr />
                    <p>‘Pronites’ or ‘Pro-shows’ feature well known national and international artists from various fields of music, like Rock, Sufi, Classical and Bollywood.</p>
                </div>
            </div>
            <div class="row">
                <div class="speakers-wrap">
                    <div id="portfolioSlider">
                        <ul class="slides">
                            <li>
                                <div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                                    <div class="overlay-effect effects clearfix">
                                        <div class="img"><img src="{{asset('images/alfaaz.JPG')}}" alt="Portfolio Item" />
                                           
                                        </div>
                                    </div>
                                    <h1 style="color:#333">Alfaaz</h1>
                                    <h2>Bezubaan shabdo ki meethi Aavaj</h2>
                                    <p>Alfaaz is the fest's only blockbuster Hindi dance and drama show. It strives to tell you an engaging story sprinkled with plenty of breathtaking dances. The unrivalled performance of the actors will transport you to another world as you laugh and cry along with them. The unbridled energy of the dancers will make you want to jump off your seats and shake a leg!</p>
                                    <p>
                                    <br>
                                    <br>
                                    <strong><i class="fa fa-calendar"></i> 17th Feb 2016</strong>
                                    </p>

                                </div>
                                <div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                                    <div class="overlay-effect effects clearfix">
                                        <div class="img"><img src="{{asset('images/dreamz.jpg')}}" alt="Portfolio Item" />
                                           
                                        </div>
                                    </div>
                                    <h1 style="color:#333">Dreamz</h1>
                                    <h2>Dare to Dream, Dream to Dance </h2>
                                    <p>Where the stars descend upon the dance floor - May it be Contemporary or Bollywood, Hip Hop or Jive. Come, experience the Beauty of Motion in all its forms at this Main Stage event, where the finest of the dancers right from the Fresher’s to Interns put their best foot forward! Grab a good seat or you'll miss the Story in Motion!</p>

                                    <p>
                                    <br>
                                    <br>
                                    <br>
                                    <strong><i class="fa fa-calendar"></i> 18th Feb 2016</strong>
                                    </p>

                                </div>
                                <div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                                    <div class="overlay-effect effects clearfix">
                                        <div class="img"><img src="{{asset('images/apurvai.jpg')}}" alt="Portfolio Item" />
                                           
                                        </div>
                                    </div>
                                    <h1 style="color:#333">Apurvai</h1>
                                    <p>A Marathi dance and drama and the biggest main stage event of Aavishkaar, is set to step into its 16th year of glory. Dr. Amol Kolhe, the esteemed Marathi actor, an alumnus is the patron who has great contribution each year. It is a theatrical extravaganza which has been graced by the presence of influential and prodigious personalities from field of theatre and film industry. So grab your seat at the earliest, you are sure to be captivated!

</p>
<p>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <strong><i class="fa fa-calendar"></i> 20th Feb 2016</strong>
                                    </p>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <!--Row Ends Here-->
        </div>
        <!-- Example Speaker -->

    </section>
    <!--/SPEAKER-->


   
@endsection
@section('script')

    <script type="text/javascript" src="{{asset('templates/mievent/assets/js/xmastriangles.js')}}"></script>
    <script type="text/javascript" src="{{asset('templates/mievent/assets/js/modalEffects.js')}}"></script>

    
@endsection