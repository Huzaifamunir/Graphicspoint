

<?php

  include 'db-connect.php';

if (isset($_SESSION['id'])){
  if ($_SESSION['id']== $_GET ['id']){
    // echo "session";
    $editBtnSet = true;
    $id = $_SESSION ['id'];
  }
}else{
  // echo "no session";
  $editBtnSet = false;
  $id = $_GET ['id'];
}

$query="SELECT * FROM signup  WHERE id= '$id'";
$result = mysqli_query($con,$query);
$Result_Count = mysqli_num_rows($result);

$row = mysqli_fetch_assoc($result);

if ($Result_Count>0){

  $pic=$row['pic'];
  $username=$row['username'];
  $email=$row['email'];
  $phone=$row['phone'];
  $dob=$row['dob'];
  $expertise=$row['expertise'];
  $city=$row['city'];
  $descriptions=$row['descriptions'];
  $fb=$row['fb'];
  $ins=$row['ins'];
  $tw=$row['tw'];
}else{
  echo "no";
}
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
  <body>
  <?php include 'nav.php';?>



<section class="profile-section">
        <div class="profile-div">
          <?php
            if ($editBtnSet==true){
              ?>
            <a href="edit-profile.php" class="edit-prof-btn"><i class="fas fa-user-edit"></i></a>
              <?php
            }
          ?>

          <div class="img-side">
            <div class="img">
              <img src="assets/images/<?php echo $pic;?>" alt="">
            </div>
          </div>
          <div class="info-side">
            <div class="info">
              <h1>HELLO EVERYBODY, I AM</h1>
              <h2><?php echo $username;?></h2>
              <h3><?php echo $expertise;?></h3>
              <p><?php echo $descriptions;?>

              </p>
              <ul class="bio">
                <li><i class="far fa-calendar-alt"></i> <?php echo $dob;?></li>
                <li><i class="fas fa-phone-alt"></i> <?php echo $phone;?></li>
                <li><i class="fas fa-envelope"></i> <a href="mailto:abc@xyz.com"><?php echo $email;?></a></li>
                <li><i class="fas fa-home"></i> <?php echo $city;?></li>
                <li><i class="fas fa-palette"></i> <?php  echo $Result_Count; ?></li>
              </ul>

              <ul class="social">
                <li><a href="<?php echo $fb;?>"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="<?php echo $ins;?>"><i class="fab fa-instagram"></i></a></li>
                <li><a href="<?php echo $tw;?>"><i class="fab fa-twitter"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>


      <?php include 'footer.php';?>
  </body>
</html>
