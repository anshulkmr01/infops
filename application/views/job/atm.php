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
		                    <h1 class="page-title">Application Detail</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="<?= base_url('/');?>">Home</a>
		                        </li>
		                        <li>Application Detail</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Breadcrumbs End -->
		
		<!-- History Start -->
        
        <div class="rs-courses-details pt-100 pb-70">
            <div class="container">
                <div class="row mb-30">
                    <div class="col-lg-8 col-md-12">
                	    <div class="course-content">
                	    	<!--<h3 class="course-title">Computer Science And Engineering</h3>-->
                	    	<div class="course-instructor">
                	    		<div class="row">
                	    			<div class="col-md-6 mobile-mb-20">
                	    				<h3 class="instructor-title"><Label>ATM-COORDINTOR</Label>
                                <span class="primary-color"></span></h3>
                                        <div class="instructor-inner">
                	    				</div>
                	    				<div class="short-desc">
                	    				</div>
                	    			</div>
                	    			<div class="col-md-6">
                	    				<h3 class="instructor-title">BASIC <span class="primary-color">INFORMATION</span></h3>
                	    				<div class="row info-list">
                	    					<div class="col-md-6">
                	    						<ul>
                	    							<li>
                	    								<span>Start Date  :</span> 04-03-2020
                	    							</li>
                	    							<li>
                	    								<span>End date :</span> 16-05-2020
                	    							</li>
                	    							
                	    						</ul>
                	    					</div>
                	    				</div>
        	    						<div class="apply-btn">
                           <!--  <?= anchor('document_registration_form/atm-cordinator','Apply now',['class'=>''])?> -->
                           Expired
                          </div>
                	    			</div>
                	    		</div>
                	    	</div>
                	    </div>
                	    <div class="course-desc">
                	    	<div class="desc-text">
                	    	
                	    	</div>
                            <div class="course-syllabus">
                                <div id="accordion" class="rs-accordion-style1">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h3 class="acdn-title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <strong>REQUIREMENTS </strong>
                                            </h3>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                              <ul>
                                              <li>Experience 0-1 Year</li>
                                              <li>Education : Any Graduate/Post Graduate/ Professional Degree </li>
                                              <li>Sales and Influencing Skills</li>
                                              <li>Banking Product & Process Knowledge </li>
                                              <li>Communication</li>
                                              <li>Knowledge of Competition & Current trends in financial Industry  </li>
                                              </ul>
                                              
                                              
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <strong>BAND  </strong>
                                            </h3>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body">
                                                <ul>
                                                <li>E1/E2</li>
                                                
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header mb-0" id="headingThree">
                                            <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <strong>TASKS: </strong>
                                            </h3>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                               

                                              <p>	<b></b></p>
                                        <ul>
                                        <li>Ensure quality of performance by the ATM channel by having “Satisfactory” Audit Report.</li>
                                        <li>Monthly reporting of Cash Verification </li>
                                        <li>Provide remote support provided to Branches for NON ATMC Locations for Recon/ATM/TMKs</li>
                                        <li>Ensure that all Offsite and Captive ATMs are visited once a month without fail  </li>
                                         <li>To ensure all the related issues are adequately captured in the Site Verification Report and are tracked / followed up to closure  </li>
                                          <li>Proper Coordination with Admin team/CPT- Vendor for resolution of site issues within TAT   </li>
                                           <li> Proper coordination with E-Surveillance vendor for security related issues  </li>
                                            <li>Wooqer updating to be done 100%  </li>
                                             <li> ATMc to ensure that cash audits have to be reported on an immediate basis to the supervisor  </li>
                                              <li>ATMc to look for any suspicious behavior of the CIT Agency  </li>
                                               <li>Details of cash audits are to be updated in the Wooqer without any miss outs   </li>
                                                <li>ATMc to ensure proper documentation is held by CIT Agency At all times and more particularly during election period   </li>
                                                 <li> Ensure necessary co-ordination with respective stakeholders for New ATM deployment/Shifting/Closure </li>
                                                  <li>Remote support to branches on clarification on BNA  </li>
                                                  <li>Ensure that BNA is not down for more that 1 day for any reason  </li>
                                                  <li>During the course of cash audits being done at offisite and Captive ATMs, the ATMc also have to do Sample Cash audits at branch ATMs  </li>
                                                  <li>Shortcomings on Cash related things ave to be reported to Supervisor  Immediately    </li>
                                                  <li>Shortcomings referred wrt ATM room to be taken up with Branch Manager    </li>
                                                  <li>Shortcomings referred wrt ATM room to be taken up with Branch Manager   </li>
                                                  <li>To coordinate between branch & CRAs to ensure timely cash handover to CIT agencies  </li>
                                                  <li>Proper coordination with IT team for access related issues and arrangement of ladders for V- sat issues  </li>
                                                  <li>Branch Visit for escalations and New ATM set up  </li>
                                                  <li>Ensure NCR MS, Diehold MS and all vendors performs according to laid down SLAs and TATs  </li>
                                                  <li>Ensure Monthly meeting with MSP is done and issues are documents for closure  </li>
                                                  <li>Collect all required documentation for CIT Agency on identification of their Staff  </li>
                                                  <li>Ensure that on a Quarterly basis the above documents are sent to ll Offsite ATMs, Branch ATMs, Captive ATMs Which have ATM Attendants, Currency Chests and branches which give cash  </li>
                                                  <li>In case there is no change in the documents then there is no need to circulate the documents again But a written confirmation has to be taken from the CIT Agency that there is no charges  </li>
                                                  <li>Ensure that in case there is any changes then the same needs to be informed to all Offsite ATMs Branch ATMs Captive ATMs which have ATM Attendants, Currency Chests and branches which give cash  </li>
                                                  <li>Ensure that a confirmation from the branches is taken which give cash and Currency Chest have received the above documents  </li>
                                                  
                                        </ul>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial End -->
<!--
                	    	<div class="share-area">
                	    		<div class="row rs-vertical-middle">
                	    			<div class="col-md-5">
                	    				<h3>You Can Share It :</h3>
                	    			</div>
                	    			<div class="col-md-7">
                	    				<div class="share-inner">
                	    					<a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                	    					<a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                	    					<a href="#"><i class="fa fa-google"></i> Google</a>
                	    				</div>
                	    			</div>
                	    		</div>
                	    	</div>
-->
                	    </div>
                    </div> <div class="col-lg-4 col-md-12">
                        <?php $this->load->view('job/job-sidebar')?>
                    </div>
                </div>
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
