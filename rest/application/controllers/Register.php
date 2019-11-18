<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct(){
		parent::__construct();
		// $this->load->model('Sub_box_m');
		$this->load->model('Login_m');
		
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$this->load->view('Regsiter_view');
	}


	public function register_user()
	{
		$first = $this->input->post("first");
		$last = $this->input->post("last");
		$email = $this->input->post("email");
		$pass = $this->input->post("pass");
		$set_news = $this->input->post("set_news");

		$data = array();

		$data['first'] = $first;
		$data['last'] = $last;
		$data['email'] = $email;
		$data['pass'] = $pass;
		$data['set_news'] = $set_news;

		
		$data = $this->Login_m->register_user($data);
		$data = json_encode($data);

		echo $data;
	}

}
