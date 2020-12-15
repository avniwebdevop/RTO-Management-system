<?php
include("connection.php");
error_reporting(0);
$query="SELECT * FROM  vsearch";

// get result
$q1=mysqli_query($conn,$query) or die(mysqli_error($conn));
$total=$q1->num_rows;
$next=$total+1;
echo $next;
$query1="SELECT * FROM vno WHERE vno=$next";
$result=mysqli_query($conn,$query1)or die(mysqli_error($conn));
while($row=mysqli_fetch_array($result))
{
$vnum=$row[1];
}
echo $vnum;
?>