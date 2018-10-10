<?php
$con=new mysqli("localhost","root","","complaint");

if($con->connect_error)
{
	die("unable to connect" . $con->connect_error);
}

$empid	=	$_POST['empid'];

$sql	=	"SELECT * FROM loginform WHERE empid=$empid";

$result 	=	$con->query($sql);
 
 if($result==FALSE)
 {
 	die("Failure");

 }	

 if($result -> num_rows>0)
 {
 	while($row=$result->fetch_assoc())
 		echo $row["name"];
 }
 else
 {
 	echo "Invalid employee id";
 }

 $con->close();



?>