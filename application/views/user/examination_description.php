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
<style type="text/css">
	
body{
	-webkit-user-select: none;
	-moz-user-select: -moz-none;
	-ms-user-select: none;
	user-select: none;
}

</style>
<body>
	<!-- Navbar -->
		<?php $this->load->view('examlogin/navbar');?>
	<!--/ Navbar -->
	<!-- Main Body -->
	<div class="container-fluid">
		<div class="row mt-5 pt-5">
			<div class="col-sm-3 col-md-3 col-lg-2"></div>
			<div class="col-sm-6 col-md-6 col-lg-6">
				<div>
					<?php if ($catID == 'freelancer'): ?>
						<h2>Freelancer</h2>
						<p>Welcome to Freelancer Examination here we are going to discuss some point, candidate have to focus on:</p>
						<p>1 - In Freelancer Examination there are 2 Subjects</p>
						<ul>
							<li>English</li>
							<li>Typing</li>
						</ul>
						<p>2 - Time Duration</p>
						<ul>
							<li>Subject English Every Question Timing will be 30 Seconds.</li>
							<li>Subject Typing will have 5 Question.</li>
							<li>Question 1 Timing will be 1 minute.</li>
							<li>Question 2 Timing will be 2 minute.</li>
							<li>Question 3 Timing will be 2 minute.</li>
							<li>Question 4 Timing will be 3 minute.</li>
							<li>Question 5 Timing will be 4 minute.</li>
						</ul>
						<p>3 - To clear Freelancer candidate have to clear every subject.</p>
						<p>4 - To clear Freelancer candidate require minimum 60% Marks.</p>
						
					<?php elseif($catID == 'imat'): ?>
						<h2>IMAT</h2>
						<p>Welcome to IMAT Examination here we are going to discuss some point candidate have to focus on:</p>
						<p>1 - In IMAT Examination there are 3 Subjects.</p>
						<ul>
							<li>English</li>
							<li>Maths</li>
							<li>Reasoning</li>
						</ul>
						<p>2 - Time Duration</p>
						<ul>
							<li>Subject English Every Question Timing will be 30 Seconds.</li>
							<li>Subject Mathematic Every Question Timing will be 1 minute.</li>
							<li>Subject Reasoning Every Question Timing will be 30 Seconds.</li>
						</ul>
						<p>3 - To clear IMAT candidate have to clear every subject.</p>
						<p>4 - To clear IMAT candidate require minimum 60% Marks.</p>

					<?php else: ?>
						<h2>Latest Application</h2>
						<p>Welcome to Latest Applications Examination here we are going to discuss some point, candidate have to focus on.</p>
						<p>1 - In IMAT Examination there are 4 Subjects.</p>
						<ul>
							<li>English</li>
							<li>Maths</li>
							<li>Reasoning</li>
							<li>Current Affair</li>
						</ul>
						<p>2 - Time Duration</p>
						<ul>
							<li>Subject English Every Question Timing will be 30 Seconds.</li>
							<li>Subject Mathematic Every Question Timing will be 1 minute.</li>
							<li>Subject Reasoning Every Question Timing will be 30 Seconds.</li>
							<li>Subject Current Affair Every Question Timing will be 30 Seconds.</li>
						</ul>
						<p>3 - To clear Latest Application Examination candidate have to clear every subject.</p>
						<p>4 - To clear Latest Application Examination candidate require minimum 60% Marks.</p>

					<?php endif; ?>	
				
    			<a href="<?= base_url('start_question_paper'); ?>" type="submit" class="btn btn-primary mt-4">Start Exam Now</a>
    			</div>
			</div>
			<div class="col-sm-3 col-md-3 col-lg-2"></div>
		</div>
	</div>
	<!--/ Main Body -->
	<!-- footer -->
	<footer class="page-footer font-small text-center pt-5" >
		<?php $this->load->view('examlogin/footer');?>
	</footer>
	<!-- /footer -->

</body>
	<?php 
			globalJs(); 
	?>
</html>
