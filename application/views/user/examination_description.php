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
			<div class="col-sm-3 col-md-3 col-lg-2"></div>
			<div class="col-sm-6 col-md-6 col-lg-6">
				<div>
				<h2>Example body text</h2>
				<p>Nullam quis risus eget <a href="#">urna mollis ornare</a> vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
				<p><small>This line of text is meant to be treated as fine print.</small></p>
				<p>The following is <strong>rendered as bold text</strong>.</p>
				<p>The following is <em>rendered as italicized text</em>.</p>
				<p>An abbreviation of the word attribute is <abbr title="attribute">10 minute for this screen</abbr>.</p>
    			<a href="<?= base_url('start_question_paper'); ?>" type="submit" class="btn btn-primary mt-4">Start Exam Now</a>
    			</div>
			</div>
			<div class="col-sm-3 col-md-3 col-lg-2"></div>
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
