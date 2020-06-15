<!DOCTYPE html>
<html>
<head>
	<title>Infops Examination Portal</title>
	<!-- Global Css using Helper -->
	<?php
		infops_globalCss();
	?>
	<!--/ Global Css using Helper -->
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
		                    <h1 class="page-title">Fee Payment Status</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="<?= base_url('/')?>">Home</a>
		                        </li>
		                        <li>Payment Status</li>
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
			if($student_data['payment_status'] != 1){
				?>
					<center><h3 class="text-info">No Payment Recived for this Aplliacation</h3></center>
				<?php
				}else{ ?>
            	<center>
            		<h3 class="text-success">Payment Success</h3>
            		<h4>Your Transaction ID for this transaction is: <?= $student_data['txt_ID'] ?></h4>
            		<h4>Amount Recived : <?= $student_data['amount_recived'] ?></h4>
            		<h3>Please Note down your Transaction ID: <?= $student_data['enrollment_no'] ?></h3>
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
