<?php

class User extends CI_Controller {

public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('User/user_model');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->database();

}

public function index()
{
$this->load->view("User/login.php");
}

public function register_user(){

  $this->form_validation->set_rules('user_name', 'Username', 'trim|required');
  $this->form_validation->set_rules('user_email', 'Email', 'trim|required');
  $this->form_validation->set_rules('user_password', 'Password', 'trim|required');
  $this->form_validation->set_rules('user_age', 'Age', 'trim|required');
  $this->form_validation->set_rules('user_mobile', 'Mobile', 'trim|required');

  if ($this->form_validation->run() == FALSE) {
  $this->load->view('User/login');
}else {
  $user=array(
  'user_name'=>$this->input->post('user_name'),
  'user_email'=>$this->input->post('user_email'),
  'user_password'=>md5($this->input->post('user_password')),
  'user_age'=>$this->input->post('user_age'),
  'user_mobile'=>$this->input->post('user_mobile')
    );

$email_check=$this->user_model->email_check($user['user_email']);

if($email_check){
$this->user_model->register_user($user);
$this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
redirect('user');

}
else{
$this->session->set_flashdata('error_msg', 'Email already taken');
redirect('user');
}
}
}

function login_user(){
  $this->form_validation->set_rules('user_email', 'Username', 'trim|required');
  $this->form_validation->set_rules('user_password', 'Password', 'trim|required');

  if ($this->form_validation->run() == FALSE) {
  if(isset($this->session->userdata['user_id'])){
  $this->load->view('User/user_profile');
  }else{
  $this->load->view('User/login');
  }
}else {
  $user_login=array(
  'user_email'=>$this->input->post('user_email'),
  'user_password'=>md5($this->input->post('user_password'))
    );

    $data=$this->user_model->login_user($user_login['user_email'],$user_login['user_password']);
      if($data)
      {
        $this->session->set_userdata('user_id',$data['user_id']);
        $this->session->set_userdata('user_email',$data['user_email']);
        $this->session->set_userdata('user_name',$data['user_name']);
        $this->session->set_userdata('user_age',$data['user_age']);
        $this->session->set_userdata('user_mobile',$data['user_mobile']);

        $this->load->view('User/user_profile.php');

      }
      else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        $this->load->view("User/login.php");
      }
}
}

function user_profile(){

$this->load->view('User/user_profile.php');

}

function users_datatable(){
  $this->load->view("User/users_datatable.php");
}

public function get_items()
  {

     $query = $this->db->get("user");

     $data = [];

     foreach($query->result() as $r) {
          $data[] = array(
               'Id'=>$r->user_id,
               'Name'=>$r->user_name,
               'Email'=>$r->user_email,
               'Age'=>$r->user_age,
               'Mobile'=>$r->user_mobile
          );
     }
     echo json_encode($data);
     // exit();

     // $this->response->setOutput(json_encode($data));

  }

public function user_logout(){

  $this->session->sess_destroy();
  redirect('user', 'refresh');
}

public function add_user(){
  $user=array(
  'user_name'=>$this->input->post('user_name'),
  'user_email'=>$this->input->post('user_email'),
  'user_password'=>md5($this->input->post('user_password')),
  'user_age'=>$this->input->post('user_age'),
  'user_mobile'=>$this->input->post('user_mobile')
    );
    $email_check=$this->user_model->email_check($user['user_email']);

    if($email_check){
    $this->user_model->register_user($user);
    echo "OK";
    }
    else{
      echo "<script>alert('Email already taken')</script>";
    }
}

}

?>
