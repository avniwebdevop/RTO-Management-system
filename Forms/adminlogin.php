<!doctype html>
<body>
<?php
session_start();
include("connection.php");
?>
<?php
if(isset($_POST["submit"]))
{
$user=$_POST["aname"];
$pwd=$_POST["password"];
$query="SELECT * FROM  adminlogin where aname='$user'&&password='$pwd'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if( $total==1)
{
$_SESSION['aname']=$user;
header('location:http://localhost/pro/admin/masteradmin.html');
}
else
{
echo "login Failed.....";
}
}
?>
</body>
</html>