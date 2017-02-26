<?php 

    class AdminModel extends CI_Model{
        
        public $user = 'admin';
        public $pass = 'admin';
        public $email = 'asdf@wsd.bgh';
        public $fetchpid;
        
        public function __construct() {
            parent::__construct();
        }
        
        public function login($data){
//            print_r($data);
//            $user['username'] = $data['user'];
//            $user['password'] = $data['pass'];
//            $user['mail'] = $this->email;
//            
//            if($user['username'] != $this->user){
//                $erruser = "invalid username";
//                return $erruser;
//            }
//            else{
//                if($user['password'] != $this->pass){
//                    $errpass = "invalid password";
//                    return $errpass;
//                }
//                else{
//                    $this->session->set_userdata('username',$user);
//                    
//                    redirect(base_url().'AdminController/index');
//                }
//            }
            
//        print_r($data);
        $query = $this->db->where(['username'=> $data['username'],'password' => $data['password']])
                            ->get('adminlogin');
        $result = $query->result_array();
        
        return $result;
            
        }
        
        
        




        public function fetchevent(){
           // $this->load->database();
            $result = $this->db->get('event');
            $data = $result->result_array();
            return $data;
          }
          public function AddEvent($data){
//              echo $data;
           // $this->load->database();
            $result = $this->db->insert('event',$data);
            if($result === TRUE){
                redirect(base_url().'AdminController/event');
            }
          }
          public function delevent($id){
            //  $this->load->database();
              $result = $this->db->delete('event', array('event_id' => $id));
              if($result === TRUE){
                  redirect(base_url().'AdminController/event');
              }
          }
          
          
          //..................... Product ............................//
          
          public function fetchproduct(){
            //  $this->load->database();
              $fetch = $this->db->get('product');
              $result = $fetch->result_array();
              return $result;
          }
          public function editproduct($id){
//              print_r($id);
            $this->fetchpid = $id;
          //  $this->load->database();
            $fetch = $this->db->get_where('product', array('product_id' => $this->fetchpid ));
            $data = $fetch->result_array();
            return $data;
          }
          public function UpProduct($data){
             // print_r($data);
          //   $this->load->database();
             $result = $this->db->where('product_id', $data['product_id'])
                                ->update('product', $data);
             if($result === TRUE){
                 redirect(base_url().'AdminController/product');
             }
                else {
                    echo "could not update";
                }

          }
          
          public function Addproduct($data){
//              print_r($data);
          //  $this->load->database();
            $result = $this->db->insert('product',$data);
            if($result === TRUE){
                redirect(base_url().'AdminController/product');
            }
          }
          public function deletproduct($id){
//              echo $id;
          //  $this->load->database();
            $result = $this->db->delete('product', array('product_id' => $id));
            if($result === TRUE){
                redirect(base_url().'AdminController/product');
            }
              
          }
          //........................ contact ...................................//
          
          
          public function fetchContact(){
           //   $this->load->database();
              $fetch = $this->db->get('contact');
              $result = $fetch->result_array();
              return $result;
          }
          public function deletemail($id){
//              echo $id;
           //   $this->load->database();
              $result = $this->db->delete('contact', array('id' => $id));
              if($result === TRUE){
                  redirect(base_url().'AdminController/mailbox');
              }
          }
          
          
          //..................................................................//
          
          
          public function mailconform($data){
              $query = $this->db->where(['email'=> $data['email']])
                                 ->get('adminlogin');
              $fetch = $query->result_array();
              return $fetch;
          }
          
          public function fetchlog(){
            $query =  $this->db->get('adminlogin');
            $result = $query->result_array();
            return $result;
          }
          
          public function adminupdate($data){
              $query = $this->db->where('admin_id', $data['admin_id'])
                                ->update('adminlogin', $data);
              if($query === TRUE){
                  
                  redirect('/AdminController/');
              }
              
              
          }
          
          public function fetchuser($table_name , $name){
            $fetch = $this->db->from($table_name)
                        ->select('*')
                        ->where('username',$name)
                        ->get();
            return $fetch->result();
          }
          
          public function fetchpassword($table_name , $pass){
              $fetch = $this->db->from($table_name)
                                ->select('*')
                                ->where('password',$pass)
                                ->get();
            return $fetch->result();
          }
          public function fetchmail($table_name , $mail){
              $fetch = $this->db->from($table_name)
                                ->select('*')
                                ->where('email',$mail)
                                ->get();
             return $fetch->result();
          }
          
          public function getuser(){
              $result = $this->db->select('*')->from('users')->get();
              $result = $result->result();
              return $result;
          }
          
          public function csvimport($sql){
          $result = $this->db->query($sql);
          return $result;
          
          }
          
          public function imgupload($path){
              
              $result = $this->db->insert('gallery', array('filepath'=> $path ));
              return $result;
          }
          
    }

?>