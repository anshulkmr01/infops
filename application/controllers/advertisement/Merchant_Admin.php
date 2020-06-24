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
		public function view_merchent($value='')
		{
			if($value == ''){
				return redirect('merchant_list');
			}
			$query = $this->MerchantModel->view_merchent($value);
			$add_query = $this->MerchantModel->merchant_ad($query['ID']);
			if($query){
				$this->load->view('admin/view_merchant',['merchant_data'=>$query,'merchant_ad'=>$add_query]);
			}
			else{
				$this->session->set_flashdata('info', 'No Data Found For this Merchent Plese contact your Developer');
				return redirect('merchant_list');
			}
		}

		public function ad_upload()
		{
				$input_data = $this->input->post();
				foreach ($input_data as $key => $value) {
					$this->form_validation->set_rules($key,'','trim|required',
														array('required'=>'Required'));
				}
				if(!$_FILES['ad_banner']['name']){
					$this->form_validation->set_rules('ad-banner','','required',array('required'=>'Required'));
				}
				if ($this->form_validation->run()) {
					$data = $this->upload_file_to_stirage('ad_banner');
					if(isset($data['upload_data'])){
						$input_data['ad_file_name'] = $data['upload_data']['file_name'];
						if($this->MerchantModel->ad_upload($input_data)){
							$this->session->set_flashdata('success','Ad Uploaded & activated Successfully');
							return redirect(ltrim($this->agent->referrer(),base_url()));
						}
						else{
							$this->session->set_flashdata('error','Ad Uploading failed...');
							return redirect(ltrim($this->agent->referrer(),base_url()));
						}
					}
					else{
						$this->session->set_flashdata('error',$data['error']);
						return redirect(ltrim($this->agent->referrer(),base_url()));
					}

				}
				else{
					$this->session->set_flashdata('warning','fill required fields');
					return redirect(ltrim($this->agent->referrer(),base_url()));
				}
		}

		public function change_ad_status($ID,$status)
		{
			if($status == 0){
				$status_update = 1;
				$msg = 'Ad Activation';
			}
			else{
				$status_update = 0;
				$msg = 'Ad Disable';
			}

			if ($this->MerchantModel->change_ad_status($ID,$status_update)) {
				$this->session->set_flashdata('success',$msg. ' Success');
						return redirect(ltrim($this->agent->referrer(),base_url()));
			} else {
				$this->session->set_flashdata('error',$msg. ' Faield');
						return redirect(ltrim($this->agent->referrer(),base_url()));
			}
			
		}

		public function delete_merchant_ad($ID,$file_name){
			if($this->MerchantModel->delete_merchant_ad($ID)){
				unlink($this->config->item('ad_files').'/'.$file_name);
				$this->session->set_flashdata('success','Ad Deleted Successfully');
						return redirect(ltrim($this->agent->referrer(),base_url()));
			}
			else{
				$this->session->set_flashdata('error','Ad Deletion Failed');
						return redirect(ltrim($this->agent->referrer(),base_url()));
			}
		}

		//Uploading File to storage
		function upload_file_to_stirage($file_name){
                $config['upload_path']  = $this->config->item('ad_files');
                $config['allowed_types']  = '*';

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
	}
?>