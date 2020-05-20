<?php
	class StudentModel extends CI_Model
	{
		function student_validate($student_data){
			//Check timing for exam first then login will proceed
			$this->db->where('email',$student_data['email']);
			$data = $this->db->get('student')->row_array();
			if ($data){
				if($data['phone'] == $student_data['password']){
					unset($data['password']);
					$is_exam_running = $this->check_schedule_time();
					if($is_exam_running == "ok"){
						$if_exam_finish = $this->db->where('ID',$data['ID'])->get('student')->row('exam_end');
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
	}
?>