<!DOCTYPE html>
<body>
<?php
session_start();
include("connection.php");
?>
<?php
if(isset($_POST['submit']))
{
$user=$_POST['uname'];
$pwd=$_POST['password'];
$query="SELECT * FROM userlogin where uname='$user'&&pass='$pwd'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if( $total==1)
{
$_SESSION['uname']=$user;
header('location:http://localhost/pro/user/MasterPage2.html');
}
else
{
echo "login Failed";
}
$total=mysqli_fetch_assoc($data);
$_SESSION['rid']=$total['rid'];
}
?>
</body>
</html>