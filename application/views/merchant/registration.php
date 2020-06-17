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
	<div class="container-fluid">
		<div class="row mt-5 pt-5">
			<div class="col-1"></div>
			<div class="col-sm-5 col-md-5 col-lg-6">
				<form method="post" action="<?= base_url('merchant_registration')?>">
				  <fieldset>
				    <legend>Merchant Registration</legend>
				    <div class="row">
					    <div class="col-6">
						    <div class="form-group">
						      <label for="name">Full Name</label>
						      <input type="text" name="name" class="form-control" id="name" value="<?= set_value('name'); ?>" aria-describedby="nameHelp" placeholder="Merchant Full Name">
						      <small id="nameHelp" class="form-text text-muted"><?= form_error('name'); ?></small>
						    </div>
						</div>
					    <div class="col-6">
						    <div class="form-group">
						      <label for="name">Email</label>
						      <input type="email" name="email" class="form-control" id="email" value="<?= set_value('email'); ?>" aria-describedby="emailHelp" placeholder="Email Address">
						      <small id="emailHelp" class="form-text text-muted"><?= form_error('email'); ?></small>
						    </div>
						</div>
				    	<div class="col-6">
						    <div class="form-group">
						      <label for="name">Phone Number</label>
						      <input type="number" name="phone" class="form-control" id="phone" value="<?= set_value('phone'); ?>" aria-describedby="phoneHelp" placeholder="Phone Number" pattern="[0-9]{10}">
						      <small id="phoneHelp" class="form-text text-muted"><?= form_error('phone'); ?></small>
						    </div>
						</div>
				    	<div class="col-6">
						    <div class="form-group">
						      <label for="name">Business Name</label>
						      <input type="text" name="business_name" class="form-control" id="business_name" value="<?= set_value('business_name'); ?>" aria-describedby="business_nameHelp" placeholder="Business Name">
						      <small id="business_nameHelp" class="form-text text-muted"><?= form_error('business_name'); ?></small>
						    </div>
						</div>
				    	<div class="col-6">
						    <div class="form-group">
						      <label for="name">Business Address</label>
						      <textarea name="business_address" class="form-control" placeholder="Business Address" id="business_address"><?= set_value('business_address'); ?></textarea>
						      <small id="business_addressHelp" class="form-text text-muted"><?= form_error('business_address'); ?></small>
						    </div>
						</div>
				    	<div class="col-6">
						    <div class="form-group">
						      <label for="name">Land Mark</label>
						      <input type="text" name="business_landmark" class="form-control" id="business_landmark" value="<?= set_value('business_landmark'); ?>" aria-describedby="" placeholder="Landmark">
						      <small id="" class="form-text text-muted"><?= form_error('business_landmark'); ?></small>
						    </div>
						</div>
				    	<div class="col-6">
						    <div class="form-group">
						      <label for="name">City</label>
						      <input type="text" name="business_city" class="form-control" id="business_city" value="<?= set_value('business_city'); ?>" aria-describedby="" placeholder="City">
						      <small id="" class="form-text text-muted"><?= form_error('business_city'); ?></small>
						    </div>
						</div>
				    	<div class="col-6">
						    <div class="form-group">
						      <label for="name">Pin Code</label>
						      <input type="number" name="business_pin" class="form-control" id="business_pin" value="<?= set_value('business_pin'); ?>" aria-describedby="" placeholder="PIN Code">
						      <small id="" class="form-text text-muted"><?= form_error('business_pin'); ?></small>
						    </div>
						</div>
				    	<div class="col-6">
						    <div class="form-group">
						      <label for="name">Date of Business Establish</label>
						      <input type="date" name="business_establish_date" class="form-control" id="business_establish_date" value="<?= set_value('business_establish_date'); ?>" aria-describedby="">
						      <small id="" class="form-text text-muted"><?= form_error('business_establish_date'); ?></small>
						    </div>
						</div>
				    	<div class="col-6">
						    <div class="form-group">
						      <label for="name">GST Number(optional)</label>
						      <input type="text" name="GST_number" class="form-control" id="GST_number" value="<?= set_value('GST_number'); ?>" aria-describedby="" placeholder="GSTIN">
						      <small id="" class="form-text text-muted"><?= form_error('GST_number'); ?></small>
						    </div>
						</div>
				    	<div class="col-6">
						    <div class="form-group">
						      <label for="name">Business Type</label>
						      <select type="text" name="business_type" class="form-control">
						      	<option>TYPE 1</option>
						      	<option>TYPE 2</option>
						      	<option>TYPE 3</option>
						      	<option>TYPE 4</option>
						      </select>
						      <small id="" class="form-text text-muted"><?= form_error('business_type'); ?></small>
						    </div>
						</div>
						<div class="col-6">
						    <div class="form-group">
						      <label for="name">Customer Type</label>
						      <select type="text" name="customer_type" class="form-control">
						      	<option>TYPE 1</option>
						      	<option>TYPE 2</option>
						      	<option>TYPE 3</option>
						      	<option>TYPE 4</option>
						      </select>
						      <small id="" class="form-text text-muted"><?= form_error('customer_type'); ?></small>
						    </div>
						</div>
				    	<div class="col-6">
						    <div class="form-group">
						      <label for="name">Business Nature</label>
						      <input type="text" name="business_nature" class="form-control" id="business_nature" value="<?= set_value('business_nature'); ?>" aria-describedby="" placeholder="Business Nature">
						      <small id="" class="form-text text-muted"><?= form_error('business_nature'); ?></small>
						    </div>
						</div>
						<div class="col-6">
						    <div class="form-group">
						      <label for="name">Area Range</label>
						      <input type="range" name="area_range" class="custom-range" value="0"  min="0" max="15" step="3" oninput="updateTextInput(this.value);">
						      <div><span id="range_val">0 KM</span></div>
						      <small id="" class="form-text text-muted"><?= form_error('area_range'); ?></small>
						    </div>
						</div>
				    </div>
				    <button type="submit" name="submit" class="btn btn-primary">Register</button>
				  </fieldset>
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
	<script type="text/javascript">
		function updateTextInput(val) {
          document.getElementById('range_val').innerHTML = val+" KM"; 
        }
	</script>
</html>
