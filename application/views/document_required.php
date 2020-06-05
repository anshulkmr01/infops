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
		                    <h1 class="page-title"> Document Required</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="<?= base_url('/');?>">Home</a>
		                        </li>
		                        <li>Document Required</li>
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
                <p><b>Candidate must upload his/her Photo & Signature as per the following specifications:</b></p>
                <p><b>Photograph Image:-</b></p>
                <ul><li>Photograph must be a recent passport size colour picture.</li>
                <li> The picture should be in colour, taken against a light coloured, preferably Blue background.</li>
                <li>Look straight at the camera with a relaxed face.</li>
                <li>If you have to use flash, ensure there’s no "red-eye".</li>
                <li>Cap, Hat and dark glasses are not acceptable, religious headwear is allowed but it must not cover your face.</li>
                <li>Size of the file should be less than 100kb.</li>
                <li>While uploading the photo image, the name of the file may be used as "photo.jpeg" only and do not use any special characters.</li>
                </ul>
                <br />

                <p>
                <p><b>. Signature Imaging:-</b></p>
                <ul>
                <li>The applicant has to sign on white paper with Black Ink Pen.</li>
                 <li>The signature must be signed only by the applicant and not by any other person. The signature of the candidates should be in running hand and not in block or capital or disjointed letters. If the signatures are not matching at the time of document verification before personal interview, the candidature of the candidate will be cancelled.</li>
                  <li> Size of the file should be less than 50kb.</li>
                   <li>While uploading the signature image, the name of the file may be used as "sign.jpeg" only and do not use any special characters.</li>
                    <li>For IT Sector Final Year/Semester students (expecting final and consolidated Mark sheet) are eligible to apply. provided they have obtained the required percentage in aggregate of all semesters/years up to pre-final examination. However, if they are shortlisted for interview, they have to provide the Degree -Certificate or consolidated mark sheet specifying their final percentage of marks during Document Verification process. In case the final percentage is not meeting the required criteria, the candidature will be cancelled and No TA Claim will be entertained.</li>


                     <li>All qualification must be from UGC recognized Indian University / UGC recognized Indian Deemed University Minimum aggregate percentage of marks in the essential qualification as indicated above shall be aggregate of all semesters to be calculated taking average of all semesters/years, irrespective of the weight ages to any particular semester/year by the Institute/University. Aggregate percentage of marks SHALL NOT BE rounded off (for example 50.92 % not to be rounded off as 51%)</li>
                      <li>However, in case of urgent queries, candidates may call us at solution@infops.in from 10.00 AM to 02.00 PM and 03.00 P.M. to 05.00 P.M. in working day only. Please note that the Mail support will not be available at any other time.</li>
                      
                
                </ul>
            </div>
        </div>
        <!-- History End -->

        <!-- Mission Start -->
        
        <!-- Mission End -->

        <!-- Vision Start -->
        
        <!-- Vision End -->

        <!-- Calltoaction Start -->
        
        <!-- Calltoaction End -->

		<!-- Team Start -->
        
        <!-- Team End -->

        <!-- Branches Start -->
        
        <!-- Branches End -->
		
        <!-- Partner Start -->
        <!--<div id="rs-partner" class="rs-partner pt-70 pb-70">
            <div class="container">
				<div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="80" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="4" data-ipad-device-nav="false" data-ipad-device-dots="false" data-md-device="5" data-md-device-nav="false" data-md-device-dots="false">
                    <div class="partner-item">
                        <a href="#"><img src="images/partner/1.png" alt="Partner Image"></a>
                    </div>
                    <div class="partner-item">
                        <a href="#"><img src="images/partner/2.png" alt="Partner Image"></a>
                    </div>
                    <div class="partner-item">
                        <a href="#"><img src="images/partner/3.png" alt="Partner Image"></a>
                    </div>
                    <div class="partner-item">
                        <a href="#"><img src="images/partner/4.png" alt="Partner Image"></a>
                    </div>
                    <div class="partner-item">
                        <a href="#"><img src="images/partner/5.png" alt="Partner Image"></a>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- Partner End -->
    <!-- footer -->
    	<?php $this->load->view('footer');?>
    <!-- /footer -->

</body>
	<?php 
		infops_globalJs(); 
	?>
</html>
