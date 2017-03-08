<?php
/*--------------------------------------------*/
/* Email Submited Form           */
/*--------------------------------------------*/

$post = (!empty($_POST)) ? true : false;

if($post){
    $to = "cassiebetts@gmail.com"; // Your e-mail here
	$name = stripslashes($_POST['name']);
	$email = stripslashes($_POST['email']);
	$subject = stripslashes($_POST['subject']);
	$message = stripslashes($_POST['message']);
	$subject = "From Your Website";
	
	$mail = mail($to, $subject,
         "Name: ".$name."\r\n"	
         ."Email: ".$email."\r\n"	
         ."subject: ".$subject."\r\n"	
         ."Message: ".$message."\r\n"	
	    ."X-Mailer: PHP/" . phpversion());

	if($mail){
		echo '<p>Thanks for submitting your email! Our manager will contact you shortly.</p>';
	}
    
}

?>

    <style type="text/css">
        p {
            text-align: center;
            font-size: 30px;
            background: #3ac4fa;
            margin-top: 30px;
            padding: 20px;
            width: 500px;
            margin: 0 auto;
            color: #fff;
	    display:block
        }
    </style>
