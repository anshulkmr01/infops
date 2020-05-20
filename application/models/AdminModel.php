<?php
	class AdminModel extends CI_Model
	{
		function admin_validation($admin_data){
			//Check timing for exam first then login will proceed
			$this->db->where('email',$admin_data['email']);
			$data = $this->db->get('admin')->row_array();
			if ($data){
				if($data['password'] == $admin_data['password']){
					unset($data['password']);
					$this->session->set_userdata('adminData',$data);
					return "ok";
				}
				else{
					return "Wrong Credentials";
				}
			}
			else{
				return "Wrong Credentials";
			}
		}

	}
?>