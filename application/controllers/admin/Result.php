<?php
	class Result extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			if(!$this->session->userdata('adminData')){
				$this->session->set_flashdata('warning','Login to Continue');
				return redirect('admin');				
			}
			$this->load->model('ResultModel');
		}

		function result($cat){
			$cat_result = $this->ResultModel->fetch_result_student($cat);
			$this->load->view('admin/result',['cat_result'=>$cat_result,'catID'=>$cat]);
		}

		function student_result($student_ID){
			$student_result = $this->ResultModel->fetch_student_result($student_ID);
			$this->load->view('admin/student_result',['student_result'=>$student_result]);
		}
	}
?>