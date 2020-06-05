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
                    <div class="col-lg-8 col-md-12"><!-- 
                	  <%--  <div class="detail-img">
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
                	    				<h3 class="instructor-title"><Label>AUTH CARDS OPERATIONS MERCHANTS</Label></h3>
                                        <div class="instructor-inner">
                	    				</div>
                	    				<div class="short-desc">
                	    				<p>	<b>DEPARTMENT</b></p>
                                        <ul>
                                        <li>CLEARANCE OPERATIONS</li>
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
                	    								<span>Start Date  :</span> 03-03-2020
                	    							</li>
                	    							<li>
                	    								<span>End date :</span> 30-05-2020
                	    							</li>
                	    							
                	    						</ul>
                	    					</div>
                	    				</div>
        	    						<div class="apply-btn">
        	    							<!-- <?= anchor('document_registration_form/auth-card-operation-merchants','Apply now',['class'=>''])?> -->
                                            Expire
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
                                                <strong>Credit Quality </strong>
                                               <!--  <%--<span>Computer Science And Engineering</span>--%> -->
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
                                                <!-- <%--<span>Civil Engineering</span>--%> -->
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
                        <div class="sidebar-area">
                           
                            <div class="cate-box">
                                <h3 class="title">Other Application Categories</h3>
                                <ul>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="afu.aspx">Authentication</span></a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="atm.aspx">ATM<span>(07)</span></a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="AUTH-CARDS-OPS.aspx"> AUTH-CARDS OPS <span>(09)</span></a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="COLLECTIONS.aspx"> COLLECTIONS <span>(08)</span></a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="OPERATION.aspx">OPERATION <span>(04)</span></a>
                                        
                                    </li>
                                      <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="OPERTIONS-SALES-OFFICER.aspx"> OPERTIONS SALES OFFICER <span>(04)</span></a>
                                        
                                    </li>
                                      <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="RBB-CARM.aspx">RBB-CARM <span>(04)</span></a>
                                        
                                    </li>
                                      <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="RELATIONSHIP-MANAGER-AR-TG.aspx">RELATIONSHIP MANAGER <span>(04)</span></a>
                                        
                                    </li>
                                      <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="TRANNING-AND-QUALITY-MANAGER.aspx">TRANNING AND QUALITY MANAGER <span>(04)</span></a>
                                        
                                    </li>
                                      <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="Assistent-Auditor.aspx">Assistent Auditor <span>(04)</span></a>
                                        
                                    </li>
                                      <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="Audi.aspx">audi <span>(04)</span></a>
                                        
                                    </li>
                                     <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="COLLECTION.aspx">COLLECTION <span>(04)</span></a>
                                        
                                    </li>
                                     <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="AREA-HEAD-FOREX-BUNDLE.aspx">AREA HEAD FOREX & BUNDLE <span>(04)</span></a>
                                        
                                    </li>
                                     <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="SALES-MANAGER-BKD.aspx">SALES MANAGER-BKD <span>(04)</span></a>
                                        
                                    </li>
                                     <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="SALES-MGR-CRS-PYMT-BUNINESS.aspx"> SALES MGR-CRS PYMT BUNINESS<span>(04)</span></a>
                                        
                                    </li>
                                     <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="MRM-E-COM.aspx">MRM E COM <span>(04)</span></a>
                                        
                                    </li>

                                     <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="territory-head.aspx">TERRITORY HEAD <span>(04)</span></a>
                                        
                                    </li>
                                      <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="PROD-MGR-ASSETS-DEST- HNW.aspx">PROD MGR ASSETS DEST- HNW <span>(04)</span></a>
                                        
                                    </li>
                                      <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="GIB-AREA-HEAD.aspx">GIB-AREA HEAD<span>(04)</span></a>
                                        
                                    </li>
                                      <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="GIB-AREA-HEAD.aspx">GIB-AREA HEAD <span>(04)</span></a>
                                        
                                    </li>

  <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="STRUCTURE.aspx">STRUCTURE <span>(04)</span></a>
                                        
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="territory-head.aspx">TERRITORY HEAD <span>(04)</span></a>
                                        
                                    </li>

                                    

                                </ul>
                            </div>
                          
                        </div>
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
