<?php

include("header.php");


?>

<html>
<head>
<title>PET STORE</title>
<link rel="stylesheet" type="text/css" href="css/style.css">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
    var $display = $('.display');
	setInterval(function(){
      var $pics = $display.children();
	  $pics.eq(0).fadeOut(1000,function(){
      $(this).appendTo($display);
      });
    $pics.eq(1).delay(500).fadeIn(1000);
    }, 5000);
  });
</script>  



</head>

<body>
<div id="main_page">
    <div id="slideshow">
    <ul class="display">
        <li><div><img src="images/1.jpg"></div></li>
        <li><div><img src="images/2.jpg"></div></li>
        <li><div><img src="images/3.jpg"></div></li>
        <li><div><img src="images/4.jpg"></div></li>
        <li><div><img src="images/5.jpg"></div></li>
      </ul>
    
    
    </div>

<div id="quick_links">
<h3>QUICK LINKS</h3>
<ul>
<li>Home</li>
<li>About Us</li>
<li> Contact</li>
<li>Register</li>
<li>Sign In</li>
</ul>

</div>


</div>
<div id="extra">
<br /><br />
hello..
it is body !!
<br />
<a href="register.php">Click here for register page</a>
</div>
</body>
</html>