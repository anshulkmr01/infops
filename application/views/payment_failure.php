<!DOCTYPE html>
<html>
<head>
	<title>Infops Examination Portal</title>
	<!-- Global Css using Helper -->
	<?php 
		infops_globalCss();
	?>
	<!--/ Global Css using Helper -->
	<?php

	?>

</head>
<body class="inner-page" onload="submitPayuForm()">
	<div class="full-width-header">
		<!-- Navbar -->
			<?php $this->load->view('navbar');?>
		<!--/ Navbar -->
	</div>
		
		<!-- Breadcrumbs Start -->
		<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">Fee Payment</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="<?= base_url('/')?>">Home</a>
		                        </li>
		                        <li>Payment</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Breadcrumbs End -->
		
		<!-- History Start -->
        <div class="rs-history sec-spacer">
            <div class="container">
			<?php
			if($hash == false){
				?>
					<center><h3 class="text-info">Invalid Transaction. Please try again</h3></center>
				<?php
				} else { ?>
            	<center>
            		<h3 class="text-warning">Your payment status is <?= $status; ?></h3>
            		<h4>Your transaction id for this transaction is <?= $txnid; ?> You may try making the payment again</h4>
            		<small>Please Note down your Transaction ID for further help</small>
            	</center>
            <?php
		        }
		         ?>
            </div>
        </div>

    <!-- footer -->
    	<?php $this->load->view('footer');?>
    <!-- /footer -->

</body>
	<?php 
		infops_globalJs(); 
	?>
</html>
