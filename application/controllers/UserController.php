<?php
    class UserController extends CI_Controller{
        
        public function __construct() {
            parent::__construct();
            
            $this->load->model('UserModel');
        }

        public function index(){
            $data['result'] = $this->UserModel->fetchevent();
           $this->load->view('pages/index',$data);
       }
       public function about(){
           
           $this->load->view('pages/about');
       }
       public function wine(){
           $data['result'] = $this->UserModel->fetchgallery();
           $this->load->view('pages/wines' , $data );
       }
       
       public function shortcode(){
           $this->load->view('pages/shortcodes');
       }
      
       public function single(){
           
           $data['result'] = $this->UserModel->fetchcomment();
           $this->load->view('pages/singlepage',$data);
       }
       public function contactus(){
        
           if($this->input->post('name')){
               $name = $this->input->post('name'); 
               $result = $this->UserModel->fetchdata('contact',$name);
               
               if($result){
                
                 echo '1';
               }
               else{
                
                   echo '0';
               }
               exit;
           }
           
           if($this->input->post('email')){
               $mail = $this->input->post('email');
               $result = $this->UserModel->fetchmail('contact',$mail);
               if($result){
                   echo '1';
               }
               else{
                   echo '0';
               }
               exit;
               
           }
           if($this->input->post('sub')){
               if($this->input->post('flag')==1){
                  
                   echo "<script>";
                   echo "alert('name is not proper');";
                   echo "</script>";
                   
               }
          else{  
              
           $data['name'] = $this->input->post('fname');
           $data['email'] = $this->input->post('mail');
           $data['message'] = $this->input->post('message');
           $this->UserModel->contact($data);
             }
           }
           
           $this->load->view('pages/contact');
       }
       
      
       public function product(){
          
           $data['result'] = $this->UserModel->fetchProduct();
           $this->load->view('pages/products',$data);
          // $this->load->view('pages/products');
       }
       public function comment(){
           if($this->input->post('sub')){
           $data['name'] = $this->input->post('fname');
           $data['email'] = $this->input->post('email');
           $data['comment'] = $this->input->post('comment');
           $data['date'] = $this->input->post('date');
           
          // print_r($data);die;
          
           $this->UserModel->insertcomment($data);
           }
       }
       
       
    }

?>

