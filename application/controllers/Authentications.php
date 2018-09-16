<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentications extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Login_model','login');
	}
	public function index()
	{
		$this->load->view('Auth/login');
	}
	function view_register(){
		$this->load->view('Auth/register');
	}
	function login(){
		$chk = $this->login->exUser($this->input->post('username'),$this->input->post('password'));
		if (count($chk)>0) {
			echo "true";
		}
		else {
			echo "false";
		}
	}
	function register(){
		$data = array();
		$data['name'] = $this->input->post('username');
		$data['pass'] = $this->input->post('password');
		$data['email'] = $this->input->post('email');
		$chk = $this->login->newUser($data);
		if($chk){
			$this->load->view('Auth/login');
			echo "<script>alert('Registered Succesfully')</script>";
		}
	}
}
