<?php include("connection.php");?>
<?php 
if(isset($_POST["submit"]))
{
//get post variables
$qno=$_POST["qno"];
$qtext=$_POST["qtext"];
$correct=$_POST["correct"];
//choice array
$choice=array();
$choice[1]=$_POST["choice1"];
$choice[2]=$_POST["choice2"];
$choice[3]=$_POST["choice3"];
$choice[4]=$_POST["choice4"];
//question query
$query="INSERT INTO questions VALUES('$qno','$qtext')";
//run query
$row=mysqli_query($conn,$query)or die(mysqli_error($conn));
//valid insert
if($row)
{
foreach($choice as $choice=>$value){
if($value!=''){
if($correct==$choice){
$is_correct=1;
} else{
$is_correct=0;
}
//chice query
$query="INSERT INTO answers (qno,correct,text) VALUES('$qno','$is_correct','$value')";
// run query
$row=mysqli_query($conn,$query)or die($mysqli_error($conn));

//valid insert
if($row)
{   continue;
} else{
die('Error:('.$mysqli->errno.')'.$mysqli->error);
}
}
}
$msg='question has been added';
}
}

/*
*get Question
*/

$query="SELECT * FROM  questions ";

// get result
$questions=mysqli_query($conn,$query) or die(mysqli_error($conn));
$total=$questions->num_rows;
$next=$total+1;
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
<center><h1>RTO TEST</h1></center>
</div>
</header>
<main>
<div class="container">
<?php
if(isset($msg)){
echo'<p>'.$msg.'</p>';
}
?>
<script type="text/javascript">
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-52889978-5', 'auto');
    ga('send', 'pageview');
</script>
<form method="post" action="">
<p>
<label>Question Number: </label>
<input name ="qno" type="number" value="<?php echo $next; ?>">

</p>
<p>
<label>Question Text: </label>
<input name ="qtext" type="text" >
</p>
<p>
<label>Choice #1:</label>
<input name ="choice1" type="text" >
</p>
<p>
<label>Choice #2:</label>
<input name ="choice2" type="text" >
</p>
<p>
<label>Choice #3:</label>
<input name ="choice3" type="text" >
</p>
<p>
<label>Choice #4:</label>
<input name ="choice4" type="text" >
</p>
<p>
<label>Correct Choice Number:</label>
<input name ="correct" type="number" >
</p>
<p>
<input name ="submit" type="submit" >
</p>
</form>
</div>
</main>
</body>
</html>