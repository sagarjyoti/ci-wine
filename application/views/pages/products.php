<?php $this->load->view('pages/header'); ?>
</div>
</div>
<!--banner end here-->
<!--products-->
<div class="services w3l-4">
					<div class="container">
						<h2>Our Products</h2>
						<div class="services-grids w3ls-4">
                                                    
                                                    <?php foreach($result as $value){ ?> 
                                                        
							
                                                    <div class="col-md-4 services-grid">
                                                            <a href="<?php echo base_url('UserController/single'); ?>" class="mask">					
									<img src="<?php echo base_url();?>assats/images/8.jpg" class="img-responsive zoom-img" alt="">
								</a>							
                                                            <h4><?php  print_r ($value['product_name']); ?></h4>
                                                            <p><?php   print_r($value['product_details']); ?></p>
							</div>
                                                    
                                                    <?php }  ?>
<!--										-->
							<div class="clearfix"></div>
					   </div>
					  
				</div>
			</div>
<!--products-->
<!--footer-->
<?php $this->load->view('pages/footer'); ?>
