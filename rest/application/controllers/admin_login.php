<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Controller {

	function __construct(){
		parent::__construct();
		// $this->load->model('Sub_box_m');
		$this->load->model('Admin_m');
		
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$this->load->view('admin/login_view');
	}


	public function login_user()
	{
		$email = $this->input->post("email");
		$pass = $this->input->post("pass");

		$data = $this->Admin_m->check_admin($email,$pass);
		// die(print_r($data));
		$data = json_encode($data);

		echo $data;
	}


}
