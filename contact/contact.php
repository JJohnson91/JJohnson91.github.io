<!DOCTYPE html>
<html>
<head>
	<meta name="viewport"
		content="width=device-width" content="intitial-scale=1">
	<meta charset="UTF-8">
	<meta name="description"
		content="Get in touch to arrange a lesson, find out more information or to send us a message">
	<meta http-equiv="author"
		content="Joshua Johnson">
	<title>OJ Tuition | Contact</title>
	<link rel="stylesheet" type="text/css" href="../css/Main.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="shortcut icon" type="image/png" href="../img/favicon/favicon.png"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://use.fontawesome.com/810007af17.js"></script>
	<script type="text/javascript" src="../js/cform.js"></script>
	<style>
      #map {
        height: 200px;
        width: 100%;
       }
    </style>
</head>
  <body>
    <header>
      <nav>
        <a href="../Index.html" class="logo"><img src="../img/logo/ojowl8.png" alt=""></a>
				<input type="checkbox" id="hmenu">
				<label class="hmenu_label" for="hmenu">
					<span class="hamburger"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></span>
					<span class="cross"><i class="fa fa-times fa-2x" aria-hidden="true"></i></span>
				</label>
        <ul>
          <li><a href="../about/about.html" class="menu">About</a></li>
          <li><a href="../lesson/lesson.html" class="menu">Your Lesson</a></li>
          <li><a href="../fees/fees.html" class="menu">Fees</a></li>
          <li><a href="contact.html" class="menu">Contact</a></li>
        </ul>
      </nav>
      <div class="head_img_sect head_img_c shad">
				<div class="head_img_sect2">
				</div>
				<div class="head_img_sect_back">
				</div>
				<p>If you are looking to enquire about our services, need more details on our teaching method, or would just like to get in touch, we would love to hear from you. You can use either the contact form, or the contact details below and someone will be in touch within 24 hours</p>
      </div>
    </header>
    <?php

    if(isset ($_POST["email"])){

      //Here is the email to info
      $email_to = "Joshjohnson91@hotmail.co.uk";
      $email_subject = "This is from your webstie contact form";
      $email_from = "OJ Tuition";

      //Error code?>
    <?php  function died($error){ ?>
        <div class='c_c_wrap'>
          <div class="form_fail_wrap">
                <div class='form_fail shad'>
      <?php  echo "<p class='error_intro'>We are sorry, but there were error(s) found with the form you submitted</p>
										<p class='error_intro'>These errors appear below:</p><br><br>";
            echo $error."<br><br>";
            echo "<p class='error_intro'>Please go back and fix these errors.</p>";
        ?>
      </div>
      </div>
                </div>
        <footer>
          <div class='social'>
            <a href='#'><i class='fa fa-facebook-square fa-2x' aria-hidden='true'></i></a>
            <a href='#'><i class='fa fa-twitter-square fa-2x' aria-hidden='true'></i></a>
            <a href='#'><i class='fa fa-linkedin-square fa-2x' aria-hidden='true'></i></a>
          </div>
          <p>&copy; O.J. Tuition, all rights reserved</p>
        </footer>
        </body>
      </html>
        <?php die();
      }

      //validation
      if(!isset($_POST["name"]) ||
      !isset($_POST["email"]) ||
      !isset($_POST["phone"]) ||
      !isset($_POST["message"])){
        died("We are sorry, but you didnt pass validation");
      }

      $name = $_POST["name"];
      $email = $_POST["email"];
      $phone = $_POST["phone"];
      $message = $_POST["message"];

      $error_message = "";
      $email_exp = "/^[A-Za-z0-9._%-+]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/";
      if(!preg_match($email_exp, $email)){
        $error_message .= "<p class='error_msg'>The email address you entered does not appear to be valid</p><br>";
      }

      $string_exp = "/^[A-Za-z.'-]+$/";
      if(!preg_match($string_exp, $name)){
        $error_message .= "<p class='error_msg'>The name you entered does not appear to be valid</p><br>";
      }

      $phone_exp = "/^\(?\+?([0-9]{1,4})\)?[-\. ]?(\d{3})[-\. ]?([0-9]{7})$/";
      if(!preg_match($phone_exp, $phone)){
        $error_message .= "<p class='error_msg'>The phone number you entered does not appear to be valid</p><br>";
      }

      if(strlen($message)<2){
        $error_message .= "<p class='error_msg'>The message you entered does not appear to be valid</p><br>";
      }

      if(strlen($error_message)>0){
        died($error_message);
      }
      $email_message = "Form Details below:\n\n";

      function clean_string($string) {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
      }
      $email_message .="Name:" . clean_string($name) . "\n";
      $email_message .="Emmail:" . clean_string($email) . "\n";
      $email_message .="Phone:" . clean_string($phone) . "\n";
      $email_message .="Message:" . clean_string($message) . "\n";

      //Create email headers
      $headers = "From: " .$email_from . "\r\n" . "Reply-To:" . $email. "\r\n" .
      "X-Mailer: PHP/" . phpversion();
      @mail($email_to, $email_subject, $email_message, $headers);
      ?>
  <div class="c_c_wrap">
    <div class="c_c_wrap2">
			<p>You can use either the contact form, or the contact details below and someone will be in touch within 24 hours</p>
    <div class="c_c_1">
      <!-- success message -->
			<form class="cform" action="contact.php" method="post">
				<div class="input_wrap">
					<label for="name" class="input_label"><i class="fa fa-exclamation-circle" aria-hidden="true"></i></label>
        	<input type="text" id="name" class="inputValidation shad" name="name" value="" placeholder="Name...">
				</div>
				<div class="input_wrap">
					<label for="email" class="input_label"><i class="fa fa-exclamation-circle" aria-hidden="true"></i></label>
        	<input type="text" id="email" class="emailValidation shad" name="email" value="" placeholder="Email...">
				</div>
				<div class="input_wrap">
					<label for="phone" class="input_label"><i class="fa fa-exclamation-circle" aria-hidden="true"></i></label>
        	<input type="text" id="phone" class="inputValidation shad" name="phone" value="" placeholder="Contact Number...">
				</div>
				<div class="input_wrap input_success">
					<label for="message" class="input_label"><i class="fa fa-exclamation-circle" aria-hidden="true"></i></label>
        	<textarea name="message" id="message" class="inputValidation shad" placeholder="Type your message here..."></textarea>
				</div>
				<a href="#" class="o_butg"><i class="fa fa-check-circle" aria-hidden="true"></i> Submitted</a>
      </form>
    <?php
    }
    ?>
    </div>
    <div class="c_c_2">
			<p>Alternatively...</p>
			<ul clas="fa-ul">
				<li><i class="fa fa-phone-square fa-2x" aria-hidden="true"></i>  07391736461</li>
				<li><i class="fa fa-envelope fa-2x" aria-hidden="true"></i>  Ojtuition@gmail.com</li>
			</ul>
			<p>Please see the map below to find the areas we cover</p>
			<div class="map_panel">
			<div id="map" class="shad"></div>
		</div>
    <script>
      function initMap() {
        var uluru = {lat: 52.419609, lng: -1.790172};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: uluru
        });
				var circle = new google.maps.Circle({
      strokeColor: '#34333e',
      strokeOpacity: 0.8,
      strokeWeight: 2,
      fillColor: '#34333e',
      fillOpacity: 0.35,
      map: map,
      center: {lat: 52.419609, lng: -1.790172},
      radius: 6500
    });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJi6sJTljQRWcTA4NF_gTn6gMdx9-9vpI&callback=initMap">
    </script>
    </div>
  </div>
  </div>

    <footer>
      <div class="social">
        <a href="#"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
      </div>
      <p>&copy; O.J. Tuition, all rights reserved</p>
    </footer>
    </body>
  </html>
