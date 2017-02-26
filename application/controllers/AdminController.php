<?php

    class AdminController extends CI_Controller{
        
        public function __construct() {
            parent::__construct();
            
            $this->load->model('AdminModel');
            
            $session = $this->session->userdata('admin');
            if(empty($session)){
                redirect('/admin/login/');
            }
           
           
        }

        public function index(){
//         
            $this->load->view('AdminPages/index');
        }
        
        public function logout(){
              $this->session->unset_userdata('admin');
             //redirect('/AdminController/login/');
             redirect('/admin/login/');
        }
        
        
        public function event(){
            
            $data['result'] = $this->AdminModel->fetchevent();
            $this->load->view('AdminPages/event',$data);
        }
        public function deleteevent($id){
           
            $keys = base64_decode($id);
            $keys = $keys / 982451501982451549982451567982451579982451581982451609982451629982451653  ;
          // echo $keys; die;
            
            $this->AdminModel->delevent($keys);
        }
        public function addevent(){
              if($this->input->post('sub')){
            $data['event_desc'] = $this->input->post('event');
            
            $this->AdminModel->AddEvent($data);
            }
            $this->load->view('AdminPages/addevent');
        }
      
        //...........................Product .........................//
        
        public function product(){
            
            $data['result'] = $this->AdminModel->fetchproduct();
            $this->load->view('AdminPages/product',$data);
        }
        public function addproduct(){
            $this->load->view('AdminPages/addproduct');
        }
        
        public function editproduct($id){
//            print_r($id);
            $key = base64_decode($id);
            
        $data['result'] = $this->AdminModel->editproduct($key);
        
        $this->load->view('AdminPages/editproduct',$data);
        }
        
        public function updateproduct(){
            if($this->input->post('sub')){
            $data['product_id'] = $this->input->post('pid');
            $data['product_name'] = $this->input->post('pname');
            $data['product_details'] = $this->input->post('pdesc');
            
//            print_r($data);
            
            $this->AdminModel->UpProduct($data);
            }
        }
        
        public function insertproduct(){
                if($this->input->post('sub')){
            $data['product_name'] = $this->input->post('pname');
            $data['product_details'] = $this->input->post('pdesc');
            
//            print_r($data);
            
            $this->AdminModel->Addproduct($data);
                }
        }
        
        public function delproduct($id){
            
//            $this->load->view('AdminPages/deleteproduct');
//            echo $id;
                $key = base64_decode($id);
                
            $this->AdminModel->deletproduct($key);
        }
        
        
        
        //........................... contact .................................//
        
        public function mailbox(){
            
            $data['result'] = $this->AdminModel->fetchContact();
            $this->load->view('AdminPages/inbox',$data);
        }
        
        public function delmail($id){
//            $this->load->library('hassing');
//          $test =  $this->hassing->encode($id);die;
//            echo $test;die;
//            echo $id;
        $key = base64_decode($id);
        $this->AdminModel->deletemail($key);
        }
        
        //............................ wine page ..............................//
        
        public function winepic(){
            $this->load->view('AdminPages/editwine');
        }
        
        public function fileupload(){
           
                
                
                $config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpeg|gif|jpg|png';
		

		$this->load->library('upload', $config);
                $upload = $this->upload->do_upload('file_up');
                if($upload == TRUE){
                    $data = $this->upload->data();
//                    echo "<pre>";
//                    print_r($data);
                    $image_path = base_url('uploads/'.$data['raw_name'].$data['file_ext']);
//                    echo $image_path;
                    $result = $this->AdminModel->imgupload($image_path);
                    if($result){
                        echo "Upload sucessfully";
                        redirect('/AdminController/winepic/');
                    }
                }
                else{
                    echo "upload hoyne";
                    echo $this->upload->display_errors();
                }
	}
            
            public function adminsignup(){
                
                $result['data'] = $this->AdminModel->fetchlog();
                $this->load->view('AdminPages/signup' , $result);
            }
        
            public function conformmail(){
                if($this->input->post()){
                    $data['email'] = $this->input->post('mail');
//                    print_r($data);
                   $result = $this->AdminModel->mailconform($data);
                        if(empty($result)){
                             $this->session->unset_userdata('admin');
                                redirect('/AdminlogController/');
                        }
                        else {
                            redirect('/AdminController/adminsignup/');
                        }
                
                }
                $this->load->view('AdminPages/conformmail');
            }
            
            public function updateAdmin(){
                
                if($this->input->post('fname')){
                    $username = $this->input->post('fname');
                    $result = $this->AdminModel->fetchuser('adminlogin',$username);
                    
                    if($result){
                        echo '1';
                    }
//                        exit();
                }
                if($this->input->post('password')){
                    $pass = $this->input->post('password');
                    $fetch = $this->AdminModel->fetchpassword('adminlogin' , $pass);
                    if($fetch){
                        echo '1';
                    }
//                        exit();
                }
                if($this->input->post('newmail')){
                    $mail = $this->input->post('newmail');
                    $result = $this->AdminModel->fetchmail('adminlogin',$mail);
                    
                    if($result){
                        echo '1';
                    }
                   
                    
                    
                    
                }
                    if($this->input->post('sub')){
                        if($this->input->post('flaguser') == 0){
                            
                            echo "<script>";
                            echo "alert ('Your UserName is invalid');";
                            echo "</script>";
                            $this->adminsignup();
                            }
                        elseif($this->input->post('flagpass') == 0){
                            echo "<script>";
                            echo "alert ('Your Password is Invalid');";
                            echo "</script>";
                            $this->adminsignup();
                        }
                        elseif($this->input->post('flagmail')== 0){
                            echo "<script>";
                            echo "alert ('Your mail is Invalid');";
                            echo "</script>";
                            $this->adminsignup();
                        }
                        else{
                            $data['admin_id'] = $this->input->post('id');
                            $data['username'] = $this->input->post('newname');
                            $data['password'] = $this->input->post('newpass');
                            $data['email'] = $this->input->post('email');
                            
                            $this->AdminModel->adminupdate($data);
                        }
                    }
                    
               
                
                

            }
            
            public function booking(){
                $data['message'] = "";
if (isset($_POST['submit'])) {
    $allowed = array('csv');
    $filename = $_FILES['file']['name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if (!in_array($ext, $allowed)) {
        // show error message
       $data['message'] = 'Invalid file type, please use .CSV file!';
    } else {

        move_uploaded_file($_FILES["file"]["tmp_name"], "/var/www/html/file_upload/upload/" . $_FILES['file']['name']);

        $file = "/var/www/html/file_upload/upload/" . $_FILES['file']['name'];

  
                
                
        $query = <<<eof
        LOAD DATA LOCAL INFILE '$file'
         INTO TABLE users
         FIELDS TERMINATED BY ','
         LINES TERMINATED BY '\n'
         IGNORE 1 LINES
        (name,mobile,email)
eof;
        if (!$result = $this->AdminModel->csvimport($query)) {
            exit(mysqli_error());
        }
        $data['message'] = "CSV file successfully imported!";
    }
}

// View records from the table
$data['users'] = '<table class="table table-bordered">
<tr>
    <th>No</th>
    <th>Name</th>
    <th>Mobile</th>
    <th>Email</th>
</tr>
';
$result = $this->AdminModel->getuser();
if ($result) {
  
    
   $num = 1;
    foreach ($result as $value) {
       $data['users'] .= '<tr>
            <td>' . $num . '</td>
            <td>' .  $value->name . '</td>
            <td>' . $value->mobile . '</td>
            <td>' . $value->email . '</td>
        </tr>';
         $num++;     
      
    }
} else {
    $data['users'] .= '<tr>
        <td colspan="4">Records not found!</td>
        </tr>';
}
$data['users'] .= '</table>';

                
                
                
                
               $this->load->view("AdminPages/booking_try",$data);
            }


            
//            public function bookingAction(){
//                if($this->input->post('sub')){
////                    $data['fname'] = $this->input->post('fname');
////                    $data['addr'] = $this->input->post('addr');
////                    $data['mail'] = $this->input->post('mail');
////                    print_r($data);
//                $filename = $_FILES['file']['tmp_name'];
//                $filesize = $_FILES['file']['size'];
//                
//                if($filesize > 0){
//                    $file = fopen($filename, "r");
//                    while(($result = fgetcsv($file, 1000000)) ==TRUE ){
//                       
//                      print_r($result);
//                        
//                    }
//                      
//                    
//                }
//                    
//                    
//                    
//                }
//                 //$this->load->view("AdminPages/booking.php");
//            }

            
           
            
            
    }

    
    
    

?>