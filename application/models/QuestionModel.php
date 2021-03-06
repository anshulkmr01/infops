<?php
	class QuestionModel extends CI_Model
	{
		function save_question($question_data){
			return $this->db->insert('question',$question_data);
		}

		function update_question($question_data){
			return $this->db->where('ID',$question_data['ID'])->update('question',$question_data);
		}

		function update_paragraph($paragraph)
		{
			return $this->db->where('ID',$paragraph['ID'])->update('question',$paragraph);
		}

		function view_question($ID)
		{
			return $this->db->where('ID',$ID)->get('question')->row_array();
		}

		function fetch_question($subject){
				return $this->db->where('subject',$subject)->get('question')->result_array();
		}

		function delete_question($id){
				return $this->db->where('ID',$id)->delete('question');
		}

		function fetch_exam_schedule(){
				return $this->db->where('ID',1)->get('examtiming')->row_array();
		}

		function schedule_exam($schedule_data){
			return $this->db->where('ID',1)->update('examtiming',$schedule_data);
		}

		function student_question(){
			$i=0;
			$user_data = $this->session->userdata('userData');
			if($this->db->where('enrollment_no',$user_data['enrollment_no'])->get('student_doc')->row('exam_end')){
				return "exam_end";
			}

			$this->db->where('enrollment_no',$user_data['enrollment_no'])->update('student_doc',['exam_start'=>1]);

			$all_questions = $this->db->order_by("subject", "desc")->get('question')->result_array();
			unset($all_questions['correct_option']);
			$student_data = $this->db->where('enrollment_no',$user_data['enrollment_no'])->get('student_doc')->row_array();
			$student_answer = $this->db->where('student_ID',$user_data['enrollment_no'])->get('studentanswers')->result_array();

			//Itiration for Imat
			if($user_data['catID'] == 'imat'){
			foreach ($all_questions as $key => $value) {
				if($all_questions[$key]['subject'] == 'maths' or $all_questions[$key]['subject'] == 'english' or $all_questions[$key]['subject'] == 'reasoning'){
					continue;
						}
						else{
							unset($all_questions[$key]);	
						}
					}
			}

			//Itiration for Freelancer
			if($user_data['catID'] == 'freelancer'){
			foreach ($all_questions as $key => $value) {
				if($all_questions[$key]['subject'] == 'english' or $all_questions[$key]['subject'] == 'typing'){
					continue;
						}
						else{
							unset($all_questions[$key]);	
						}
					}
			}

			//Skip Typing if Not Freelancer
			if($user_data['catID'] != 'freelancer'){
			foreach ($all_questions as $key => $value) {
				if($all_questions[$key]['subject'] == 'typing'){
					
							unset($all_questions[$key]);	
						}
					}
			}

			$s_no = 0;
			foreach ($all_questions as $key => $value) {
				$s_no ++;
				$all_questions[$key]['s_no'] = $s_no;
			}

			foreach ($all_questions as $key_ => $value_) {
				foreach ($student_answer as $key => $value) {
					if($value_['ID'] == $value['question_ID']){
						unset($all_questions[$key_]);
					}
				}
				unset($all_questions[$key_]['correct_option']);
			}

			// echo "<pre>";
			// print_r($all_questions);
			// exit();

			return $all_questions;
		}

		function save_student_answer($question_data){
			$user_data = $this->session->userdata('userData');
			$question_data['student_ID'] = $user_data['enrollment_no'];
			return $this->db->insert('studentanswers',$question_data);
		}

		function finish_exam(){
			$user_data = $this->session->userdata('userData');
			return $this->db->where('enrollment_no',$user_data['enrollment_no'])->update('student_doc',['exam_end'=>1]);
		}

		function if_exam_started(){
			$user_data = $this->session->userdata('userData');
			return $this->db->where('enrollment_no',$user_data['enrollment_no'])->get('student_doc')->row_array();
		}

	}
?>