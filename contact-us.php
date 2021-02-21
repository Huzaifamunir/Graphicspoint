<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">


  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<title></title>
</head>
<body>

<?php include 'nav.php';?>
<div class=" contact-us-div">

			<h2>Contact Us</h2>
			<h4>We'd love to hear from you!</h4>
			<form class="" action="contactusaction.php" method="post">
				<div class="styled-input wide">
					<input type="text" name="txtName" required />
					<label>Name</label>
				</div>

				<div class="styled-input">
					<input type="text" name="txtEmail" required />
					<label>Enter your email</label>
				</div>

				<div class="styled-input wide">
					<textarea name="txtMessage" required></textarea>
					<label>Message. . .</label>
				</div>
				<button class="btn-lrg submit-btn" name="button">Send Message</button>
			</form>


</div>

<?php include 'footer.php';?>


</body>
</html>
