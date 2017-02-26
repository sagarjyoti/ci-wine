<?php $this->load->view('AdminPages/header'); ?>

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
                height: 200px;
/*                outline: 1px solid black;*/
                margin: auto;
                margin-top: 3%;
            }
            h2{
                text-align: center;
            }
            .text{
                display: block;
                margin: auto;
                margin-top: 2%;
            }
            input[type="submit"] , input[type="text"] {
	width:50%;
	outline:none;
    display: block;
    margin: 0 auto;
    margin-top: 45px;
    padding: 13px 20px;
    font-size: 20px;
    font-weight: bold;
    text-transform: uppercase;
   background: #ffd900;
    border: none;
    color: #ffffff;
	cursor:pointer;
	 transition: 0.3s all;
    -webkit-transition: 0.3s all;
    -moz-transition: 0.3s all;
    -o-transition: 0.3s all;
    -ms-transition: 0.3s all;
	
}
            
        </style>    
    </head>
    <body>
        <div class="main">
            <div class="form">
                <h2>Add Event</h2>
                <?php echo form_open('AdminController/addevent'); ?>
<!--                <input type="text" name="event" placeholder="Add Event">-->
                <textarea class="text" name="event" placeholder="Add Event" rows="4" cols="30" required></textarea>
                <input class="text" type="submit" name="sub" value="Submit">
                
                
                <?php echo form_close(); ?>
                
            </div><!--form div end-->
        </div><!--main div end-->
    </body>
</html>




<?php $this->load->view('AdminPages/footer'); ?>






