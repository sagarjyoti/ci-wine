<?php

    class Hassing {
      
       public $key = 3003764180846061820529860983591660500568758630303014848439416933455;
       public $key1 = 47723219067994296893655300772688320448214882399426831;
       public $encode;
       public $decode;
        public function __construct() {
            
        }
        
        
        public function encode($value){
            $data = $value * $this->key;
            $result = $data + $this->key1;
            $this->encode = $result;
            echo $this->encode;
        }
        public function decode(){
            
        }
        
        
        
        
    }
    
   
?>

