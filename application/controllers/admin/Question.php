<?php
	class Question extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			if(!$this->session->userdata('adminData')){
				$this->session->set_flashdata('warning','Login to Continue');
				return redirect('admin');				
			}
			$this->load->model('QuestionModel');
		}

		function save_question(){
			$question_data = $this->input->post();
			if($this->QuestionModel->save_question($question_data)){
				$this->session->set_flashdata('success',"Question Added Successfully");
				return redirect('fetch_question/'.$question_data['subject']);
			}
			else{
				$this->session->set_flashdata('error',"Question Adding failed. Try again");
				return redirect('fetch_question/'.$question_data['subject']);
			}
		}
		
		function update_question(){
			$question_data = $this->input->post();
			if($this->QuestionModel->update_question($question_data)){
				$this->session->set_flashdata('success',"Question Updated Successfully");
				return redirect('fetch_question/'.$question_data['subject']);
			}
			else{
				$this->session->set_flashdata('error',"Question Updation failed. Try again");
				return redirect('fetch_question/'.$question_data['subject']);
			}
		}

		function fetch_question($subject = ''){
			if($subject == ''){
			$subject = 'maths';
			}
			else{
				$question_data = $this->QuestionModel->fetch_question($subject);
			}

			$this->load->view('admin/questions',['question_data'=>$question_data,'subject'=>$subject]);
		}

		function delete_question($id,$subject){
			if($this->QuestionModel->delete_question($id)){
				$this->session->set_flashdata('success',"Question Deleted Successfully");
				return redirect('fetch_question/'.$subject);
			}
			else{
				$this->session->set_flashdata('error',"Question Deletion failed. Try again");
				return redirect('fetch_question/'.$subject);
			}

		}

		function schedule_exam(){
			$schedule_data = $this->input->post();
			if($this->QuestionModel->schedule_exam($schedule_data)){
				$this->session->set_flashdata('success',"Schedule Updated Successfully");
				return redirect('admin_panel');
			}
			else{
				$this->session->set_flashdata('error',"Schedule Updation failed. Try again");
				return redirect('admin_panel');
			}
		}
	}
?>