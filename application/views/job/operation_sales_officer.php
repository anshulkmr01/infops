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
                	  <!-- <%--  <div class="detail-img">
                	        <img src="../images/courses/courses-details.jpg" alt="Courses Images" />
                	        <div class="course-seats">
                	        	170 <span>SEATS</span>
                	        </div>
                	    </div>--%> -->
                	    <div class="course-content">
                	    	<div class="course-instructor">
                	    		<div class="row">
                	    			<div class="col-md-6 mobile-mb-20">
                                        <div class="instructor-inner">
                	    					
                	    				<!-- <%--	<div class="instructor-body">
                	    						<h3 class="name">Credit Underwriter-AFU</h3>
                	    						
                	    						
                	    					</div>--%> -->
                	    				</div>
                	    				<div class="short-desc">
                	    				<p>	<b>Job Title : </b>OPERATIONS SALES OFFICER </p>
                                       <p><b>DEPARTMENT : </b>HUMAN RESOURCES</p>
                	    				</div>
                	    			</div>
                	    			<div class="col-md-6">
                	    				<h3 class="instructor-title">BASIC <span class="primary-color">INFORMATION</span></h3>
                	    				<div class="row info-list">
                	    					<div class="col-md-6">
                	    						<ul>
                	    							<li>
                	    								<span>Start Date  :</span> 03-03-2020
                	    							</li>
                	    							<li>
                	    								<span>End date :</span> 30-05-2020
                	    							</li>
                	    							
                	    						</ul>
                	    					</div>
                	    				</div>
        	    						<div class="apply-btn">
        	    						<!-- <?= anchor('document_registration_form/operation-sales-officer','Apply now',['class'=>''])?> -->
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
                                                <!-- <%--<span>Computer Science And Engineering</span>--%> -->
                                            </h3>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                              <ul>
                                              <li>•	To manage the sales Officer Exit Managements Desk & Vendor Management desk Monitoring and executing delivery on the following parameters </li>
                                              <li>•	Planning </li>
                                              <li>•	Handing Volumes </li>
                                              <li>•	Providing process clarity & continuously improving the same </li>
                                              <li>•	Providing Solution</li>
                                             
                                              </ul>
                                              
                                              
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <strong>KEY RESPONSIBILITIES</strong>
                                            </h3>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body">
                                                <ul>
                                                <li>•	Maintain in-depth knowledge of requirements related to HR</li>
                                                <li>•	Provides operational advice on processes and procedures to HR staff</li>
                                                <li>•	Ensure that the operations team delivers their planned outcomes and that their agreed targets are met in the line with the HR </li>
                                                <li>•	Plan and customer services standards  </li>
                                                <li>•	Supervise the performance of the reportees </li>
                                                <li>•	Sharing data of exit updated in smart Attendance with RSMs during attendance window period if wbars system is not updated  </li>
                                                <li>•	Issuing Warning Letter/PIP to for Non Performing Sales Officer and further Preparing and Updating Warning. MIS Regularly and getting ATG updated for Warning Exits </li>
                                                <li>•	Amount Receivables </li>
                                                <li>•	Preparing and Releasing AR data Business wise on Monthly basis </li>
                                                <li>•	Preparing and reporting of AR recoverable cases from mentor to PAD </li>
                                                <li>•	Mails to Mentors on Recovery – Multiple mail management on queries and escalations on reason for recovery and closure of cases </li>
                                                <li>•	EXIT Verification Activities </li>
                                                <li>•	Tagging of New Joinee Attrition as reported by HR-RSM for New Joinee Attrition </li>
                                                <li>•	Complaint Management Solutioning </li>
                                                <li>•	Prepation/Validation of weekly F&F File </li>
                                               
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header mb-0" id="headingThree">
                                            <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <strong>REQUIREMENTS: </strong>
                                              <!--   <%--<span>Civil Engineering</span>--%> -->
                                            </h3>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                               

                                               <ul>
                                               <li>Experience 0-1 Year </li>
                                               <li>Education : Any Graduate/Post Graduate/ Professional Degree</li>
                                               <li>Sales and Influencing Skills </li>
                                               <li>Banking Product & Process Knowledge </li>
                                               
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
