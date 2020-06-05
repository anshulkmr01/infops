<?php
	class ResultModel extends CI_Model
	{
		//Student who appeared in Exam
		function fetch_result_student($cat){
			$cat_data = $this->db->where(['catID'=>$cat, 'exam_start'=>1])->get('student_doc')->result_array();
			return $cat_data;
		}

		function fetch_student_result($student_ID){
			//Student Answers
			$student_answer = $this->db->where('student_ID',$student_ID)->get('studentanswers')->result_array();
			
			$subject_list = ['typing'=>['t_no_ques'=>0, 'correct_ans'=>0],
							'reasoning'=>['t_no_ques'=>0, 'correct_ans'=>0],
							'maths'=>['t_no_ques'=>0, 'correct_ans'=>0],
							'english'=>['t_no_ques'=>0, 'correct_ans'=>0],
							'crt_afr'=>['t_no_ques'=>0, 'correct_ans'=>0]];

			foreach ($student_answer as $key_ => $value_) {
				//Student answer's Question
				$question_data = $this->db->where(['ID'=>$value_['question_ID']])->get('question')->row_array();

				if($value_['is_typing_test'] == 0){

					$student_answer[$key_]['subject'] = $question_data['subject'];
					$student_answer[$key_]['question'] = $question_data['question'];
					$student_answer[$key_]['option_a'] = $question_data['option_a'];
					$student_answer[$key_]['option_b'] = $question_data['option_b'];
					$student_answer[$key_]['option_c'] = $question_data['option_c'];
					$student_answer[$key_]['option_d'] = $question_data['option_d'];
					$student_answer[$key_]['correct_option'] = $question_data['correct_option'];

					if($value_['student_answer'] == $question_data['correct_option']){
						$student_answer[$key_]['is_answer_correct'] = 1;
					}
					elseif($value_['student_answer'] == 'none'){
						$student_answer[$key_]['is_answer_correct'] = 'none';	
					}
					else{
						$student_answer[$key_]['is_answer_correct'] = 0;
					}

				}

				else{
					if($student_answer[$key_]['correct_words']!= 0 && $student_answer[$key_]['correct_words']!= ""){
					$student_answer[$key_]['accuracy'] = intval(($student_answer[$key_]['correct_words']*100)/$student_answer[$key_]['ques_total_words']);
					}
					else{
						$student_answer[$key_]['accuracy'] = 0;
					}
					if($student_answer[$key_]['typing_speed']>= 60 && $student_answer[$key_]['accuracy'] >= 80){

						$student_answer[$key_]['is_answer_correct'] = 1;
					}
					else{
						$student_answer[$key_]['is_answer_correct'] = 0;
					}
					$student_answer[$key_]['subject'] = $question_data['subject'];
					$student_answer[$key_]['pargraph'] = $question_data['question'];

				}

				foreach ($subject_list as $key => $value) {
					$value['t_no_ques']++;
					if($key == $student_answer[$key_]['subject']){
						$subject_list[$key]['t_no_ques'] = $value['t_no_ques'];

						if($student_answer[$key_]['is_answer_correct'] == 1){
							$value['correct_ans']++;
							$subject_list[$key]['correct_ans'] = $value['correct_ans'];
						}

						$subject_list[$key]['wrong_ques'] = $subject_list[$key]['t_no_ques'] - $subject_list[$key]['correct_ans'];


						$subject_list[$key]['max_marks'] = $subject_list[$key]['t_no_ques']*2;
						$subject_list[$key]['crt_marks'] = $subject_list[$key]['correct_ans']*2;
						$subject_list[$key]['neg_marks'] = $subject_list[$key]['wrong_ques'];
						$subject_list[$key]['obt_marks'] = $subject_list[$key]['crt_marks'] - $subject_list[$key]['wrong_ques'];

						$subject_list[$key]['sub_res_status'] = 0;
						if($subject_list[$key]['obt_marks'] <= 0 or $subject_list[$key]['obt_marks'] == ""){
							$subject_list[$key]['sub_score'] = 0;
						}

						else{
							$subject_list[$key]['sub_score'] = ($subject_list[$key]['obt_marks']*100)/$subject_list[$key]['max_marks'];
							if($subject_list[$key]['sub_score'] >= 80){
								$subject_list[$key]['sub_res_status'] = 1;
							}
						}

					}

				}

			}
			$number_of_subject_pass=0;
			$number_of_subject=0;
			$exam_status = 0;
			foreach ($subject_list as $key => $value) {
				if(isset($subject_list[$key]['sub_res_status'])){
					$number_of_subject++;
					if($subject_list[$key]['sub_res_status'] == 1){
						$number_of_subject_pass++;
					}
				}


				if($number_of_subject != 0 && $number_of_subject == $number_of_subject_pass){
					$exam_status = 1;
				}
			}

			$student_answer['subject_wise_result'] = $subject_list;
			$student_answer['student_data'] = $this->db->where('enrollment_no',$student_ID)->get('student_doc')->row_array();
			$student_answer['student_data']['number_of_sub'] = $number_of_subject;
			$student_answer['student_data']['number_of_sub_pass'] = $number_of_subject_pass;
			$student_answer['student_data']['exam_status'] = $exam_status;

			// echo "<pre>";
			// print_r($student_answer);
			// exit();
			return $student_answer;
		}
	}
?>