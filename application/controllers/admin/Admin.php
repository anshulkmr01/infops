<?php
	class Admin extends CI_Controller
	{
		function admin_login(){
		 	if($this->session->userdata('adminData')){
		 		return redirect('admin_panel');
		 	}
		 	else{
		 		$this->load->view('admin/login');
		 	}
		}

		function admin_validate()
		{
			$admin_data = $this->input->post();
			$this->form_validation->set_rules('email',"Email","required|trim");
			$this->form_validation->set_rules('password',"Password","required|trim");
			$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
			if($this->form_validation->run()){
				$this->load->model('AdminModel');
				$data = $this->AdminModel->admin_validation($admin_data);
				if($data == "ok"){
					return redirect('admin_panel');
				}
				else{
					$this->session->set_flashdata('error',$data);
					$this->load->view('admin/login');
				}
			}
			else{
				$this->load->view('admin/login');
			}
		}

		 function admin_panel(){
		 	if($this->session->userdata('adminData')){
		 		$this->load->model('QuestionModel');
		 		$exam_schedule = $this->QuestionModel->fetch_exam_schedule();
				$this->load->view('admin/index',['exam_schedule'=>$exam_schedule]);
		 	}
		 	else{
		 		return redirect('admin');
		 	}
		}

		function admin_logout()
		{
			$this->session->unset_userdata('adminData');
			$this->session->set_flashdata('success','Admin Logout');
			return redirect('admin');
		}
	}
?>