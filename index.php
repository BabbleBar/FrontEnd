<?php
include_once("./inc/helper.php");
header('Access-Control-Allow-Origin: *');

$res = fetch_data();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Babble Bar - The ambient sound heatmap for your favorite places</title>
  <link href='https://fonts.googleapis.com/css?family=Bubblegum+Sans' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="icon" type="image/png" href="./logo_web.png" />
</head>
<body>
  <div class="navbar-fixed">
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <!-- <a id="logo-container" href="#" class="brand-logo">Logo</a> -->
      <ul class="right hide-on-med-and-down">
        <li><a href="#home">Home</a></li>
        <li><a href="#getstarted">Get Started</a></li>
        <li><a href="#map">The Map</a></li>
        <li><a href="#device">The Device</a></li>
        <li><a href="#about">About</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#home">Home</a></li>
        <li><a href="#getstarted">Get Started</a></li>
        <li><a href="#map">The Map</a></li>
        <li><a href="#device">The Device</a></li>
        <li><a href="#about">About</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  </div>


<div style="width: 100%" class="white" id="home">
<div class="container">
    <div class="section">
      <div class="row">	
        <div class="col s12 m12">
	<img src="./logo_blue_leaf.png" style="width: 100%; max-width: 500px; margin: 10px auto; display: block"></img><br>
        <!-- <h1 class="header center white-text">Babble Bar</h1> -->
	</div>
      </div>
    </div>
</div>
</div>
  <div id="index-banner" class="parallax-container" style="min-height: 300px">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <div class="row center">
          <h2 class="header col s12 light">The ultimate guide to find your bar by ambient sound level.</h2>
        </div>
        <div class="row center">
          <a href="#map" id="download-button" class="btn-large waves-effect waves-light blue accent-4">Get Started</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="bg0.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section" id="getstarted">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center blue-text accent-4"><img src="./lvl_2.png"></img></h2>
            <h3 class="center">The Party Place</h3>

            <p class="light">Enjoy good music with your friends? Follow the above symbol on the map and have a good time partying!
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center blue-text accent-4"><img src="./lvl_1.png"></img></h2>
            <h3 class="center">Quiet but not too quiet?</h3>

            <p class="light">Do you enjoy good music but also like to have a chat with your friends without raising your voice too much? The medium symbol indicates the right place for you!</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center blue-text accent-4"><img src="./lvl_0.png"></img></h2>
            <h3 class="center">Loving it more quiet?</h3>

            <p class="light">If you like to enjoy more quiet ambiente and have some conversations with your friends then the above symbols guides you to the best place for you in town.</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot no-pad-top">
      <div class="container">
        <div class="row center">
          <h2 class="header col s12 light">Let's find you the best place!</h2>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="bg1.jpg" alt="Unsplashed background img 2"></div>
  </div>

<div style="width: 100%: text-align: center">
<div class="center">
<h3><i class="medium material-icons blue-text accent-5">map</i>The Map</h3>
</div>

<div id="map" style="width: 100%; padding: 0px; height: 600px;"></div>

</div>


<div class="container">
    <div class="section" id="device">
      <!--   Icon Section   -->
      <div class="row center">
<h3><i class="medium material-icons blue-text accent-5">speaker_phone</i>The Device</h3>
      </div>

      <div class="row">
	<div class="col s12 m4" >
	<img style="margin: 0px auto; width: 100%;" src="./mock.png"></img>
	</div>
	<div class="col s12 m8">
	<p>
	 The <span class="blue-text accent-4">Babble Bar Pad</span> is a device which records the ambient sound level in the bar and sends the calculated and processed data periodically back to the internet using LoRa low power wireless technology.<br><br>Thanks to the computing technology of the low power micro controller enabling the device, advanced audio calculation and prediction can be performed.<br><br> This allows the users to anticipate how loud or quiet your bar is going to be using a forecast.<br><br>The <span class="blue-text accent-4">Babble Bar Pad</span> is a seamless device using only minimal power allowing it to be extremely tiny and lasting over 1 year on one single battery charge.<br><br>
	</p>
	</div>
      </div>

   </div>
 </div>

  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h2 class="header col s12 light">Swisscom Technology Enabled</h2>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="bg2.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <footer class="page-footer blue accent-4" id="about">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h3 class="white-text">About</h3>
          <p class="grey-text text-lighten-4">We are a group of enterpreneurs and hardware- / software engineers looking to help people find the best bar for their night.<br><br>With our experience in architecture, design and development we are creating hardware and services for making this idea a success.<br><br>Follow us on social media and get in touch with us if you are interested to participate as local restaurant, pub, bar or club.</p>


        </div>
        <div class="col l3 s12">
          <h3 class="white-text">Links</h3>
          <ul>
            <li><a class="white-text" href="http://iot-hackathon.swisscom.com/">Swisscom IoT Hackathon</a></li>
            <li><a class="white-text" href="https://www.swisscom.ch/en/business/enterprise/offer/cloud-data-center-services/paas/application-cloud.html">Powered by Swisscom Application Cloud</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h3 class="white-text">Connect</h3>
          <ul>
            <li><a class="white-text underline" href="#!">Facebook</a></li>
            <li><a class="white-text" href="#!">Google +</a></li>
            <li><a class="white-text" href="#!">Twitter</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      A project for the Swisscom IoT Hackathon Zürich November 2015
      </div>
    </div>
  </footer>


	<!--  Scripts-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
	<script type="text/javascript">
		var spl = <?php echo json_encode($res) ?>;
	</script>
  <script src="js/init.js"></script>
  </body>
</html>

