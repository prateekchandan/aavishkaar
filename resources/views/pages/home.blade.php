@extends('pages.template')
 
@section('content')
<!--PRELOADER-->
    <div class="preloader">
        <div class="status"></div>
    </div>
    <!--/PRELOADER-->
    <!--HOME-->
    <section id="sec_1" class="autoheight">
        <div class="home-bg"></div>
        <style type="text/css">
            #sec_1 {
                background: url("index.html") repeat scroll 0 0 rgba(33, 39, 57, 0.5);
            }
            .home-bg {
                background: url('{{asset('images/xmasimage/bg1.jpg')}}') no-repeat center center;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
        </style>


        <div class="col-lg-12 landing-text-pos align-center">
            <h1 class="wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="1s">AAVISHKAAR 2016</h1>
            <hr id="title_hr" />
            <p class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="1s"> Seth GS Medical College. 17-20 Feb 2016</p>
            <a class="learn-more-btn btn-effect wow animated fadeIn" data-wow-duration="0.5s" data-wow-delay="1.5s" data-scroll href="#intro">Explore</a>
        </div>

    </section>
    <!--/HOME-->

    <!--ABOUT-->
    <section class="intro text-center section-padding" id="intro">
        <div class="container wow animated fadeInLeft animated" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="row">
                <div class="col-lg-10 align-center about">
                    <h1 class="arrow">About the Fest</h1>
                    <hr />
                    <p style="font-size:1.3em">Resonating through the corridors of time, the name of Seth Gordhandas Sunderdas Medical College and King Edward Memorial Hospital evokes memories and reverence. Ninety years of excellence, ninety years of the  highest level of health care in the Indian medical fraternity.</p>
                    <p><br></p>
                    <p style="font-size:1.3em">Hence, upholding the tradition of being the first in everything, the students of Seth GS Medical College bringto you, the premier college festival of all medical college: AAVISHKAAR 2016</p>
                    <p><br></p>
                    <p style="font-size:1.3em">Into its 35thyear,<br> Aavishkaar, an innovation, is a path breaker and a pathfinder. This 4 day extravaganza brings forth fresh talent from every field - from dance, drama, debate to organising and painting. With a past full of experiences of uniting medical students from all across the country, we promise to make Aavishkaar 2016 an even greater success.</p>
                    
                </div>
            </div>
        </div>
    </section>

    <!--/ABOUT-->

    <!--FEATURES-->
    <section class="features text-center" id="features">
        <div class="row">
            <div id="grid-gallery" class="grid-gallery">
                <section class="grid-wrap">
                    <div class="grid-gal">
                        <figure class="block-hover 3d-gallery col-lg-3 col-sm-12">
                            <a href="#"><img src="{{asset('templates/mievent/assets/img/gallery/gal-icn.png')}}" alt="img1" /> <span>GALLERY</span> </a>
                        </figure>
                    </div>
                </section>
                <!--grid wrap-->

                <!-- slideshow -->
                <section class="slideshow">
                    <ul>
                        <li>
                            <figure><img src="{{asset('templates/mievent/assets/img/gallery/g1.jpg')}}" alt="img01" />
                                <figcaption>
                                    <hr />
                                    <p>STEP UP.</p>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure><img src="{{asset('templates/mievent/assets/img/gallery/g2.jpg')}}" alt="img02" />
                                <figcaption>
                                    <hr />
                                    <p>Gravity</p>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure><img src="{{asset('templates/mievent/assets/img/gallery/g3.JPG')}}" alt="img03" />
                                <figcaption>
                                    <hr />
                                    <p>Dreamz</p>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure><img src="{{asset('templates/mievent/assets/img/gallery/g4.JPG')}}" alt="img03" />
                                <figcaption>
                                    <hr />
                                    <p>Alfaaz</p>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>

                    <nav> <span class="nav-prev fa-chevron-left fa fa-2x "></span> <span class="nav-next fa-chevron-right fa fa-2x"></span> <span class="close nav-close"><i class="fa fa-times"></i></span> </nav>
                </section>
                <!-- /slideshow -->
            </div>
            <!-- /grid-gallery -->

            <div class="container col-lg-6 col-md-12 features-md">
                <div class="row">
                    <div class="col-md-12">
                        <div class="features-wrapper">
                            <div class="col-md-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                                <div class="icon">30+</div>
                                <h2>events</h2>
                                <p>Experience the best days of your life with a lots of fun and joy filled events</p>
                            </div>
                            <div class="col-md-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                                <div class="icon">4</div>
                                <h2>days</h2>
                                <p>This 4 day extravaganza brings forth fresh talent from every field - from dance, drama, debate to organising and paintin</p>
                            </div>
                            <div class="col-md-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
                                <div class="icon">25+</div>
                                <h2>colleges</h2>
                                <p> With a past full of experiences of uniting medical students from all across the country, we promise to make Aavishkaar 2016 an even greater success</p>
                            </div>
                            <div class="clearfix">&nbsp;</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Vimoe Video-->
            <div class="grid-gal">
                <figure class="block-hover vimeo-video col-lg-3 col-sm-12">
                    <a href="https://www.youtube.com/embed/EMR7Fov4fls" target="_self" class="venoboxvid" data-type="youtube">
                        <img src="{{asset('templates/mievent/assets/img/vdo-icn.png')}}" alt="video_hover" /> <span>VIDEO</span> </a>
                </figure>
            </div>
        </div>
        <!--row ends here-->
    </section>
    <!--/FEATURES-->

    <!--SCHEDULE-->
    <section class="text-center section-padding" id="responsive">
        <div class="container wow animated fadeInLeft bottom-spacing">
            <div class="row">
                <div class="col-md-8 align-center wow animated fadeInLeft">
                    <h1 class="arrow">Schedule</h1>
                    <hr />
                </div>
            </div>
        </div>
        <div class="container-schedule container wow animated fadeInDown animated" data-wow-duration="1s" data-wow-delay="1s">
            <div id="tabs-ui" class="tabs">
                <nav>
                    <ul>
                    	@foreach($data as $key => $row)
                    	<li><a href="#section-{{md5($key)}}"><span>{{$key}}</span></a>
                        </li>
                    	@endforeach
                    </ul>
                </nav>
                <div class="content">
                	@foreach($data as $key => $row)
                    <section id="section-{{md5($key)}}">
                        <div class="container">
                            <div class="accordion">
                                <div class="day">{{$row['description']}}</div>
                                @foreach($row['events'] as $key1 => $event)
                                <div class="item clearfix">
                                    <div class="heading clearfix">
                                        <div class="time col-md-3 col-sm-12 col-xs-12">{{$event['time']}}</div>
                                        <div class="e-title col-md-9 col-sm-12 col-xs-12">{{$event['name']}}
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="content venue col-md-3 col-sm-12 col-xs-12">{{$event['venue']}}</div>
                                        <div class="content details col-md-9 col-sm-12 col-xs-12">{{$event['description']}}</div>
                                    </div>
                                </div>
                                @endforeach
                               
                            </div>
                        </div>
                    </section>
                    @endforeach
                    
                </div>
                <!-- /content -->
            </div>
            <!-- /tabs -->
        </div>
    </section>

    <!-- Event social links and download-->
    <section class="event-download-social-link section-padding">
        <div class="col-lg-6 col-md-12 align-center"><a href="{{asset('media/schedule.jpg')}}" target="_blank" class="d-sch text-right">download schedule</a> <a href="https://www.facebook.com/AavishkaarFest-685977141494321/?fref=ts" target="_blank" class="fb ">connect via facebook</a>
        </div>
    </section>
    <!--/SCHEDULE-->
    <style type="text/css">
        #spons img,#spons div{
            height: 80px !important;
        }
        #spons img{
            margin-left: 20px;
            max-width: 180px;
            width: auto;
        }
    </style>
     <!--REGISTER FORM-->   
        <section id="swag" class="swag text-center">
            <div class="container">
                <div class="row">
                   <div class="row">
                    <div class="col-md-8 align-center wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h1 class="arrow">Our Sponsors</h1><hr>
                    </div>
                    <!-- Jssor Slider Begin -->
                    <div id="slider1_container" style="">
                        <div id="spons" class="inner_carousal" data-u="slides" style="height: 100px">
                            <div><a href="http://www.licindia.in/"><img alt="LIC" src="{{asset('assets/img/sponsor/lic.png')}}" /></a></div>
                            <div><a href="http://www.dbmci.com /"><img alt="Bhatia" src="{{asset('assets/img/sponsor/bhatia.png')}}" /></a></div>
                            <div><a href="http://www.bankofmaharashtra.in/"><img alt="bank of maharashtra" src="{{asset('assets/img/sponsor/BOM_LOGO.png')}}" /></a></div>
                            <div><a href="http://www.sbi.co.in/"><img alt="SBI" src="{{asset('assets/img/sponsor/sbi-logo.png')}}" /></a></div>
                            <div><a href="http://www.alkemlabs.com"><img alt="Alkem" src="{{asset('assets/img/sponsor/alkem.jpg')}}" /></a></div>
                            <div><a href="http://www.glenmarkpharma.com/"><img alt="glenmark" src="{{asset('assets/img/sponsor/glenmark.png')}}" /></a></div>
                            <div><a href="http://www.futuregroup.in/"><img alt="futuregroup" src="{{asset('assets/img/sponsor/fg.png')}}" /></a></div>
                            <div><a href="http://www.charaghdin.com/"><img alt="charagh din" src="{{asset('assets/img/sponsor/charagh.jpg')}}" /></a></div>
                            <div><a href="http://www.allen.ac.in/"><img alt="allen" src="{{asset('assets/img/sponsor/Allen.png')}}" /></a></div>
                        </div>
                    </div>
                    <!-- Jssor Slider End -->
                 </div>
                </div>
                <br>
            </div>
        </section>

        <!-- Modal -->
<div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
        <img src="{{asset('images/tvf.jpg')}}" style="width:100%">
      </div>
     
    </div>
  </div>
</div>
            
           




@endsection

@section('script')

    <script type="text/javascript" src="{{asset('templates/mievent/assets/js/xmastriangles.js')}}"></script>

    <script type="text/javascript">

	/*** 3D Gallery *********/
	new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
	new CBPFWTabs( document.getElementById( 'tabs-ui' ) );


	/***************** Animation ******************/
	var wow = new WOW(
	{
	boxClass: 'wow', // animated element css class (default is wow)
	animateClass: 'animated', // animation css class (default is animated)
	offset: 0, // distance to the element when triggering the animation (default is 0)
	mobile: false, // trigger animations on mobile devices (default is true)
	live: true // act on asynchronously loaded content (default is true)
	}
	);
	
	wow.init();
	
    
	   

    </script>

@endsection