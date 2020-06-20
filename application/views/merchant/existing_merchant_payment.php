<!DOCTYPE html>
<html>
<head>
	<title>Infops Merchant Registration</title>
	<!-- Global Css using Helper -->
	<?php 
			globalCss(); 
	?>
	<!--/ Global Css using Helper -->
</head>
<body>
	<!-- Navbar -->
		<?php $this->load->view('merchant/navbar');?>
	<!--/ Navbar -->
	<!-- Main Body -->
	<div class="container-fluid" style="min-height: 400px">
		<div class="row mt-5 pt-5">
			<div class="col-1"></div>
			<div class="col-sm-12 col-md-10 col-lg-7">
				<form method="post" action="<?= base_url('merchant_login')?>"  class="border p-5">
				  <fieldset>
				    <legend>Existing Merchant Payment</legend>
				    <div class="row">
					    <div class="col-md-6 col-sm-12">
						    <div class="form-group">
						      <label for="email">Email</label>
						      <input type="email" name="email" class="form-control" id="email" value="<?= set_value('email'); ?>" aria-describedby="emailHelp" placeholder="Email Address">
						      <small id="emailHelp" class="form-text text-muted"><?= form_error('email'); ?></small>
						    </div>
						</div>
				    	<div class="col-md-6 col-sm-12">
						    <div class="form-group">
						      <label for="name">Phone Number</label>
						      <input type="number" name="phone" class="form-control" id="phone" value="<?= set_value('phone'); ?>" aria-describedby="phoneHelp" placeholder="Phone Number" pattern="[0-9]{10}">
						      <small id="phoneHelp" class="form-text text-muted"><?= form_error('phone'); ?></small>
						    </div>
						</div>
				    </div>
				    <button type="submit" name="submit" class="btn btn-primary">Proceed</button>
				  </fieldset>
				  <div class="form-group">
				  	<br>
				  	New merchant ? <a href="<?= base_url('merchant')?>">Click here</a>
				  </div>
				</form>
			</div>
			<div class="col-sm-5 col-md-5 col-lg-4"></div>
			<div class="col-1"></div>
		</div>
	</div>
	<!--/ Main Body -->
	<!-- footer -->
	<footer class="page-footer font-small text-center pt-5" >
		<?php $this->load->view('merchant/footer');?>
	</footer>
	<!-- /footer -->

</body>
	<?php 
			globalJs(); 
	?>
</html>
