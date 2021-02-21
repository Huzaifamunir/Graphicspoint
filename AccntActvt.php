
<?php
	$id	=	$_GET['id'];
	$pssd	=	$_GET['pssd'];
	include 'db-connect.php';

	$sql = "select * from tempsignup where id = '".$id."' AND actpassword = '".$pssd."'";

	$ActivatioinAcntRes = mysqli_query($con,$sql);

	if(mysqli_num_rows($ActivatioinAcntRes)==1){
	    $Profile='NotUpdated';
	    while($row = mysqli_fetch_array($ActivatioinAcntRes)){
    	    $dataT=$row;
    	}
			$sql = "INSERT INTO signup ( username, email, password) VALUES ('$dataT[name]','$dataT[email]','$dataT[password]')";

			$result = mysqli_query($con,$sql);

	   if($result){
			 $sql2	=	"DELETE FROM tempsignup WHERE id = '$id'";
			 $result2 = mysqli_query($con,$sql2);
			 $Error=SendActivationEmail($dataT['email']);
			 header('location:notification.php?msg=AccountActivationSuccessful');
		 }else{
			 header('location:notification.php?msg=AccountActivationUnSuccessful');
		 }

	}else{
	   // echo "activation acount not found";
		header('location:notification.php?msg=AccountActivationUnSuccessful');
	}



function SendActivationEmail($Email){
    $To   = $Email;
    $Name = 'Account Activated-graphicspoint.pk';
	$Subject = "Account Activated Successfully";


	$Msgg  = '<div style="padding:5%;">';

    $Msgg .= '<h3>Thank You for joining us.</h3>';


    $Msgg .= '<span>You have sucessfully created and activated your account at <a href="">graphicspoint</a></span>';
    $Msgg .= '<br>';
    $Msgg .= '<br>';


    $Msgg .= '<h4 style="text-align:center;"><a href="">Login Now</a>.</h4>';
    $Msgg .= '<br>';
    $Msgg .= '<br>';

    $Msgg .= '<span>Start exploring <a href="">graphicspoint</a> Now</span>';
    $Msgg .= '<br>';
    $Msgg .= '<br>';

    $Msgg .= '<span>Contact us if you are facing any problem by filling the <a href="">Contact Us</a> form.</span>';
    $Msgg .= '<br>';
    $Msgg .= '<br>';

    $Msgg .='<span>
                <a href="">Login</a>
                to start exploring
                <a href="">graphicspoint</a>
                or
                <a href="">Sign Up</a>
            </span>';


    $Msgg .= '</div>';

    include 'PHPMailer/PHPMail.php';
    $Error=smtpmailer($To, $Name ,$Subject, $Msgg);
}
?>
