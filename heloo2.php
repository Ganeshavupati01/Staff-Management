<?php
include("connect.php");
error_reporting(0);
?>
<html>
<head>
<title>serching</title>
<style>table,th,td{border:1px solid black; background-color:#96D4D4;}</style>
</head>
<body>
<form method="post">
<input type="text" name="search" placeholder="search data"></input>
<button name="submit">search</button>
</form>
<table style="width:75%">
<?php
if(isset($_POST['submit']))
{
	$search=$_POST['search'];
	$sql="select * from emp_sal_det where ID='$search'";
	$result=mysqli_query($con,$sql);
	if($result)
	{
		if(mysqli_num_rows($result)>0)
		{
			echo"<thead>
			     <tr>
			     <th>ID</th>
			     <th>EMP_ID</th>
			     <th>EMP_SALARY</th>
			     <th>EMP_INCENTIVES</th>
			     <th>EMP_BONUS</th>
			     
			     
		       	     </tr>
			     </thead>";
			$row=mysqli_fetch_assoc($result);
			echo"<tbody>
			     <tr>
			     <td>.$row[ID].</td>
			     <td>.$row[EMP_ID].</td>
			     <td>.$row[EMP_SALARY].</td>
			     <td>.$row[EMP_INCENTIVES].</td>
			     <td>.$row[EMP_BONUS].</td>
			    
	
		       	     </tr>
			     </body>";
		}
		else
		{
			echo"DATA NOT FOUND";
		}
	}
}
?>
</table>
</body>
</html>