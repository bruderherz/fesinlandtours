<!doctype html>
<html lang="en" class="no-js">

<!-- Mirrored from premiumlayers.com/demos/arkitekt/contact.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 11 Jul 2015 17:34:35 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<title>Arkitekt</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/fullwidth.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/revslider.css" media="screen">
  <link rel="stylesheet" href="css/dr-framework.css" type="text/css" media="screen">

  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,400italic,300italic,100italic,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
	
</head>
<body>

<div id="container">
  <header>
       
      
  </header>
  <!--end header-->
  <div class="head-banner clearfix"></div>
  <!-- End Contact Content -->

  <footer>

    <div class="inner-footer">
      <div class="wrapper clearfix">
        <div class="dark">
          <div class="column3 message-form">
            <img src="images/logo2.png" alt="">
            <p>This is Photoshop's version  of Lorem Ipsum. 
            Proin gravida nibh vel velit auctor </p>
            <div class="send-message">
              <form id="contact-form">
                <h4>Send us a Message</h4>
                <div class="text-fields">
                  <div class="float-input">
                    <input name="name" id="name" type="text" placeholder="Name">
                  </div>
                  <div class="float-input">
                    <input name="mail" id="mail" type="text" placeholder="Email">
                  </div>
                </div>

                <div class="submit-area">
                  <textarea name="comment" id="comment" placeholder="Message"></textarea>
                 
                  <div id="msg" class="message"></div>  
                </div>
              </div><div style=""><input type="submit" id="submit_contact" class="main-button" value="Send"> </form>
            </div>
          </div>
        </div>
        <!-- End Dark -->
      </div>
    </div>
    <!-- End Inner Footer -->
    <!-- End Last Div -->

  </footer>
  <!--end footer-->

</div>
<!-- End Id Container -->

  <div class="preloader"></div>


  <!-- include jQuery -->
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/accordion.js"></script>
  <script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
  <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
  <script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
  <script type="text/javascript" src="js/jquery.superfish.js"></script>
  <script src="js/jquery.bxslider.js"></script>
  <script src="js/twitter.js"></script>

      <!-- include jQuery + carouFredSel plugin -->
    <script type="text/javascript" language="javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>

    <!-- optionally include helper plugins -->
    <script type="text/javascript" language="javascript" src="js/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" language="javascript" src="js/jquery.touchSwipe.min.js"></script>

      <!-- Start Google Maps code -->
    <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
  <script src="js/mapmarker.jquery.js" type="text/javascript"></script>
  <!-- END Google Maps code -->
  <script>
    /* ---------------------------------------------------------------------- */
  /*  Contact Map
  /* ---------------------------------------------------------------------- */
    $(document).ready(function() {
      var myMarkers = {
        "markers": [
          {
            "latitude": "45.109414",    // latitude
            "longitude":"7.641252",   // longitude
            "icon": "images/icon-pin.png" // Pin icon
          }
          /* 

          Add as plenty as you want:
          , {
            "latitude": "40.712785",
            "longitude":"-73.962708",
            "icon": "images/map_pin_1.png"
          }
          
          */
        ]
      };
      $("#google_map").mapmarker({
        zoom : 16,              // Zoom
        center: "45.109414,7.641252",   // Center of map
        type: "ROADMAP",          // Map Type
        controls: "HORIZONTAL_BAR",     // Controls style
        dragging:1,             // Allow dragging?
        mousewheel:0,           // Allow zooming with mousewheel
        markers: myMarkers,
        styling: 0,             // Bool - do you want to style the map?
        featureType:"all",
        visibility: "on",
        elementType:"geometry",
        hue:"#00AAFF",
        saturation:-100,
        lightness:0,
        gamma:1,
        navigation_control:0
        /*
        To play with the map colors and styles you can try this tool right here http://gmaps-samples-v3.googlecode.com/svn/trunk/styledmaps/wizard/index.html
        */
      });
      
    });</script>


  <script type="text/javascript" src="js/script.js"></script>



</body>

<!-- Mirrored from premiumlayers.com/demos/arkitekt/contact.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 11 Jul 2015 17:34:36 GMT -->
</html>