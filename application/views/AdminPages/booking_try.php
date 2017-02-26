<?php $this->load->view("AdminPages/header"); ?>


<div class="container">
    <h2>
        Tutorial: How to Import Data from CSV File to MySQL Using PHP
    </h2>
    <br><br>
 
    <div class="row">
        <div class="col-md-6 col-md-offset-0">
            <?php echo form_open_multipart('AdminController/booking');?>
                <div class="form-group">
                    <label for="file">Select .CSV file to Import</label>
                    <input name="file" type="file" class="form-control">
                </div>
                <div class="form-group">
                    <?php echo $message; ?>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" value="Submit"/>
                </div>
           <?php echo form_close();?>
            <div class="form-group">
                <?php echo $users; ?>
            </div>
        </div>
    </div>
</div>



<?php $this->load->view("AdminPages/footer");?>

