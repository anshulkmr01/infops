<!DOCTYPE html>
<html>
<head>
	<title>Infops Examination Portal</title>
	<!-- Global Css using Helper -->
	<?php 
			globalCss(); 
	?>
	<!--/ Global Css using Helper -->
</head>
<body>
	<!-- Navbar -->
		<?php $this->load->view('navbar');?>
	<!--/ Navbar -->
	<!-- Main Body -->
	<div class="container-fluid">
		<div class="container mt-5" style="min-height: 400px;">
		<div class="row">
			<div class="col-sm-1 col-lg-1 col-md-1"></div>
			<div class="col-sm-10 col-lg-10 col-md-10">
				<?php
					if($question_data){
					foreach ($question_data as $key => $value) { ?>
				<div class="question-container">
					<?php
						$active_subject = "";
						if($value['subject'] == 'reasoning'){ $active_subject = "Reasoning";}
						if($value['subject'] == 'crt_afr'){ $active_subject = "Current Affairs";}
						if($value['subject'] == 'maths'){ $active_subject = "Maths";}
						if($value['subject'] == 'english'){ $active_subject = "English";}
						 ?>
					<h5><?= $active_subject ?></h5>
					<legend>Question no : <?= $value['s_no']?></legend>
					<p class=""><?= $value['question']?></p>
					<hr>
				</div>
				<div class="option_container mt-5">
					<h6>Options:</h6>
					<form action="<?= base_url('submit_student_answer')?>" method="post">
					<div class="form-group">
				  		<input type="hidden" name="question_ID" value=" <?= $value['ID']?>">
					    <div class="custom-control custom-radio">
					      <input type="radio" id="customRadio1" name="student_answer" value="a" checked class="custom-control-input">
					      <label class="custom-control-label" for="customRadio1"><span>a)</span> <?= $value['option_a']?></label>
					    </div>
					    <div class="custom-control custom-radio">
					      <input type="radio" id="customRadio2" name="student_answer" value="b" class="custom-control-input">
					      <label class="custom-control-label" for="customRadio2"><span>b)</span> <?= $value['option_b']?></label>
					    </div>
					    <div class="custom-control custom-radio">
					      <input type="radio" id="customRadio3" name="student_answer" value="c" class="custom-control-input">
					      <label class="custom-control-label" for="customRadio3"><span>c)</span> <?= $value['option_c']?></label>
					    </div>
					    <div class="custom-control custom-radio">
					      <input type="radio" id="customRadio4" name="student_answer" value="d" class="custom-control-input">
					      <label class="custom-control-label" for="customRadio4"><span>d)</span> <?= $value['option_d']?></label>
					    </div>
					    <br>
				  		<label>Select an Option as your answer</label>
				  	</div>
				  	<button type="submit" class="btn btn-primary">Submit</button>
				  	</form>
				</div>
				<?php break; }} else{ ?>
					<form action="<?= base_url('finish_exam')?>" method="post">
					<div class="form-group">
						<h3>You Have Completed Your Exam</h3>
					   <h5>Finish Your Exam by clicking on below button</h5>
				  	</div>
				  	<button type="submit" class="btn btn-primary">Finish</button>
				  	</form>
				<?php }?>
			</div>
			<div class="col-sm-1 col-lg-10 col-md-1"></div>
		</div>
		</div>
	</div>
	<!--/ Main Body -->
	<!-- footer -->
	<footer class="page-footer font-small text-center pt-5" >
		<?php $this->load->view('footer');?>
	</footer>
	<!-- /footer -->

</body>
	<?php 
			globalJs(); 
	?>
</html>
