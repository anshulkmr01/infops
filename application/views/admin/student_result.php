<!DOCTYPE html>
<html>
<head>
	<title>Infops Examination</title>
	<!-- Global Css using Helper -->
	<?php 
			globalCss(); 
	?>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/admin-panel.css')?>">
	<!--/ Global Css using Helper -->
</head>
<body>
	<!-- Navbar -->
		<?php include 'navbar.php'?>
	<!--/ Navbar -->

		<div class="sub-body">
		<!-- Navbar -->
			<?php include 'sidebar.php'?>
		<!--/ Navbar -->

		<!-- mainbody -->
			<div class="cms-body">
				<div class="container">
					<div class="row">
						<div class="col-sm-5 alert-message">
							<?php if($success = $this->session->flashdata('success')):?>
						    	<div class="alert alert-warning">
						    		<?= $success; ?>
						    	</div>
						    <?php endif;?>

						    <?php if($error = $this->session->flashdata('error')):?>
						    	<div class="alert alert-danger">
						    		<?= $error; ?>
						    	</div>
						    <?php endif;?>
						</div>
						<div class="col-sm-7"></div>
					</div>
				</div>
				<?php
				$student_data = $student_result['student_data'];
				$subject_wise_result = $student_result['subject_wise_result'];
				unset($student_result['student_data']);
				unset($student_result['subject_wise_result']);
				?>
				<div class="container">
					<div class="form-group mt-4">
						<div class="user_details border p-2 mb-3">
							<div class="font-weight-bold">
								<label class="text-primary">Student Name: </label> <span class="text-info"><?= $student_data['fname']." ".$student_data['lname']?></span>
							</div>
							<div class="font-weight-bold">
								<label class="text-primary">Enrollment no.:</label> <span class="text-info" ><?= $student_data['enrollment_no'];?></span>
							</div>
							<div class="font-weight-bold">
								<label class="text-primary">Email:</label> <span class="text-info"><?= $student_data['email'];?></span>
							</div>
							<div class="font-weight-bold">
								<label class="text-primary">Phone number:</label> <span class="text-info"><?= $student_data['phone'];?></span>
							</div>
							<div class="font-weight-bold">
								<label class="text-primary">DOB:</label> <span class="text-info"><?= $student_data['DOB'];?></span>
							</div>
							<div class="font-weight-bold">
								<label class="text-primary">Exam For:</label> <span class="text-info"><?= $student_data['catID'];?></span>
							</div>
							<div class="font-weight-bold">
								<label class="text-primary">Result Status:</label> <span class="text-info"><?php if($student_data['exam_end'] == 0) echo "Did Not Finished the Exam"; if($student_data['exam_status'] == 1) echo "<span class='text-success'>Pass</span>"; else{
									echo "<span class='text-danger'>Fail</span>";
								}?></span>
							</div>
						</div>
						<div class="table">
							<table class="table table-hover sortable-table">
							  <thead>
							    <tr class="table-primary sorter-header">
							      <th scope="col">S.No.</th>
							      <th scope="col">Subject</th>
							      <th scope="col">Question</th>
							      <th scope="col">Option A</th>
							      <th scope="col">Option B</th>
							      <th scope="col">Option C</th>
							      <th scope="col">Option D</th>
							      <th scope="col">Student Option</th>
							      <th scope="col">Correct Option</th>
							    </tr>
							  </thead>
							  <tbody>
							  	<?php $i=0; if($student_result){ foreach ($student_result as $key => $value) { if($value['subject']=='typing'){$show_typing = true; continue; } $i++; ?>
							    <tr class="table-light <?php if(!$value['is_answer_correct']) echo "text-danger";?>">
							      <th scope="row"><?= $i; ?></th>
							      <td><?= $value['subject'] ?></td>
							      <td><?= $value['question'] ?></td>
							      <td><?= $value['option_a'] ?></td>
							      <td><?= $value['option_b'] ?></td>
							      <td><?= $value['option_c'] ?></td>
							      <td><?= $value['option_d'] ?></td>
							      <td><?= $value['student_answer'] ?></td>
							      <td><?= $value['correct_option'] ?></td>
							    </tr>
								<?php }} else{?>
							    <tr class="table-warning">
							      <th scope="row"></th>
							      <td class="w-100">Student Did't Attempt Exam for this Section</td>
							      <td></td>
							      <td></td>
							      <td></td>
							    </tr>
								<?php } if(isset($show_typing)){ ?>
								<thead>
								<tr class="table-primary">
							      <th scope="col">S.No.</th>
							      <th scope="col">Typing <br> Paragraph</th>
							      <th scope="col" colspan="3">Student Paragraph</th>

							      <th scope="col">Typing Speed / Min</th>
							      <th scope="col">Correct Typed Words</th>
							      <th scope="col">Wrong Typed Words</th>
							      <th scope="col">Total Typed words</th>
							    </tr>
							 	</thead>
							 	<?php $i=0; if($student_result){ foreach ($student_result as $key => $value) { if($value['subject']!='typing'){ continue; } $i++; ?>
								<tr class="table-light <?php if(!$value['is_answer_correct']) echo "text-danger";?>">
								  <th scope="row"><?= $i; ?></th>
								  <td><?= $value['pargraph'] ?></td>
								  <td colspan="3"><?= $value['student_typing'] ?></td>

								  <td><?= $value['typing_speed'] ?></td>
								  <td><?= $value['correct_words'] ?></td>
								  <td><?= $value['error_words'] ?></td>
								  <td><?= $value['ques_total_words'] ?></td>
								</tr>
								<?php }} else{?>
								<tr class="table-warning">
								  <th scope="row"></th>
								  <td class="w-100">Student did't Exam for this Section</td>
								  <td></td>
								  <td></td>
								  <td></td>
								</tr>
								<?php } ?>
								<?php } ?>
							  </tbody>
							</table> 
						</div>
					</div>
				</div>
			</div>
		<!-- /mainbody -->
		</div>
		<!-- View Question Modal -->
		<div class="modal fade bd-example-modal-lg" id="view_question" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">View Question</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		       <form action="<?= base_url('save_question')?>" method="post">
				  <fieldset>
				    <div class="form-group">
				      <legend>Question:</legend>
				      <div id="ques_view_div"></div>
				    </div>
				  	<div class="form-group">
					    <ol type="a">
					    	<li id="option_a_li"></li>
					    	<li id="option_b_li"></li>
					    	<li id="option_c_li"></li>
					    	<li id="option_d_li"></li>
					    </ol>
					    <label class="text-primary">Correct Answer is: Option <b id="correct_option_label"></b></label>
				  	</div>
				  	 <div>Time Duration: <span id="time_duration"></span></div>
				  </fieldset>
				</form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>
		<!--/ View Question Moal -->
	<!-- footer -->
	<footer class="admin-footer">
		<?php include 'footer.php'?>
	<!--/ footer -->
	</footer>
	
</body>
	<?php 
			globalJs(); 
	?>
</html>
