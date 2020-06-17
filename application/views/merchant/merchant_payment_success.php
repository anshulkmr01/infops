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
	<div class="container-fluid" style="min-height: 400px;">
		<?php
		if($hash != true){
		?>
			<center><h3 class="text-info">Invalid Transaction. Please try again</h3></center>
		<?php
		}else{ ?>
		<div class="row mt-5 pt-5">
			<div class="col-sm-5 col-md-5 col-lg-4"></div>
            <div class="col-sm-5 col-md-5 col-lg-4 border border-secondry rounded p-3 ml-5 mr-5">
            	<legend>Payment Details:</legend>
            	<div class="form-group">
            		<label><b>Status: </b><span class="text-success"><?= $status?><span></label>
            	</div>
            	<div class="form-group">
            		<label><b>Txn ID: </b> <?= $txnid?></label>
            	</div>
            	<div class="form-group">
            		<label><b>Product Information: </b><?= $product?></label>
            	</div>
            	<div class="form-group">
            		<label><b>Amount: </b><?= $amount?></label>
            	</div>
            </div>	
			<div class="col-sm-5 col-md-5 col-lg-4"></div>
		</div>
	<?php } ?>
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
