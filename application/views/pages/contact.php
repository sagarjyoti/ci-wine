<?php $this->load->view('pages/header'); ?>
</div>
</div>
<!--banner end here-->
<!--contact-->
<div class="contact w3l-3">
	 <div class="container">
		<h2>Contact</h2>
			<div class="contact-form w3ls-3">
				<div class="col-md-6 contact-grid">
					<?php echo form_open('UserController/contactus'); ?>
						<p class="your-para">Your Name:</p>
                                                <input class="fname" type="text" name="fname" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}" required>
                                                
                                                <div class="ermsg"  >
                                                    
                                                </div>
                                                
                                               
						
                                                <p class="your-para">Your Mail:</p>
                                                <input class="email" type="email" name="mail" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}" required>
                                                
                                                <div class="mailerr">
                                                    
                                                </div>
                                                
						<p class="your-para">Your Message:</p>
                                                <textarea name="message" onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}" required></textarea>
						<div class="send">
                                                    <input type="submit" name="sub" value="Send">
						</div>
					<?php echo form_close(); ?>
				</div> 
				<div class="col-md-6 contact-in">
					<h4> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolor.</h4>
					<p class="para1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Contrary .</p>
					<div class="more-address"> 
						<div class="address-more">
							<p>World Wine</p>
							<p>Lorem ipsum dolor,</p>
							<p>Jasmin Dr 40 Fe 72. </p>
						</div>
						<div class="address-left">
							<p>Tel:8622-9438</p>
							<p>Fax:190-4509-494</p>
							<p><a href="mailto:sagar.jyoti14@yahoomail.com">Sagar.jyoti14@yahoomail.com</a></p>
						</div>
						<div class="clearfix"> </div>
				      </div>
				</div>
				<div class="clearfix"> </div>
			</div>
							

		  <h3 class="tittle">VIEW ON MAP</h3>
		    <div class="map wthree-3">
				<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2482.432383990807!2d0.028213999961443994!3d51.52362882484525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1423469959819"></iframe>
			</div>
		
	</div>
</div>
<!--contact-->
<!--footer-->
<script type="text/javascript">
    $(document).ready(function (){
        
        $(".fname").change(function (){
            
           var inputname = $(this).val();
           
        $.ajax({
                url: "<?php echo base_url('UserController/contactus'); ?>",
                data: {
                    name:inputname   
                      },
                type: 'POST',
                success: function (data, textStatus, jqXHR) {
                    if(data == 1){
                   $(".ermsg").html('<p style="color: red">Already exist</p><input type="hidden" name="flag" value="1">');
                               }
                               
                        else{
                            
                          $(".ermsg").html('<p style="color: green"> Name is valid</p><input type="hidden" name="flag" value="0">');  
                            }
                               
                }
            });
 
        });             
             
             $(".email").change(function(){
                var inputmail = $(this).val();
//                    alert(inputmail);

                    $.ajax({
                        
                        url : "<?php echo base_url('UserController/contactus'); ?>",
                        data: {
                            email : inputmail 
                            },
                          type : 'post',
                          success : function(data, textStatus, jqXHR ){
                              
                              if(data == 1){
                                $(".mailerr").html('<p style="color: red; "> Email Already  Exist</p>');
                              }
                              else{
                                $(".mailerr").html('<p style="color: green; ">valid email</p>');  
                                }
                          }
                        
                        
                    });
                });
            
        });
        
  
    
    </script>
<?php $this->load->view('pages/footer'); ?>
