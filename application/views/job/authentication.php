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
                	 
                	    <div class="course-content">
                	    	
                	    	<div class="course-instructor">
                	    		<div class="row">
                	    			<div class="col-md-6 mobile-mb-20">
                	    				<h3 class="instructor-title">
                                            <Label ID="Label1">CREDIT UNDERWRITER-Authentication</Label>
                                        </h3>
                	    				<div class="instructor-inner">
                	    					
                	    				
                	    				</div>
                	    				<div class="short-desc">
                	    				<p>	<b>TASKS</b></p>
                                        <ul>
                                        <li>Daily Productivity </li>
                                        <li>Achieving daily productivity number consistently</li>
                                        <li>To have minimal carry forward/Pending</li>
                                        </ul>
                	    				</div>
                	    			</div>
                	    			<div class="col-md-6">
                	    				<h3 class="instructor-title">BASIC <span class="primary-color">INFORMATION</span></h3>
                	    				<div class="row info-list">
                	    					<div class="col-md-6">
                	    						<ul>
                	    							<li>
                	    								<span>Start Date  :</span> 02-03-2020
                	    							</li>
                	    							<li>
                	    								<span>End date :</span> 15-05-2020
                	    							</li>
                	    							
                	    						</ul>
                	    					</div>
                	    				
                	    				</div>
        	    						<div class="apply-btn">
        	    							<!-- <?= anchor('document_registration_form/authentication ','Apply now',['class'=>''])?> -->
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
                                                <strong>Credit Quality </strong>
                                            </h3>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                              <ul>
                                              <li>Accurate Implementation of the policy norms & guidelines</li>
                                              <li>Quick implementation of changes </li>
                                              <li>Nil critical errors & minimal non critical errors</li>
                                              <li>Accurate capturing of Decline codes and Deviation Codes/levels</li>
                                              <li>Taking logical and sensible calls in deviation and minimize results</li>
                                              <li>Aim towards reducing delinquency.    </li>
                                              </ul>
                                              
                                              
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <strong>Manage Region Ownership</strong>
                                            </h3>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body">
                                                <ul>
                                                <li>Handle priority request from locations</li>
                                                <li>Handle & resolve queries complaints </li>
                                                <li>Feedbank to regions of application and documentation</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header mb-0" id="headingThree">
                                            <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <strong>REQUIREMENTS: </strong>
                                            </h3>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                               

                                               <ul>
                                               <li>Experience 0-1 Year </li>
                                               <li>Education : Any Graduate/Post Graduate/ Professional Degree</li>
                                               <li>Banking Product & Process Knowledge </li>
                                               <li>Good Communication</li>
                                               
                                               </ul>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
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
