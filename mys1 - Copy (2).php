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
                    <h1 id="heading1">EMPLOYEE SALARY DETAILS</h1>
                    <p id="p1">Please fill  this form to create a Record.</p>
                    <hr>
            
                    <label id="label" for="ei"><b>EMP_ID</b></label>
                    <input type="text" placeholder="Enter employee id" name="ei" id="ei" required >
            
                    <label id="label" for="es"><b>EMP_SALARY</b></label>
                    <input type="text" placeholder="Enter employee salary" name="es" id="es" required >

	<label id="label" for="ein"><b>EMP_INCENTIVES</b></label>
                    <input type="text" placeholder="Enter employee incentives" name="ein" id="ein" required >
             
	 <label id="label" for="eb"><b>EMP_BONUS</b></label>
                    <input type="text" placeholder="Enter employee bonus" name="eb" id="eb" required >

                   
	<hr>
            
                    <!-- <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p> -->
                    <button type="submit" name="submit"class="registerbtn">Submit</button>
                </div>
            </form>
        </td>
       
    </tr>
    
</table>
</div>
 <form action="heloo.php">
 
<div class="form-field">
 
<h4 style="text-align: center;">For searching</h4>  
<button type="submit" style="margin-left: 385px; height: 32px; width: 90px; border-radius: 20px; background-color: green; color: white;">Goto</button>

</div>
</form>
</body>
</html>


<?php
$na=$_REQUEST['ei'];
$ca=$_REQUEST['es'];
$ma=$_REQUEST['ein'];
$da=$_REQUEST['eb'];

$quer="INSERT INTO emp_sal_det VALUES('$na','$ca','$ma','$da')";
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