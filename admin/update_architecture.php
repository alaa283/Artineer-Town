<?php
$con=mysqli_connect('localhost' , 'root' , '' , 'artineer');

$sql="UPDATE `product2` SET `Pname`='$_POST[Pname]',`Price`='$_POST[Price]' WHERE `Id`='$_POST[Id]'";

if(mysqli_query($con,$sql))
{
  header("refresh:1; url=architecture.php");
}
  else
  {echo'No Update';}


?>