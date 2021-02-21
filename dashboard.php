<?php

include 'db-connect.php';

    $query="SELECT * FROM signup";
    $result = mysqli_query($con,$query);
    $profiles_count = mysqli_num_rows($result);


    $query2="SELECT * FROM contactus";
    $result2 = mysqli_query($con,$query2);
    $messages_count = mysqli_num_rows($result2);

    $query3="SELECT * FROM products";
    $result3 = mysqli_query($con,$query3);
    $products_count = mysqli_num_rows($result3);


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>graphicspoint.</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body class="dashboard-page">
  <?php include 'adminnav.php';?>

<?php

if(!$_SESSION['adminemail']){
	header('location:signup-login.php');
	exit();

}

?>
    <section class="dashboard-sec">

      <div class="dashboard-div">

        <div class="menu">
          <ul>
            <li><a href="profiles-list.php">Profiles</a></li>
            <li><a href="products-list.php">Products</a></li>
            <li><a href="messages-list.php">Messages</a></li>
            <hr>
            <li><a href="logout.php">SignOut</a></li>
          </ul>
        </div>
        <div class="detail">
          <h1>Dashboard <span>Summary of your App</span></h1>
          <div class="stats">
            <div class="">
              <a href="profiles-list.php">
                <i class="fas fa-users"></i>
                <h1><?php  echo $profiles_count; ?></h1>
                <p>users</p>
              </a>

            </div>
            <div class="">
              <a href="messages-list.php">
                <i class="fas fa-envelope"></i>
                <h1><?php  echo $messages_count; ?></h1>
                <p>contacts</p>
              </a>

            </div>
            <div class="">
              <a href="products-list.php">
                <i class="fas fa-palette"></i>
                <h1><?php  echo $products_count; ?></h1>
                <p>products</p>
              </a>

            </div>
          </div>
        </div>
      </div>
    </section>

    <script type="text/javascript" src="assets/js/JavaScript.js">

    </script>
  </body>
</html>
