<?php
$na=$_REQUEST['name'];
$ca=$_REQUEST['city'];
$ma=$_REQUEST['Mobile'];
$da=$_REQUEST['Department'];
$ga=$_REQUEST['Graduation'];
$ea=$_REQUEST['Experience'];
$sa=$_REQUEST['Salary'];
$sb=$_REQUEST['Subjects'];
$quer="INSERT INTO STAFF_RIGISTER VALUES('$na','$ca','$ma','$da','$ga','$ea','$sa','$sb')";
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