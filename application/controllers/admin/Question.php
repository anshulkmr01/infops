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
			if($_FILES['question_image']['name']){
				$data = $this->uploadImage('question_image','uploads');
				if(isset($data['error'])){
				$this->session->set_flashdata('error', $data['error']);
					return redirect('fetch_question/'.$question_data['subject'].'');
				}

				$filePath = $data['upload_data']['full_path'];
				// Read image path, convert to base64 encoding
				$imageData = base64_encode(file_get_contents($filePath));

				// Format the image SRC:  data:{mime};base64,{data};
				$src = "data:".mime_content_type($filePath).";base64,".$imageData;
				$question_data['question_image'] = $src;
				unlink($filePath);
			}
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
			if(!$question_data['remove_image']){
			if($_FILES['question_image']['name']){
				$data = $this->uploadImage('question_image','uploads');
				if(isset($data['error'])){
				$this->session->set_flashdata('error', $data['error']);
					return redirect('fetch_question/'.$question_data['subject'].'');
				}

				$filePath = $data['upload_data']['full_path'];
				// Read image path, convert to base64 encoding
				$imageData = base64_encode(file_get_contents($filePath));

				// Format the image SRC:  data:{mime};base64,{data};
				$src = "data:".mime_content_type($filePath).";base64,".$imageData;
				$question_data['question_image'] = $src;
				unlink($filePath);
			}
			}
			else{
				$question_data['question_image'] = "";
			}
			unset($question_data['remove_image']);
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

		function uploadImage($filename,$folderPath){
	        $config['upload_path']  = $folderPath;
	        $config['allowed_types']  = '*';

	        $this->load->library('upload', $config,'uploadImage');
	        $this->uploadImage->initialize($config);

	        if (!$this->uploadImage->do_upload($filename))
	        {
	                $data = array('error' => $this->uploadImage->display_errors());
	        }
	        else
	        {
	                $data = array('upload_data' => $this->uploadImage->data());
	        }
	        return $data;
		}
	}
?>