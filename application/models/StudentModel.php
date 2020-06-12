<?php
	class StudentModel extends CI_Model
	{
		function student_validate($student_data){
			//Check timing for exam first then login will proceed
			$this->db->where('enrollment_no',$student_data['email']);
			$data = $this->db->get('student_doc')->row_array();
			if ($data){
				if($data['DOB'] == $student_data['password']){
					unset($data['password']);
					$is_exam_running = $this->check_schedule_time();
					if($is_exam_running == "ok"){
						$if_exam_finish = $data['exam_end'];
						if($if_exam_finish == 0){
							$this->session->set_userdata('userData',$data);
							return "ok";
						}
						else{
							return "Your Exam has been done Succefully";
						}
					}
					else{
						return $is_exam_running;
					}
				}
				else{
					return "Wrong Password";
				}
			}
			else{
				return "No Registered User Found";
			}
		}

		//Checking if user is login in correct Schedule
		function check_schedule_time(){
			$flag = "";
			$exam_schedule = $this->db->where('ID',1)->get('examtiming')->row_array();

			$this->session->set_userdata('exam_timing',$exam_schedule);
			date_default_timezone_set('Asia/Kolkata');
			
			$datetime = new DateTime();
			$current_date = $datetime->format('Y-m-d');
			$current_time = $datetime->format('H:i:s');

			if(strtotime($exam_schedule['exam_date']) != strtotime($current_date)){
				if(strtotime($exam_schedule['exam_date']) < strtotime($current_date)){
					$flag = "Exam Date has Passed";
					//echo "date gone";
				}
				if(strtotime($exam_schedule['exam_date']) > strtotime($current_date)){
					$flag = "Exam Portal is not open for Students yet due to exam Date";
					//echo "date comming";
				}
			}
			else{
				if(strtotime($exam_schedule['start_time']) <= strtotime($current_time) && strtotime($exam_schedule['end_time']) >= strtotime($current_time)){
					$flag = "ok";
					//echo "correct timing";
				}
				else{
					if(strtotime($exam_schedule['end_time']) < strtotime($current_time)){
						$flag = "Exam Time Out";
						//echo "Time gone";
					}

					if(strtotime($exam_schedule['start_time']) > strtotime($current_time)){
						$flag = "Exam will take place today see admit card for timing";
						//echo "Time comming";
					}
				}
			}
			return $flag;
		}

		function paid_registered_users()
		{
			$this->db->order_by('enrollment_no','desc');
			return $this->db->get('student_doc')->result_array();
		}

		function course_buyer_users()
		{
			$this->db->order_by('s_no','desc');
			return $this->db->get('course_buyers')->result_array();
		}

		function view_student_data($student_enrollment)
		{
			return $this->db->where('enrollment_no',$student_enrollment)->get('student_doc')->row_array();
		}

		function unpaid_registered_users()
		{
			$this->db->order_by('ID','desc');
			return $this->db->get('student')->result_array();
		}

		function remove_student_id($id){
			$this->db->where('ID',$id)->delete('student');
			return $this->db->where('student_ID',$id)->delete('student_doc');
		}

		function remove_student_enroll($enroll){
			return $this->db->where('enrollment_no',$enroll)->delete('student_doc');
		}

		function remove_course_buyer($s_no){
			return $this->db->where('s_no',$s_no)->delete('course_buyers');
		}

	}
?>