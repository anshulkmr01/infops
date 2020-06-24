<?php
//Custom Advertisemnet By Anshul KBrosTechnologies
class Advertisement{

	public function __construct()
	{
		// Set the super object to a local variable for use later
		$this->CI =& get_instance();

		$this->CI->load->model('AdvertisementModel');
	}

	public function view_platinum_ad(){
		return $this->CI->AdvertisementModel->view_platinum_ad();
	}

	public function silver_gold_ad()
	{
		return $this->CI->AdvertisementModel->silver_gold_ad();
	}

}
?>