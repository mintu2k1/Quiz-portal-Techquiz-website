<?php
session_start();
$con = mysqli_connect('localhost','root');
/*if($con)
{
	
	echo "connection successful";

}
else
{
	echo"no connection";
}*/
mysqli_select_db($con, 'techquiz');
$email = $_POST['email'];
$pass = $_POST['pwd'];

$q =" select * from admin where email = '$email' && pwd = '$pass'";

$result =mysqli_query($con,$q);

$num =mysqli_num_rows($result);
if($num==1)
{
	//$_SESSION['username'] = $name;
	header('location:upload.php');
}
else
{
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Invalid username and password ');
    window.location.href='index.php';
    </script>");
}


?>