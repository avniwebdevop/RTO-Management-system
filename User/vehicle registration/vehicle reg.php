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
</head>
<body>
    <form id="form1" method="post" action="">
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
            	

<h2><center>VEHICLE REGISTRATION</center></h2><br>

<label> The Registering Authority :</label>
<input name ="owner" type="text" value=""><br><br>



<label> Son/ Wife /Daughter of    &nbsp;   &nbsp;  :</label>
<input name ="gardian" type="text" value=""><br><br>



<label> Age of register owner   &nbsp;   &nbsp;   &nbsp;  :</label>
<input name ="age" type="number" value="16"><br><br>



<label>Permanent Address    &nbsp;   &nbsp;   &nbsp;   &nbsp;  :</label>
<input name ="add" type="text" value=""><br><br>



<label>Vehicle Type&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;     &nbsp;   &nbsp;   &nbsp;  :</label>
<select name="vtype" autofocus>
  <option value="2-Wheeler">2-Wheeler</option>
  <option value="3-Wheeler">3-Wheeler</option>
  <option value="4-Wheeler">4-Wheeler</option>
</select><br><br>



<label>Vehicle Company  &nbsp;  &nbsp; &nbsp;  &nbsp;   &nbsp;   &nbsp;  :</label>
<input name ="vcompany" type="text" value=""><br><br>



<label>Vehicle Model   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   &nbsp;   &nbsp;  :</label>
<input name ="vmodel" type="text" value=""><br><br>



<label>Vehicle Manufacture  &nbsp;    &nbsp;&nbsp;&nbsp;    &nbsp;  :</label>
<input name ="vmanufact" type="text" value=""><br><br>



<label>Area Name   &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;   &nbsp;  :</label>
<input name ="area" type="text" value=""><br><br>



<label>Vehicle Chassis Number  &nbsp;     :</label>
<input name ="vchass" type="text" value=""><br> 



<br><br><br>
<label>   &nbsp;   &nbsp;   &nbsp;  </label>
 &nbsp;   &nbsp; &nbsp;   &nbsp;  &nbsp;   &nbsp; <input name ="submit" type="submit" value="Vehicle Register">&nbsp;   &nbsp;   &nbsp; &nbsp;   &nbsp; 
<input name ="reset" type="reset" value="Reset / Clear">

        
<?php
include("connection.php");
error_reporting(0);

if($_POST['submit']){
$owner=$_POST['owner'];
$gardian=$_POST['gardian'];
$age=$_POST['age'];
$add=$_POST['add'];
$vtype=$_POST['vtype'];
$vcompany=$_POST['vcompany'];
$vmodel=$_POST['vmodel'];
$vmanufact=$_POST['vmanufact'];
$area=$_POST['area'];
$vchass=$_POST['vchass'];

$query="SELECT * FROM  vsearch";

// get result
$q1=mysqli_query($conn,$query) or die(mysqli_error($conn));
$total=$q1->num_rows;
$next=$total+1;


$query1="SELECT * FROM vno WHERE vno=$next";
$result=mysqli_query($conn,$query1)or die(mysqli_error($conn));
while($row=mysqli_fetch_array($result))
{
$vnum=$row[1];
}

echo"<br><br><br>
 <label><h2>&nbsp; &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp; &nbsp;   &nbsp;   &nbsp;&nbsp;   &nbsp; &nbsp;   &nbsp; &nbsp;   &nbsp;  VEHICLE REGISTRATION NUMBER</h2> </label><br>";
 echo"&nbsp;   &nbsp; &nbsp;   &nbsp;   &nbsp;   &nbsp; &nbsp;   &nbsp;   &nbsp; &nbsp;   &nbsp;   &nbsp; &nbsp; &nbsp;   &nbsp; &nbsp;   &nbsp;   &nbsp; &nbsp;   &nbsp; 
<input name ='vnum' type='text' value=".$vnum." >";

$q = "INSERT INTO vsearch VALUES('$vnum','$owner','$gardian','$age','$add','$vtype','$vmodel','$vcompany','$vmanufact','$area','$vchass','$next')";
$result = mysqli_query($conn,$q)or die(mysqli_error($conn));
if($result)
{
alert("Vehicle registered successfully");
}
else
{
alert("Vehicle registered successfully");
}
mysqli_close($conn);
}
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
         <a href="http://localhost/pro/user/Logout.php">Logout</a>                                 
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