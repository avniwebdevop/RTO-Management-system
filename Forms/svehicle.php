<?php include("connection.php");
error_reporting(0);
?>
<?php
if($_POST);
{
 $vnum=$_POST['vnum'];
$query="SELECT * FROM vsearch WHERE vnum='$vnum'";
$result=mysqli_query($conn,$query)or die(mysqli_error($conn));
while($row=mysqli_fetch_array($result))
{
$vnum=$row[0];
$owner=$row[1];
$gardian=$row[2];
$age=$row[3];
$add=$row[4];
$vtype=$row[5];
$vmodel=$row[6];
$vcompany=$row[7];
$vmanufact=$row[8];
}
} 
?>