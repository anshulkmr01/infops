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
		<?php $this->load->view('admin/navbar');?>
	<!--/ Navbar -->
	<!-- Main Body -->
	<div class="container-fluid">
		<div class="row mt-5 pt-5">
			<div class="col-sm-1 col-md-2 col-lg-3"></div>
			<div class="col-sm-10 col-md-8 col-lg-5">
				<form action="admin_validate" method="post"  class="border p-5">
				  <fieldset>
				    <legend>Admin Login</legend>
				    <div class="form-group">
				      <label for="exampleInputEmail1">Email address</label>
				      <input type="text" name="email" class="form-control" id="exampleInputEmail1" value="<?= set_value('email'); ?>" aria-describedby="emailHelp" placeholder="Enter Your">
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
			</div>
			<div class="col-sm-1 col-md-2 col-lg-4"></div>
		</div>
	</div>
	<!--/ Main Body -->
	<!-- footer -->
	<footer class="page-footer font-small text-center pt-5" >
		<?php $this->load->view('admin/footer');?>
	</footer>
	<!-- /footer -->

</body>
	<?php 
			globalJs(); 
	?>
</html>
