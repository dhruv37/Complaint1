<?php
$con=new mysqli("localhost","root","","complaint");

if($con->connect_error)
{
	die("unable to connect" . $con->connect_error);
}

if(isset($_POST['empid']))
{
$empid	=	$_POST['empid'];
}

$sql	=	"SELECT * FROM loginform";

$result 	=	$con->query($sql);
 
 if($result==FALSE)
 {
 	die("Failure");

 }	


 if($result -> num_rows>0)
 {
 		echo "<table cellspacing='30'>
		<tr>
			<th> Emp_id </th>
			<th> Name </th>
		</tr>";	
	while($row=$result->fetch_assoc())
 		{
 		echo "<tr>";
 		echo "<td>" . $row["empid"] . "</td>";
 		echo "<td>" .$row["name"] . "</td>";
 		echo "</tr>";
 		}
 		echo "</table>";
 }
 else
 {
 	echo "Invalid employee id";
 }

 $con->close();

?>