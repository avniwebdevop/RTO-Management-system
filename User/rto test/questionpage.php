<?php include("connection.php");?>
<?php 
/*
*get Question
*/
$query="SELECT * FROM  questions ";
// get result
$result=mysqli_query($conn,$query)or die(mysqli_error($conn));
$total=$result->num_rows;
?>

<DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
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
padding-bottom:10px;
}
a.start{
display:inline-block;
color:#666;
background:#f4f4f4;
border:1px dotted #ccc;
padding:6px 13px;
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
<br>  <br> 
<font color="white" align="left">
<ul>

<li><strong>Number of Questions:</strong>&nbsp&nbsp<?php echo $total; ?></li>
<li><strong>Type: </strong>&nbsp&nbspMultiple Choice</li>
<li><strong>Estimated Time:</strong>&nbsp&nbsp<?php echo $total *1; ?>  Minutes</li>
</ul>
</font>
<br> 
<center>
<a href="question.php?n=1" class="start"><font color="black" align="center"><b> Start Test</b></font></a>
</center>
</div>
</main>
</body>
</html>
