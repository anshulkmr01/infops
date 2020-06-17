<?php
	class MerchantModel extends CI_Model
	{
		function register_merchant($inputdata)
		{
			$table_name = 'merchant';
			$return_value = $this->checkifUserExist($table_name,$inputdata);
			if($return_value == 'no_data'){
				$this->db->insert($table_name,$inputdata);
				$inputdata['ID'] =  $this->db->insert_id();
				$data['data'] = $inputdata;
				return $data;
			}
			else{
				return $return_value;
			}
		}

		function login_merchant($inputdata)
		{
			$table_name = 'merchant';
			$this->db->where('email',$inputdata['email']);
			$this->db->where('phone',$inputdata['phone']);
			$data = $this->db->get($table_name)->row_array();
			return $data;
		}

		function checkifUserExist($table,$inputdata){
			$this->db->where('email',$inputdata['email']);
			$this->db->or_where('phone',$inputdata['phone']);
			$data = $this->db->get($table)->row_array();
			if (!$data) {
				return "no_data";
			}
			else{
				$msg = "";
				if ($data['phone'] == $inputdata['phone']) {
					$msg .= " Phone Number";
				}
				if ($data['email'] == $inputdata['email']) {
					if($msg != ""){
						$msg .= " &";
					}
					$msg .= " Email Address";
				}
				$msg .= ' Already Exist';
				return $msg;
			}
		}

		function update_merchant_payment_status($merchant_ID,$txnid,$amount,$productinfo)
		{
			return $this->db->where('ID',$merchant_ID)->update('merchant',['txnid'=>$txnid,'amount'=>$amount, 'package'=>$productinfo]);
		}
	}
?>