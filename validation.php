<?php

session_start();
if(isset($_SESSION['username']))
{
	header('location:dashboard.php');

}
$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con,'artineer');
$name =$_POST['username'];
$pass =$_POST['password'];

$s="SELECT * FROM `user` WHERE username='$name' && password='$pass' ";
$resul=mysqli_query($con,$s);

$num=mysqli_num_rows($resul);
if($num==1){
	$_SESSION['username']=$name;
	header('location:dashboard.php');
//	exit();
}
else {
	echo"not exit";	
//header('location:login.php');

}
?>