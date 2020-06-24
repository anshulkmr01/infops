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
		<?php $this->load->view('examlogin/navbar');?>
	<!--/ Navbar -->
	<!-- Main Body -->
	<div class="container-fluid pt-5" style="
											background: url(https://www.ecpi.edu/sites/default/files/online_18.png);
										    background-repeat: no-repeat;
										    background-size: cover;">
		<div class="row pt-3">
			<div class="col-sm-2 col-md-2 col-lg-3"></div>
			<div class="col-sm-8 col-md-8 col-lg-6" >
				<legend class="text-white">Examination Login</legend>
				<form action="student_validate" method="post" class="border p-5" style="background: #fff">
				  <fieldset>
				    <div class="form-group">
				      <label for="exampleInputEmail1">Enrollment Number</label>
				      <input type="number" name="email" class="form-control" id="exampleInputEmail1" value="<?= set_value('email'); ?>" aria-describedby="emailHelp" placeholder="Enter Enrollment">
				      <small id="emailHelp" class="form-text text-muted"><?= form_error('email'); ?></small>
				    </div>
				    <div class="form-group">
				      <label for="exampleInputPassword1">Date of Birth</label>
				      <input type="date" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				      <small id="emailHelp" class="form-text text-muted"><?= form_error('password'); ?></small>
				    </div>
				    <button type="submit" class="btn btn-primary">Login</button>
				  </fieldset>
				</form>
				<div class="exam-timing mt-2 mb-5 pt-3 pr-5 pl-5 pb-1"  style="background: #fff">
					<h5>Exam Window will be open on <span class="text-info font-weight-bold"><?= date('d/M/Y',strtotime($exam_schedule['exam_date'])); ?></span></h5>
					<p class="text-info font-weight-bold">
						
						From: <?= date('g:i A',strtotime($exam_schedule['start_time'])); ?> to: <?= date('g:i A',strtotime($exam_schedule['end_time'])); ?>
					</p>
				</div>
			</div>
			<div class="col-sm-2 col-md-2 col-lg-3"></div>
		</div>
	</div>
	<!--/ Main Body -->
	<!-- footer -->
	<footer class="page-footer font-small text-center" >
		<?php $this->load->view('examlogin/footer');?>
	</footer>
	<!-- /footer -->

</body>
	<?php 
			globalJs(); 
	?>
</html>
