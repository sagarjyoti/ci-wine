
<?php $this->load->view('pages/header'); ?>
<!--header end here-->
<?php // print_r($result); ?>
</div>
</div>
<!--banner end here-->
<!--gallery-starts--> 
<div class="facilities w3l-1">
	<div class="container">
			
			<script src="<?php echo base_url();?>assats/js/jquery.swipebox.min.js"></script> 
			<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
			</script>
			 <h2>Wines</h2>
                            <?php 
                                if($result){
                                foreach($result as $value){ 
                                
                            
?>
				<div class="view view-seventh">
                    <a href="<?php echo $value['filepath'] ?>" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="<?php echo $value['filepath']; ?>" alt="" class="img-responsive">
                    <div class="mask">
                       <h4>WINE</h4>
                    </div></a>
                </div>
                            <?php } 
                                }
                                else{
                                    echo "<span class='empty'>Empty gallery. You need to photo upload</span>";
                                }
                            
                            
                            ?>
<!--                <div class="view view-seventh">
                    <a href="<?php //echo base_url();?>assats/images/6.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="<?php echo base_url();?>assats/images/6.jpg" alt="" class="img-responsive">
                    <div class="mask">
                         <h4>WINE</h4>
                    </div></a>
                </div>
                <div class="view view-seventh">
                    <a href="<?php // echo base_url();?>assats/images/7.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="<?php echo base_url();?>assats/images/7.jpg" alt="" class="img-responsive">
                    <div class="mask">
                        <h4>WINE</h4>
                    </div></a>
                </div>
				<div class="view view-seventh">
                    <a href="<?php //echo base_url();?>assats/images/8.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="<?php echo base_url();?>assats/images/8.jpg" alt="" class="img-responsive">
                    <div class="mask">
                       <h4>WINE</h4>
                    </div></a>
                </div>
                <div class="view view-seventh">
                    <a href="<?php //echo base_url();?>assats/images/11.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="<?php echo base_url();?>assats/images/11.jpg" alt="" class="img-responsive">
                    <div class="mask">
                        <h4>WINE</h4>
                    </div></a>
                </div>
                <div class="view view-seventh">
                    <a href="<?php //echo base_url();?>assats/images/12.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="<?php echo base_url();?>assats/images/12.jpg" alt="" class="img-responsive">
                    <div class="mask">
                         <h4>WINE</h4>
                    </div></a>
                </div>
								

                <div class="view view-seventh">
                    <a href="<?php // echo base_url();?>assats/images/5.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="<?php echo base_url();?>assats/images/5.jpg" alt="" class="img-responsive">
                    <div class="mask">
                       <h4>WINE</h4>
                    </div></a>
                </div>
				<div class="view view-seventh">
                    <a href="<?php // echo base_url();?>assats/images/6.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="<?php echo base_url();?>assats/images/6.jpg" alt="" class="img-responsive">
                    <div class="mask">
                         <h4>WINE</h4>
                    </div></a>
                </div>
				<div class="view view-seventh">
                    <a href="<?php // echo base_url();?>assats/images/8.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="<?php echo base_url();?>assats/images/8.jpg" alt="" class="img-responsive">
                    <div class="mask">
                         <h4>WINE</h4>
                    </div></a>
                </div>-->
				<div class="clearfix"></div>
	</div>
</div>
<!--gallery-ends--> 
<!--footer-->
<?php $this->load->view('pages/footer'); ?>
