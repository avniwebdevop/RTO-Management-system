<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RTO MANAGEMENT SYSTEM</title>
<meta name="keywords" content="blue smoothie, our company, about us, web design" />
<meta name="description" content="Blue Smoothie, Free Template, Website Design" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
    
<link href="images/logo.png"  type="images/icon" rel="icon"> 

<link rel="stylesheet" type="text/css" href="css/contentslider.css" />
<script type="text/javascript" src="scripts/contentslider.js">

/***********************************************
* Featured Content Slider- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/

</script>
</head>
<body id="home">
<form id="form1" runat="server">
<div id="templatemo_wrapper">
	<div id="templatmeo_header">
    	<div id="site_title"><h1><a href="http://www.templatemo.com">Free CSS Templates</a></h1></div>
        <div id="templatemo_menu">
            <ul>
               <li><a href="index.html" >Home</a></li>
                <li><a href="userreg.html" >User Registration</a></li>
                <li><a href="ulogin.html" class="current">User Login</a></li>
                <li><a href="alogin.html">Admin Login</a></li>
                <li><a href="svehicle.html">Search Vehicles</a></li>
            </ul>    	
        </div> <!-- end of templatemo_menu -->
    </div> <!-- end of header -->
    <!-- | | |   w w w . t e m p l a t e m o . c o m   | | | -->

  <div id="templatemo_middle">
    	<div id="mid_slider"><span></span>
        	<div id="slider1" class="sliderwrapper">

                <div class="contentdiv">
                    <img src="images/slider/image_00.jpg" alt="Image 00" />
                </div>
    
                <div class="contentdiv">
                    <img src="images/slider/image_01.jpg" alt="Image 01" />
                </div>            
                
                <div class="contentdiv">
                    <img src="images/slider/image_02.jpg" alt="Image 02" />
                </div>
                
                <div class="contentdiv">
                    <img src="images/slider/image_03.jpg" alt="Image 03" />
                </div>
            
            </div>
            
            <div id="paginate-slider1" class="pagination">
            
      </div>
            
            <script type="text/javascript">
            
            featuredcontentslider.init({
                id: "slider1",  //id of main slider DIV
                contentsource: ["inline", ""],  //Valid values: ["inline", ""] or ["ajax", "path_to_file"]
                toc: "#increment",  //Valid values: "#increment", "markup", ["label1", "label2", etc]
                nextprev: ["", ""],  //labels for "prev" and "next" links. Set to "" to hide.
                revealtype: "click", //Behavior of pagination links to reveal the slides: "click" or "mouseover"
                enablefade: [true, 0.4],  //[true/false, fadedegree]
                autorotate: [true, 2000],  //[true/false, pausetime]
                onChange: function(previndex, curindex){  //event handler fired whenever script changes slide
                    //previndex holds index of last slide viewed b4 current (1=1st slide, 2nd=2nd etc)
                    //curindex holds index of currently shown slide (1=1st slide, 2nd=2nd etc)
                }
            })
            
            </script>
        </div>
    <div id="mid_left">
       <div id="mid_title">Wel Come To E-RTO</div>
            <p>RTO Management System has been designed to automate the process of registration of vehicles and issuing driving license process .System can make the daily activities  efficient and providing the fast response to store and retrieve information.</p>
            <div id="learn_more"><a href="#">Learn More</a></div>
	  </div>
        <div class="cleaner"></div>
	</div> <!-- end of middle -->
    
     <div id="templatemo_main">
<div id="templatemo_content">
       <center>
<?php
include("connection.php");
?>
    <table>
        <tr>
        <td rowspan="7" class="style1">
        <img src="images/login1.png" alt="Image" height="210px" width="150"/>
        </td>
            <td colspan="3" align="center">
                <h2>User Login</h2></td>     
         </tr>
        <tr>
      <form action ="" method ="post">     
 <td>
                Username:</td>
            <td colspan="2">
                <input type="text" name="uname">
            </td>
        </tr>
        <tr>
            <td>
                Password:</td>
            <td colspan="2">
                <input type="password" name="password">
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center" style="margin-left: 80px">
                <input type="submit" value="login" name="login">
                &nbsp;
                <input type="submit" value="cancel" name="cancel">
            </td>
           </form> 
<?php
if(isset($_POST['login']))
{
$user=$_POST['uname']
$pwd=$_POST['password']
$query=SELECT * FROM userlogin where uname='$user'&&pass='$pwd';
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if( $total==1)
{
echo"login ok";
}
else
{
echo"login Failed";
}
?>
        </tr>
        <tr>
        <td colspan="3">
            &nbsp;</td>
        
        </tr>
        <tr>
        <td colspan="3">
            <a  href="forgetpass.html">Forgot 
            Password</a>        
        </td>
        
        </tr>
        
    </table>
</center>  
        <div class="cleaner"></div>	
</div> <!-- end of templatemo_content -->
    </div> <!-- end of templatemo_main -->
</div> <!-- end of wrapper -->

<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">
    
    	<div class="col_allw300">
        	<h4>Our Pages</h4>
            <ul class="footer_list">
            	<li><a href="index.html">Home</a></li>
                <li><a href="userreg.html">User Registration</a></li>
                <li><a href="ulogin.html">User Login</a></li>
                <li><a href="alogin.html">Admin login</a></li>
                <li><a href="svehicle.html">Search Vehicles</a></li>
            </ul>
        </div>
    	<div class="col_allw300">
        	<h3></h3>
        </div>
    	<div class="col_allw300 col_last">
        	<h4>About Us</h4>
            <p align='left'>This project prepare RTO Office to maintain all the records like issuing the license....</p>
        </div>                
    
        <div class="cleaner"></div>
    
    </div> <!-- end of templatemo_footer -->
     <div class="cleaner"></div>
</div>


<div id="templatemo_copyright_wrapper">
    <div id="templatemo_copyright">
    	
            E-RTO Management System
        
    </div> <!-- end of templatemo_footer -->
</div>
</form>
</body>
</html>