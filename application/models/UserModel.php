<?php
    
    class UserModel extends CI_Model{
        
        public function __construct() {
            parent::__construct();
            
//            $this->load->database();
        }
        
        public function contact($data){
//            print_r($data); 
       
        $result = $this->db->insert('contact',$data);
           if($result === TRUE){
//                $a = 1;
//                return $a;
            redirect(base_url().'UserController/contactus');  
            }
//            else{
//                $b = 0;
//                return $b;
//            }
        }
        
        public function fetchProduct(){
            
            $result = $this->db->get('product');
            $data = $result->result_array();
            return  $data;
        }
        
        public function insertcomment($data){
            
            $result = $this->db->insert('comment',$data);
            if($result === TRUE){
                redirect(base_url().'UserController/single');
            }
            
          
        }
        
        public function fetchcomment(){
            
           
             $this->db->from('comment');        //Produces: SELECT * FROM comment
             $this->db->order_by("id", "desc"); //ORDER BY id DESC 
             $result = $this->db->get(); 
            
                         
            $data = $result->result_array();
            return $data;
        }
        
        public function fetchevent(){
           
            $result = $this->db->get('event');
            $data = $result->result_array();
            return $data;
        }
        
        public function fetchdata($table_name,$name){
            $row = $this->db->from($table_name)
                        ->select('*')
                        ->where('name',$name)
                        ->get();
             
               
                return $row->result();
            
        }
        public function fetchmail($table_name, $mail){
            $row = $this->db->from($table_name)
                            ->select('*')
                            ->where('email' , $mail)
                            ->get();
            return $row->result();
        }
        
        
        public function fetchgallery(){
            $fetch = $this->db->get('gallery');
            $result = $fetch->result_array();
            return $result;
        }
    }


?>

