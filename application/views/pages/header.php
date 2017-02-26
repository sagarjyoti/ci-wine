
<?php
    
    $uri = $_SERVER['REQUEST_URI'];
    $path = parse_url($uri , PHP_URL_PATH );
    $main = explode('/', $path);
    $active = $main[1];


?>


<!DOCTYPE HTML>
<html>
<head>
<title>Wines shop</title>

<link href="<?php echo base_url();?>assats/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="<?php echo base_url();?>assats/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assats/js/bootstrap.js"></script>
<!-- Custom Theme files -->


<link href="<?php echo base_url();?>assats/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href= "<?php echo base_url();?>assats/css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url();?>assats/css/swipebox.css">
<!-- Custom Theme files -->

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
</script>

<meta name="keywords" content="Wines Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndroidCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!--Google Fonts-->

<link href="<?php echo base_url();?>assats/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->


<script type="text/javascript" src="<?php echo base_url();?>assats/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assats/js/easing.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assats/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assats/js/loder.modern.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->
</head>
<body>
<!--banner start here-->
<div class="banner-1">
	  <div class="container">
  <!--header start here-->
	 <div class="header">
			
				<div class="logo">
					<h1><a href="index.php">WINES</a></h1>
				</div>
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!--/.navbar-header-->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
                                                            <li class="<?php if($active == "Home"){echo "active";} else{echo "inactive" ; } ?>"><a href="<?php echo base_url('Home');?>">Home</a></li>
                                                                <li class="<?php if($active == "About"){echo "active";} else{echo "inactive" ; } ?>"><a href="<?php echo base_url('About');?>">About</a></li>
                                                                <li class="<?php if($active == "Wine"){echo "active";} else{echo "inactive" ; } ?>"><a href="<?php echo base_url('Wine'); ?>">Wines</a></li>
                                                                <li class="<?php if($active == "Product"){echo "active";} else{echo "inactive" ; } ?>"><a href="<?php echo base_url('Product'); ?>">Products</a></li>
                                                                <li class="<?php if($active == "Short Codes"){echo "active";} else{echo "inactive" ; } ?>"><a href="<?php echo base_url('Booking'); ?>">Short Codes</a></li>
                                                                <li class="<?php if($active == "Contact"){echo "active";} else{echo "inactive" ; } ?>"><a href="<?php echo base_url('Contact'); ?>">Contact</a></li>
							</ul>
						</div>
						<!--/.navbar-collapse-->
					</nav>
				<div class="search-box">
					<div id="sb-search" class="sb-search">
						<form action="#" method="post">
							<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
							<input class="sb-search-submit" type="submit" value="">
							<span class="sb-icon-search"> </span>
							</form>
					</div>
				</div>
					<div class="clearfix"> </div>

				<!-- search-scripts -->
					<script src="<?php echo base_url();?>assats/js/classie.js"></script>
					<script src="<?php echo base_url();?>assats/js/uisearch.js"></script>
					<script>
						new UISearch( document.getElementById( 'sb-search' ) );
					</script>
				<!-- //search-scripts -->

			
		</div>
