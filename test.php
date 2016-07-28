<?php

include "cn.php";


	$fullname = $_POST['fullname'];
	$email = $_POST['email'];

	$q = "INSERT INTO Email Signup(Name, Email) VALUES ('$fullname', '$email')";

	$r = mysql_query($q);

	if($r){
		echo "Subscribed Successfully!";
	}
	else{
		echo mysql_error();
	}

	header("refresh:2; url=index.html");

?>








