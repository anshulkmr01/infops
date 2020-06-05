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
					<h3>Student Data</h3>
					<table class="table table-hover">
						<thead>
							<tr class="table-primary">
								<th></th>
								<th></th>
							</tr>
						</thead>
						<?php
							// echo "<pre>";
							// print_r($student_data);
						if($student_data):
						$i = 0;
						?>
						<tbody>
							<?php foreach ($student_data as $key => $value) { if($value != ''): ?>
							
							<tr class="table-light">
								<td scope="row"><?= $key; ?>:</td>
								<?php if($key == 'photo' or $key == 'identity_doc' or $key == '10th' or $key == '12th' or $key == 'graduation' or $key == 'post_graduation' or $key == 'resume' ): ?>
								<td scope="row">

									<a href="<?= base_url($this->config->item('document_path').'/'.$value)?>"><span class="btn btn-sm btn-info">Download <i class="fas fa-download"></i></span></a>
								
								</td>
								<?php else: ?>
								<td scope="row"><?= $value; ?></td>
								<?php endif; ?>
							</tr>

							<?php endif; } ?>
						</tbody>
						<?php else: ?>
						<tbody>
							<tr class="table-info">
								<td scope="row">No Info Found</td>
								<td scope="row"></td>
							</tr>
						</tbody>
						<?php endif; ?>
					</table>
				</div>
			</div>
		<!-- /mainbody -->
		</div>
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
