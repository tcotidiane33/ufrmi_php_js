<?php
require_once("includes/config.php");
if(!empty($_POST["email {
	$email= $_POST["email"];
	if (filter_var($email, FILTER_VALIDATE_EMAIL)===false) {

		echo "error : You did not enter a valid email.";
	}	
	
	echo "<span style='color:red'> Email already exist .</span>";

}

?>