<?php
$conn=mysqli_connect('localhost','root','','rto');
if(!$conn)
{
echo"not conn to sever";
}
if(!mysqli_select_db($conn,'rto'))
{
echo"not selected database";
}
$user=mysqli_real_escape_string($conn,$_POST['uname']);
$rid=mysqli_real_escape_string($conn,$_POST['rid']);
$fname=mysqli_real_escape_string($conn,$_POST['fname']);
$lname=mysqli_real_escape_string($conn,$_POST['lname']);
$add=mysqli_real_escape_string($conn,$_POST['add']);
$city=mysqli_real_escape_string($conn,$_POST['city']);
$no=mysqli_real_escape_string($conn,$_POST['no']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$squestion=mysqli_real_escape_string($conn,$_POST['squestion']);
$sans=mysqli_real_escape_string($conn,$_POST['sanswer']);
$status=mysqli_real_escape_string($conn,$_POST['status']);
$pwd=mysqli_real_escape_string($conn,$_POST['pass']);
//echo $user;
//echo $rid;
//echo $fname;
//echo $lname;
//echo $add;
//echo $city;
//echo $no;
//echo $email;
//echo $squestion;
//echo $sans;
//echo $status;
//echo $pwd;
//$check = "select * from userlogin where uname='$user' ";
	//$resultcheck = mysqli_query($conn,$check);	

	 //$row = mysqli_num_rows($resultcheck);
			//if($row == 1){
//echo "this user already exist";
//header("refresh:1; url=userreg.html");
//}
//else{
$q = "INSERT INTO userlogin VALUES ('$user', '$rid' , '$fname' , '$lname' , '$add' ,'$city','$no','$email','$squestion','$sans','$status','$pwd')";
//$q = "INSERT INTO userlogin (uname,rid,fname,lname,add,city,no,email,squestion,sanswer,status,pass) VALUES ('$user', '$rid' , '$fname' , '$lname' , '$add' ,'$city','$no','$email','$squestion','$sans','$status','$pwd');";
$result = mysqli_query($conn,$q);
echo mysqli_error($conn);
//if(!$result)
//{
//echo"not inserted";
//}
//else
//{
//echo"inserted";
//}
//}
header("refresh:0.1; url=userreg.html");
?>
