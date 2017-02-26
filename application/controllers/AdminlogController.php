    <?php

class AdminlogController extends CI_Controller{
    
        
    
    public function __construct() {
        parent::__construct();
        $this->load->model('AdminModel');
        $session = $this->session->userdata('admin');
        if(isset($session)){
            redirect('/admin/');
        }
    
    }
    
    
    
    public function index(){
      if($this->input->post('sub')){
          $data['username'] = $this->input->post('username');
          $data['password'] = $this->input->post('password');
          
//          print_r($data);
           $result = $this->AdminModel->login($data);
           if(empty($result)){
               echo "<script>";
               echo " alert('invalid username or password'); ";
               echo "</script>";
               
           }
           else{
               $this->session->set_userdata('admin' , $result);
               redirect('/admin/');
           }
      }
            
    
        $this->load->view('AdminPages/login');
    }
    
    
}

?>