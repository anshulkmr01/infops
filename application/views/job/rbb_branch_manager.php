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
		                            <a class="active" href="<?= base_url('/')?>">Home</a>
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
                	  <!-- <%--  <div class="detail-img">
                	        <img src="../images/courses/courses-details.jpg" alt="Courses Images" />
                	        <div class="course-seats">
                	        	170 <span>SEATS</span>
                	        </div>
                	    </div>--%> -->
                	    <div class="course-content">
                	    	<!--<h3 class="course-title">Computer Science And Engineering</h3>-->
                	    	<div class="course-instructor">
                	    		<div class="row">
                	    			<div class="col-md-6 mobile-mb-20">
                	    				<h3 class="instructor-title"> <Label ID="Label1"></Label>RBB BRANCH MANAGER</h3>
                                        <div class="instructor-inner">
                                            
                	    				<!-- <%--	<div class="instructor-body">
                	    						<h3 class="name">Credit Underwriter-AFU</h3>
                	    						
                	    						
                	    					</div>--%> -->
                	    				</div>
                	    				<div class="short-desc">
                	    				<p>	<b>Job Title </b>RBB BRANCH MANAGER</p>
                                       <p><b>Department</b>RBB </p>
                	    				</div>
                	    			</div>
                	    			<div class="col-md-6">
                	    				<h3 class="instructor-title">BASIC <span class="primary-color">INFORMATION</span></h3>
                	    				<div class="row info-list">
                	    					<div class="col-md-6">
                	    						<ul>
                	    							<li>
                	    								<span>Start Date  :</span>02-03-2020
                	    							</li>
                	    							<li>
                	    								<span>End date :</span>30-05-2020
                	    							</li>
                	    							
                	    						</ul>
                	    					</div>
                	    					<!-- <%--<div class="col-md-6">
                	    						<ul>
                	    							<li>
                	    								<span>Started :</span> 03-11-2017
                	    							</li>
                	    							<li>
                	    								<span>Shift :</span> 02
                	    							</li>
                	    							<li>
                	    								<span>Class :</span> 120
                	    							</li>
                	    						</ul>
                	    					</div>--%> -->
                	    				</div>
        	    						<div class="apply-btn">
        	    							<!-- <?= anchor('document_registration_form/clearance-operations','Apply now',['class'=>''])?> -->
                                            Expired
        	    						</div>
                	    			</div>
                	    		</div>
                	    	</div>
                	    </div>
                	    <div class="course-desc">
                	    	<!-- <%--<h3 class="desc-title"> Description</h3>--%> -->
                	    	<div class="desc-text">
                	    	<!-- <%--<ul><li>Accurate Implementation of the policy norms & guidelines</li>
                            
                            <li>Quick implementation of changes </li>
                              <li>Nil critical errors & minimal non critical errors</li>
                                <li>Nil critical errors & minimal non critical errors</li>
                                  <li>Taking logical and sensible calls in deviation and minimize results </li>
                                    <li>Aim towards Reducing delinquency.    </li>
                                     
                            
                            
                            
                            
                            
                            
                            
                            </ul>--%> -->
                	    	</div>
                            <div class="course-syllabus">
                               <!-- <%-- <h3 class="desc-title">Course Syllabus</h3>--%> -->
                                <div id="accordion" class="rs-accordion-style1">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h3 class="acdn-title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <strong>TASKS </strong>
                                               <!--  <%--<span>Computer Science And Engineering</span>--%> -->
                                            </h3>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                              <ul>
                                              <li>•	Internal Interactions</li>
                                              <li>•	CSE’s </li>
                                              <li>•	Product Representatives</li>
                                              <li>•	Auditors</li>
                                              <li>•	QIG Auditors</li>
                                              <li>•	Merchandising Audit   </li>
                                              <li>•	Marketing Dept. </li>
                                              <li>•	WBO </li> 
                                              <li>•	ATM Co-ordinator </li>
                                              <li>•	Admin Representatives </li>
                                               <li>•	Disaster Managements etc </li>
                                              <li>•	Disaster Managements etc </li> 
                                              <li>•	CAM Channel </li>
                                              <li>•	IT Dept. For system related software/hardware issues </li>
                                               

                                              </ul>
                                              <p><b>ADMINISTRATION</b></p>
                                              <ul>
                                              <li>•	Approving of vendor bills </li>
                                              <li>•	Supervision of outsourced resources (Courier boys, Security Guards etc)</li>
                                              <li>•	Managements of Off-Site ATM’s </li>
                                            
                                              
                                              </ul>
                                              <p><b>
                                              EXTERNAL INTERACTIONS </b></p>
											•	Lead Bank for clearing / all banking information<br />
											•	Lead Banks at SLBC for Financial Inclusion <br />
											•	Liaise with post office/ Courier for deliverables related issues<br />
											•	Vendor Representatives / Supervisors <br />
											•	Insurance Sales Managers<br />
											•	Mutual Fund House Representatives<br />
											•	Police Dept.<br />
											•	Income Tax Dept.<br />
											•	Banking Ombudsman<br />
											•	BCSBI / RBI Official – Incognito visits<br />
											•	Landlord<br />
											•	Telephone Service Providers<br />
											•	Electricity Service Providers<br />
											•	Municipal Authorities<br />
											•	Customer Service Meets<br />
											•	Local welfare societies for promotional activities<br />
											•	Labour Office Representatives<br />
											•	Legal Cases<br />
											•	Media<br />
											<p><b>SUPERVISION RECEIVED </b></p>

											Cluster Head/Zone Head/Region Head/Senior Manager



                                              
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <strong>REQUIREMENTS</strong>
                                            </h3>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body">
                                                <ul>
                                                <li>•	Banks Product Knowledge</li>
                                                <li>•	Planning and Organizing Skills </li>
                                                <li>•	Team Management / Interpersonal Skills </li>
                                                <li>•	Sales and Influencing Skills </li>
                                                <li>•	Communications </li>
                                                 <li>•	Knowledge of Competition  </li>
                                                <li>•	Awareness of Banking regulations </li>
                                                 <li>•	Credit Knowledge when Required  </li>
                                                <li>•	Good Administrator </li>
                                                 <li>•	Good at net-working  </li>
                                                <li>•	Ability to develop contacts in the local area </li>
                                                 <li>•	Education Background – Graduate , Post Graduate  </li>
                                                <li>•	Total Experience – 2- 4 Year </li>
                                                 <li>•	Relevant Experience – 1 year </li>
                                                <li>•	Key Behavioural requirements – Presentable, Contactable, Communication skills  </li>
                                                 <li>•	Internal Certification  </li>
                                               
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header mb-0" id="headingThree">
                                            <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <strong>BAND: </strong>
                                                <!-- <%--<span>Civil Engineering</span>--%> -->
                                            </h3>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                               

                                               <ul>
                                               <li>BAND</li>
                                              
                                               
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
                    </div>
                    <div class="col-lg-4 col-md-12">
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
