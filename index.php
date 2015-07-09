<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">

    <!-- jQuery link -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    
    <!-- Animation styling -->
    <link rel="stylesheet" href="css/animate-min.css">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Share+Tech+Mono' rel='stylesheet' type='text/css'>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>ODDIST</title>
    <link rel="shortcut icon" href="images/icon.png">
    <meta name="description" content="ODDIST is an electronic music producer from New York City." />
    <meta name="keywords" content="ODDIST, musician, music, band, artist, dj, dub, bass music, footwork, house, dubstep, new york city, producer, music, brooklyn, nyc">

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Customized styling -->
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <!-- This code will notify users if they are using an out-of-date browser  -->
    <script> 
        var $buoop = {c:2}; 
        function $buo_f(){ 
         var e = document.createElement("script"); 
         e.src = "//browser-update.org/update.js"; 
         document.body.appendChild(e);
        };
        try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
        catch(e){window.attachEvent("onload", $buo_f)}
    </script> 



  </head>

  <body id="index">
<!-- Google Analytics Code -->
<?php include_once("analyticstracking.php") ?>

<!-- ##############BEGIN NAVIGATION################ -->
    
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          
          <div class="container">

            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a id="oddist-text-logo" class="navbar-brand active" href="index.html">ODDIST</a>
            </div>

            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li id="music-icon-id"><a href="#listen" class="navCustom">LISTEN</a></li>
                <!-- <li><a href="#philosophy" class="navCustom">PHILOSOPHY</a></li>
                <li><a href="#support" class="navCustom">SUPPORT</a></li> -->
                <li><a href="#friends" class="navCustom">FRIENDS</a></li>
                <!-- BEGIN DROPDOWN -->
                <li class="dropdown"> 
                  <a href="#" class="dropdown-toggle navCustom" data-toggle="dropdown">LINKS<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                  	<li><a href="http://oddist.bandcamp.com/" target="_blank">MY MUSIC ON BANDCAMP</a></li>
                    <li><a href="https://soundcloud.com/oddist" target="_blank">SOUNDCLOUD</a></li>
                    <li><a href="https://www.facebook.com/ODDISTMUSIC" target="_blank">FACEBOOK</a></li>
                    <li><a href="http://8tracks.com/the-oddfather" target="_blank">8TRACKS</a></li>
                    <li><a href="http://www.last.fm/user/oddist" target="_blank">LAST.FM</a></li>
										<li><a href="http://bandcamp.com/oddist#wishlist" target="_blank">WISHLIST</a></li>
                  </ul>
                </li>
                <!-- END DROPDOWN -->
                <!-- <li><a href="mailto:oddistmusic@gmail.com" class="navCustom">CONTACT</a></li> -->
                <li><a href="#thank-you" class="navCustom">CONTACT</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div> <!-- End container -->
        </div>  <!-- End Nav Bar -->

<!-- ##############END NAVIGATION################ -->






<!-- ############# BEGIN INTRO2 ################# -->

        <div class="container">

          <div class="row">
            <div class="break1"></br></div>
            <div class="col-md-12">
              <div class="home-div animated fadeIn">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                  <center>
                    <h3 class="bio"><img src="images/oddist-signature_black.png" alt="ODDIST signature" title="ODDIST signature" style="width:70px"> is an electronic music producer from </br>New York City</h3>
                  <center>
                </div>
                <div class="col-md-4"></div>
              </div>
            </div> 
          </div> 

          <div class="row">
            <!-- <div class="col-md-2"></div> -->
            <div class="col-md-12">
              <img class="img-responsive" src="images/gif/flowers.gif" alt="flowers animation">        
            </div>
            <!-- <div class="col-md-2"></div> -->
          </div>

          <div class="row">            
            <div class="col-md-12">
              <center>
                <p class="description" id="scrolldowntolisten"><a href="#listen"><span class="glyphicon glyphicon-chevron-down"></span></a></p>
              </center>
            </div>
          </div>

          <div class="clear"></div>

        </div>

<!-- ############# END INTRO2 ################# -->




<!-- ############# BEGIN LISTEN ################# -->
    
    <div class="break" id="listen"></div>

        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="home-div animated fadeIn">
                <div class="col-md-12">
                  <center><p class="description">Listen.</p></center>
                  <iframe id="soundcloud-iframe" width="100%" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/2415232&amp;color=5d478b&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
                </div>

                <div class="col-md-12">
                  <center>
                    <p class="description soundcloud-p" id="scrolluptoindex"><a href="#index"><span class="glyphicon glyphicon-chevron-up"></span></a></p>
                    <p class="description soundcloud-p">&nbsp;&nbsp;</p>
                    <p class="description soundcloud-p" id="scrolldowntophilosophy"><a href="#friends"><span class="glyphicon glyphicon-chevron-down"></span></a></p>
                  </center>
                </div>
              </div>
            </div>
            <div class="clear"></div>
          </div>
        </div>

<!-- ############# END LISTEN ################# -->


<!-- begin image divider  -->
        <!-- <div class="container">
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 filler-div">
              <img src="images/slide1.jpg" class="img-responsive" alt="">             
            </div>
            <div class="col-md-2"></div>
          </div> 
        </div>  -->
<!-- End image divider  -->



<!-- begin image divider  -->
        <!-- <div class="container">
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 filler-div">
              <img src="images/slide6.jpg" class="img-responsive" alt="">             
            </div>
            <div class="col-md-2"></div>
          </div>
        </div> -->
