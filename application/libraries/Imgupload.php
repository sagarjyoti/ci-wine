<?php
 
    class Imgupload{
        
        public $error = array();
        
        public function __construct() {
            
        }
        
        public function upload($image){
            if(isset($_FILES)){
                $FileName = $_FILES['image']['name'];
//                $FileSize = $_FILES['image']['size'];
                $FileTemp = $_FILES['image']['name'];
                $FileType = $_FILES['image']['type'];
                
                $fileExt = strtolower(end(explode(".", $FileName)));
                $ext = array('jpeg','jpg','png');
                if(in_array($fileExt , $ext) == FALSE){
                    $this->error[] = "File type not allowed";
                }
                if(empty($this->error)){
                    $a  = move_uploaded_file($_FILES['image']['tmp_name'], "wine.local/upload/".$FileName);
                    if($a == TRUE){
                        echo "ok";
                    }
                    else{
                       echo "hoyne";
                    }
                }
                
            }
        }
    }
?>

