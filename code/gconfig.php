<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("76763702843-t83un86f1gu0smuv126vn0eijtuhmqha.apps.googleusercontent.com");
	$gClient->setClientSecret("jBODvURcJKG2BZkx6rhfLHSy");
	$gClient->setApplicationName("CPI Login Tutorial");
	$gClient->setRedirectUri("http://localhost/New_folder/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
