<?php $this->load->view("AdminPages/header"); ?>
        
<html>
    <head>
        
    </head>
    <style>
        .main{
                width: 100%;
                margin: auto;
                height: auto;
                
            }
    </style>
    <body>
        <div class="main">
        <div class="container">
            <div class="col-lg-12">
                <?php echo form_open_multipart("AdminController/bookingAction"); ?>
                
    <div class="form-group">
    <label for="email">upload:</label>
    <input type="file"  name="file" id="email" required>
    </div>
<!--<input type="text" name="fname" >
<input type="text" name="addr" >
<input type="mail" name="mail" >-->
  
  
                <input type="submit" name="sub" value="submit">
                
                
                <?php echo form_close();?>
            </div>
        </div>
        </div>
    </body>
</html>


<?php $this->load->view("AdminPages/footer");?>

