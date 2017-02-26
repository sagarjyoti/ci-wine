<?php //print_r($result); ?>

<?php $this->load->view('pages/header'); ?>
<!--header end here-->


 	<div class="banner-main">

	  <section class="slider">
           <div class="flexslider">
             <ul class="slides">
				   <li>
				   <img src="<?php echo base_url();?>assats/images/4444.png" class="img-responsive" alt="">
				   <h3>At vero eos et accusamus </h3>
					<p> ducimus qui blanditiis praesentium voluptatum atque corrupti quos dolores deleniti atque corrupti quos dolores et quas.</p>
				   </li>
				   <li>
				    <img src="<?php echo base_url();?>assats/images/5555.png" class="img-responsive" alt="">
				   <h3>Accusamus et iusto odio </h3>
					<p> ducimus qui blanditiis praesentium atque corrupti quos dolores voluptatum deleniti atque corrupti quos dolores et quas.</p>
				   </li>
				   <li>
				    <img src="<?php echo base_url();?>assats/images/4444.png" class="img-responsive" alt="">
				   <h3>Et accusamus et iusto </h3>
					<p> ducimus qui blanditiis praesentium voluptatum atque corrupti quos dolores deleniti atque corrupti quos dolores et quas.</p>
				   </li>
          </ul>
        </div>
      </section>
	
	</div>

<!--FlexSlider-->
	<link rel="stylesheet" href="<?php echo base_url();?>assats/css/flexslider.css" type="text/css" media="screen" />
	<script defer src="<?php echo base_url();?>assats/js/jquery.flexslider.js"></script>
	<script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
</div>
</div>
<!--banner end here-->
<!--welcome-->
<div class="welcome w3l">
			<div class="container">
			<h3>welcome</h3>
				<div class="welcome-grids">
					<div class="col-md-4 welcome-grid wow fadeInLeft animated" data-wow-delay=".5s">
						<div class="wel1 hvr-bounce-to-bottom">
						<span class="glyphicon glyphicon-glass" aria-hidden="true"></span>
						<h4>famous wines</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum velit.Lorem ipsum dolor sit amet.</p>
					</div>
					</div>
					<div class="col-md-4 welcome-grid animated wow fadeInUp animated animated" data-wow-duration="1200ms" data-wow-delay="500ms">
						<div class="wel2 hvr-bounce-to-bottom">
						<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
						<h4>featured persons</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum velit.Lorem ipsum dolor sit amet.</p>
						</div>
						</div>
					<div class="col-md-4 welcome-grid wow fadeInRight animated" data-wow-delay=".5s">
							
					<div class="wel3 hvr-bounce-to-bottom">
						<span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
						<h4>persons liked</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisc elit. Proin ultricies vestibulum velit.Lorem ipsum dolor sit amet.</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
