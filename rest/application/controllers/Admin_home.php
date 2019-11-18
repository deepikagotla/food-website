<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_home extends CI_Controller {

	function __construct(){
		parent::__construct();
		// $this->load->model('Sub_box_m');
		$this->load->model('Admin_m');
		
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$data['title'] = "home";
		$this->load->view('admin/admin_home_view',$data);
	}


}
