<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1" runat="server">
  
    <title>E-RTO System</title>
    <script src="jquery-1.9.0.js" type="text/javascript"></script>
     <meta charset="utf-8">
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  <!--[if lt IE 7]>
    <script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
  <![endif]-->
  <!--[if lt IE 9]>
  	<script type="text/javascript" src="js/html5.js"></script>
  <![endif]-->
    <asp:ContentPlaceHolder id="head" runat="server">
    </asp:ContentPlaceHolder>
    <style type="text/css">

 p.MsoNormal
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:0in;
	line-height:115%;
	font-size:11.0pt;
	font-family:"Calibri","sans-serif";
	}
    </style>





<script type="text/javascript">
function myans()
{
if(!ans.match(/^[a-zA-Z0-9\s\,\''\-]*$/))
{  
document.getElementById("msg").innerHTML="**Answer should be in characters ";
return false;
}
}

function myid()
{
var rid=document.f1.rid.value;
if(!rid.match(/^[0-9]+$/))
{  
document.getElementById("msg").innerHTML="**id should be in numbers";
return false;
}
}
function myaname()
{
var aname=document.f1.aname.value;
if(!aname.match(/^[A-Za-z]+$/))
{  
document.getElementById("msg").innerHTML="**username should be in characters ";
return false;
}
}
function mypass()
{
var pass=document.f1.pass.value;
var min=6;
var max=16;
var exp=/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
alert(pass);
if(pass.length<min||pass.length>max){
return false;
}
if(!exp.test(pass))
{
document.getElementById("msg").innerHTML="**Password should contain atleast one number and !@ # $ % ^ & *";
return false;
}
}

function myfname()
{
var fname=document.f1.fname.value;
if(!fname.match(/^[A-Za-z]+$/))
{  
document.getElementById("msg").innerHTML="**firstname should be in characters ";
return false;
}

}

function mylname()
{
var lname=document.f1.lname.value;
if(!lname.match(/^[A-Za-z]+$/))
{  
document.getElementById("msg").innerHTML="**lastname should be in characters ";
return false;
}

}

function myadd()
{
var add=document.f1.add.value;
if(!add.match(/^[a-zA-Z0-9\s\,\''\-]*$/))
{  
document.getElementById("msg").innerHTML="**Address should be in characters";
return false;
}
}

function mycity()
{
var city=document.f1.city.value;
if(!city.match(/^[a-zA-Z0-9\s\,\''\-]*$/))
{  
document.getElementById("msg").innerHTML="**city should be in characters";
return false;
}
}

function myno()
{
var no=document.f1.no.value;
if(!no.match(/^\d{10}$/))
{  
document.getElementById("msg").innerHTML="**mobile no should be in numbers and 10digit ";
return false;
}
}

function myfun()
{
var name=document.f1.name.value;
var age=document.f1.age.value;
var add=document.f1.add.value;
var ltype=document.f1.ltype.value;
var pic=document.f1.uploadfile.value;
var fees=document.f1.fees.value;

if(name==""||age==""||add==""||ltype==""||pic==""||fees=="")
{  
document.getElementById("msg").innerHTML="**Please fill all the details";
return false;
}

}

</script>







</head>
<body>
    <form id="form1" action="" method="post" enctype="multipart/form-data" name="f1" onsubmit="return myfun()">
    <div id="main">
  	<!-- header -->
    <header>
    <div class="logo">
      	<a href="index.html"><img src="images/logo.png" alt=""></a>
      </div>
      <nav>
      	<ul>
       <li><a href="http://localhost/pro/user/vehicle registration.html">Registration</a>/</li>
        <li><a href="http://localhost/pro/user/rtotest.php">RTO Test</a>/</li>
          <li><a href="http://localhost/pro/user/licencemain.html">License</a>/</li>
          <li><a href="http://localhost/pro/user/Permit/permit.html">Permit</a>/</li>
          <li><a href="http://localhost/pro/user/Offences And Penalties/Offences_And_Penelties.html">Offences And Penalties</a>/</li>
          <li><a href="http://localhost/pro/user/Taxation/Taxationmain.html">Taxation</a>/</li>
          <li><a href="http://localhost/pro/user/Transfer And NOC/Transfer And NOC.html">Transfer And NOC</a></li>
        </ul>
      </nav>
      
    </header>
    <section id="banners">
    	   <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="990" height="253">
  <param name="movie" value="main.swf" />
  <param name="quality" value="high" />
  <param name="wmode" value="transparent">
     <embed src="main.swf"
      quality="high"
      type="application/x-shockwave-flash"
      WMODE="transparent"
      width="990"
      height="253"
      pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>
    </section>
    <div class="wrapper">
      <!-- aside -->
      <aside id="leftSidebar">
        <h3> LICENSE
            
      </h3>
        <div class="indent">
        	<ul class="p3">
          	<asp:Label ID="lblMenu" runat="server" Text="Label"></asp:Label>
          </ul>
         <ul class="last">
                       <li><a href="http://localhost/pro/user/driving.html">Driving Licence</a></li>
                        <li><a href="http://localhost/pro/user/address proof.html">Address Proof</a></li>
                        <li><a href="http://localhost/pro/user/address proof.html">Age Proof</a></li>
                        <li><a href="http://localhost/pro/user/age criteria.html">Age_Criteria</a></li>
                        <li><a href="http://localhost/pro/user/fee.html">Fee</a></li>
                        <li><a href="http://localhost/pro/user/fitness.html">Fiteness Criteria</a></li>
                        <li><a href="http://localhost/pro/user/inter licence.html">Inter.Dri. Licence</a></li>                    
