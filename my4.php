<?php
include("connect.php");
error_reporting(0);
?>
<!DOCTYPE html>

<html lang="en">

<head>

   
 <meta charset="UTF-8">

 
   <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>CRUD Operation</title>


    <link rel="stylesheet" href="./Crud2.css">


	     <script>

        function submit1()
{

            var a =  document.getElementById("Salary").value;
   
         var b =  document.getElementById("Wdays").value;

            var c =  document.getElementById("Pdays").value;

            var d = b-c;

            var e =  a/b

            var f = e*d;
  
         alert(document.getElementById("LOP").innerHTML="loss of pay is" + f);
	         
      

        }


    
      function submit2()
{

            var a =  document.getElementById("Salary").value;
   
         var b =  document.getElementById("Wdays").value;

            var c =  document.getElementById("Pdays").value;

            var d = b-c;

            var e =  a/b

            var f = e*d;
  
        
	 var t = a-f;
      
         alert(document.getElementById("Stotal").innerHTML="total current salary is" + t);

         
      

        }


   
</script>


</head>


<body class="bg">


    <div class="flex-container">


        <div class="flex-child magenta">


<table class="table">

 
   <tr class="table-row">

   
     <td>

            
<form method="post" >

  
              <div class="container">

   
                 <h1 id="heading1">Staff Salary Calculation Register</h1>

     
               <p id="p1">Please fill  this form to create a Record.</p>


                    <hr>

 
          

	  <label id="label" for="b and s"><b>Staff_Name</b></label>

                 
   		  <input type="text" placeholder="Enter name" name="name" id="name" required >	




                  <label id="label" for="pin"><b>Profession</b></label>


                  <input type="text" placeholder="Enter Profession" name="Profession" id="Profession" required >

	


	          <label id="label" for="Salary"><b>Salary</b></label>


                  <input type="text" placeholder="Enter Salary" name="Salary" id="Salary" required >

            	  

       
     

             <label id="label" for="Wdays"><b>Working_Days</b></label>


                  <input type="text" placeholder="Enter working days" name="Wdays" id="Wdays" required >

            	 
  
               

   <label id="label" for="Pdays"><b>Present_Days</b></label>

   
                  <input type="text" placeholder="Enter prestnt days" name="Pdays" id="Pdays" required >

		

	   
 		  <label id="label" for="LOP"><b>LOP</b></label>

  
                  <input type="text" placeholder="Enter LOP" name="LOP" id="LOP" required >
 
		  <label id="label" for="Stotal"><b>Current_Salary</b></label>

  
                  <input type="text" placeholder="Enter Current Salary" name="Stotal" id="Stotal" required >
                   
                 

                    
<hr>


            

                    <!-- <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p> -->

         
         	<button type="submit" name="submit10"class="registerbtn" onclick="submit1()">Get Loss Of Pay</button>
		<button type="submit" name="submit11"class="registerbtn" onclick="submit2()">Get Current Salary</button>


		<button type="submit" name="submi12t"class="registerbtn" >Submit</button>



		

                 


                </div>

   
         </form>

  
      </td>

 
      

    </tr>


    

</table>


</div>



<form action="heloo2.php">
 
<div class="form-field">
 
<h4>For searching</h4>  
<button class="btn" type="submit">Goto</button>
<p>LOP=loss of pay</p>
</div>
</form>

</body>

</html>




<?php
$na=$_REQUEST['name'];
$ca=$_REQUEST['Profession'];
$ma=$_REQUEST['Salary'];
$da=$_REQUEST['Wdays'];
$ga=$_REQUEST['Pdays'];
$ea=$_REQUEST['LOP'];
$sa=$_REQUEST['Stotal'];
$quer="INSERT INTO STAFF_SALARY VALUES('$na','$ca','$ma','$da','$ga','$ea','$sa')";
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