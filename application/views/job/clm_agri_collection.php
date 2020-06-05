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
<!--                 	  <%--  <div class="detail-img">
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
                	    				<h3 class="instructor-title"><Label>CLM-AGRI-COLLECTIONS</Label></h3>
                                        <div class="instructor-inner">
                	    				</div>
                	    				<div class="short-desc">
                	    				<p>	<b>Department</b> COLLECTION</p>
                                       <p>	<b>PROJECT</b> PROJECT</p>
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
                	    				</div>
        	    						<div class="apply-btn">
        	    							<!-- <?= anchor('document_registration_form/clm-agri-collections','Apply now',['class'=>''])?> -->
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
                                              <li>Receivables Management</li>
                                              <li>Manage and deliver monthly performance in team of resolution, roll backs, recovery rates/values as per the target set for the assigned portfolio </li>
                                              <li>Review field follow-up for the portfolio managed towards achievements of the target set</li>
                                              <li>Monitor the agency/ field executive’s performances periodically </li>
                                              <li>Achieve the money collection under principal fees & charges as per targets   </li>
                                              <li>Regular visitations to yard and reporting the discrepancies/ compliant items as a visit report   </li>
                                              <li>Ensuring timely allocation and field follow-up </li>
                                               <li>Effective address disputes, expired etc cases to prevent any probable escalation and highlight sensitive accounts to area collection Managers to prevents the same  </li>
                                                <li>Ensue trails updates are recorded in web-collection for follow-up on slip making, deceased specifically apart from follow-up on normal portfolio. </li>
                                                 <li> Ensure that the agency recorded are optimally used wrt the number of visits, contacts, PTP conversion ration etc</li>
                                                  <li>Ensure that calls are made on the portfolio thur recoded lines during the month at the agency and field visit updates are available in the web-collections, Call recordings have to be validated and updates in the visit report submitted to the agency. </li>
                                                   <li>Project Managements </li>
                                                    <li> All book process to be adhered to in totally in unit performance </li>
                                                     <li> Cash deposit process including mentoring TAT taken by agencies to deposit money collected</li>
                                                      <li>Receipt managements- Including receipt recon sighting of unused receipts completion of lost receipt formalities     </li>
                                                       <li> Settlement process involving issue of settlement letters to be in line with approvals received </li>
                                                        <li> Manage escalations and ensure resolution of all cases </li>
                                                         <li> Ensure reps process include repo kit the vender, valuation, sale of vehicle(online off lin) RC book updation are managed as per the laid down guideline </li>
                                                          <li> Training programs to be done monthly and all employee to be covered for minimum man hours every quarter </li>
                                                           <li> All vendor bills are processed within 30 days of work and no vendor bill is left unprocessed for 60 days at any given point of time </li>
                                             <li>Ensure 100% usage of collection system and receipt mobility  </li>
                                             <li>Ensure nil case TAT delay and mis-posting of payments </li>
                                              </ul>
                                              
                                              
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <strong>Vendor Managements </strong>
                                            </h3>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body">
                                                <ul>
                                                <li>Management of field/ Referral vendors </li>
                                                <li>Ensure compliance from the vendor on laid down processes </li>
                                                <li>Monitor performance of field agencies and address performances deficiencies </li>
                                                <li>Ensure 100% compliance of critical items like DRA certification police verification etc, </li>
                                                <li>Code of contact to be followed by the vendor across aspects of field and tele calling </li>
                                                <li>In case of yard management ensure set targets for the inventory movement in yard and sale process are met </li>
                                                <li>Regular review of vendor/yard basis their performance, man power invested productivity expectations and process norms </li>
                                               
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header mb-0" id="headingThree">
                                            <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <strong>REQUIREMENTS: </strong>
                                                <!-- <%--<span>Civil Engineering</span>--%> -->
                                            </h3>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                               

                                               <ul>
                                               <li><b>EDUCATIONAL QUALIFICATIONS </b>Graduation  </li>
                                              
                                               
                                               </ul>
                                               <p><b>RELEVANT EXPERIENCE</b></p>
                                            <ul>
                                            <li>Sufficient hands on work experiences of min 1 years and above in financial industry</li>
                                            <li>Should have managed a team of agencies staff/outsources staffsourced staff demonstration high level of competence</li>
                                            <li>Should be mature enough to handle people in pressurized situations and ensure targets/deadlines met </li>
                                            </ul>


                                            <p><b>PERSONAL CHARACTERISTICS & BEHAVIOURS </b></p>
                                            <p>•	Should possess good communication skills </p>
                                            <p>•	Good leadership quality and moulding and supporting the team for desired results as per management’s expectation </p>
                                            <p>•	Should be able to handle deadline and compliance items </p>
                                            <p>•	Should be good on follow up and accomplishment of targeted achievements </p>
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
