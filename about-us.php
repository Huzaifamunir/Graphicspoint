<!DOCTYPE html>
<html>
<head>
  <!-- <link rel="stylesheet" type="text/css" href="contactusstyle.css"> -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <title></title>

</head>
<body>
<?php include 'nav.php';?>


  <div class="about-us-section">
    <h1>About Us Page</h1>
    <p>Some text about who we are and what we do.</p>
    <p>Resize the browser window to see that this page is responsive by the way.</p>
    <h2>Our Team</h2>

    <div class="about-us-list">
      <div class="card">
        <img src="assets/images/aaa.jpg" alt="Jane" style="width:100%">
        <div class="container">
          <h2>Aaras Ibrar</h2>
          <h3>CEO & Founder</h3>
          <p>Some text that describes me lorem ipsum ipsum lorem.</p>

          <a href="mailto:aarasibrar@gmail.com">aarasibrar@gmail.com</a>
          <p><button class="button">Contact</button></p><br>
        </div>
      </div>

      <div class="card">
        <img src="assets/images/bbb.jpg" alt="Mike" style="width:100%">
        <div class="container">
          <h2>Zeshan Raza</h2>
          <h3> CEO & Founder</h3>
          <p>Some text that describes me lorem ipsum ipsum lorem.</p>
          <a href="mailto:zeshanraza@gmail.com">zeshanraza@gmail.com</a>
          <p><button class="button">Contact</button></p><br>
        </div>
      </div>
    </div>
  </div>


  <?php include 'footer.php';?>

</body>
</html>
