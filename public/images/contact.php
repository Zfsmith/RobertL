<!DOCTYPE html>

<?php
// Multiple recipients
if(isset($_POST['submit'])){

$to = '' . $_POST['email'] . ', zfsmith08@gmail.com'; // note the comma
$subject = 'Test';
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$client_message = $_POST['message'];
$message = '
<html>
<head>
  <title>Perceptive Investigations</title>
</head>
<body>
  <img src="http://perceptiveinvestigations.com/images/logo.png"></img>
  <p>   Thanks for contacting Perceptive Investigations. I will get back to you as soon as posible.</p>
  <br>
  <p>Here is a copy of the information you sent</p>
  <p>First Name: ' . $first_name . '</p>
  <p>Last Name: ' . $last_name . '</p>
  <p>Email: ' . $email . '</p>
  <p>Phone Number: ' . $phone_number . '</p>
  <p>Message: ' . $client_message . '</p>

</body>
<footer>
<br>
<br>
  <hr>
  <p>Phone Number: 409-550-1954</p>
  <p>Email: robert@perceptiveinvestigations.com</p>
  <p>Address: 2090 Broadway St. Beaumont TX 77701</p>
</footer>
</html>
';
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';
$headers[] = 'To: Zachary <zac2008@aol.com>';
$headers[] = 'From: Perceptive Investigations <zac2008@aol.com>';
// $headers[] = 'Cc: zac2008@aol.com';
// $headers[] = 'Bcc: zac2008@aol.com';
// Mail it
mail($to, $subject, $message, implode("\r\n", $headers));
header('Location: thank_you');
}
?>

<html>
  <head>
    <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perceptive Investigations</title>
    <link rel="icon" href="images/favicon.ico" type="image/ico">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
	  <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700" rel="stylesheet">
    <script src="https://code.jquery.com/jquery.js"></script>
  </head>
  <body>
    <div class="container">
      <nav class="nav-top">
        <div class="label">
          <img class="logo" src="images/logo.png">
        </div>

        <ul class="navigation">
          <li><a href="./index.php">Home</a></li>
          <li><a href="./services.php">Services</a></li>
          <li><a href="./contact.php">Contact</a></li>
        </ul>
      </nav>
      <section class="main">
        <article class="main-content">
          <h1 class="content-header">Contact</h1>
          <hr class="line">
          <form action="" method="post" class="contact-form">
            <label>First Name</label>
            <input class="contact-input" type="text" name="first_name">
            <label>Last Name</label>
            <input class="contact-input" type="text" name="last_name">
            <label>Email</label>
            <input class="contact-input" type="email" name="email">
            <label>Phone Number</label>
            <input class="contact-input" type="text" name="phone_number">
            <label>Message</label>
            <textarea type="text" name="message" cols="30"></textarea>
            <input class="contact-submit" type="submit" name="submit" value="Submit">
          </form>
        </article>
        <article class="aside">
          <ul class="aside-links">
            <a type="button" href="tel:409-550-1954"><li class="call-now">Click to Call</li></a>
            <a type="button" href="./contact.php"><li class="contact-now"><p>Contact Me Now</p></li></a>
          </ul>
        </article>

      </section>
      <div class="footer-container">
        <footer class="footer">
          <ul class="footer-items">
            <li><a href="tel:409-550-1954">409-550-1954</a></li>
            <li><a href="mailto:robert@perceptiveinvestigations.com" target="_top">robert@perceptiveinvestigations.com</a></li>
            <li><a href="https://www.google.com/maps/place/2090+Broadway+St,+Beaumont,+TX+77701/@30.0851157,-94.1187503,17z/data=!3m1!4b1!4m5!3m4!1s0x863ecb2f3c633991:0xc1a4d0210b2db62e!8m2!3d30.0851111!4d-94.1165616" target="_blank">2090 Broadway St. Beaumont TX 77701</a></li>
          </ul>
          <ul class="footer-items">
            <li><a href="./index.php">Home</a></li>
            <li><a href="./services.php">Services</a></li>
            <li><a href="./contact.php">Contact</a></li>
          </ul>
          <p class="footer-items">
            © Copyright 2017 Perceptive Investigations
          </p>
        </footer>
      </div>
    </div>
  </body>
</html>
