<?php
@session_start();
$con = mysqli_connect('localhost','root','','climatewatch');

	if(!$con){
		echo "not connected";
		}
		else "connected";	
	
if(@$_SESSION['login_user']!="")
{
    $loggedinuserinfo = mysqli_query($con,'SELECT * from users where id = "'.$_SESSION['login_user'].'"');
	$lui = mysqli_fetch_array($loggedinuserinfo);

}

?>
