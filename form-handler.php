<?php
if (isset($_POST['Submit'])) {
	$name = $_POST['Name'];
	$email = $_POST['Email'];
	$number = $_POST['Phone Number'];
	$message = $_POST['Message'];
	$subject = "NEW INQUIRY"
	
	$mailTo = "jackmwachter@icloud.com";
	$headers = "From: business@yahoo.com";
	$txt = "FROM: ".$name.".\n\n EMAIL: ".$email.".\n\n NUMBER: ".$number.".\n\n MESSAGE: ".$message;
	
	mail($mailTo, $subject, $txt, $headers);
	header("Location: index.html?mailsend");
}