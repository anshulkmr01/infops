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
		<div class="row mt-5 pt-5">
			<div class="col-sm-3 col-md-3 col-lg-4"></div>
			<div class="col-sm-6 col-md-6 col-lg-4">
				<form action="student_validate" method="post">
				  <fieldset>
				    <legend>Student Login</legend>
				    <div class="form-group">
				      <label for="exampleInputEmail1">Email address</label>
				      <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="<?= set_value('email'); ?>" aria-describedby="emailHelp" placeholder="Enter email">
				      <small id="emailHelp" class="form-text text-muted"><?= form_error('email'); ?></small>
				    </div>
				    <div class="form-group">
				      <label for="exampleInputPassword1">Password</label>
				      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				      <small id="emailHelp" class="form-text text-muted"><?= form_error('password'); ?></small>
				    </div>
				    <button type="submit" class="btn btn-primary">login</button>
				  </fieldset>
				</form>
				<div class="exam-timing mt-5">
					<h5>Exam Window will be open on <span class="text-info font-weight-bold"><?= date('d-M-Y',strtotime($exam_schedule['exam_date'])); ?></span></h5>
					<p class="text-info font-weight-bold">
						
						From: <?= date('g:i A',strtotime($exam_schedule['start_time'])); ?> to: <?= date('g:i A',strtotime($exam_schedule['end_time'])); ?>
					</p>
				</div>
			</div>
			<div class="col-sm-3 col-md-3 col-lg-4"></div>
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
