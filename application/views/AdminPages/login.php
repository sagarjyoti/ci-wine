<!DOCTYPE html>
<html>
<head>
<title>Admin login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Boundary Sign in Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="<?php echo base_url(); ?>assats/logincss/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href='//fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>
<!-- //web font -->

</head>
<body>
	
<!--form-stars-here-->
		<div class="login-form w3-agile">
                    <h2>Admin Log in</h2>
                        
                        
			
                                           
                        <?php echo form_open('AdminlogController'); ?>
                                <p class="highlight">username</p>
					<input type="text" name="username" placeholder=" " required="" />
					<p class="highlight">password</p>
					<input type="password" name="password" placeholder="" required="" />
                                        <input type="submit" name="sub" value="sign in">
			<?php echo form_close(); ?>
                         
                                           
                                       
		</div>
<!--//form-ends-here-->
<!-- copyright -->
	
	<!-- //copyright --> 
        
</body>
</html>
