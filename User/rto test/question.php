<?php include("connection.php");?>
<?php session_start(); ?>
<?php 
//set question number
$no=(int)$_GET['n'];
//$no=1;
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

$query="SELECT * FROM  questions WHERE qno=$no";
// get result
$result=mysqli_query($conn,$query)or die(mysqli_error($conn));
$ques=$result->fetch_assoc();

/*
*get choices
*/
$query="SELECT * FROM  answers WHERE qno=$no";
// get result
$choice=mysqli_query($conn,$query)or die(mysqli_error($conn));
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>RTO TEST
</title>

<style>
body{
font-family:arial;
font-size:15px;
line-height:1.6em;
}
li
{
list-style:none;
}
a{
text-decoration:none;
}
.container{
width:60%;
margin:0 auto;
overflow:auto;
text-align:center;
}
header{
border-bottom:3px #f4f4f4 solid;
}
footer{
border-bottom:3px #f4f4f4 solid;
text-align:center;
padding-top:5px;
}
main{
padding-bottom:20px;
}
a.start{
display:inline-block;
color:#666;
background:#f4f4f4;
border:1px dotted #ccc;
padding:6px 13px;
}
.current
{
background:#f4f4f4;
border:1px dotted #ccc;
padding:10px;
margin:20px 0 10px 0;
}
</style>
</head>
<body>
<header>
<div class="container">
<font color="red"><center><h1>RTO TEST</h1></center></font>
</div>
</header>
<main>
<div class="container">
<div class="current">Question <?php echo $ques['qno']; ?> of <?php echo $total; ?></div>
<table align="center">
<p class="question">
<font color="white">
<tr>Q.<?php echo $ques['qno']; ?> <?php echo $ques['text']; ?></tr></font>
</p>
<form method="post" action="process.php">
<ul class ="choice">
<?php while($row=$choice->fetch_assoc()): ?>
<tr><li><td><input name ="choice" type="radio" value="<?php echo $row['aid']; ?>"><font color="white">&nbsp &nbsp<?php echo $row['text'];  ?></font></input></td></li></tr>
<?php  endwhile;  ?>

</ul>

<tr><td><br><input type="submit" value="submit"></td></tr>
<input type="hidden"  name="number" value="<?php echo $no; ?>">
</table>
</form>
</div>
</main>
</body>
</html>
