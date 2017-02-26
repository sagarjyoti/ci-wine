
<?php // print_r($data); ?>
<!DOCTYPE html>
<html>
<head>
<title>sign up</title>
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
<link href="<?php echo base_url();?>assats/Adminsign_css/css/sweetalert.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<script src="<?php echo base_url();?>assats/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assats/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assats/Adminsign_css/css/sweetalert.min.js"></script>
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
	<h2 class="sub-head">Sign Up</h2>
		<div class="sub-main">	
			<?php echo form_open('AdminController/updateAdmin' , array('id' => 'form')); ?>
                    
                    <input value="<?php  echo $data[0]['admin_id']; ?>"  name="id" class="name" type="hidden" required="">
                           
                    <input value="<?php // echo $data[0]['username']; ?>" placeholder="Old Username"  name="fname" class="name username" id="" type="text" required>
<!--					<span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span><br>-->
                    <span class="newuser"></span>
                    <span class="erruser"></span>
                            
                    
                    <input value="<?php // echo  $data[0]['password']; ?>" placeholder="Old Password"  name="Password" class="pass userpass" type="password" required>
<!--					<span class="icon5"><i class="fa fa-unlock" aria-hidden="true"></i></span><br>-->
                    <span class="newpass"></span>
                    <span class="errpass"></span>
				
<!--                                <input  placeholder="Confirm Password" name="conpassword" class="pass" type="password" required="">-->
<!--					<span class="icon6"><i class="fa fa-unlock" aria-hidden="true"></i></span><br>-->
                                        
<!--                                <input placeholder="Last Name" name="Name" class="name2" type="text" required="">
					<span class="icon2"><i class="fa fa-user" aria-hidden="true"></i></span><br>-->
				
<!--                                <input placeholder="Phone Number" name="Number" class="number" type="text" required="">
					<span class="icon3"><i class="fa fa-phone" aria-hidden="true"></i></span><br>-->
				
                                
                    <input value="<?php // echo $data[0]['email']; ?>" placeholder="Enter Your E-mail"  name="email" class="mail email" type="email" required>
                    <span class="newmail"></span>
                    <span class="errmail"></span>
<!--					<span class="icon4"><i class="fa fa-envelope" aria-hidden="true"></i></span><br>-->
                                
                                
				
                    <input type="submit" name="sub" onclick="success()" id="success" value="sign up">
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
<script type="text/javascript">
            
            $(document).ready(function(){
                $('.username').change(function(){
                    
                    var name = $(this).val();
//                    alert(name);
                    $.ajax({
                        url : "<?php echo base_url().'AdminController/updateAdmin'; ?>",
                        data: {
                            fname : name
                            },
                        type : 'post',
                        success : function(data, textStatus, jqXHR){
                            if(data == 1){
 //                               alert('valid username');
                                swal(
                                      'successful!',
                                      
                                      'Currect UserName!',
                                      'success'
                                    )
                                $(".newuser").html('<input value="" placeholder="New Username"  name="newname" class="name" type="text" required>');
                                $(".erruser").html('<input type="hidden" value="1" name="flaguser"> ');
                                }
                            else{
                                 //alert('invalid username');
                                 sweetAlert("Oops...", " wrong Username !", "error");
                                  $(".erruser").html('<input type="hidden" value="0" name="flaguser">');
                                }
                            
                        }
                        
                    });
                });
                
                $(".userpass").change(function(){
                
                    var pass = $(this).val();
//                    alert(pass);
                    $.ajax({
                        url : "<?php echo base_url().'AdminController/updateAdmin'; ?>",
                        data:{
                            password : pass
                            },
                        type : 'post',
                        
                        success : function(data, textStatus, jqXHR){
                            if(data == 1){
  //                              alert('valid password');
                                        swal(
                                      'successful!',
                                      'Currect Password!',
                                      'success'
                                    )
                                $(".newpass").html('<input value="" placeholder="New Password"  name="newpass" class="name" type="password" required>');
                                $(".errpass").html('<input type="hidden" value="1" name="flagpass">');
                            }
                            else{
                               // alert('Invalid Password');
                               sweetAlert("Oops...", " wrong Password !", "error");
                             $(".newpass").html('<input type="hidden" value="0" name="flagpass">' );
                            }
                        }
                        
                    });
                });
            
            
            $(".email").change(function(){
                 var mail = $(this).val();
//                    alert(mail);
                    $.ajax({
                       
                       url : "<?php echo base_url().'AdminController/updateAdmin'; ?>",
                       data : {
                                newmail : mail 
                           },
                        type : 'post',
                        success : function(data,textStatus,jqXHR){
                            if(data == 1){
//                                alert('valid mail');
                                    swal(
                                      'successful!',
                                      'currect Email!',
                                      'success'
                                    )
                            $(".newmail").html('<input value="" placeholder="New Email"  name="email" class="name" type="email" required>');
                            $(".errmail").html('<input type="hidden" value="1" name="flagmail">');
                            }
                            else{
                               // alert('invalid mail');
                               sweetAlert("Oops...", " wrong Email !", "error");
                            $(".errmail").html('<input type="hidden" value="0" name="flagmail"> ');
                            }
                            
                        }
                    });
                
                });
                
    
            });
            
            function success(){
                var abc = document.getElementById("success").value;
                    if(abc == null){
                       
                       sweetAlert("Oops...", "you must be fill all field!", "error");
                    }
                    else{
                        swal("Good job!", "You clicked the button!", "success");
                    }
                }
         </script>

</body>
        
</html>