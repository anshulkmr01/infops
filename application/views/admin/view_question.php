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
				<h5>Paragraph</h5>
				<form id="update_form" method="post" action="<?= base_url('update_paragraph')?>">
					<p>
						<input type="hidden" name="ID" value="<?= $ques_data['ID'];?>">
						<textarea required id="text_area" disabled="disabled" rows="10" name="question" class="no-border form-control"><?= $ques_data['question'];?></textarea>
					</p>
					<label>Time Duration:</label>
					<p><input type="time" name="duration" required value="<?= $ques_data['duration'];?>" class="no-border" disabled="disabled" id="time"></p>
					<input type="button" class="btn-primary btn" value="Edit" onclick="edit_val();" id="edit_btn">
				</form>
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
	<script type="text/javascript">
		time = document.getElementById('time');
		textarea = document.getElementById('text_area');
		edit_btn = document.getElementById('edit_btn');
		update_form = document.getElementById('update_form');

		function edit_val() {

		if(edit_btn.value == "Update"){	
			update_form.submit();
		}
		else
		{
			textarea.removeAttribute('disabled');
			textarea.classList.remove('no-border');
			time.removeAttribute('disabled');
			time.classList.remove('no-border');
			edit_btn.value = 'Update';
		}
		}
	</script>

	<style type="text/css">
	.no-border{
		border:1px solid #ececec !important;
		background: #ececec !important;
	}	
	</style>
</html>
