<?php
$con=mysqli_connect('localhost' , 'root' , '' , 'artineer');

$sql="DELETE FROM `product2` WHERE `Id`='$_GET[id]'";

if(mysqli_query($con,$sql))
{
  header("refresh:1; url=architecture.php");
}
  else
  {echo'No Deleted';}


?>