<?php 
require_once "config.php";
if(isset($_SESSION['access_token']))
    
{
    
  $gclient-> setAccessToken ($_SESSION ['access_Token']); 
    
}
    else if (isset($_GET['code']));
    
if(isset($_GET['code']))
{
    $token = $gclient ->fetchAccessTokenWithAuthCode($_GET["code"]);
    $_SESSION['access_token'] = $token;
    
    
}

else {
    
    header ("locaton ;login.php");
    
}
$oAuth = new Google_Service_Oauth($gclient);
$userdata = $oAuth userinfo_v2_me -> get();

$SESSION['email']=&userdata['email'];
$SESSION['picture']=&userdata['picture'];
   
       
    header ("location :welcome.php");exit ();