</ul>  
        </div>
        <h3>ROAD SIGN</h3>
        <div class="box">
        	<div class="inner">
          	<ul class="new_product">
            	<li class="image"><a href="#">  	
        	<marquee behaviour="scroll" direction="up">   <img src="../Traffic_img/1_5.png" height="100px" width="150px" />&nbsp;</marquee>
        	<marquee behaviour="scroll" direction="up">   <img src="../Traffic_img/1_6.png" height="100px" width="150px" />&nbsp;</marquee>
        	<marquee behaviour="scroll" direction="up">   <img src="../Traffic_img/2_1.png" height="100px" width="150px" />&nbsp;</marquee>
        	<marquee behaviour="scroll" direction="up">   <img src="../Traffic_img/2_2.png" height="100px" width="150px" />&nbsp;</marquee>
            	</li> 
            </ul>
          </div>
        </div>
      </aside>
      <!-- content -->
      <section id="content">
        <div class="inside">
          <div class="box">
          	<div class="inner1" style="height:800px; width:400px">
            	
 <table style="width:100%;">
        <tr>
            <td >
                <br /><h2 align="center">LEARNER LICENCE&nbsp;&nbsp;&nbsp;<img src="middle_car.gif"></h2><br />
           
                <font face="Arial" size="2"><b>
                <span style="font-size: 10pt; font-family: Arial;">Learner&#39;s License<br />
                <font color="#000000"><span style="font-family: Arial;"><font color="#000000" 
                    size="2"><o:p></o:p></font></span></font></span></b></font><span style="">
                <font face="Arial" size="2"><b>A candidate is required to appear for test with
                <br />
                following documents.<br />
                </b></font></span>&nbsp;<font face="Arial" size="2">1)<span 
                    style="font-style: normal; font-variant: normal; font-weight: normal;">&nbsp;</span></font>
                <font face="Arial" size="2">Form 1 and 2</font><br />
                <font face="Arial, Helvetica, sans-serif" size="2">&nbsp;</font><font 
                    face="Arial" size="2">2)</font> <font face="Arial" size="2">Age Proof</font><br />
                <font face="Arial" size="2">&nbsp;3)<span 
                    style="font-style: normal; font-variant: normal; font-weight: normal;">&nbsp;</span></font>
                <font face="Arial" size="2">Address Proof</font><br />
                <font face="Arial" size="2">&nbsp;4)</font>
                <font face="Arial, Helvetica, sans-serif" size="2">Medical certificate Form 1-A 
                for Transport License.</font> <font face="Arial" size="2">
                <br />
&nbsp;5)</font> <font face="Arial, Helvetica, sans-serif" size="2"><span id="IL_AD2" 
                    class="IL_AD">Passport</span> size photographs (3 copies)</font>
                <font face="Arial" size="2">
                <br />
                &nbsp;6)<span style="font-style: normal; font-variant: normal; font-weight: normal;">&nbsp;</span></font>
                <font face="Arial" size="2">Fee</font><br />
                <br />
            </td>
        </tr>
    </table>

<center><span id="msg" style="color:red"></span></center>
<table>
<h2><center>APPLY LEARNER</center></h2>
<tr><td>
<p>

<label> Name: &nbsp; &nbsp;   &nbsp;&nbsp;   &nbsp; &nbsp;  &nbsp;   &nbsp; &nbsp;  &nbsp;   &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp; </label>
<input name ="name" type="text" value="">
</p>
</td> 
</tr>

<tr><td>
<p>
<label>Age:&nbsp;&nbsp; &nbsp;   &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;  &nbsp;   &nbsp; &nbsp;  &nbsp;   &nbsp; &nbsp;  &nbsp;   &nbsp; &nbsp; </label>
<input name ="age" type="number" value="16">
</p>
</td></tr>


