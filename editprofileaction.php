<?php


 include 'db-connect.php';

if(isset($_POST['button'])){


$name = $_POST['username'];

$email = $_POST['email'];
$dob = $_POST['dob'];
$expertise = $_POST['expertise'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$descriptions = $_POST['descriptions'];
$fb = $_POST['fb'];
$ins = $_POST['ins'];
$tw = $_POST['tw'];

$imgname= time()."_". $_FILES['image']['name'];

		$folder = "assets/images/".$imgname;


        if(move_uploaded_file($_FILES ['image']['tmp_name'],$folder)){


$updatesql = "UPDATE `signup` SET `username`='$name',`email`='$email',`dob`='$dob',`expertise`='$expertise',`phone`='$phone',`city`='$city',`descriptions`='$descriptions',`fb`='$fb',`ins`='$ins',`tw`='$tw',`pic`='$imgname' WHERE `email`='$email'";
// echo $updatesql;
// exit();

if(mysqli_query($con,$updatesql)){
//   echo "succss";
    ?>
<META HTTP-EQUIV="Refresh" CONTENT="1; URL=http://localhost/fyp/profile.php">

<?php

}else{
    // echo "Update failed";
    ?>
<META HTTP-EQUIV="Refresh" CONTENT="1; URL=http://localhost/fyp/edit-profile.php">

<?php
}
        }






}



?>
