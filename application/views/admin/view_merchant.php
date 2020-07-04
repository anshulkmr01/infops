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
					<h3>Merchant Data</h3>
					<table class="table table-hover table-responsive">
						<thead>
						</thead>
						<?php
							// echo "<pre>";
							// print_r($student_data);
						if($merchant_data):
						$i = 0;
						$merchent_ID = '';
						$package = '';
						?>
						<tbody>
							<?php foreach ($merchant_data as $key => $value) {
							if ($key == 'package') {
								$package = $value;
							 }
							 if ($key == 'ID') {
								$merchent_ID = $value;
							 } 
							 if ($key == 'web_URL') {
								$web_URL = $value;
							 } 
							if($value != ''): ?>
							
							<tr class="table-light">
								<td scope="row text-capitalize"><?= $key; ?>:</td>
								<td scope="row"><?= $value; ?></td>
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
					<?php if ($package!=''): ?>
						
					<div class="pt-5">
						<h3>Advertisement Area</h3>
						<div class="add-advertise row m-auto">
							<form action="<?= base_url('ad_upload')?>" enctype="multipart/form-data" method="post">
							<fieldset>
								<input type="hidden"  required value="<?= $package?>" name="ad_package">
								<input type="hidden"  required value="<?= $merchent_ID?>" name="merchent_ID">
								<?= form_error('ad_package')?>
								<div class="form-group">
									<input type="text" required  name="ad_title" class="form-control" placeholder="Ad Title">
								<?= form_error('ad_title')?>
								</div>
								<div class="form-group">
									<input type="text" value="<?= $web_URL; ?>"  name="web_URL" class="form-control" placeholder="Website URL (optional)">
								<?= form_error('ad_title')?>
								</div>
								<div class="form-group">
									<input type="file" required  class="form-control-file" name="ad_banner">
								<?= form_error('ad_banner')?>
								</div>
							</fieldset>
							<input type="submit" class="btn btn-primary" value="Upload & Activate">
							</form>
						</div>
						<?php if ($merchant_ad): ?>
						<table class="table table-hover mt-4 table-responsive">
							<thead>
								<tr  class="table-primary">
									<th>
										S.NO
									</th>
									<th>
										Ad ID
									</th>
									<th>
										Image Title
									</th>
									<th>
										Image
									</th>
									<th>
										Web URL
									</th>
									<th>
										Impression Count
									</th>
									<th>
										Active Date
									</th>
									<th>
										Ad Expire
									</th>
									<th>
										Status
									</th>
									<th colspan="2">
										Action
									</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$i=0;
								 foreach ($merchant_ad as $key => $value): $i++;?>
									<tr class="font-weight-normal">
										<th><?= $i; ?></th>
										<th><?= $value->ID; ?></th>
										<th><?= $value->ad_title; ?></th>
										<th><a href="<?= base_url($this->config->item('ad_files').'/'.$value->ad_file_name)?>" target="new" style="cursor: zoom-in;"><img style="height: 60px;" src="<?= base_url($this->config->item('ad_files').'/'.$value->ad_file_name)?>"></a></th>

										<th><?php if ($value->web_URL) {
										echo anchor($value->web_URL,'url');
										}  ?></th>
										<th><?= $value->impression_count?></th>
										<th><?= date('d/m/Y h:m A',strtotime($value->ad_active_date)); ?></th>
										<th><?= date('d/m/Y h:m A',strtotime($value->ad_active_date.'+ 364 days')); ?></th>
										<?php if ($value->is_active == 1): ?>
										<th class="text-success">Active</th>
										<?php else: ?>
										<th class="text-danger">Disabled</th>
										<?php endif ?>
										<?php if ($value->is_active == 1): ?>
										<th><a href="<?= base_url('change_ad_status/'.$value->ID.'/'.$value->is_active)?>" class="btn-info btn btn-sm">Disable</a></th>
										<?php else: ?>
										<th><a href="<?= base_url('change_ad_status/'.$value->ID.'/'.$value->is_active)?>" class="btn-primary btn btn-sm">Enable</a></th>
										<?php endif ?>
										<th><a href="<?= base_url('delete_merchant_ad/'.$value->ID.'/'.$value->ad_file_name)?>" class="btn-danger delete btn btn-sm">Delete</a></th>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
						<?php else: ?>
							<div class="p-5 text-info">
							No advertise added yet for this merchant
						</div>
						<?php endif ?>
					</div>
					<?php else: ?>
						<div class="p-5 text-danger">
							Merchent Has not Paid for any package yet
						</div>
					<?php endif ?>
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
