<?php

include("connection.php");
#error_reporting(0);
$query="DELETE FROM shoe WHERE shoe_color='klw'";
$data=mysqli_query($conn,$query);
if($data)
{
	echo"data deleted ";

}
else {
	echo"data not deleted";
}
if (isset($_GET['DELETE'])){
            $id=$_GET['shoe'];
            echo $id ;  
        }
?>