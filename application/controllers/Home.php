<?php
	class Home extends CI_Controller
	{
		function index()
		{
			$this->load->view('home');
		}

		function vision()
		{
			$this->load->view('vision');
		}

		function what_we_do()
		{
			$this->load->view('what_we_do');
		}

		function how_to_track()
		{
			$this->load->view('how_to_track');
		}

		function disipline(){
			$this->load->view('disipline');
		}

		function document_required(){
			$this->load->view('document_required');
		}

		function latest_application(){
			$this->load->view('latest_application');
		}

		function mock_test(){
			$this->load->view('mock_test');
		}

		function contact_us(){
			$this->load->view('contact_us');
		}
		
		function academic_training(){
			$this->load->view('academic_training');
		}

		function course_content(){
			$this->load->view('course_content');
		}

		function digital_marketing_traning(){
			$this->load->view('digital_marketing_traning');
		}

		function imat_examination(){
			$this->load->view('imat_examination');
		}

		function freelancing(){
			$this->load->view('freelancing');
		}

		function band(){
			$this->load->view('band');
		}

		function term_condition(){
			$this->load->view('term_condition');
		}

		function privacy_policy(){
			$this->load->view('privacy_policy');
		}

		function registration(){
  		if($this->session->userdata('new_student_user_data')){
			$this->session->set_flashdata('warning',"Already Registered");
			return redirect('/');
  			}
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

		public function refresh_captcha(){
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
        
        // Display captcha image
        echo $captcha['image'];

    	}

		function student_login(){

  		if($this->session->userdata('new_student_user_data')){
			$this->session->set_flashdata('warning',"Already logged in");
			return redirect('/');
  			}
			$this->load->view('student_login');
		}

		function document_registration_form($catID = ""){
  		if(!$this->session->userdata('new_student_user_data')){
			$this->session->set_flashdata('warning',"Please Login or register yourself");
			return redirect('/');
  			}
  			if($catID){
  				$this->load->model('ApplyOnlineModel');
  				$query = $this->ApplyOnlineModel->check_if_user_already_applied($catID);
  				if($query){
  					if($query['payment_status'] == 0){
  						$this->session->set_flashdata('payment_info','Complete your payment for appliaction Submition');
  						$this->load->view('payment',['catID'=>$catID,'enrollment_no'=>$query['enrollment_no']]);
  					}
  					else{
  						$this->load->view('payment_status',['student_data'=>$query]);
  					}
  				}
  				else{
				$this->load->view('document_registration_form',['catID'=>$catID]);
				}	
  			}
  			else{

  				return redirect('/');
  			}
		}

	// Mock 
		function current_affair_mock(){
			$this->load->view('mock/current_affair_mock');
		}
		function english_mock(){
			$this->load->view('mock/english_mock');
		}

		function IELS_mock(){
			$this->load->view('mock/IELS_mock');
		}

		function reasoning_mock(){
			$this->load->view('mock/reasoning_mock');
		}

		function maths_mock(){
			$this->load->view('mock/maths_mock');
		}
	// Mock End

		function contact_us_email(){
			$this->form_validation->set_rules('fname','First Name','required|trim');
			$this->form_validation->set_rules('lname','Last Name','required|trim');
			$this->form_validation->set_rules('email','Email','valid_email|required|trim');
			$this->form_validation->set_rules('phone','Phone','required|trim');
			$this->form_validation->set_rules('message','Name','required|trim');
			if(!$this->form_validation->run()){
				$this->session->set_flashdata('error','All Fields are required');
				return redirect (str_replace(base_url(),"",$this->agent->referrer()));
			}
			$clientData = $this->input->post();

	        $message = "<div>";
	        $message .= "<h2>Query form Contact us Form</h2>";
	        $message .= "<p><b>Contact Details are following:- </b></p>";
	        $message .= "<p><b>Name: </b>".$clientData['fname']." ".$clientData['lname']."</p>";
	        $message .= "<p><b>Email: </b>".$clientData['email']."</p>";
	        $message .= "<p><b>Phone Number: </b>".$clientData['phone']."</p>";
	        $message .= "<p><b>Query: </b>".$clientData['message']."</p>";
	        $message .= "</div>";

			if($this->sendEmail('Client Query',$message)){
				$this->session->set_flashdata('success',"We have recived your message. we'll contact you soon");
				return redirect (str_replace(base_url(),"",$this->agent->referrer()));
			}

		}

		function sendEmail($subject, $message){
		 //Load email library
         $this->load->library('email');

			$config['protocol']    = 'smtpout.secureserver.net';
			$config['smtp_host']    = 'localhost';
			$config['smtp_port']    = '25';
			$config['smtp_timeout'] = '600';

			$config['smtp_user']    = '';    //Important
			$config['smtp_pass']    = '';  //Important


			$config['charset']    = 'utf-8';
			$config['newline']    = "\r\n";
			$config['mailtype'] = 'html'; // or html
			$config['validation'] = TRUE; // bool whether to validate email or not 

			$this->email->initialize($config);
			$this->email->set_mailtype("html"); 
			$this->email->set_newline("\r\n");

	        $this->email->from('', 'Unicorp Website');
	        $this->email->to('');
	        $this->email->subject($subject);
	        $this->email->message($message);
	        if($this->email->send()){
	        	return true;
	        }
	        else{
	        	return false;
	        }
		}
	}
?>