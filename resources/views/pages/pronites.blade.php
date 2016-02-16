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
                                <div class="row">
                                <div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                                    <div class="overlay-effect effects clearfix">
                                        <div class="img"><img src="{{asset('images/tvf-c.jpg')}}" alt="Portfolio Item" />
                                           
                                        </div>
                                    </div>
                                    <h1 style="color:#333">N20</h1>
                                    <p>You won't stop laughing at this hilarious stand-up comedy show by TVF. After all,Laughter is the best medicine</p>
                                    <p>
                                    <br>
                                    <br>
                                    <strong><i class="fa fa-calendar"></i> 18th Feb 2016</strong>
                                    </p>

                                </div>
                                <div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                                    <div class="overlay-effect effects clearfix">
                                        <div class="img"><img src="{{asset('images/alfaaz.JPG')}}" alt="Portfolio Item" />
                                           
                                        </div>
                                    </div>
                                    <h1 style="color:#333">Alfaaz</h1>
                                    <h2>Bezubaan shabdo ki meethi Aavaj</h2>
                                    <p>Alfaaz is the fest's only blockbuster Hindi dance and drama show. It strives to tell you an engaging story sprinkled with plenty of breathtaking dances. The unrivalled performance of the actors will transport you to another world as you laugh and cry along with them. The unbridled energy of the dancers will make you want to jump off your seats and shake a leg!</p>
                                    <p>
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
                                    <strong><i class="fa fa-calendar"></i> 18th Feb 2016</strong>
                                    </p>

                                </div>
                                </div>

                                <br>
                                <div class="row">
                                <div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                                    <div class="overlay-effect effects clearfix">
                                        <div class="img"><img src="{{asset('images/stepup.jpg')}}" alt="Portfolio Item" />
                                           
                                        </div>
                                    </div>
                                    <h1 style="color:#333">Step Up</h1>
                                    <p>If you like to move it, move it, this is the place for you.It is a revolution. A revolution of visuals, stunts, dances and much more. As the teams make the stage their battleground, everyone needs to step up their game. This intercollege dance competition brings an array of styles which will enthrall your mind. Come, let us change the way you judge dancers!</p>
                                    <h2>Rule</h2>
                                    <ul class="exc">
                                        <li>group dance competition</li>
                                        <li>minimum number of participants in a group:6</li>
                                        <li>minimum timing : 7 minutes</li>
                                        <li>registration fee : 1000rs </li>
                                        <li>no spot entries</li>
                                    </ul>
                                    <p>
                                    <strong><i class="fa fa-calendar"></i> 19th Feb 2016</strong>
                                    </p>
                                </div>
                                <div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                                    <div class="overlay-effect effects clearfix">
                                        <div class="img"><img src="{{asset('images/farenheit.jpg')}}" alt="Portfolio Item" />
                                           
                                        </div>
                                    </div>
                                    <h1 style="color:#333">Fahrenheit</h1>
                                    <p>If you thought medical students and ramps do not go together, then think again.  Setting ramps and hearts on fire, Fahrenheit is set to take the competition to a whole new level with better costumes and glamorous walks. So brace yourself, because it is going to get hot </p>
                                    <h2>Rules</h2>
                                    <ul class="exc">
                                        <li>Each team should have a theme of their choice for their sequence.</li>
                                        <li>Maximum number of participants per team is 15 (extra participants will be charged) .</li>
                                        <li>There  should be an additional person for music & lights(as per team discretion)</li>
                                        <li>On stage time for each team is maximum 15 minutes including set up and clearance. If the given time is exceeded, marks will be deducted accordingly.</li>
                                        <li>Any kind of props can be used. However, the participating team will be fully responsible for it. </li>
                                        <li>All clothes &amp; accessories have to be arranged by the participating team.</li>
                                        <li>Music system will be provided. Teams are expected to bring their own CD’s for their sequence and check the working of the same at least 3 hour before the scheduled time of the event.</li>
                                        <li>Any form of obscenity will result in debarring the team from further participation.</li>
                                        <li>The Judges shall select the Best Team, Mr. Fahrenheit &amp; Ms. Fahrenheit. The decision of the judges shall be final and binding.</li>
                                        <li>The entry fee is non-refundable.</li>
                                        <li>Reporting Time : 4:00 pm.</li>
                                        <li>Time of the show: 5:30 pm.</li>
                                        <li>Registration fees : Rs. 1500 for 15 members + Rs. 150 extra per member.</li>
                                        <li>Prizes :  Worth Rs. 25,000 for first place.Worth Rs. 15,000 for second prize.</li>
                                        <li>Registrations close on : 7th February</li>
                                    </ul>
                                    <p>
                                    <strong><i class="fa fa-calendar"></i> 17th Feb 2016</strong>
                                    </p>
                                </div>
                                <div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                                    <div class="overlay-effect effects clearfix">
                                        <div class="img"><img src="{{asset('images/decibel.jpg')}}" alt="Portfolio Item" />
                                           
                                        </div>
                                    </div>
                                    <h1 style="color:#333">Decibel</h1>
                                    <p>Words make you think through. Music makes you feel a feeling. A song makes you feel the thought. A band makes you live the feeling. Join this battle of bands, show your  college pride and be the .Next person to raise the DECIBEL.</p>
                                    <h2>Rules</h2>
                                    <ul class="exc">
                                        <li>No of participants : 9 ; NPA - 1</li>
                                        <li>Time: 10 mins setup, 10 mins performance</li>
                                        <li>Hindi and English Songs both permitted: at least 2 Hindi songs required</li>
                                        <li>Original Compositions allowed and additional points for it</li>
                                        <li>Overdrive and distortion are allowed.</li>
                                        <li>Pre-recorded music is not allowed.</li>
                                        <li>Electronic music allowed only for effects. NOT as substitution for a musical instrument. </li>
                                        <li>Negative markings will be enforced if : 
                                        <br>     -Participants exceed time limit.</li>
                                        
                                    </ul>
                                    <p>
                                    <strong><i class="fa fa-calendar"></i> 18th Feb 2016</strong>
                                    </p>
                                </div>
                                </div> <!-- row ends -->
                                <br>

                                <div class="row">
                                <div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                                    <div class="overlay-effect effects clearfix">
                                        <div class="img"><img src="{{asset('images/apurvai.jpg')}}" alt="Portfolio Item" />
                                           
                                        </div>
                                    </div>
                                    <h1 style="color:#333">Apurvai</h1>
                                    <p>A Marathi dance and drama and the biggest main stage event of Aavishkaar, is set to step into its 16th year of glory. Dr. Amol Kolhe, the esteemed Marathi actor, an alumnus is the patron who has great contribution each year. It is a theatrical extravaganza which has been graced by the presence of influential and prodigious personalities from field of theatre and film industry. So grab your seat at the earliest, you are sure to be captivated!</p>
                                    <p>
                                    <strong><i class="fa fa-calendar"></i> 20th Feb 2016</strong>
                                    </p>
                                </div>
                               
                                </div> <!-- row ends -->
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