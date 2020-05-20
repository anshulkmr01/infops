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
				<div class="container">
					<h3>Online Exam Date & Timing</h3>
					<p class="text-danger font-weight-bold">Exam Date: <?= date('d/M/Y',strtotime($exam_schedule['exam_date'])); ?>
						<br>
						From: <?= date('g:i A',strtotime($exam_schedule['start_time'])); ?> to: <?= date('g:i A',strtotime($exam_schedule['end_time'])); ?>
					</p>
					<hr>
					<h4>Set New Exam Schedule</h4>
					<div class="exam-timing row">
						<div class="col-sm-10 col-md-6 col-lg-4">
							<form action="<?= base_url('schedule_exam')?>" method="post">
						    <div class="form-group">
						      <label for="exampleInputExamDate">Exam Date:</label>
						      <input type="date" name="exam_date" class="form-control" id="exampleInputExamDate" aria-describedby="examDateHelp" placeholder="Exam Date">
						      <small id="examDateHelp" class="form-text text-muted">Date When exam will be held.</small>

						      <label for="exampleInputStartTime">Start Time:</label>
						      <input type="time" name="start_time" class="form-control" id="exampleInputStartTime" aria-describedby="examStartTimeHelp" placeholder="Exam Start Time">
						      <small id="examStartTimeHelp" class="form-text text-muted">Start Time Must be in the form of 24 hours.</small>

						      <label for="exampleInputEndTime">End Time:</label>
						      <input type="time" name="end_time" class="form-control" id="exampleInputEndTime" aria-describedby="examEndTimeHelp" placeholder="Exam End Time">
						      <small id="examEndTimeHelp" class="form-text text-muted">End Time Must be in the form of 24 hours.</small>
						    </div>
						      <button type="submit" class="btn btn-primary">Save</button>
							</form>
						</div>
						<div class="col-sm-1 col-md-3 col-lg-4"></div>
						<div class="col-sm-1 col-md-3 col-lg-4"></div>
					</div>
				</div>
			</div>
		<!-- /mainbody -->
		</div>
		<!-- Add question modal -->
		<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Add Question With A Correct Answer</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		       <form action="save_question" method="post">
				  <fieldset>
				    <div class="form-group">
				      <legend>Question:</legend>
				      <textarea required name="question" class="form-control" rows="3"></textarea>
				    </div>
				  	<div class="form-group">
					    <div class="custom-control custom-radio">
					      <input type="radio" id="customRadio1" name="correct_option" value="a" checked class="custom-control-input">
					      <label class="custom-control-label" for="customRadio1">a)</label>
					      <textarea required class="form-control" name="option_a" rows="2"></textarea>
					    </div>
					    <div class="custom-control custom-radio">
					      <input type="radio" id="customRadio2" name="correct_option" value="b" class="custom-control-input">
					      <label class="custom-control-label" for="customRadio2">b)</label>
					      <textarea required class="form-control" name="option_b" rows="2"></textarea>
					    </div>
					    <div class="custom-control custom-radio">
					      <input type="radio" id="customRadio3" name="correct_option" value="c" class="custom-control-input">
					      <label class="custom-control-label" for="customRadio3">c)</label>
					      <textarea required class="form-control" name="option_c" rows="2"></textarea>
					    </div>
					    <div class="custom-control custom-radio">
					      <input type="radio" id="customRadio4" name="correct_option" value="d" class="custom-control-input">
					      <label class="custom-control-label" for="customRadio4">d)</label>
					      <textarea required class="form-control" name="option_d" rows="2"></textarea>
					    </div>
					    <br>
				  		<label>Select a correct answer*</label>
				  	</div>
				    <button type="submit" class="btn btn-primary">Save</button>
				  </fieldset>
				</form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- /Add question madal -->
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
