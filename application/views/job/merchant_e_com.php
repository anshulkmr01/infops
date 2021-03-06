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
                	    				<h3 class="instructor-title"><Label>MRM E-COM</Label></h3>
                	    				
                                        <asp:Label ID="Label2" runat="server" Text="latest" Visible="False"></asp:Label>
                                        <div class="instructor-inner">
                	    					
                	    				<!-- <%--	<div class="instructor-body">
                	    						<h3 class="name">Credit Underwriter-AFU</h3>
                	    						
                	    						
                	    					</div>--%> -->
                	    				</div>
                	    				<div class="short-desc">
                	    				<p>	<b>Job Title </b>MRM E-COM</p>
                                       <p><b>Department</b>E-COM </p>
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
                	    								<span>End date :</span> 30-05-2020
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
                              <!--  <%-- <h3 class="desc-title">Course Syllabus</h3>--%> -->
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
                                            <p><b>Description of the Relationship and Roles.<br />
                                            The position holds working relationship within the company </b></p>
                                              <ul><li>
                                              •	Engagement with product team and tech to ensure client requirement are met</li>
<li>•	PG integration teams to ensure merchants vendors are able to configure their systems </li>
<li>•	Service team to ensure our merchants is able to resolve issues </li>
<li>•	Operation team to ensure seamless releases of TID/Other Products and activating them</li>
<li>•	Risk team to ensure fraud controls are in place and monitored </li>
<li>•	Channels of bank like Branch, CBG, FIG, WBO, IFG etc to ensure their customers get the product and services </li>
<li>•	Finance dept to ensure monies are available for bidding for tenders </li>
<li>•	Marketing team to ensure joint meets with banks and start ups and done</li>
<li>•	Product and portfolio teams of issuance and acquiring to ensure issuance offers are done promote business and visibility </li>

                                              </ul>
                                              
                                             


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
                                               <p><b> <br />
SKILLS AND KNOELWDGE 

</b></p>
<ul><li>•	State the minimum acceptable proficiency for the job. Do not state incumbent-specific information 
</li></ul>
<p><b>EDUCATION QUALIFICATIONS  </b></p>

•	Graduation / Post-Graduation <br />
•	In Advance - Graduation in Engineering or computer science and Post-Graduation in Marketing <br />
•	Qualification on project management Assignment <br />
<p><b>RELEVANT EXPERIENCE </b></p>

•	Minimum experience of 3 - 7 years of sales and portfolio management <br />
•	Exposure to sales in corporate or concept selling <br />
•	Managing Rein across senior levels of the Origin<br />
•	Team management is an added advantage <br />
•	Understanding of MIS office and systems is a must<br />
•	Exposure in project / Category / Product Management <br />
•	Exposure in managing govt bodies <br />
•	Exposure to manage multiple teams across different functions <br />
<p><b> PERSONAL CHARACTERISTICS & BEHAVIOURS </b></p>

•	High level of confidence and communication skill : The role requires pitching the product to senior officials in corporate of bodies. Especially in upcountry <br />
•	Ability to influence and convince senior officials and product teams and share technology aspects and get their support <br />
•	High Energy levels : The role involves direct selling and managing Channels <br />
•	Multi-tasking : Ability to drive different assignments/Tasks across one or different merchants across channels <br />
•	Analytical skills and logical reasoning<br />

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header mb-0" id="headingThree">
                                            <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <strong>BAND: </strong>
                                               <!--  <%--<span>Civil Engineering</span>--%> -->
                                            </h3>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                               

                                               <ul>
                                               <li>D1/D2  </li>
                                             
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
