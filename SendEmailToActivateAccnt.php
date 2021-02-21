<?php
    function SendEmailToActivateAccnt($Email,$ActLink) {

        $To   = $Email;
        $Name = 'Activation Required-Graphicspoint';
		$Subject = "Account Activation Required";


		$Msgg  = '<div style="padding:5%;">';

        $Msgg .= '<h3>Thank You for Registering.</h3>';


        $Msgg .= '<span>You have sucessfully created your account at <a href="">Graphicspoint</a></span>';
        $Msgg .= '<br>';
        $Msgg .= '<br>';
        // $Msgg .= '<span>Kindly activate your account by  <a href="'.$ActLink.'">clicking here</a>.</span>';
        //
        // $Msgg .= '<br>';
        // $Msgg .= '<br>';

        $Msgg .= '<h4 style="text-align:center;">Copy this link into your browser for activation.</h4>';
        $Msgg .= '<h4 style="text-align:center;">"'.$ActLink.'"</h4>';

        $Msgg .= '<br>';
        $Msgg .= '<br>';


        $Msgg .= '<span>You will recieve activation confirmation email from <a href="">Graphicspoint</a> after activation.</span>';

        $Msgg .= '<br>';
        $Msgg .= '<br>';

        $Msgg .= '<span>Contact us if you are facing any problem by filling the <a href="">Contact Us</a> form.</span>';

        $Msgg .= '<br>';
        $Msgg .= '<br>';

        $Msgg .='<span>
                    <a href="/Login.php">Login</a>
                    to start exploring
                    <a href="">Graphicspoint/a>
                    or
                    <a href="">Sign Up</a>
                </span>';


        $Msgg .= '</div>';


		// $Error=smtpmailer('usama_1s@hotmail.com', $Name ,$Subject, $Msgg);
        $Error=smtpmailer($To, $Name ,$Subject, $Msgg);
        return $Error;

    }
?>
