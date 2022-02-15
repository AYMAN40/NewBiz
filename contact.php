<?php
// (A) PROCESS STATUS
$error = "";

// (B) VERIFY CAPTCHA
$secret = "6Le7fHIeAAAAAKmyfTGzyoHgA3GcQXUVnvl_dVX6"; // CHANGE THIS TO YOUR OWN!
$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=".$_POST["g-recaptcha-response"];
$verify = json_decode(file_get_contents($url));
if (!$verify->success) { $error = "Invalid captcha, Make sure you're a Human !";
	echo '<script>alert("Invalid Captcha, Please Check the Captcha Box !")</script>'; 
}

// (C) SEND MAIL
if ($error=="") {
	echo '<script>alert("Thank You! We will Contact you Shortly !")</script>';
  $field_name = $_POST['name'];
  $field_email = $_POST['email'];
  $mailTo = "Ayman_sbaity@hotmail.com"; // ! CHANGE THIS TO YOUR OWN !
  $mailSubject = 'Message from a site visitor '.$field_name;
  $mailBody = "";
  $headers = 'From: '.$field_email."\r\n";
    
  foreach ($_POST as $k=>$v) {
    if ($k!="g-recaptcha-response") { $mailBody .= "$k: $v\r\n"; }
  }
  if (!@mail($mailTo, $mailSubject, $mailBody,$headers)) { $error = "Failed to send mail"; }
  
}
