<?php

class Login_m extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }

	public function register_user($data)
	{
		$makedate = date("Y/m/d H:i:s");

		$sql = "INSERT INTO tbl_user(first,last,user_email,user_pass,makedate,set_news) VALUES('".$data['first']."','".$data['last']."','".$data['email']."','".$data['pass']."','".$makedate."',".$data['set_news'].")";
		// die(print_r($sql));
		$query = $this->db->query($sql);

		return "success";
	}

	public function check_user($email,$pass)
	{
		$sql = "SELECT * FROM tbl_user WHERE user_email = '".$email."' AND user_pass = '".$pass."'";

		$query = $this->db->query($sql);

		if($query->num_rows() > 0)
		{
			$result = $query->row();

			// die(print_r($result->first));

			$data = array();
			$data['id'] = $result->id;
			$data['first'] = $result->first;
			$data['last'] = $result->last;

			$data['email'] = $email;

			$this->session->set_userdata("user",$data);

			$makedate = date("Y/m/d H:i:s");
			$sql = "INSERT INTO tbl_logs(user,log_date) VALUES(".$data['id'].",'".$makedate."')";
			$query = $this->db->query($sql);

			return "true";
		}
		
		else{
			return "false";
		}

	}

	public function add_new_address($data)
	{
		$sql = "INSERT INTO tbl_user_address(user_id,first,last,company,address1,address2,city,code,phone,state,status) VALUES('".$data['user_id']."','".$data['first']."','".$data['last']."','".$data['company']."','".$data['add1']."','".$data['add2']."','".$data['city']."','".$data['code']."','".$data['phone']."','".$data['state']."',".$data['status'].")";

		// die(print_r($sql));
		$query = $this->db->query($sql);

		return "success";
	}

	public function cancel_sub($id)
	{
		$sql = "DELETE FROM tbl_cart WHERE id = ".$id."";
		$query = $this->db->query($sql);

		$sql = "DELETE FROM tbl_orders WHERE cart_id = ".$id."";
		$query = $this->db->query($sql);

		return "success";
	}

}

?>