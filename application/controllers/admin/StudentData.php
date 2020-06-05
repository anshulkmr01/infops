<?php
	class StudentData extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('StudentModel');
		}

		function registered_users($type)
		{
			if($type == 'payment_done'){
				$registered_users = $this->StudentModel->paid_registered_users();
				$this->load->view('admin/registered_users',['registered_users'=>$registered_users]);	
			}
			elseif($type == 'course_buy'){
				$registered_users = $this->StudentModel->course_buyer_users();
				$this->load->view('admin/registered_users',['course_buyer'=>$registered_users]);	
			}
			else{
				$registered_users = $this->StudentModel->unpaid_registered_users();
				$this->load->view('admin/registered_users',['students'=>$registered_users]);
			}
		}

		function view_student_data($student_enrollment)
		{
			$student_data = $this->StudentModel->view_student_data($student_enrollment);
			$this->load->view('admin/student_data',['student_data'=>$student_data]);
		}

		function remove_student_id($id)
		{
			if($this->StudentModel->remove_student_id($id)){
				$this->session->set_flashdata('success','Student all data Removed');
				return redirect(str_replace(base_url(),"",$this->agent->referrer()));	
			}
			else{
				$this->session->set_flashdata('error','Student Removing Failed.');
				return redirect(str_replace(base_url(),"",$this->agent->referrer()));
			}
		}

		function remove_student_enroll($enrollment)
		{
			if($this->StudentModel->remove_student_enroll($enrollment)){
				$this->session->set_flashdata('success','Student Removed');
				return redirect(str_replace(base_url(),"",$this->agent->referrer()));	
			}
			else{
				$this->session->set_flashdata('error','Student Removing Failed.');
				return redirect(str_replace(base_url(),"",$this->agent->referrer()));
			}
		}
		function remove_course_buyer($s_no)
		{
			if($this->StudentModel->remove_course_buyer($s_no)){
				$this->session->set_flashdata('success','Student Removed');
				return redirect(str_replace(base_url(),"",$this->agent->referrer()));	
			}
			else{
				$this->session->set_flashdata('error','Student Removing Failed.');
				return redirect(str_replace(base_url(),"",$this->agent->referrer()));
			}
		}
	}
?>