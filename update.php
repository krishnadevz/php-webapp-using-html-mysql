<!-- DEVELOPED BY krishna kakade
  see more about developer krishna kakade here= krishnakakade1999.github.io-->
  <?php
include("connection.php");
error_reporting(0);

?>


<!DOCTYPE html>
<html>
<head><title>Online Shoe Inventory</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: center;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: center;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

	ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
.h1{
	font-size: 50px;
	text-decoration: bold;
}
	
</style></head>
<body>
	 <ul>
  <li><a href="file:///C:/Users/krishnakakade/Documents/DBMS.html">Home</a></li>
  <li><a href="#view">View</a></li>
</ul>
<h1 align="center">Online Shoe Inventory </h1>

<div class="container">
  <form action="" method="GET">
    <div class="row">
    	<div class="col-25">
    
        <label for="Company">Enter Shoe Company</label>
      </div>
      <div class="col-75">
        <input type="" name="shoe" value="<?php echo  $_GET['s'];?>">
      </div>
      <div class="row">
       <div class="col-25">

       	<label for="size">Enter Shoe size</label>
        </div>
        <div class="col-75">
                <input type="" name="shoe_size" value="<?php echo  $_GET['s_size'];?>">
           </div>
    <div class="row">
       <div class="col-25">
       	<label for="Colour">Enter Shoe Colour</label>
        </div>
        <div class="col-75">
        	<input type="" name="shoe_color" value="<?php echo  $_GET['s_color'];?>">
     </div>
 </div>

<br>
<br>

<div class="row">
<input  type="submit" name="submit" value="Update"></button>
</div>
<br/>


</form>
<?php 


if($_GET['submit'])
{
   $shoename= $_GET['shoe'];
    $shoesize=$_GET['shoe_size'];
   $shoecolor= $_GET['shoe_color'];
    $query ="UPDATE shoe SET shoe=' $shoename',shoe_color='$shoecolor' WHERE shoe_size='$shoesize'";
    $data=mysqli_query($conn,$query);
    if($data)
    {
      echo "record updated .<a href='display.php'>Check here updated list here</a>";

    }
    else{
      echo "record not updated";
    }
}
    

else{
  echo "<font color='grey'>Click on the Update button to save the changes  ";
}


 ?>
    
</div>
	</body>
</html>
