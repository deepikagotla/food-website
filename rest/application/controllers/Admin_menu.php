<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_menu extends CI_Controller {

	function __construct(){
		parent::__construct();
		// $this->load->model('Sub_box_m');
		$this->load->model('Admin_m');
		
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$data['title'] = "menu";
		$data['menu'] = $this->Admin_m->get_menu_info();
		$this->load->view('admin/admin_menu_view.php',$data);
	}

	public function add_menu()
	{
		$data = array();

		$data['name'] = $this->input->post("name");

		$upload_path = 'assets/menus/';
		$tmp_name = $_FILES['main_img']['tmp_name'];

		$name = $_FILES['main_img']['name'];

		$data['file'] = $upload_path.$_FILES['main_img']['name'];

		move_uploaded_file($tmp_name,$upload_path.$name);

		$result = $this->Admin_m->add_menu($data);
		$result = json_encode($result);

		echo $result;
	}


}
