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
<body class="inner-page">
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
                            <h1 class="page-title">How To Track</h1>
                            <ul>
                                <li>
                                    <a class="active" href="<?= base_url('/');?>">Home</a>
                                </li>
                                <li>How To Track</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs End -->
	<!-- Main Body -->
        <!-- History Start -->
        <div class="rs-history sec-spacer">
            <div class="container">
                <div>
                <h1>HOW TO TRACK STATUS</h1>
                   <p>
                   
                 After Successful payment candidate have to click on Track Status and go to “FIND YOUR ENROLLMENT” fill your details there and Receive Their Enrollment Number.After Successful payment candidate have to click on Track Status and go to “FIND YOUR ENROLLMENT” fill your details there and Receive Their Enrollment Number.                   
                   
                   
                   </p>
                   <p>
                   
                   Once candidate get their Enrollment number they can track their status with click on Track Status candidate have to Fill their Enrollment number there and then the candidate will able to see a unique Track ID with that Track ID candidate can Track their Status.
                   </p>
                   <p>Once the documents and Payment verification process will successfully done. Then the ID card will be uploaded on the TRACK STATUS option. If there is some pendency in any Documents or Payments then the Pendency will also update on “TRACK STATUS”.</p>
                   <p>Candidate can fill their Enrollment Number in the “TRACK STATUS” option (which has been on the home page of the web site) and Submit it to see the current status of their Serial number and Candidate can track their result as well.  </p>
                   <p> For any Other query contact “Support@infops.in”</p>
                    
                </div>
            </div>
        </div>
        <!-- History End -->
    <!--/ Main Body -->
<!-- footer -->
	<?php $this->load->view('footer');?>
<!-- /footer -->

</body>
	<?php 
		infops_globalJs(); 
	?>
</html>
