<?php $this->load->view('AdminPages/header'); ?>

<?php// print_r($result); ?>
<html>
    <head>
        <title></title>
        <style>
            .main{
                width: 100%;
                margin: auto;
                height: auto;
                
            }
            .form{
                width: 50%;
                height: 300px;
                outline: 1px solid black;
                margin: auto;
                margin-top: 3%;
            }
            h2{
                text-align: center;
            }
            input, .text{
                display: block;
                margin: auto;
                margin-top: 2%;
            }
            
        </style>    
    </head>
    <body>
        <div class="main">
            <div class="form">
                <h2>Add Event</h2>
                <?php echo form_open('AdminController/updateproduct'); ?>
<!--                <input type="text" name="event" placeholder="Add Event">-->
                <input type="hidden" name="pid" value="<?php print_r($result[0]['product_id']); ?>" required>
                <input type="text " name="pname" value="<?php print_r($result[0]['product_name']); ?>" required>
                <textarea class="text" name="pdesc" placeholder="Product Description" rows="4" cols="25"><?php print_r($result[0]['product_details']) ?></textarea>
                <input type="submit" name="sub" value="Update">
                
                
                <?php echo form_close(); ?>
                
            </div><!--form div end-->
        </div><!--main div end-->
    </body>
</html>


<?php $this->load->view('AdminPages/footer'); ?>
