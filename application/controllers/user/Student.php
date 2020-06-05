<?php
	class Student extends CI_Controller
	{
		function student_validate()
		{
			$student_data = $this->input->post();
			$this->form_validation->set_rules('email',"Enrollment","required|trim");
			$this->form_validation->set_rules('password',"Date of Birth","required|trim");
			$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
			if($this->form_validation->run()){
				$this->load->model('StudentModel');
				$data = $this->StudentModel->student_validate($student_data);
				if($data == "ok"){
					return redirect('start_exam');
				}
				else{
					$this->session->set_flashdata('error',$data);
					return redirect('examlogin');
				}
			}
			else{
				$this->session->set_flashdata('warning','Fill all Mandatory Fields');
				return redirect('examlogin');
			}
		}

		//Load Examination page
		function examination(){
			if($this->session->userdata('userData')){
				return redirect('start_exam');
			}
			
			$this->load->model('QuestionModel');
	 		$exam_schedule = $this->QuestionModel->fetch_exam_schedule();
			$this->load->view('examlogin/examlogin',['exam_schedule'=>$exam_schedule]);
		}

		 function exam_description(){
		 	$this->check_schedule_time();

		 	if($this->session->userdata('userData')){
			$this->load->model('QuestionModel');
			if($this->QuestionModel->if_exam_started()){
				return redirect('start_question_paper');
			}
				$this->load->view('user/examination_description');
		 	}
		 	else{
		 		return redirect('examlogin');
		 	}
		}

		 function exam_board(){
		 	$this->check_schedule_time();

			if($this->session->userdata('userData')){

			// $this->load->model('QuestionModel');	
			// if(!$this->QuestionModel->if_exam_started()){
			// 	return redirect('start_exam');
			// }
			$this->load->model('QuestionModel');
			$question_data = $this->QuestionModel->student_question();
			$this->load->view('user/exam_board',['question_data'=>$question_data]);
		 	}
		 	else{
		 		return redirect('examlogin');
		 	}
		}

		function save_answer(){
		 	$this->check_schedule_time();

			$question_data = $this->input->post();
			$this->load->model('QuestionModel');
			if($this->QuestionModel->save_student_answer($question_data)){
				return redirect('start_question_paper');
			}
		}

		function finish_exam(){
		 	$this->check_schedule_time();

			$this->load->model('QuestionModel');
			if($this->QuestionModel->finish_exam()){
				$this->session->unset_userdata('userData');
				return redirect('examlogin');
			}
		}

		function check_schedule_time() {			
			$flag = "";
			$exam_schedule = $this->session->userdata('exam_timing');
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
			if($flag !="ok"){
				$this->session->unset_userdata('userData');
				$this->session->unset_userdata('exam_timing');
				$this->session->set_flashdata('warning',$flag. " Exam expire");
				return redirect('examlogin');
			}
		}
	}
?>