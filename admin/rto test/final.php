<?php session_start(); ?>
<DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>RTO TEST</title>
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
padding-bottom:20px;
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
<center><h1>RTO TEST</h1></center>
</div>
</header>
<main>
<div class="container">
<h2>You're  Done!<h2>
<p> Congrats! You are selected for the test</p>
<p> Final Scores:<?php echo $_SESSION['score']; ?></p> 

<a href="question.php?n=1" class="start"> Take Again</a>
</div>
</main>
</body>
</html>
<?php session_destroy(); ?>