<?php
	class Home extends CI_Controller
	{
		function index()
		{

			if($this->session->userdata('userData')){
				return redirect('start_exam');
			}
			
			$this->load->model('QuestionModel');
	 		$exam_schedule = $this->QuestionModel->fetch_exam_schedule();
			$this->load->view('home',['exam_schedule'=>$exam_schedule]);
		}
	}
?>