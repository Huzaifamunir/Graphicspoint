<?php
function RandomPassword($length) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $password = substr( str_shuffle( $chars ), 0, $length );
        return $password;
    }



include 'PHPMailer/PHPMail.php';
include 'SendEmailToActivateAccnt.php';

include 'db-connect.php';

if(isset($_POST['submit'])){


  $name = $_POST['username'];
  $email = $_POST['email'];
  $pass = $_POST['password'];

  $query1="SELECT * from signup WHERE email = '$email'";
  $run = mysqli_query($con,$query1);
if(mysqli_num_rows($run)>0){
  header('location:notification.php?msg=emailexists');
	// echo "Email Already Exist Please Try Again";
}else{
  $sql2	=	"DELETE FROM tempsignup WHERE email = '$email'";
  $result2 = mysqli_query($con,$sql2);

  $randpssd = RandomPassword(15);

   $sql = "INSERT INTO tempsignup ( name, email, password, actpassword) VALUES ('$name','$email','$pass','$randpssd')";

   $result = mysqli_query($con,$sql);

  if($result){

    $Last_ID = mysqli_insert_id($con);
    $ActLink =  "localhost/AccntActvt.php?pssd=".$randpssd."&id=".$Last_ID;
    $Error= SendEmailToActivateAccnt($email,$ActLink);

    if ($Error=='Sent'){
       header('location:notification.php?msg=ActivationEmailSent');

    }elseif($Error=='NotSent'){
       header('location:notification.php?msg=ActivationEmailNotSent');

    }


  }else{
    echo "no";
  }


}
}



?>
