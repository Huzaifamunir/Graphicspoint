<?php
include 'PHPMailer/PHPMail.php';
include 'db-connect.php';
 // $con = mysqli_connect('localhost','root','','fyp');

if(isset($_POST['button'])){


$name = $_POST['txtName'];
$email = $_POST['txtEmail'];
$msg = $_POST['txtMessage'];



 $sql = "INSERT INTO contactus( name, email, msg) VALUES ('$name','$email','$msg')";

 $result = mysqli_query($con,$sql);

if($result){

  $mail = new PHPMailer();


  $mail->isSMTP();                            // Set mailer to use SMTP
  $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                     // Enable SMTP authentication
  $mail->Username = 'email';          // SMTP username
  $mail->Password = '****'; // SMTP password
  $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 587;

  $mail->setFrom('noreply@codify.com', 'Codify');
$mail->addReplyTo('info@codify.com', 'Codify');
$mail->addAddress('khuzaifamunir123@gmail.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>Thanks for Contacting Us!</h1>';
$bodyContent .= '<p>'.$msg.'
<br>




</p>'; // Our message above including the link


$mail->Subject = 'Email from '.$email.'';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

}
}
?>
