<?php // print_r($result); ?>
<?php $this->load->view('pages/header'); ?>

</div>
</div>
<!--banner end here-->
<!--asingle-->
<div class="single w3l-5">
		<div class="container">
				<div class="single-left1 w3ls-5">
					<img src="<?php echo base_url();?>assats/images/2.jpg" alt=" " class="img-responsive">
					<h2>Sed ut perspiciatis unde omnis iste natus error sit</h2>
					<ul>
					
						<li><span class="glyphicon glyphicon-share" aria-hidden="true"></span><a href="#">View Posts</a></li>
						<li><span class="glyphicon glyphicon-tag" aria-hidden="true"></span><a href="#">5 Tags</a></li>
						<li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>May 10, 2016</li>
						<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="#">5 Comments</a></li>
					</ul>
					<p>But I must explain to you how all this mistaken idea of denouncing 
						pleasure and praising pain was born and I will give you a complete 
						account of the system, and expound the actual teachings of the great 
						explorer of the truth, the master-builder of human happiness. 
						No one rejects, dislikes, or avoids pleasure itself, because it is 
						pleasure, but because those who do not know how to pursue pleasure 
						rationally encounter consequences that are extremely painful. 
						Nor again is there anyone who loves or pursues or desires to obtain 
						pain of itself, because it is pain, but because occasionally 
						circumstances occur in which toil and pain can procure him some great 
						pleasure.</p>
						<p>I will give you a complete 
						account of the system, and expound the actual teachings of the great 
						explorer of the truth, the master-builder of human happiness. 
						No one rejects, dislikes, or avoids pleasure itself, because it is 
						pleasure, but because those who do not know how to pursue pleasure 
						rationally encounter consequences that are extremely painful. 
						Nor again is there anyone who loves or pursues or desires to obtain 
						pain of itself, because it is pain, but because occasionally.</p>
				</div>
				
				<div class="comments agile-5">
					<h3>Recent Comments</h3>
					<div class="comments-grids">
						<div class="comments-grid">
                                                    
							<div class="comments-grid-left">
								<img src="<?php //echo base_url();?>assats/images/13.jpg" alt=" " class="img-responsive">
							</div>
                                                    <?php foreach($result as $value){ ?>
							<div class="comments-grid-right">
								<h4><a href="#"><?php echo $value['name']; ?></a></h4>
								<ul>
                                                                    <?php $array = explode(' ',$value['date']);
                                                                          $date = explode('-', $array[0]);
                                                                          $year = $date[0];
                                                                          $month = $date[1];
                                                                          $day = $date[2];
                                                                          
                                                                          
                                                                    ?>
                                                                    <?php ?>
                                                                    <li><?php  echo $day .'/'. $month .'/'. $year ?> <i>|</i></li>
									<li><a href="#">Reply</a></li>
								</ul>
								<p><?php echo $value['comment']; ?></p>
							</div>
                                                    <?php } ?>
							<div class="clearfix"> </div>
						</div>
						
						
						
					</div>
				</div>
				<div class="leave-coment-form agileits-5">
					<h3>Leave Your Comment</h3>
					<?php echo form_open('UserController/comment') ?>
                                                <input type="hidden" value="<?php echo date("y/m/d h-i-sa"); ?>" name="date"> 
						<input type="text" value="name " name="fname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
						<input type="email" value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
						<textarea type="text" name="comment" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Comment...';}" required="">Your Comment...</textarea>
                                                <input type="submit" name="sub"  value="Submit Comment">
                                                
					<?php echo form_close() ?>
				</div>
			
		
		</div>
	</div>
<!--about-->
<!--footer-->
<?php $this->load->view('pages/footer'); ?>
