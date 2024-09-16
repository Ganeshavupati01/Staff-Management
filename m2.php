<?php
$na=$_REQUEST['name'];
$ca=$_REQUEST['Profession'];
$ma=$_REQUEST['CLSH'];
$da=$_REQUEST['CLSU'];
$ga=$_REQUEST['ELSH'];
$ea=$_REQUEST['ELSU'];
$sa=$_REQUEST['SLSH'];
$sb=$_REQUEST['SLSU'];
$quer="INSERT INTO STAFF_LEAVES VALUES('$na','$ca','$ma','$da','$ga','$ea','$sa','$sb')";
$data=mysqli_query($con,$quer);
if($data)
{
	echo"database ok";
}
else
{
	echo"failed";
}
mysqli_close($con);
?>