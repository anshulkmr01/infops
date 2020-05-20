<?php
	class Student extends CI_Controller
	{
		function student_validate()
		{
			$student_data = $this->input->post();
			$this->form_validation->set_rules('email',"Email","required|trim|valid_email");
			$this->form_validation->set_rules('password',"Password","required|trim");
			$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
			if($this->form_validation->run()){
				$this->load->model('StudentModel');
				$data = $this->StudentModel->student_validate($student_data);
				if($data == "ok"){
					return redirect('start_exam');
				}
				else{
					$this->session->set_flashdata('error',$data);
					return redirect('home');
				}
			}
			else{
				$this->session->set_flashdata('warning','Fill all Mandatory Fields');
				return redirect('home');
			}
		}

		 function exam_description(){
		 	if($this->session->userdata('userData')){
			$this->load->model('QuestionModel');
			if($this->QuestionModel->if_exam_started()){
				return redirect('start_question_paper');
			}
				$this->load->view('user/examination_description');
		 	}
		 	else{
		 		return redirect('home');
		 	}
		}

		 function exam_board(){
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
		 		return redirect('home');
		 	}
		}

		function save_answer(){
			$question_data = $this->input->post();
			$this->load->model('QuestionModel');
			if($this->QuestionModel->save_student_answer($question_data)){
				return redirect('start_question_paper');
			}
		}

		function finish_exam(){
			$this->load->model('QuestionModel');
			if($this->QuestionModel->finish_exam()){
				$this->session->unset_userdata('userData');
				return redirect('home');
			}
		}
	}
?>