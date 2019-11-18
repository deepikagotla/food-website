<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		// $this->load->model('Sub_box_m');
		// $this->load->model('Admin_m');
		
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$this->load->view('Home_view');
	}
}
