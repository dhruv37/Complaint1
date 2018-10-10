<?php

$con=new mysqli("localhost","root","","complaint");

if($con->connect_error)
{
	die("unable to connect" . $con->connect_error);
}


$name	=	$_POST['name'];
$empid	=	$_POST['empid'];

$sql="INSERT INTO loginform VALUES ('$empid','$name')";

if($con->query($sql)==TRUE)
{
	echo "Success";
}
	else
{		
	echo "Failure" . $con->error;
}

?>