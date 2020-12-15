<?php include("connection.php");  ?>
<?php   session_start();  ?>
<?php
// see score
if(!isset($_SESSION['score'])){
    $_SESSION['score']=0;
}
 

 if($_POST){
$no =$_POST['number'];
$select=$_POST['choice'];
$next =$no+1;

/*
*get Question
*/
$query="SELECT * FROM questions";
//get result
$result=mysqli_query($conn,$query)or die(mysqli_error($conn));
//get row
$total=$result->num_rows;
/*
*get Question
*/
$query="SELECT * FROM  answers WHERE qno=$no AND correct=1";
// get result
$result=mysqli_query($conn,$query)or die(mysqli_error($conn));
//get row
$row=$result->fetch_assoc();

//set correct choice
$correct=$row['aid'];
 
//compare
if($correct==$select){
//answer is correct
$_SESSION['score']++;
}
//check if last question
if( $no==$total)  {
header("location:final.php");
}  else{
header("location:question.php?n=".$next);
}
}
?>