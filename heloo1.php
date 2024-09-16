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
<table style="width:100%">
<?php
if(isset($_POST['submit']))
{
	$search=$_POST['search'];
	$sql="select * from emp_per_det where EMP_NAME='$search'";
	$result=mysqli_query($con,$sql);
	if($result)
	{
		if(mysqli_num_rows($result)>0)
		{
			echo"<thead>
			     <tr>
			     <th>EMP_ID</th>
			     <th>EMP_NAME</th>
			     <th>EMP_ROLE</th>
			     <th>EMP_GENDER</th>
			     <th>EMP_PHONE</th>
			     <th>EMP_EXPERIENCE</th>
			     
		       	     </tr>
			     </thead>";
			$row=mysqli_fetch_assoc($result);
			echo"<tbody>
			     <tr>
			     <td>.$row[ei].</td>
			     <td>.$row[en].</td>
			     <td>.$row[er].</td>
			     <td>.$row[eg].</td>
			     <td>.$row[ep].</td>
			     <td>.$row[ee].</td>
			    
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