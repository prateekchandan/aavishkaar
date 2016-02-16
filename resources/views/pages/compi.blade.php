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
                    <h1 class="arrow">FINE ARTS</h1>
                    <hr />
                    <p>Unleash the Artist in You !!!</p>
                    <p>Event Head – Maitry Chheda – 9820097359<br>
                    Aantriksha Gupta – 9004212266<br>
                    Shruti Appaswamy – 9819327633</p>
                </div>
            </div>
            <div class="row">
                <div class="speakers-wrap">
                    <div id="portfolioSlider">
                        <ul class="slides">
                            <li>
                                <div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                                   
                                    <h1 style="color:#333">Graffiti</h1>
                                    <p>Always had the affinity towards walls &amp; spray cans?! Here's your chance to create something crazy yet meaningful.</p><br>
                                    <ul class="exc">
                                        <li>Theme - Hollywood</li>
                                        <li>Entry fee - Rs 400 per team</li>
                                        <li>Participants - Team of 4</li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                                   
                                    <h1 style="color:#333">Mehendi &amp; Rangoli</h1>
                                    <p>It's time to let your creativity flow through henna &amp; some colours... The desi style!!</p><br>
                                    <ul class="exc">
                                        <li>1 hour will be allotted for the above competitions &amp; a chance to win prizes.</li>
                                        <li>Entry fee - Mehendi - Rs 20<br>
                                        Rangoli - Rs 30</li>
                                        <li>Participants - Individual</li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                                   
                                    <h1 style="color:#333">Heavenly Splash</h1>
                                    <p>And yet again you can use creative stuff to bring your thoughts onto the paper. Use anything except brushes to paint &amp; create any idea that pops up in your mind.</p><br>
                                    <ul class="exc">
                                        <li>Entry fee - Rs 30</li>
                                        <li>Participants - Individual</li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                                   
                                    <h1 style="color:#333">Body Art</h1>
                                    <p>A better version of just face painting. Get amazing ideas to paint on either the arms or legs or face.... Not only the face! This is an opportunity for those who missed the fun last time. Participate in huge numbers &amp; win prizes too!</p><br>
                                    <ul class="exc">
                                        <li>Entry fee - Rs 30</li>
                                        <li>Participants - Individual or 2 persons</li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                                   
                                    <h1 style="color:#333">T-Shirt Painting</h1>
                                    <p>Introducing the event of painting your own t-shirt along with prizes! Paint using anything, be different &amp; don't forget being amazing!</p><br>
                                    <ul class="exc">
                                        <li>Entry fee - Rs 100</li>
                                        <li>Participants - Individual</li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                                   
                                    <h1 style="color:#333">Poster Making</h1>
                                    <p>Carrie Bradshaw or Mahendra Watsa?<br>Morning Coffee or Mumbai Mirror?</p>
                                    <p>What would 'the girls' of Sex And The Citybe doing in your city Mumbai?</p>
                                    <p>Make A Poster... Titled SATC- Mumbai Bring out the fashion,  the emotions, the thoughts and most importantly the WOMEN of Mumbai as you see them. ! Not necessarily related to the series SATC!</p><br>
                                   
                                </div>
                            </li>
                            <li>
                                <div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                                   
                                    <h1 style="color:#333">Make a Meme</h1>
                                    <p>Fine Arts Committee of Aavishkaar 2016 presents 'Make-a-meme’<br>Ever thought you can pull down 9gag, dekh bhai &amp; billu with your humor?<br>Here's your chance to create memes yourself! Click pictures around the college campus or hospital and convert them into memes!</p><br>
                                    <ul class="exc">
                                        <li>Multiple entries from the same person allowed.</li>
                                    </ul>
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