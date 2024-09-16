<?php
include("connect.php");
error_reporting(0);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation</title>
    <link rel="stylesheet" href="./cs.css">
</head>
<body background=hi1.jpg>
    <div class="flex-container">
        <div class="flex-child magenta">
<table class="table">
    <tr class="table-row">
        <td>
            <form method="post" >
                <div class="container">
                    <h1 id="heading1">EMPLOYEE PERSONAL DETAILS</h1>
                    <p id="p1">Please fill  this form to create a Record.</p>
                    <hr>
            
                    <label id="label" for="ei"><b>EMP_ID</b></label>
                    <input type="text" placeholder="Enter employee id" name="ei" id="ei" required >
            
                    <label id="label" for="en"><b>EMP_NAME</b></label>
                    <input type="text" placeholder="Enter employee name" name="en" id="en" required >

	<label id="label" for="er"><b>EMP_ROLE</b></label>
                    <input type="text" placeholder="Enter employee role" name="er" id="er" required >
             
	 <label id="label" for="eg"><b>EMP_GENDER</b></label>
                    <input type="text" placeholder="Enter employee gender" name="eg" id="eg" required >

                    <label id="label" for="ep"><b>EMP_PHONE</b></label>
                    <input type="text" name="ep" id="ep" placeholder="Enter employee phone no" required>

	<label id="label" for="ee"><b>EMP_EXPERIENCE</b></label>
                    <input type="text" placeholder="Enter employee experience" name="ee" id="ee" required>

	
	<hr>
            
                    <!-- <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p> -->
                    <button type="submit" name="submit"class="registerbtn">Submit</button>
                </div>
            </form>
        </td>
       
    </tr>
    
</table>
</div>
 <form action="heloo1.php">
 
<div class="form-field">
 
<h4 style="text-align: center;">For Searching</h4>  
<button type="submit" style="margin-left: 385px; height: 32px; width: 90px; border-radius: 20px; background-color: green; color: white;">Goto</button>
</div>
</form>
</body>
</html>


<?php
$na=$_REQUEST['ei'];
$ca=$_REQUEST['en'];
$ma=$_REQUEST['er'];
$da=$_REQUEST['eg'];
$ga=$_REQUEST['ep'];
$ea=$_REQUEST['ee'];

$quer="INSERT INTO emp_per_det VALUES('$na','$ca','$ma','$da','$ga','$ea')";
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