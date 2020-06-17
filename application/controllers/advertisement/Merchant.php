<?php
	class Merchant extends CI_Controller
	{
		
		function __construct(){
			parent::__construct();
			$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
			$this->load->model('MerchantModel');
			$this->merchant_data = '';
		}

		public function index(){
			$this->load->view('merchant/registration');
		}

		public function merchant_registration()
		{
				$input_data = $this->input->post();
				unset($input_data['submit']);
				foreach ($input_data as $key => $value) {
					if($key == 'GST_number') continue;
					$this->form_validation->set_rules($key,'','trim|required',
														array('required'=>'Required'));
				}
				if ($this->form_validation->run()) {
					$query = $this->MerchantModel->register_merchant($input_data);
					if (isset($query['data'])) {
						$this->session->set_userdata('merchant_data',$query['data']);
						return redirect('merchant_payment');
					}
					else{
						$this->session->set_flashdata('error',$query);
						//return redirect('merchant');
						$this->load->view('merchant/registration');
					}
				}
				else{
					$this->load->view('merchant/registration');
				}
			}

		public function existing_merchant(){
			$this->load->view('merchant/existing_merchant_payment');
		}

		public function merchant_login()
		{
				$input_data = $this->input->post();
				unset($input_data['submit']);
				foreach ($input_data as $key => $value) {
					$this->form_validation->set_rules($key,'','trim|required',
														array('required'=>'Required'));
				}
				if ($this->form_validation->run()) {
					$query = $this->MerchantModel->login_merchant($input_data);
					if (isset($query)) {
						$this->session->set_userdata('merchant_data',$query);
						return redirect('merchant_payment');
					}
					else{
						$this->session->set_flashdata('error',"Wrong Details");
						return redirect('merchant_login');
					}
				}
				else{
					$this->load->view('merchant/existing_merchant_payment');
				}
			}

			public function merchant_payment()
			{
				if ($merchant_data = $this->session->userdata('merchant_data')) {
					$this->load->view('merchant/payment',['merchant_data'=>$merchant_data]);	
				}
				else{
					return redirect('merchant_login');
				}
			}

			function merchant_payment_success()
        	{

        	$is_hash_match = false;

    		$status=$_POST["status"];
			$name=$_POST["firstname"];
			$amount=$_POST["amount"];
			$txnid=$_POST["txnid"];
			$posted_hash=$_POST["hash"];
			$key=$_POST["key"];
			$productinfo=$_POST["productinfo"];
			$email=$_POST["email"];
			$merchant_ID = $_POST["udf1"];
			$salt="gTpj7PRi2P";

			if ($status == 'success') {
				$this->MerchantModel->update_merchant_payment_status($merchant_ID,$txnid,$amount,$productinfo);
			}

			If (isset($_POST["additionalCharges"])) {
			$additionalCharges=$_POST["additionalCharges"];
			$retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|'.$merchant_ID.'||||||||||'.$email.'|'.$name.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
		    }

		    else {
		    $retHashSeq = $salt.'|'.$status.'|'.$merchant_ID.'||||||||||'.$email.'|'.$name.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
		  }
		   $hash = hash("sha512", $retHashSeq);
		   if($hash != $posted_hash){
		   	$is_hash_match = true;
		   }
        	$this->load->view('merchant/merchant_payment_success',['hash'=>$is_hash_match,'txnid'=>$txnid,'status'=>$status,'enrollment'=>$merchant_ID, 'product'=>$productinfo, 'amount'=>$amount]);
        	$this->session->unset_userdata('merchant_data');
        }

        function merchant_payment_failure()
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
        	$this->load->view('merchant/merchant_payment_faliure',['hash'=>$is_hash_match,'txnid'=>$txnid,'status'=>$status]);
        	
        }

        public function merchant_logout()
        {
        	$this->session->unset_userdata('merchant_data');
        	$this->session->set_flashdata('success',"Logout Success");
        	return redirect('merchant');
        }
	}
?>