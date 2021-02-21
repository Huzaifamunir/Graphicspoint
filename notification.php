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
    <div class="notification-page">
      <?php
          if($_GET['msg']=='signup'){

      ?>
      <h2>Signup Successfull</h2>
      <h4>Please Login By <a href="signup-login.php">Clicking Here</a></h4>
    <?php
    }elseif($_GET['msg']=='contact'){

      ?>
      <h2>Thank you for contacting us</h2>
      <h4>We will contact you soon.....</h4>
      <META HTTP-EQUIV="Refresh" CONTENT="1; URL=contact-us.php">
      <?php

    }elseif($_GET['msg']=='productdelete'){

      ?>

      <h4>Deleted Successfully.....</h4>
      <META HTTP-EQUIV="Refresh" CONTENT="1; URL=products-list.php">
      <?php

    }elseif($_GET['msg']=='selfproductdelete'){

      ?>
      <h4>Deleted Successfully.....</h4>
      <META HTTP-EQUIV="Refresh" CONTENT="1; URL=products-history.php">
      <?php

    }elseif($_GET['msg']=='userdelete'){

      ?>

      <h4>Deleted Successfully.....</h4>
      <META HTTP-EQUIV="Refresh" CONTENT="1; URL=profiles-list.php">
      <?php

    }elseif($_GET['msg']=='msgdelete'){

      ?>

      <h4>Deleted Successfully.....</h4>
      <META HTTP-EQUIV="Refresh" CONTENT="1; URL=messages-list.php">
      <?php

    }elseif($_GET['msg']=='userprdelete'){

      ?>

      <h4>Deleted Successfully.....</h4>
      <META HTTP-EQUIV="Refresh" CONTENT="1; URL=products-history.php">
      <?php

    }elseif($_GET['msg']=='emailexists'){
          ?>
          <h4>Email already exists...</h4>
          <META HTTP-EQUIV="Refresh" CONTENT="1; URL=signup-login.php">
          <?php

    }elseif($_GET['msg']=='ActivationEmailSent'){
          ?>
          <h4>Please activate your account by visiting your email...</h4>
          <META HTTP-EQUIV="Refresh" CONTENT="1; URL=index.php">
          <?php

    }elseif($_GET['msg']=='ActivationEmailNotSent'){
          ?>
          <h4>Please activate your account by visiting your email...</h4>
          <META HTTP-EQUIV="Refresh" CONTENT="1; URL=index.php">
          <?php

    }elseif($_GET['msg']=='productupload'){
          ?>
          <h4>Product uploaded Successfully...</h4>
          <META HTTP-EQUIV="Refresh" CONTENT="1; URL=products-history.php">
          <?php

    }elseif($_GET['msg']=='productnotupload'){
          ?>
          <h4>Something bad happened...</h4>
          <META HTTP-EQUIV="Refresh" CONTENT="1; URL=products-history.php">
          <?php

    }elseif($_GET['msg']=='AccountActivationSuccessful'){
          ?>
          <h4>Account Activation Successfull...</h4>
          <META HTTP-EQUIV="Refresh" CONTENT="1; URL=products-history.php">
          <?php

    }elseif($_GET['msg']=='AccountActivationUnSuccessful'){
          ?>
          <h4>Something bad happened Please signup again...</h4>
          <META HTTP-EQUIV="Refresh" CONTENT="1; URL=products-history.php">
          <?php

    }?>
<!--
      <h2>Signup Successfull Successfull</h2>
      <h4>Let the world see your work!</h4> -->
    </div>
  </body>
</html>
