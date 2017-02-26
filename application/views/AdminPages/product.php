
<?php
    $this->load->view('AdminPages/header');
?>

<html>
    <head>
        <title></title>
        <style>
            .main{
                width:100%;
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
            <button class="btn btn-primary insert" type="button" onclick="location.href='<?php echo base_url(); ?>AdminController/addproduct'">Add Product</button>
            
            <table class="table table-bordered table-responsive table-hover">
                <tr>
                    
                    <th><h3>Product Name</h3></th>
                    <th><h3>Product Details</h3></th>
                    <th colspan="2"><h3>Action</h3></th>
                </tr>
                
                   
                      <?php foreach ($result as $value){ ?>
                <tr>
                    <td><h4><?php echo $value['product_name']; ?></h4></td>
                    <td><h4><?php echo $value['product_details']; ?></h4></td>
                 <?php   $key = $value['product_id'];
                         
                 ?>
                    <td><h4><a class="btn btn-primary" href="<?php echo base_url('AdminController/editproduct').'/' . base64_encode($key) ; ?>">Edit</a></h4></td>
                    <td><h4><a class="btn btn-primary" href="<?php echo base_url('AdminController/delproduct').'/'. base64_encode($key); ?>">Delete</a></h4></td>
                    
                    
                </tr>
                      <?php } ?>
                
            </table>
            
        </div><!--main div end-->
    </body>
</html>



<?php $this->load->view('AdminPages/footer'); ?>