<!-- End image divider  -->


<!-- begin image divider  -->
        <!-- <div class="container">
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 filler-div">             
              <img src="images/slide7.jpg" class="img-responsive" alt="">             
            </div>
            <div class="col-md-2"></div>
          </div>
        </div>  -->
<!-- End image divider  -->

<!-- begin image divider  -->
        <!-- <div class="container">
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 filler-div">             
              <img src="images/slide4.jpg" class="img-responsive" alt="">             
            </div>
            <div class="col-md-2"></div>
          </div>
        </div>  -->
<!-- End image divider  -->

<!-- begin image divider  -->
        <!-- <div class="container">
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 filler-div">             
              <img src="images/slide10.jpg" class="img-responsive" alt="">             
            </div>
            <div class="col-md-2"></div>
          </div> 
        </div> -->
<!-- End image divider  -->

<!-- ############# BEGIN FRIENDS ################# -->
        
        <div class="break" id="friends"></div>
        <div class="container">
          <div class="row">

            <div class="col-md-12">

              <div class="home-div animated fadeIn">
                <center>
                    <p class="description">Friends &amp; Inspiration:</p>
                    <p class="p-liststyle"><a target="_blank" href="http://www.dublab.com">dublab</a></p>
                    <p class="p-liststyle"><a target="_blank" href="http://www.paxicorecords.com">Paxico Records</a></p>
                    <p class="p-liststyle"><a target="_blank" href="http://rudypalos.bandcamp.com">Rudy Palos</a></p>
                    <p class="p-liststyle"><a target="_blank" href="http://www.hyperdub.net">Hyperdub</a></p>
                    <p class="p-liststyle"><a target="_blank" href="http://kindercorerecords.blogspot.com">Kindercore Records</a></p>
                    <p class="p-liststyle"><a target="_blank" href="http://www.desirerecords.com">Desire Records</a></p>
                    <p class="p-liststyle"><a target="_blank" href="https://www.dustygroove.com">Dusty Groove Records</a></p>
                    <p class="p-liststyle"><a target="_blank" href="http://minimalwave.com">Minimal Wave</a></p>
                    <p class="p-liststyle"><a target="_blank" href="http://www.dischord.com">Dischord Records</a></p>
                    <p class="p-liststyle"><a target="_blank" href="http://www.souljazzrecords.co.uk/">Soul Jazz Records</a></p>

                    <p class="description soundcloud-p" id="scrollupto"><a href="#listen"><span class="glyphicon glyphicon-chevron-up"></span></a></p>
                    <p class="description soundcloud-p">&nbsp;&nbsp;</p>
                    <p class="description soundcloud-p" id="scrolldowntothankyou"><a href="#thank-you"><span class="glyphicon glyphicon-chevron-down"></span></a></p>
                </center>
              </div>
            </div>
          </div>  
        </div>

<!-- ############# END FRIENDS ################# -->







<!-- ############## BEGIN THANK YOU ################ -->
        <div class="break" id="thank-you"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="home-div animated fadeIn">
                <center>
                  <!-- <p class="description">Thank you for visiting.</p> -->
                  <h2>Thank you for visiting.</h2>
                  <h4 class="jumbotron-text">For live performance or DJ booking, please reach out to me any time.</h4>
                  <br>
                  <!-- begin contact -->

                    <div class="row featurette">

                      <section class="col-md-3"></section>
                      <section class="col-md-6">
                        <a href="mailto:booking@oddist.net"><h2>booking@oddist.net</h2></a>
                        <!-- Original Contact Form -->
                        <!-- <form name="contactform" method="post" action="_send_form_email.php">
                              <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input type="text" name="full_name" class="form-control" placeholder="Please enter your full name">
                              </div> 
                            
                              </br>
                                             
                              <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                <input type="text" name="email" class="form-control" placeholder="you@yourdomain.com">
                              </div>
                            
                              </br>
                          
                              <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
                                <input type="text" name="telephone" class="form-control" placeholder="Please enter your phone number">
                              </div>
                            
                              </br>
                                              
                              <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
                                <textarea class="input-xxlarge col-md-6 form-control" name="comments" placeholder="Compose your message here."></textarea>
                              </div>
                            
                              </br>

                             <input type="submit" value="Send" id="submit-button" class="btn btn-md btn-success"><a href="_send_form_email.php"></a>
                           </br>                
                        </form> -->
                      </section>

                      <section class="col-md-3"></section>

                    </div>


                  <!-- end contact -->


                  <br>
                  <p class="description" id="scrolluptoindex"><a href="#index"><span class="glyphicon glyphicon-chevron-up"></span></a></p>
                  <p class="description"></p>
                </center>
              </div>

            </div>
          </div>  

          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 filler-div-bottom"></div>
            <div class="col-md-2"></div>
          </div> 
        </div>

<!-- ############# END THANK YOU ################# -->





<!-- ############# BEGIN FOOTER ############# -->
          <footer>
            <div>
              <p>&copy; 2015 <img class="img-footer" src="images/oddist-signature_white.png" alt="ODDIST signature" title="ODDIST signature" /></p>
            </div>
          </footer>
<!-- ############# end FOOTER ############# -->
    


    </div> <!-- End main container "marketing" div -->


    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <!-- ##########################The following script provides the SCROLL functionality ################################## -->
    <script>
    $('a[href^="#"]').on('click', function(event) {

        var target = $( $(this).attr('href') );

        if( target.length ) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 1500);
        }

    });
    </script>

  </body>

</html>