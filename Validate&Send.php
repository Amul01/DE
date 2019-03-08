<?php
$name = $enr = $pw = $cpw = $email = "";
$nameErr = $enrErr = $pwErr = $cpwErr = $emailErr = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($_POST["name"])) $nameErr = "Name is required";
	else {
		$name = test_input($_POST["name"]);
		if(!preg_match("/^[a-zA-Z ]*$/", $name)) $nameErr = "Only letters and white spaces allowed";
	}
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($_POST["enr"])) $enrErr = "Enrolment number is required";
	else {
		$enr = test_input($_POST["enr"]);
		if(!preg_match("/^[0-9]*$/", $enr)) $enrErr = "Only digits allowed";
		echo $enrEnr;
	}
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($_POST["pw"])) $pwErr = "Password is required";
	else {
		$pw = test_input($_POST["pw"]);
		if(strlen($pw)<6) $pwErr = "Password length should be 6 or more";
	}
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($_POST["cpw"])) $cpwErr = "Re-enter the password";
	else {
		$cpw = test_input($_POST["cpw"]);
		if($cpw != $pw) $cpwErr = "Passwords do not match";
	}
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$email = test_input($_POST["emailid"]);
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) $emailErr = "Invalid Email";
}

function test_input($data) {
	 $data = trim($data);
	 $data = stripslashes($data);
	 $data = htmlspecialchars($data);
	 return $data;
}
?>