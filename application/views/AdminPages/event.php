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
            table,tr,td,th{
                text-align: center;
                margin: auto;
                width: 40%;
                border: 1px solid black;
                border-collapse: collapse;
                
            }
            h2{
                text-align: center;
            }
            .insert{
                margin-left:60%;
            }
            
        </style>
    </head>
    <body>
        
        <div class="main">
            <h2>Event page</h2>
            <button class="insert" type="button" onclick="location.href='<?php echo base_url(); ?>admin/addevent'">Add Event</button>
            
            <table>
                <tr>
                    
                    <th>Upcoming event</th>
                    
                    <th>Action</th>
                </tr>
                <?php foreach ($result as $value){ ?>
                <tr>
                    
                    <td><?php echo $value['event_desc']; ?></td>
                    <?php $keys = 982451501982451549982451567982451579982451581982451609982451629982451653 * $value['event_id'] ;?>
                    
                    <td><a href="<?php echo base_url('AdminController/deleteevent').'/'.  base64_encode($keys);?>">Delete</a></td>
                    
                </tr>
                <?php } ?>
            </table>
            
        </div><!--main div end-->
    </body>
</html>





<?php
    
    $this->load->view('AdminPages/footer');
?>