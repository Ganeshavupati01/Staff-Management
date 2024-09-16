<?php
$servername="localhost";
$username="root";
$password="";
$dbname="gender_pay_gaps";

$con=mysqli_connect($servername,$username,$password,$dbname);

if($con)
{
	echo"connected ok";
}
else
{
	echo"not connected";
}
?>