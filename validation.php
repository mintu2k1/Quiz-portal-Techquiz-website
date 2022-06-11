<?php
session_start();
$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'techquiz');
$name = $_POST['username'];
$pass = $_POST['password'];
$pass2 = $_POST['password2'];

$q =" select * from register where username = '$name' && password = '$pass'";

$result =mysqli_query($con,$q);

$num =mysqli_num_rows($result);
if($num==1)
{
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Duplicate Data');
    window.location.href='index.php';
    </script>");
 }
else
{
	$qy="insert into register(username ,password ,password2) values('$name','$pass','$pass2')";
	mysqli_query($con,$qy);
	header('refresh:0,url=index.php');
}


?>