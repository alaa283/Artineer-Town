<?php

session_start();
if(isset($_SESSION['username']))
{
	header('location:dashboard.php');

}
//header('location:login.php');
$con = mysqli_connect('localhost', 'root','');

/*if ($con) {
	echo"connect to MySQL";
}
else {
	echo"no connect to MySQL";
}*/
mysqli_select_db($con,'artineer');
$name =$_POST['user'];
$phone=$_POST['phone'];
$email=$_POST['mail'];
$pass =$_POST['password'];

$s="SELECT * FROM `user` WHERE username='$name'";
$resul=mysqli_query($con,$s);

$num=mysqli_num_rows($resul);
if($num==1){
echo"alredy taken";}
else {
	if(isset($_POST['submit']))
{
	$stmt = "INSERT INTO `user` (`username`, `password`, `email`, `phone`) VALUES ('$name','$pass','$email','$phone')";
mysqli_query($con,$stmt);
    $_SESSION['username']=$name;
	header('location:dashboard.php');}}
?>