<?php $this->load->view('AdminPages/header'); ?>

<html>
    <head>
        <title></title>
        <style>
            .main{
                width:50%;
                height: auto;
                margin: auto;
                margin-top: 3%;
/*                outline: 1px solid black;*/
                    
                
            }
            th{
               text-align: center;
 /*               margin: auto;
                width: 60%;
                border: 1px solid black;
                border-collapse: collapse;*/
                
            }
            h2{
                text-align: center;
            }
            .insert{
                margin-left:73%;
            }
            
        </style>
    </head>
    <body>
        
        <div class="main">
            <h2>Edit Product</h2>
            <?php echo form_open_multipart('AdminController/fileupload'); ?>
            
            <input type="file" name="file_up" size="20">
            <input type="submit" value="upload" name="sub"> 
            
            
            <?php echo form_close();?>
            
        </div><!--main div end-->
     
    </body>
</html>





<?php $this->load->view('AdminPages/footer'); ?>

