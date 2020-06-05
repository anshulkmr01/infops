<?php
	class Student_Registrtion extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
			$this->load->model('ApplyOnlineModel');
		}

		function register_new_student()
		{

	  		if($this->session->userdata('new_student_user_data')){
				$this->session->set_flashdata('warning',"Already Registered");
				return redirect('/');
	  		}

			$this->form_validation->set_rules('fname', 'First Name', 'required',['required'=>'%s is Required']);
			$this->form_validation->set_rules('lname', 'Last Nam', 'required',['required'=>'%s is Required']);
			$this->form_validation->set_rules('email', 'Email', 'required',['required'=>'%s is Required']);
			$this->form_validation->set_rules('DOB', 'Date of Birth', 'required',['required'=>'%s is Required']);
			$this->form_validation->set_rules('phone', 'Phon', 'required',['required'=>'%s is Required']);
			$this->form_validation->set_rules('is_checked', 'Accept', 'required',['required'=>'%s and agree T&C']);
			//$this->form_validation->set_rules('captcha', 'Captcha', 'required',['required'=>'%s is Required']);


			$student_data = $this->input->post();
			$sessCaptcha = $this->session->userdata('captchaCode');

			if($student_data['captcha'] !== $sessCaptcha){
				$this->form_validation->set_rules('captcha1', 'Captcha', 'required',['required'=>'Incorrect %s']);
            }

			if($this->form_validation->run()){
            unset($student_data['captcha']);            
			$query = $this->ApplyOnlineModel->register_new_student($student_data);
				if($query == 'ok'){
					$this->session->set_flashdata('success',"You are successfully registered with us You can apply now");
					return redirect('/');
				}
				else{
					$this->session->set_flashdata('error',$query);
					return redirect('registration');
				}
			}
			else{
				// Captcha configuration
				$config = array(
				'img_path'      => 'captcha_images/',
				'img_url'       => base_url().'captcha_images/',
				'font_path'     => 'system/fonts/tex.ttf',
				'img_width'     => '160',
				'img_height'    => 50,
				'word_length'   => 4,
				'font_size'     => 18,
				// White background and border, black text and red grid
		        'colors'        => array(
		                'background' => array(244, 205, 255),
		                'border' => array(0, 0,0),
		                'text' => array(0, 0, 0),
		                'grid' => array(255, 255, 255)
		        )
				);
				$captcha = create_captcha($config);

				// Unset previous captcha and set new captcha word
				$this->session->unset_userdata('captchaCode');
				$this->session->set_userdata('captchaCode', $captcha['word']);

				// Pass captcha image to view
				$data['captchaImg'] = $captcha['image'];
				$this->load->view('registration',$data);
			}
		}

		function submit_user_document()
		{
			if(!$this->session->userdata('new_student_user_data')){
			$this->session->set_flashdata('warning',"Please Login or register yourself");
			return redirect('/');
  			}

			$this->form_validation->set_rules('fname', 'First Name', 'required',['required'=>'%s is Required']);
			$this->form_validation->set_rules('lname', 'Last Name', 'required',['required'=>'%s is Required']);
			$this->form_validation->set_rules('father_name', 'Father Name', 'required',['required'=>'%s is Required']);
			$this->form_validation->set_rules('email', 'Email', 'required',['required'=>'%s is Required']);
			$this->form_validation->set_rules('DOB', 'Date of Birth', 'required',['required'=>'%s is Required']);
			$this->form_validation->set_rules('phone', 'Phone', 'required',['required'=>'%s is Required']);
			$this->form_validation->set_rules('location', 'Location', 'required',['required'=>'%s is Required']);

			if($this->form_validation->run()):
			
			$input_data = $this->input->post();

			if($_FILES){
			foreach ($_FILES as $key => $value) {
				if($value['name']){
					$name = $input_data['fname']."_".$input_data['lname']."_".$key."_".$input_data['catID']."_".$input_data['phone']."_";
					$data[$key] = $this->upload_file_to_stirage($key,$name);
					$input_data[$key] = $data[$key]['upload_data']['file_name'];

					//It will delete all previous files if found any error
					if(isset($data[$key]['error'])){
						foreach ($data as $key => $value) {
							if($value['error']){
								continue;
							}
							unlink(base_url($value['upload_data']['file_name']));
						}
					$this->session->set_flashdata('error', $data[$key]['error']);
					return redirect(ltrim($this->agent->referrer(),base_url()));
					}
				}
			}
			}

			if($enrollment_no = $this->ApplyOnlineModel->submit_user_document($input_data)){
				$this->session->set_flashdata('success', 'Your Document has submitted Successfully');
				return redirect('payment'.'/'.$input_data['catID'].'/'.$enrollment_no);
				//$this->load->view('payment',['catID'=>$input_data['catID'],'enrollment_no'=>$enrollment_no]);

			}
			else{
				$this->session->set_flashdata('error', 'Document Submition failed.');
				return redirect('document_registration_form');
			}

			else:
			if(!$this->session->userdata('new_student_user_data')){
				$this->session->set_flashdata('warning',"Please Login or register yourself First");
				return redirect('/');
	  			}
				$this->load->view('document_registration_form');
			endif;
		}

		function login_student()
		{
	  		if($this->session->userdata('new_student_user_data')){
				$this->session->set_flashdata('warning',"Already logged in");
				return redirect('/');
	  		}
			$this->form_validation->set_rules('email', 'Email', 'required',['required'=>'%s is Required']);
			$this->form_validation->set_rules('DOB', 'Date of Birth', 'required',['required'=>'%s is Required']);;
			if($this->form_validation->run()){
			$student_data = $this->input->post();
			$query = $this->ApplyOnlineModel->login_student($student_data);
				if($query == 'ok'){
					$this->session->set_flashdata('success',"You are in, You can Apply now");
					return redirect('/');
				}
				else{
					$this->session->set_flashdata('error',$query);
					return redirect('student_login');
				}
			}
			else{
				$this->load->view('student_login');
			}
		}
		function student_logout()
		{
			$this->session->unset_userdata('new_student_user_data');
					$this->session->set_flashdata('success',"Logout Successfully");
					return redirect('/');

		}

		//Uploading File to storage
		function upload_file_to_stirage($file_name,$name){
                $config['upload_path']  = $this->config->item('document_path');
                $config['allowed_types']  = '*';
                $config['file_name']  = $name;

                $this->load->library('upload', $config,'upload_file');
                $this->upload_file->initialize($config);

                if (!$this->upload_file->do_upload($file_name))
                {
                        $data = array('error' => $this->upload_file->display_errors());
                }
                else
                {
                        $data = array('upload_data' => $this->upload_file->data());
                }
                return $data;
        }

        function payment($catID, $enrollment_no)
        {
        	$this->load->view('payment',['catID'=>$catID,'enrollment_no'=>$enrollment_no]);
        }

        function payment_failure()
        {
        	$is_hash_match = false;

    		$status=$_POST["status"];
			$firstname=$_POST["firstname"];
			$amount=$_POST["amount"];
			$txnid=$_POST["txnid"];
			$posted_hash=$_POST["hash"];
			$key=$_POST["key"];
			$productinfo=$_POST["productinfo"];
			$email=$_POST["email"];
			$salt="gTpj7PRi2P";


			If (isset($_POST["additionalCharges"])) {
			$additionalCharges=$_POST["additionalCharges"];
			$retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
		    }

		    else {
		    $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
		  }
		   $hash = hash("sha512", $retHashSeq);
		   if($hash == $posted_hash){
		   	$is_hash_match = true;
		   }
        	$this->load->view('payment_failure',['hash'=>$is_hash_match,'txnid'=>$txnid,'status'=>$status]);
        	
        }

        function payment_success()
        {

        	// echo "<pre>";
        	// print_r($_POST);
        	// exit();

        	$is_hash_match = false;

    		$status=$_POST["status"];
			$firstname=$_POST["firstname"];
			$amount=$_POST["amount"];
			$txnid=$_POST["txnid"];
			$posted_hash=$_POST["hash"];
			$key=$_POST["key"];
			$productinfo=$_POST["productinfo"];
			$email=$_POST["email"];
			$enrollment = $_POST["udf1"];
			$salt="gTpj7PRi2P";

			if ($status == 'success') {
				$this->ApplyOnlineModel->update_payment_status($enrollment,$txnid,$amount,$productinfo);
			}

			If (isset($_POST["additionalCharges"])) {
			$additionalCharges=$_POST["additionalCharges"];
			$retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|'.$enrollment.'||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
		    }

		    else {
		    $retHashSeq = $salt.'|'.$status.'|'.$enrollment.'||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
		  }
		   $hash = hash("sha512", $retHashSeq);
		   if($hash != $posted_hash){
		   	$is_hash_match = true;
		   }
        	$this->load->view('payment_success',['hash'=>$is_hash_match,'txnid'=>$txnid,'status'=>$status,'enrollment'=>$enrollment]);
        	
        }
	}
?>