<!--welcome-->
<!--admission-->
<div class="admission w3ls">
	   <div class="container">
	   	 <div class="faculty_top">
	   	  <div class="col-md-4 faculty_grid wow fadeInLeft animated" data-wow-delay=".5s">
	   	  	<figure class="team_member">
	   	  		<img src="<?php echo base_url();?>assats/images/5.jpg" class="img-responsive wp-post-image" alt="">
	   	  		<div></div>
	   	  		<figcaption><h3 class="person-title"><a href="<?php echo base_url('UserController/single'); ?>">Wines</a></h3>
	   	  			<span class="person-deg">Red Wine</span>
	   	  			<p><a href="mailto:info@example.com">info(at)wine.com</a></p>
	   	  			<p>4 Years</p>
	   	  			
	   	  	   </figcaption>
	   	  	 </figure>
	   	  </div>
	   	  <div class="col-md-4 faculty_grid animated wow fadeInUp animated animated" data-wow-duration="1200ms" data-wow-delay="500ms">
	   	  	<figure class="team_member">
	   	  		<img src="<?php echo base_url();?>assats/images/7.jpg" class="img-responsive wp-post-image" alt="">
	   	  		<div></div>
	   	  		<figcaption><h3 class="person-title"><a href="<?php echo base_url('UserController/single'); ?>">Wines</a></h3>
	   	  			<span class="person-deg">Blue Wine</span>
	   	  			<p><a href="mailto:info@example.com">info(at)wine.com</a></p>
	   	  			<p>4 Years</p>
	   	  			
	   	  	   </figcaption>
	   	  	 </figure>
	   	  </div>
	   	  <div class="col-md-4 faculty_grid wow fadeInRight animated" data-wow-delay=".5s">
	   	  	<figure class="team_member">
	   	  		<img src="<?php echo base_url();?>assats/images/6.jpg" class="img-responsive wp-post-image" alt="">
	   	  		<div></div>
	   	  		<figcaption><h3 class="person-title"><a href="<?php echo base_url('UserController/single'); ?>">Wines </a></h3>
	   	  			<span class="person-deg">Green Wine</span>
	   	  			<p><a href="mailto:info@example.com">info(at)wine.com</a></p>
	   	  			<p>4 Years</p>
	   	  			
	   	  	   </figcaption>
	   	  	 </figure>
	   	  </div>
	   	  
	   	
	   	  <div class="col-md-4 faculty_grid wow fadeInLeft animated" data-wow-delay=".5s">
	   	  	<figure class="team_member">
	   	  		<img src="<?php echo base_url();?>assats/images/11.jpg" class="img-responsive wp-post-image" alt="">
	   	  		<div></div>
	   	  		<figcaption><h3 class="person-title"><a href="<?php echo base_url('UserController/single'); ?>">Wines</a></h3>
	   	  			<span class="person-deg">Red Wine</span>
	   	  			<p><a href="mailto:info@example.com">info(at)wine.com</a></p>
	   	  			<p>4 Years</p>
	   	  			
	   	  	   </figcaption>
	   	  	 </figure>
	   	  </div>
	   	  <div class="col-md-4 faculty_grid animated wow fadeInUp animated animated" data-wow-duration="1200ms" data-wow-delay="500ms">
	   	  	<figure class="team_member">
	   	  		<img src="<?php echo base_url();?>assats/images/8.jpg" class="img-responsive wp-post-image" alt="">
	   	  		<div></div>
	   	  		<figcaption><h3 class="person-title"><a href="<?php echo base_url('UserController/single'); ?>">Wines</a></h3>
	   	  			<span class="person-deg">Red Wine</span>
	   	  			<p><a href="mailto:info@example.com">info(at)wine.com</a></p>
	   	  			<p>4 Years</p>
	   	  			
	   	  	   </figcaption>
	   	  	 </figure>
	   	  </div>
	   	  <div class="col-md-4 faculty_grid wow fadeInRight animated" data-wow-delay=".5s">
	   	  	<figure class="team_member">
	   	  		<img src="<?php echo base_url();?>assats/images/12.jpg" class="img-responsive wp-post-image" alt="">
	   	  		<div></div>
	   	  		<figcaption><h3 class="person-title"><a href="<?php echo base_url('UserController/single'); ?>">Wines</a></h3>
	   	  			<span class="person-deg">Red Wine</span>
	   	  			<p><a href="mailto:info@example.com">info(at)wine.com</a></p>
	   	  			<p>4 Years</p>
	   	  			
	   	  	   </figcaption>
	   	  	 </figure>
	   	  </div>
	   	  <div class="clearfix"> </div>
	   	 </div>
	  </div>
	</div>
<!--admission-->
<!--content-middle-->
		<div class="content-middle wthree">
			<div class="container">
				<div class="mid-content wow fadeInRight animated" data-wow-delay=".5s">
					<h3>the best features</h3>
					<p>Contrary to popular belief
							, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
					<a class="hvr-sweep-to-right more-in" href="<?php echo base_url('UserController/single'); ?>">Read More</a>
				</div>
			</div>
		</div>
<!--content-middle-->
<!--events-->
<div class="events agile">
		<div class="container">
			<div class="events-grids">
				<div class="col-md-6 events-left wow fadeInLeft animated" data-wow-delay=".5s">
					<h3>Voluptatemut enim</h3>
					<h5>Magnam aliquam quaerat voluptatemut enim minima veniam, quis nostrum .</h5>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum </p>
				</div>
				<div class="col-md-6 events-right wow fadeInRight animated" data-wow-delay=".5s">	
					<h3>Upcoming Events</h3>
                                        <?php foreach($result as $value){ ?>
					<ul>
                                                 
						<li><a href="<?php echo base_url('UserController/single'); ?>"><?php echo $value['event_desc']; ?></a></li>
						
                                                 
                                        </ul>
                                        <?php } ?>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="bnr-galry">
				<div class="col-md-6 bnr-galry-left wow fadeInLeft animated" data-wow-delay=".5s">
					<a href="<?php echo base_url('UserController/single'); ?>" class="mask">					
						<img src="<?php echo base_url();?>assats/images/4.jpg" class="img-responsive zoom-img" alt="">
					</a>
				</div>
				<div class="col-md-6 bnr-galry-right wow fadeInRight animated" data-wow-delay=".5s">
					<a href="<?php echo base_url('UserController/single'); ?>" class="mask">					
						<img src="<?php echo base_url();?>assats/images/10.jpg" class="img-responsive zoom-img" alt="">
					</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
<!--events-->
<!--footer-->
<?php  $this->load->view('pages/footer'); ?>
