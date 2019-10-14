<?php
$servername="localhost";
$username="root";
$password="";
$dbname="website";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	echo "connected ";
}
else
{
	die("connected not".mysqli_connect_error());
}


?>
