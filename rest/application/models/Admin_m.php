<?php

class Admin_m extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }

	public function check_admin($email,$pass)
	{
		$sql = "SELECT * FROM tbl_admin WHERE name = '".$email."' AND pass = '".$pass."'";

		$query = $this->db->query($sql);

		if($query->num_rows() > 0)
		{
			$this->session->set_userdata("admin","admin");
			return "true";
		}
		
		else{
			return "false";
		}

	}

	public function get_menu_info()
	{
		
		$sql = "SELECT * FROM tbl_menu";

		$query = $this->db->query($sql);

		return $query->result_array();

	}

	public function add_menu($data)
	{
		$sql = "INSERT INTO tbl_menu(name,img) VALUES('".$data['name']."','".$data['file']."')";
		$query = $this->db->query($sql);

		return "success";

	}

}




?>








