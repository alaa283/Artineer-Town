<?php
$con=mysqli_connect('localhost' , 'root' , '' , 'artineer');

$sql="DELETE FROM `product` WHERE `Id`='$_GET[id]'";

if(mysqli_query($con,$sql))
{
  header("refresh:1; url=art.php");
}
  else
  {echo'No Deleted';}


?>