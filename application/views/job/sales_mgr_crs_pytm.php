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
                	    				<h3 class="instructor-title"><Label ID="Label1" runat="server">SALES MGR-CPS-PYMT BUSINESS</Label></h3>
                	    				
                                        <asp:Label ID="Label2" runat="server" Text="latest" Visible="False"></asp:Label>
                                        <div class="instructor-inner">
                	    					
                	    				<!-- <%--	<div class="instructor-body">
                	    						<h3 class="name">Credit Underwriter-AFU</h3>
                	    						
                	    						
                	    					</div>--%> -->
                	    				</div>
                	    				<div class="short-desc">
                	    				<p>	<b>Job Title </b>SALES MGR-CPS-PYMT BUSINESS </p>
                                      <p><b>Department</b>CREDIT CARD </p>
                	    				</div>
                	    			</div>
                	    			<div class="col-md-6">
                	    				<h3 class="instructor-title">BASIC <span class="primary-color">INFORMATION</span></h3>
                	    				<div class="row info-list">
                	    					<div class="col-md-6">
                	    						<ul>
                	    							<li>
                	    								<span>Start Date  :</span>03-03-2020
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
                                                <!-- <%--<span>Computer Science And Engineering</span>--%> -->
                                            </h3>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                            <p><b>JOB Purpose </b></p>
                                              <ul>
                                              <li>•	Drive and achieve the base Target of credit cards through DSA with Right  customer to ensure better card activation and portfolio building</li>
                                              <li>•	To identify and appoint new channel partner. </li>
                                              <li>•	To focus on acquiring NTTB Customers & NTB stands for (New to Bank).</li>
                                              <li>•	To manage costs of acquisition and ensure compliant sourcing processes.</li>
                                              <li>•	To focus on cross sell penetration Accountable to manage first Rejection of application from application processing Team.</li>
                                              <li>•	To strengthen relationship to enhance market share.   </li>
                                              <li>•	CASA X-Sell for SPC customers, and Drive X Sell like Smart Pay Card Sure One Assist activation. </li>
                                              
                                              </ul>
                                              <p><b>JOB Responsibilities.</b></p><br />
                                              •	6 – 8 Areas Actionable <br />
•	Cards Fincon Budget <br />
•	Ensure achievement od cards Target against Fincon Budge.<br />
•	Right card is sourced to Right Customer Along with desired activation rate.<br />
•	Developing New DSA.<br />
•	Working closely with all DSA stakeholders and regular visits to DSA.<br />
•	Reviewing on Premium Product <br />
•	What % of Prime to be delivered from A2-A4 Product category <br />
•	Training DSA staff on product and Features to simplify the process to onboard Customers <br />
•	To drive X Sell <br />
•	Drive X Sell like DIGI Payment, Cards single Assist, and Activation.<br />
•	Regular Training and update on schemes available on cross sell product to DSA.<br />
•	CASA X-Sell for SPC customers <br />
•	Enable DSA/DSE Sourcing of CASA through the First Lead Generation of these account.<br />
•	Concept of activation for all CASA X Sell.<br />
•	FD as Cross Sell Parameters.<br />
•	Adherence to sales processes.<br />
•	Sales Manager to ensure adherence of sales processes laid by the management.<br />
•	Abiding by the ethics for sales as per the laid down norms of the Bank.<br />

                                              
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <strong>Requirements</strong>
                                            </h3>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body">
                                                <ul>
                                                <li>•	Educational Qualification</li>
                                                <li>•	Graduation BA/B.COM/BSC/Banking.</li>
                                                <li>•	Post Gradation MBA.</li>
                                                <li>•	Sales and Influencing Skills. </li>
                                                <li>•	Banking Product & Process Knowledge. </li>
                                                <li>•	Planning and Organizing Skills. </li>
                                                <li>•	Communication Skill. </li>
                                                <li>•	Channel Management Skills. </li>
                                                <li>•	Knowledge of Competition & Current Trends in financial Industry. </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header mb-0" id="headingThree">
                                            <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <strong>Experience Required: </strong>
                                               <!--  <%--<span>Civil Engineering</span>--%> -->
                                            </h3>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                               

                                             Minimum Experience of 2-3 Years in Managing DSA sales / Indirect Channel / Corporate Sales   <br /> 
BAND
E1/E2

                                            
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
