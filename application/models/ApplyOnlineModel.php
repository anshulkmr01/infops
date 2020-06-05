<?php
	class ApplyOnlineModel extends CI_Model
	{
		function register_new_student($student_data)
		{
			$no = $this->checkifUserExist($student_data);
			if($no == "no_data" ){
			
			unset($student_data['is_checked']);
			$this->db->insert('student',$student_data);
			$insert_id = $this->db->insert_id();
			$student_data['ID'] = $insert_id;

			$this->session->set_userdata('new_student_user_data',$student_data);
			return 'ok';
			}

			else{
				return $no." Alredy Registered.";
			}
		}

		function login_student($student_data)
		{
			$this->db->where('email',$student_data['email']);
			$data = $this->db->get('student')->row_array();
			if ($data){
				if($data['DOB'] == $student_data['DOB']){
					$this->session->set_userdata('new_student_user_data',$data);
					return "ok";
				}
				else{
					return "Wrong Password";
				}
			}
			else{
				return "No User Found";
			}
		}

		function checkifUserExist($userData){
			$this->db->where('email',$userData['email']);
			//$this->db->or_where('DOB',$userData['DOB']);
			$data = $this->db->get('student')->row_array();
			if (!$data) {
				return "no_data";
			}
			else{
				// $msg = "";
				// if($data['email']==$userData['email']){
				// 	$msg .= "Email address ";
				// }
				// return $msg;
				return 'Email Address';
			}
		}

		function check_if_user_already_applied($catID)
		{
			$user_session_data = $this->session->userdata('new_student_user_data');
			$this->db->where('student_ID',$user_session_data['ID']);
			$this->db->where('catID',$catID);
			$query = $this->db->get('student_doc')->row_array();
			if($query){
				return $query;
			}
			else{
				return false;
			}
		}

		function submit_user_document($input_data)
		{
			$enrollment_no = 537+time();
			$user_session_data = $this->session->userdata('new_student_user_data');
			$input_data['student_ID'] = $user_session_data['ID'];
			$input_data['enrollment_no'] = $enrollment_no;
			
			$this->db->insert('student_doc',$input_data);

			return $enrollment_no;
			// echo "<pre>";
			// print_r($input_data);
			// exit();
		}

		function update_payment_status($enrollment, $txnid, $amount_recived, $productinfo)
		{
			if($enrollment == 'course_buy'){
				$user_session_data = $this->session->userdata('new_student_user_data');
				return $this->db->insert('course_buyers',['ID'=>$user_session_data['ID'],'fname'=>$user_session_data['fname'],'lname'=>$user_session_data['lname'],'email'=>$user_session_data['email'],'phone'=>$user_session_data['phone'],'DOB'=>$user_session_data['DOB'],'txt_ID'=>$txnid,'payment_status'=>1,'amount_recived'=>$amount_recived,'product'=>$productinfo]);
			}
			else{
				return $this->db->where('enrollment_no',$enrollment)->update('student_doc',['txt_ID'=>$txnid,'payment_status'=>1,'amount_recived'=>$amount_recived]);
			}
		}
	}
?>