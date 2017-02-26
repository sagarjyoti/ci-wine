<!DOCTYPE html>
<html>
<head>
<title>admin conform</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flat Sign Up Form Responsive Widget Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="<?php echo base_url();?>assats/Adminsign_css/css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo base_url();?>assats/Adminsign_css/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Raleway+Dots' rel='stylesheet' type='text/css'>
<style>
    .button{
        color: white;
    background: #d52685;
    border: none;
    padding: 14px 50px;
    font-size: 15px;
    border-radius: 2px;
    margin: 17px;
	font-family: 'Lato', sans-serif;
	cursor:pointer;
	text-transform:uppercase;
	transition:0.5s all;
	-webkit-transition:0.5s all;
	-o-transition:0.5s all;
	-moz-transition:0.5s all;
	-ms-transition:0.5s all;
    }
    .button:hover{
        background: #d9edf7;
    color: black;
	transition:0.5s all;
	-webkit-transition:0.5s all;
	-o-transition:0.5s all;
	-moz-transition:0.5s all;
	-ms-transition:0.5s all;
    }

</style>

</head>
<body>
<!--header-->
	<div class="header-w3l">
		
	</div>
<!--//header-->
<!--main-->
<div class="main-agileits">
	<h2 class="sub-head">confirm email</h2>
		<div class="sub-main">	
			<?php echo form_open('AdminController/conformmail'); ?>
<!--				<input placeholder="UserName" name="Name" class="name" type="text" required="">
					<span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span><br>
				
                                <input  placeholder="Password" name="Password" class="pass" type="password" required="">
					<span class="icon5"><i class="fa fa-unlock" aria-hidden="true"></i></span><br>
				
                                <input  placeholder="Confirm Password" name="Password" class="pass" type="password" required="">
					<span class="icon6"><i class="fa fa-unlock" aria-hidden="true"></i></span><br>
                                        
                                <input placeholder="Last Name" name="Name" class="name2" type="text" required="">
					<span class="icon2"><i class="fa fa-user" aria-hidden="true"></i></span><br>
				
                                <input placeholder="Phone Number" name="Number" class="number" type="text" required="">
					<span class="icon3"><i class="fa fa-phone" aria-hidden="true"></i></span><br>
				-->
                                <input placeholder="Enter Your Valid Email" name="mail" class="mail" type="email" required>
<!--					<span class="icon4"><i class="fa fa-envelope" aria-hidden="true"></i></span><br>-->
                                
                                
				
                                <input type="submit" name="sub" value="confirm">
			<?php echo form_close(); ?>
                                <button type="button" class="button" onclick="location.href='<?php echo base_url(); ?>AdminController'" >Home</button>
		</div>
		<div class="clear"></div>
</div>
<!--//main-->

<!--footer-->
<div class="footer-w3">
	
</div>
<!--//footer-->

</body>
</html>
