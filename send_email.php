<?php
	if(isset($_POST['user_submit'])){
		$user_name=$_POST['user_name'];
		$user_phone=$_POST['user_phone'];
		$user_email=$_POST['user_email'];
		$user_message=$_POST['user_message'];
		
		$mailTo = "alirazabajwa25@gmail.com";
		$headers = "From: ".$user_email;
		$txt = "You have received an e-mail from".$user_name."\n\n".$user_message;
		
		mail($mailTo, $subject, $txt, $headers);
		echo $user_name."<br/>".$user_email."<br/>".$user_phone."<br/>".$user_message;
	} else {
		echo "<script>alert(\"Something Went Wrong\");</script>";
	}
?>