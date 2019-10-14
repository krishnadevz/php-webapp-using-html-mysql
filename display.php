<style >
td{
	padding: 10px;
}	

</style>

<?php
include("connection.php");
error_reporting(0);
$query="SELECT *FROM shoe";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if($total!=0)
{
	?>
	<table>
		<tr>
			<th>Shoe company</th>
			<th>Shoe size</th>
			<th>Shoe colour</th>
			<th colspan='2'>Operations</th> 
		</tr>

	<?php

	while($result=mysqli_fetch_assoc($data))
	{	

		echo "<tr>
			<td>". $result['shoe']."</td>
			<td>".$result['shoe_size']."</td>
			<td>".$result['shoe_color']."</td>
			<td><a href='update.php?s=$result[shoe]&s_size=$result[shoe_size]&s_color=$result[shoe_color]'>Edit</a></td>
			<td><a href='delete.php?$result[shoe]'>DElETE</a></td>
		</tr>";
	}

}
else
{
	echo "No record found";
}

?>
</table>