<tr><td>
<p>
<label>Address: &nbsp;&nbsp; &nbsp;   &nbsp; &nbsp;  &nbsp;   &nbsp; &nbsp;  &nbsp;   &nbsp; &nbsp;  &nbsp;   &nbsp; </label>
<input name ="add" type="text" value="">
</p>
</td></tr>

<tr><td>
<p>
<label>Licence Type For:&nbsp; &nbsp;&nbsp; &nbsp;   &nbsp; &nbsp;   &nbsp;</label>
<select name="type" autofocus name="ltype">
  <option value="2-Wheeler">2-Wheeler</option>
  <option value="3-Wheeler">3-Wheeler</option>
  <option value="4-Wheeler">4-Wheeler</option>
</select>
</p>
</td></tr>

<tr><td>
<p>
<label>Passport Size Photo:   &nbsp; &nbsp;   &nbsp;</label>
<input type="file" name="uploadfile" value="">
 </p>
</td></tr>



<tr><td>
<p>
<label>Fees in Rs: &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;  &nbsp; &nbsp;   &nbsp;</label>
<input name ="fees" type="text" value="">
</p>
</td></tr>
<center>
<tr><td>
<br>
<label>   &nbsp;   &nbsp;   &nbsp;  </label>
&nbsp;   &nbsp;   &nbsp; &nbsp;  &nbsp;   &nbsp; &nbsp;   &nbsp;   &nbsp; &nbsp;   &nbsp;   &nbsp; &nbsp;   &nbsp;   &nbsp; &nbsp;   &nbsp;   &nbsp; <input type="submit" name="submit"  value="Apply Learner">
</p>
</td></tr>
</table>


<?php
include("connection.php");
error_reporting(0);

if($_POST["submit"]){
$name=$_POST['name'];
$age=$_POST['age'];
$add=$_POST['add'];
$type=$_POST['type'];
$fees=$_POST['fees'];
$filename=$_FILES["uploadfile"]["name"];
$tempname=$_FILES["uploadfile"]["tmp_name"];
$folder="pic/".$filename;
move_uploaded_file($tempname,$folder);
//echo"$name";
//echo"$age";
//echo"$add";
//echo"$type";
//echo"$fees";
//echo"$folder";
if($name!=""&&$age!=""&&$add!=""&&$type!=""&&$folder!=""&&$fees!="")
{
$q = "INSERT INTO learning VALUES('$name','$age','$add','$type','$folder','$fees')";
$result = mysqli_query($conn,$q)or die(mysqli_error($conn));
echo"<img src='$folder' height='100' weight='100'>"; 
if($result)
{
echo"<script>alert('learning licence sussesfully inserted')</script>";
}
else
{
echo"<script>alert('learning licence not sussesfully inserted')</script>";
}
}
}
mysqli_close($conn);
?>
       
</div>
          </div>
        </div>
      </section>
      <!-- aside -->
      <aside id="rightSidebar">
        <div class="box">
          <div class="inner">
          	<ul class="list1">
          	<li>
          	
            <h3> E-RTO SYSTEM
             </h3>
           
          	</li>
          	
          	
            	<li>
         <a href="http://localhost/pro/forms/index.php">Logout</a>                                 
 </li>
             
            </ul>
          </div>
        </div>
        <h3>ROAD SIGN</h3>
       <div class="indent">
        	<marquee behavior="scroll" direction="up">
        	<img src="../Traffic_img/1_1.png" height="100px" width="150px" /></marquee>
<marquee behaviour="scroll" direction="up" vsapce="10px">
        	<img src="../Traffic_img/1_2.png" height="100px" width="150px" /></marquee>
<marquee behaviour="scroll" direction="up" hspace="10px">
        	<img src="../Traffic_img/1_3.png" height="100px" width="150px" /></marquee>
<marquee behaviour="scroll" direction="up">
        	<img src="../Traffic_img/1_4.png" height="100px" width="150px" />  </marquee> 
<marquee behaviour="scroll" direction="up">    	
        	<img src="../Traffic_img/1_5.png" height="100px" width="150px" /></marquee>
        	</marquee>
        	
        	
        	
        </div>
      </aside>
    </div>
    <!-- footer -->
    <footer>
    	
      <nav>
        <ul>
        <li><a href="http://localhost/pro/forms/index.php">Home</a>|</li>
          <li><a href="http://localhost/pro/user/contact.html">Contact Us</a>|</li>
          <li><a href="http://localhost/pro/user/feedback.html">Feedback</a></li>
        </ul>

      </nav>
      Online RTO System &nbsp;
    </footer>
  </div>
        
	
          	
    </form>
</body>
</html>