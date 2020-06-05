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
			if($hash != true){
				?>
					<center><h3 class="text-info">Invalid Transaction. Please try again</h3></center>
				<?php
				}else{
				if($status == 'success'){ ?>
            	<center>
            		<h3 class="text-success">Payment Success</h3>
            		<h4>Your Transaction ID for this transaction is: <?= $txnid ?></h4>
            		<?php if($enrollment != 'course_buy'){?>
            			<h4>Your Enrollment number is: <?= $enrollment ?></h4>
            		<?php } else{
            			echo "
            			<h4>We will deliver you course on your email ID</h4>";
            		} ?>
            		<small>Please Note down your Transaction ID & Enrollment</small>
            	</center>
            	<?php
            }
            else{
            	echo "Payment Status".$status."";
            }
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
