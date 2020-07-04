<?php
	class AdvertisementModel extends CI_Model
	{

		function active_ads($package_name)
		{
			if($this->db->where(['ad_package'=>$package_name, 'is_active'=>1])->get('advertisement')->result()){

			$query = $this->db->where(['ad_package'=>$package_name, 'is_active'=>1, 'flag'=>0])->get('advertisement')->row_array();
				if($query){
					return $query;	
				}
				else{
					return 'no_flag_0';
				}
			}
			else{
				return 'no_pack';
			}
		}

		public function view_platinum_ad()
		{
			$ad_count = $this->session->userdata('platinum_diamond_ad_count');
			if ($ad_count === NULL)
			{
				$ad_count = 1;
			}

			if($ad_count >= 2){
				$package_name = 'platinum'; //Package Name for 1 frequency
				$ad_count = 0;
			}
			else{
				$package_name = 'diamond'; //Package Name for 1 frequency
			}

			$query = $this->active_ads($package_name);
			if($query != 'no_pack'){
				if($query != 'no_flag_0'){
				$data = $query;
					$this->db->where('ID',$query['ID'])->update('advertisement',['flag' => 1]);
					$data = $query;
				}
				else{
					$data = $query;
					$this->db->where(['ad_package'=>$package_name, 'is_active'=>1])->update('advertisement',['flag' => 0]);
					return $this->view_platinum_ad();
				}	
			}
			else{
				 $data = 0;
			}

			$count = $ad_count+1;
			$this->session->set_userdata('platinum_diamond_ad_count',$count);
			 return $data;

		}

		public function silver_gold_ad()
		{
			$ad_count = $this->session->userdata('silver_gold_ad_count');
			if ($ad_count === NULL)
			{
				$ad_count = 1;
			}

			if($ad_count >= 3){
				$package_name = 'silver'; //Package Name for 1 frequency
				$ad_count = 0;
			}
			else{
				$package_name = 'gold'; //Package Name for 2 frequency
			}

			$query = $this->active_ads($package_name);
			if($query != 'no_pack'){
				if($query != 'no_flag_0'){
				$data = $query;
					$this->db->where('ID',$query['ID'])->update('advertisement',['flag' => 1]);
					$data = $query;
				}
				else{
					$data = $query;
					$this->db->where(['ad_package'=>$package_name, 'is_active'=>1])->update('advertisement',['flag' => 0]);
					return $this->silver_gold_ad();
				}	
			}
			else{
				 $data = 0;
			}

			$count = $ad_count+1;
			$this->session->set_userdata('silver_gold_ad_count',$count);
			return $data;

		}
	}
?>