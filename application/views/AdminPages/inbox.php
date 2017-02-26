



<?php $this->load->view('AdminPages/header'); ?>



<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">Inbox</h3>
					<div class="xs">
						<div class="col-md-4 email-list1">
							<ul class="collection">
								<li class="collection-item avatar email-unread">
								  <i class="fa fa-users icon_1"></i>
								  <div class="avatar_left">
									<span class="email-title">Social</span>
									<p class="truncate grey-text ultra-small">Lorem Ipsum is simply dummy text of.</p>
								  </div>
								  <a href="#!" class="secondary-content"><span class="new badge1 blue">4</span></a>
								  <div class="clearfix"> </div>
								</li>
								<li class="collection-item avatar email-unread">
								  <i class="fa fa-exclamation-circle icon_2"></i>
								  <div class="avatar_left">
									<span class="email-title">Updates</span>
									<p class="truncate grey-text ultra-small">It is a long established fact that a reader.</p>
								  </div>
								  <a href="#!" class="secondary-content"><span class="new badge1 red">4</span></a>
								  <div class="clearfix"> </div>
								</li>
								<li class="collection-item avatar email-unread">
								  <i class="fa fa-tag icon_3"></i>
								  <div class="avatar_left">
									<span class="email-title">Promotions</span>
									<p class="truncate grey-text ultra-small">There are many variations of passages.</p>
								  </div>
								  <a href="#!" class="secondary-content"><span class="new badge1 blue1">4</span></a>
								  <div class="clearfix"> </div>
								</li>
								<li class="collection-item avatar email-unread">
								  <i class="icon_4">G</i>
								  <div class="avatar_left">
									<a href="#"><span class="email-title">Gmail</span></a>
									<p class="truncate grey-text ultra-small">Sed ut perspiciatis unde omnis iste.</p>
								  </div>
								  <a href="#!" class="secondary-content"><span class="blue-text ultra-small">2:15 pm</span></a>
								  <div class="clearfix"> </div>
								</li>
								<li class="collection-item avatar email-unread">
								  <i class="icon_4 icon_5">F</i>
								  <div class="avatar_left">
									<a href="#"><span class="email-title">Facebook</span></a>
									<p class="truncate grey-text ultra-small">But I must explain to you how.</p>
								  </div>
								  <a href="#!" class="secondary-content"><span class="blue-text ultra-small">2:15 pm</span></a>
								  <div class="clearfix"> </div>
								</li>
								<li class="collection-item avatar email-unread email_last">
								  <i class="icon_4 icon_6">T</i>
								  <div class="avatar_left">
									<a href="#"><span class="email-title">Twitter</span></a>
									<p class="truncate grey-text ultra-small">At vero eos et accusamus et iusto odio.</p>
								  </div>
								  <a href="#!" class="secondary-content"><span class="blue-text ultra-small">2:15 pm</span></a>
								  <div class="clearfix"> </div>
								</li>
							</ul>
							<div class="content-box  mrg15B">
							  <div class="content-box-wrapper text-center">
								<h4 class="content-box-header">
								Chat
								<small>(Online friends)</small>
								</h4>
								<div class="status-badge mrg10A">
									<img class="img-circle" width="40" src="<?php echo base_url(); ?>assats/admincss/images/1.png" alt="">
									<div class="small-badge bg-red"></div>
								</div>
								<div class="status-badge mrg10A">
									<img class="img-circle" width="40" src="<?php echo base_url(); ?>assats/admincss/images/3.png" alt="">
									<div class="small-badge bg-red"></div>
								</div>
								<div class="status-badge mrg10A">
									<img class="img-circle" width="40" src="<?php echo base_url(); ?>assats/admincss/images/4.png" alt="">
									<div class="small-badge bg-green1"></div>
								</div>
								<div class="status-badge mrg10A">
									<img class="img-circle" width="40" src="<?php echo base_url(); ?>assats/admincss/images/5.png" alt="">
									<div class="small-badge bg-orange"></div>
								</div>
								<div class="status-badge mrg10A">
									<img class="img-circle" width="40" src="<?php echo base_url(); ?>assats/admincss/images/1.png" alt="">
									<div class="small-badge bg-red"></div>
								</div>
								<div class="status-badge mrg10A">
									<img class="img-circle" width="40" src="<?php echo base_url(); ?>assats/admincss/images/4.png" alt="">
									<div class="small-badge bg-green1"></div>
								</div>
								<div class="status-badge mrg10A">
									<img class="img-circle" width="40" src="<?php echo base_url(); ?>assats/admincss/images/3.png" alt="">
									<div class="small-badge bg-orange"></div>
								</div>
							  </div>
							</div>
						</div>
						<div class="col-md-8 inbox_right">
							<form action="#" method="GET">
								<div class="input-group input-group-ind">
									<input type="text" name="search" class="form-control1 input-search" placeholder="Search...">
									<span class="input-group-btn">
										<button class="btn btn-success" type="submit"><i class="fa fa-search icon-ser"></i></button>
									</span>
								</div><!-- Input Group -->
							</form>
							<div class="mailbox-content">
							   <div class="mail-toolbar clearfix">
								 <div class="float-left">
									<div class="btn btn_1 btn-default mrg5R">
									   <i class="fa fa-refresh"> </i>
									</div>
									<div class="dropdown">
										<a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
											<i class="fa fa-cog icon_8"></i>
											<i class="fa fa-chevron-down icon_8"></i>
										<div class="ripple-wrapper"></div></a>
										<ul class="dropdown-menu float-right">
											<li>
												<a href="#" title="">
													<i class="fa fa-pencil-square-o icon_9"></i>
													Edit
												</a>
											</li>
											<li>
												<a href="#" title="">
													<i class="fa fa-calendar icon_9"></i>
													Schedule
												</a>
											</li>
											<li>
												<a href="#" title="">
													<i class="fa fa-download icon_9"></i>
													Download
												</a>
											</li>
											<li class="divider"></li>
											<li>
												<a href="#" class="font-red" title="">
													<i class="fa fa-times" icon_9=""></i>
													Delete
												</a>
											</li>
										</ul>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="float-right">
									
										  
											<span class="text-muted m-r-sm">Showing <?php echo count($result); ?> </span>
											<div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
												<div class="btn-group">
													<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-folder"></i> <span class="caret"></span></a>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li><a href="#">Social</a></li>
														<li><a href="#">Forums</a></li>
														<li><a href="#">Updates</a></li>
														<li class="divider"></li>
														<li><a href="#">Spam</a></li>
														<li><a href="#">Trash</a></li>
														<li class="divider"></li>
														<li><a href="#">New</a></li>
													</ul>
												</div>
												<div class="btn-group">
													<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tags"></i> <span class="caret"></span></a>
													<ul class="dropdown-menu dropdown-menu-right" role="menu">
														<li><a href="#">Work</a></li>
														<li><a href="#">Family</a></li>
														<li><a href="#">Social</a></li>
														<li class="divider"></li>
														<li><a href="#">Primary</a></li>
														<li><a href="#">Promotions</a></li>
														<li><a href="#">Forums</a></li>
													</ul>
												</div>
											</div>
											<div class="btn-group">
												<a class="btn btn-default"><i class="fa fa-angle-left"></i></a>
												<a class="btn btn-default"><i class="fa fa-angle-right"></i></a>
											</div>
										
									
								</div>
							   </div>
								<table class="table table-fhr">
                                                                    <?php foreach($result as $value){ ?>
									<tbody>
										<tr class="unread checked">
											<td class="hidden-xs">
												<input type="checkbox" class="checkbox">
											</td>
											<td class="hidden-xs">
												<i class="fa fa-star icon-state-warning"></i>
											</td>
											<td class="hidden-xs">
												<?php echo $value['name']; ?>
											</td>
											<td>
												<?php echo $value['message']; ?>
											</td>
											<td>
											</td>
											<td>
												<?php echo date('d/m/y');?>
											</td>
                                                                                        <td>
<!--                                                                                            <a href="<?php //echo base_url('AdminController/delmail').'/'. $value['id']; ?>">Delete</a>-->
                                                                                            <?php $key = base64_encode($value['id']); ?>
                                                                                            
                                                                                        <a href="<?php echo base_url('AdminController/delmail').'/'. $key ; ?>" class="font-red" title="">
													<i class="fa fa-times" icon_9=""></i>
													Delete
												</a>
                                                                                        
                                                                                        </td>
										</tr>
                                                                    <?php } ?>
										
									</tbody>
								</table>
							   </div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col_1">
						<div class="col-md-4 span_8">
							<div class="activity_box">
								<h3>Inbox</h3>
								<div class="scrollbar scrollbar1" id="style-2">
									
                                                                    <?php foreach ($result as $value){ ?>
                                                                    <div class="activity-row">
										<div class="col-xs-3 activity-img"><img src="<?php echo base_url(); ?>assats/admincss/images/1.png" class="img-responsive" alt=""></div>
										<div class="col-xs-7 activity-desc">
											<h5><a href="#"><?php echo $value['name']; ?></a></h5>
											<p><?php echo $value['message']; ?></p>
										</div>
										<div class="col-xs-2 activity-desc1"><h6><?php echo date('h:i:s') ?></h6></div>
										<div class="clearfix"> </div>
									</div>
                                                                    <?php } ?>
									
								</div>
							</div>
						</div>
						<div class="col-md-4 span_8">
							<div class="activity_box activity_box1">
								<h3>chat</h3>
								<div class="scrollbar" id="style-2">
									<div class="activity-row activity-row1">
										<div class="col-xs-3 activity-img"><img src="<?php echo base_url(); ?>assats/admincss/images/1.png" class="img-responsive" alt=""><span>10:00 PM</span></div>
										<div class="col-xs-5 activity-img1">
											<div class="activity-desc-sub">
												<h5>John Smith</h5>
												<p>Hello !</p>
											</div>
										</div>
										<div class="col-xs-4 activity-desc1"></div>
										<div class="clearfix"> </div>
									</div>
									<div class="activity-row activity-row1">
										<div class="col-xs-2 activity-desc1"></div>
										<div class="col-xs-7 activity-img2">
											<div class="activity-desc-sub1">
												<h5>Adom Smith</h5>
												<p>Hi,How are you ? What about our next meeting?</p>
											</div>
										</div>
										<div class="col-xs-3 activity-img"><img src="<?php echo base_url(); ?>assats/admincss/images/3.png" class="img-responsive" alt=""><span>10:02 PM</span></div>
										<div class="clearfix"> </div>
									</div>
									<div class="activity-row activity-row1">
										<div class="col-xs-3 activity-img"><img src="<?php echo base_url(); ?>assats/admincss/images/1.png" class="img-responsive" alt=""><span>10:00 PM</span></div>
										<div class="col-xs-5 activity-img1">
											<div class="activity-desc-sub">
												<h5>John Smith</h5>
												<p>Yeah fine</p>
											</div>
										</div>
										<div class="col-xs-4 activity-desc1"></div>
										<div class="clearfix"> </div>
									</div>
									<div class="activity-row activity-row1">
										<div class="col-xs-2 activity-desc1"></div>
										<div class="col-xs-7 activity-img2">
											<div class="activity-desc-sub1">
												<h5>Adom Smith</h5>
												<p>Wow that's great</p>
											</div>
										</div>
										<div class="col-xs-3 activity-img"><img src="<?php echo base_url(); ?>assats/admincss/images/3.png" class="img-responsive" alt=""><span>10:02 PM</span></div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<form>
									<input type="text" value="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
									<input type="submit" value="Send" required="">		
								</form>
							</div>
						</div>
						<div class="col-md-4 span_8">
							<div class="activity_box activity_box2">
								<h3>todo</h3>
								<div class="scrollbar" id="style-2">
									<div class="activity-row activity-row1">
										<div class="single-bottom">
											<ul>
												<li>
													<input type="checkbox" id="brand" value="">
													<label for="brand"><span></span> Sunt in culpa qui officia.</label>
												</li>
												<li>
													<input type="checkbox" id="brand1" value="">
													<label for="brand1"><span></span> Fugiat quo voluptas nulla.</label>
												</li>
												<li>
													<input type="checkbox" id="brand2" value="">
													<label for="brand2"><span></span> Dolorem eum.</label>
												</li>
												<li>
													<input type="checkbox" id="brand9" value="">
													<label for="brand9"><span></span> Pain that produces no resultant.</label>
												</li>
												<li>
													<input type="checkbox" id="brand8" value="">
													<label for="brand8"><span></span> Cupidatat non proident.</label>
												</li>
												<li>
													<input type="checkbox" id="brand7" value="">
													<label for="brand7"><span></span> Praising pain was born.</label>
												</li>
												<li>
													<input type="checkbox" id="brand3" value="">
													<label for="brand3"><span></span> Computer &amp; Electronics</label>
												</li>
												<li>
													<input type="checkbox" id="brand4" value="">
													<label for="brand4"><span></span> Dolorem ipsum quia.</label>
												</li>
												<li>
													<input type="checkbox" id="brand5" value="">
													<label for="brand5"><span></span> Consequatur aut perferendis.</label>
												</li>
												<li>
													<input type="checkbox" id="brand6" value="">
													<label for="brand6"><span></span> Dolorem ipsum quia.</label>
												</li>
												
												
											</ul>
										</div>
									</div>
								</div>
								<form>
									<input type="text" value="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
									<input type="submit" value="Submit" required="">		
								</form>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="clearfix"> </div>
						
					</div>
				</div>
			</div>
		</div>
	<?php $this->load->view('AdminPages/footer'); ?>
