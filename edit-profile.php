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
    <div class=" contact-us-div">

          <h2>Edit your Profile</h2>
          <h4>Keep your followers updated!</h4>
          <form class="" action="editprofileaction.php" method="post" enctype="multipart/form-data">
            <div class="styled-input wide">
              <input type="text" value="<?php echo $_SESSION ['username'];?>" name="username" readonly/>
              <label>Name</label>
            </div>

            <div class="styled-input">
              <input type="text" name="email" value="<?php echo $_SESSION ['email'];?>" required readonly/>
              <label>Email</label>
            </div>

            <div class="styled-input">
              <input type="text" name="phone" value="<?php echo $_SESSION ['phone'];?>" required/>
              <label>Phone</label>
            </div>
            <div class="styled-input">
              <input type="date" name="dob" name="<?php echo $_SESSION ['dob'];?>" required/>
              <label>Date of Birth</label>
            </div>



            <div class="styled-input">
              <input type="text" name="expertise" value="<?php echo $_SESSION ['expertise'];?>" required />
              <label>Expertise</label>
            </div>

            <div class="styled-input">
              <input type="text" name="city" value="<?php echo $_SESSION ['city'];?>" required />
              <label>City, Country</label>
            </div>

            <div class="styled-input wide">
              <textarea maxlength="200" name="descriptions" required></textarea>
              <label>Description. . .</label>
            </div>


            <h4>Social Media Links</h4>
            <div class="styled-input">
              <input type="text" name="fb" value="<?php echo $_SESSION ['fb'];?>" required/>
              <label>Facebook</label>
            </div>
            <div class="styled-input">
              <input type="text" name="ins" value="<?php echo $_SESSION ['ins'];?>"  required/>
              <label>Instagram</label>
            </div>
            <div class="styled-input">
              <input type="text" name="tw" value="<?php echo $_SESSION ['tw'];?>"  required/>
              <label>Twitter</label>
            </div>
            <div class="styled-input file-input">
              <input type="file" name="image" required/>
              <label>Image</label>
            </div>


            <button class="btn-lrg submit-btn" type="submit" name="button">Update</button>
          </form>


    </div>
    <?php include 'footer.php';?>
  </body>
</html>
