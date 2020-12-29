<?php
session_start();
if($_POST['name']=='jalal' and $_POST['password']=='123')
{
	$_session['username']=$_POST['name'];
	echo "Hellow".$_session['username']."You are login";

}else

die("Password or username not match");


?>