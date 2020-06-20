<?php
	class Merchant_Admin extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			if(!$this->session->userdata('adminData')){
				$this->session->set_flashdata('warning','Login to Continue');
				return redirect('admin');				
			}
			$this->load->model('MerchantModel');
		}

		public function index()
		{
			$merchant_data = $this->MerchantModel->fetch_merchant();
			$this->load->view('admin/merchant',['merchant_data'=>$merchant_data]);
		}

		public function delete_merchent($value='')
		{
			if($value == ''){
				return redirect('merchant_list');
			}
			if($this->MerchantModel->delete_merchent($value)){
				$this->session->set_flashdata('success', 'Merchant Removed Successfully');
				return redirect('merchant_list');
			}
			else{
				$this->session->set_flashdata('error', 'Merchant Removing Failed Please Contact Your Developer!');
				return redirect('merchant_list');
			}
		}
	}
?>