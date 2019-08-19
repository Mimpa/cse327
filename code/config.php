<?php
session_start();
require_once "Google/Api/vendor/autoload.php";
$gclient =new Google_Client();
$gclient = setClientId("
568940837548-obse35a81mcb9hklrg71c34mtre85c5j.apps.googleusercontent.com
")
    $gclient = setClientSecret("
C4ygFkl4cH_6EC3gg3Z9FGzP
");
$gclient = setApplicationName("Jokhon Tokhon");
$gclient = setRedirectUri("http://localhost/Googlesignin/gcallback.php/");
$gclient=addScope("https://www.googleapis.com/auth/plus.login.")