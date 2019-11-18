<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		// $this->load->model('Sub_box_m');
		$this->load->model('Login_m');
		
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$this->load->view('login_view');
	}

	

	public function login_user()
	{
		$email = $this->input->post("email");
		$pass = $this->input->post("pass");

		$data = $this->Login_m->check_user($email,$pass);
		$data = json_encode($data);

		echo $data;
	}


	public function add_new_address()
	{
		$user_id = $this->session->userdata("user")['id'];

		$first = $this->input->post("first");
		$last = $this->input->post("last");
		$company = $this->input->post("company");
		$add1 = $this->input->post("add1");
		$add2 = $this->input->post("add2");
		$city = $this->input->post("city");
		$code = $this->input->post("code");
		$state = $this->input->post("state");

		$phone = $this->input->post("phone");
		$status = $this->input->post("status");

		$data['user_id'] = $user_id; 
		$data['first'] = $first;
		$data['last'] = $last;
		$data['company'] = $company;
		$data['add1'] = $add1;
		$data['add2'] = $add2;
		$data['city'] = $city;
		$data['code'] = $code;
		$data['phone'] = $phone;
		$data['state'] = $state;

		$data['status'] = $status;
		

		$result = $this->Login_m->add_new_address($data);
		$result = json_encode($result);

		echo $result;

	}

	public function cancel_sub()
	{
		$id = $this->input->post("id");
		$data = $this->Login_m->cancel_sub($id);

		$data = json_encode($data);
		echo $data;
	} 

}
