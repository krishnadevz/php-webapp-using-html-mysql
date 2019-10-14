
#sample php code i used for the testing purpose
#author krishna kakade krishnakakadegithub.io 
<?php
include("connection.php");

$query="INSERT INTO shoe VALUES ('bata','8','yellow')";
$data=mysqli_query($conn,$query);

if($data)
{
	echo "Data is inserted into database";
}
?>
