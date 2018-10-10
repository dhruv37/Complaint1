<?php

$con=new mysqli("localhost","root","","complaint");

if($con->connect_error)
{
	die("unable to connect" . $con->connect_error);
}


$empid	=	$_POST['empid'];

$sql="DELETE FROM loginform WHERE empid=$empid";

if($con->query($sql)==TRUE)
{
	echo "Success";
}
	else
{		
	echo "Failure" . $con->error;
}

?>