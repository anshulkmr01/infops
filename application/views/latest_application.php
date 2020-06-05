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
		                    <h1 class="page-title">Latest Applications</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="<?= base_url('/');?>">Home</a>
		                        </li>
		                        <li>Latest Applications</li>
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
                <div >
                    <div class=" pb-5">
                       <div class="row course-item pl-5 pr-5">
                        	<div >
                    	        <div class="course-header">
                        	    	<h3 class="course-title"><a>0-1 base</a></h3>
                    	        	<div class="course-date row pb-2">
                                        <div class="col-sm-8">
                    	        		<i class="fa fa-clock-o"></i> Authentication
                                       </div>
                                       <div class="col-sm-4"><a style="margin-left:4%" href="<?= base_url('authentication')?>">Read more / Apply Now</a>
                                   </div>
                    	        	</div>
                                    <div class="course-date row pb-2">
                                        <div class="col-sm-8">
                    	        		<i class="fa fa-clock-o"></i> ATM
                                        </div>
                                        <div class="col-sm-4">
                                        <a style="margin-left:4%" href="<?= base_url('atm')?>">Read more / Apply Now</a>
                                    </div>
                    	        	</div>
                                    <div class="course-date row pb-2">
                                        <div class="col-sm-8">
                    	        		<i class="fa fa-clock-o"></i> AUTH-CARDS OPS
                                        </div>
                                        <div class="col-sm-4">
                                        <a style="margin-left:4%" href="<?= base_url('auth_card_ops')?>">Read more / Apply Now</a>
                                    </div>
                    	        	</div>
                                    <div class="course-date row pb-2">
                                        <div class="col-sm-8">
                    	        		<i class="fa fa-clock-o"></i> CLM-AGRI-COLLECTIONS
                                        </div>
                                        <div class="col-sm-4">
                                        <a style="margin-left:4%" href="<?= base_url('clm_agri_collection')?>">Read more / Apply Now</a>
                                    </div>
                    	        	</div>
                                    <div class="course-date row pb-2">
                                        <div class="col-sm-8">
                    	        		<i class="fa fa-clock-o"></i> OPERATION
                                        </div>
                                        <div class="col-sm-4">
                                        <a style="margin-left:4%" href="<?= base_url('operation')?>">Read more / Apply Now</a>
                                    </div>

                    	        	</div>
                                    <div class="course-date row pb-2">
                                        <div class="col-sm-8">
                    	        		<i class="fa fa-clock-o"></i> OPERTIONS SALES OFFICER
                                        </div>
                                        <div class="col-sm-4">
                                        <a style="margin-left:4%" href="<?= base_url('operation_sales_officer')?>">Read more / Apply Now</a>
                                    </div>
                    	        	</div>
                                    <div class="course-date row pb-2">
                                        <div class="col-sm-8">
                    	        		<i class="fa fa-clock-o"></i> RBB-CARM
                                        </div>
                                        <div class="col-sm-4">
                                        <a style="margin-left:4%" href="<?= base_url('rbb_carm')?>">Read more / Apply Now</a>
                                    </div>
                    	        	</div>
                                    <div class="course-date row pb-2">
                                        <div class="col-sm-8">
                    	        		<i class="fa fa-clock-o"></i> RBB-PERSONAL BANKING  
                                        </div>
                                        <div class="col-sm-4">
                                        <a style="margin-left:4%" href="<?= base_url('rbb_personal_banking')?>">Read more / Apply Now</a>
                                    </div>
                    	        	</div>
                                    <div class="course-date row pb-2">
                                        <div class="col-sm-8">
                    	        		<i class="fa fa-clock-o"></i> MERCHANT RELTIONSHIP RETAIL SERVICE
                                        </div>
                                        <div class="col-sm-4">
                                        <a style="margin-left:4%" href="<?= base_url('merchaint_relationship')?>">Read more / Apply Now</a>
                                    </div>
                    	        	</div>

                                     <div class="course-date row pb-2">
                                        <div class="col-sm-8">
                    	        		<i class="fa fa-clock-o"></i> RBB- PREFERRED RELATION MANAGER
                                        </div>
                                        <div class="col-sm-4">
                                        <a style="margin-left:4%" href="<?= base_url('rbb_prefered_retail_manager')?>">Read more / Apply Now</a>
                                    </div>
                    	        	</div>

                                     <div class="course-date row pb-2">
                                        <div class="col-sm-8">
                    	        		<i class="fa fa-clock-o"></i> RELATIONSHIP MANAGER AR-TG
                                        </div>
                                        <div class="col-sm-4">
                                        <a style="margin-left:4%" href="<?= base_url('relationship_manager')?>">Read more / Apply Now</a>
                                    </div>
                    	        	</div>

                                     <div class="course-date row pb-2">
                                        <div class="col-sm-8">
                    	        		<i class="fa fa-clock-o"></i> RELATIONSHIP MANAGER PRIVATE-BANKING
                                        </div>
                                        <div class="col-sm-4">
                                        <a style="margin-left:4%" href="<?= base_url('relationship_manager_pvt_bank')?>">Read more / Apply Now</a>
                                    </div>
                    	        	</div>

                                     <div class="course-date row pb-2">
                                        <div class="col-sm-8">
                    	        		<i class="fa fa-clock-o"></i> RM - RA-TRANSP. GRP
                                        </div>
                                        <div class="col-sm-4">
                                        <a style="margin-left:4%" href="<?= base_url('ra_transp')?>">Read more / Apply Now</a>
                                    </div>
                    	        	</div>

                                    <div class="course-date row pb-2">
                                        <div class="col-sm-8">
                    	        		<i class="fa fa-clock-o"></i>TRANNING AND QUALITY MANAGER
                                        </div>
                                        <div class="col-sm-4">
                                        <a style="margin-left:4%" href="<?= base_url('traning_quality_manager')?>">Read more / Apply Now</a>
                                    </div>
                    	        	</div>
                    	        </div><br />
                                <div class="course-header">
                    	    	
                        	    	<h3 class="course-title"><a >Audit</a></h3>
                    	        	<div class="course-date row pb-2">
                                        <div class="col-sm-8">
                    	        		<i class="fa fa-clock-o"></i> Assistent Auditor
                                        </div>
                                        <div class="col-sm-4">
                                        <a style="margin-left:4%" href="<?= base_url('asst_auditor')?>">Read more / Apply Now</a>
                                    </div>
                    	        	</div>
                                    <div class="course-date row pb-2">
                                        <div class="col-sm-8">
                    	        		<i class="fa fa-clock-o"></i> audi
                                        </div>
                                        <div class="col-sm-4">
                                        <a style="margin-left:4%" href="<?= base_url('audi')?>">Read more / Apply Now</a>
                                    </div>
                    	        	</div>
                    	        </div><br />
                                <div class="course-header">
                        	    	<h3 class="course-title"><a>COLLECTION</a></h3>
                    	        	<div class="course-date row pb-2">
                                        <div class="col-sm-8">
                    	        		<i class="fa fa-clock-o"></i> COLLECTION
                                        </div>
                                        <div class="col-sm-4">
                                        <a style="margin-left:4%" href="<?= base_url('collection')?>">Read more / Apply Now</a>
                                    </div>
                    	        	</div>
                    	        </div><br />
                                <div class="course-header">
                    	    	
                        	    	<h3 class="course-title"><a >CREDIT CARD</a></h3>
                                    <div class="course-date row pb-2">
                                        <div class="col-sm-8">
                    	        		<i class="fa fa-clock-o"></i> SALES MANAGER-INDIRECT CHANNEL PAYMENT BUSSINESS.
                                        </div>
                                        <div class="col-sm-4">
                                        <a style="margin-left:4%" href="<?= base_url('sales_manager_indirect_channel_payment_business')?>">Read more / Apply Now</a>
                                    </div>
                    	        	</div>


                    	        	<div class="course-date row pb-2">
                                        <div class="col-sm-8">
                    	        		<i class="fa fa-clock-o"></i> AREA HEAD FOREX & BUNDLE
                                        </div>
                                        <div class="col-sm-4">
                                        <a style="margin-left:4%" href="<?= base_url('area_head_forex')?>">Read more / Apply Now</a>
                                    </div>
                    	        	</div>
                                   <div class="course-date row pb-2">
                                    <div class="col-sm-8">
                   	        		<i class="fa fa-clock-o"></i> SALES MANAGER-BKD
                                        </div>
                                        <div class="col-sm-4">
                                        <a style="margin-left:4%" href="<?= base_url('sales_manager_bkd')?>">Read more / Apply Now</a>
                                    </div>
                    	        	</div>
                    	        	 <div class="course-date row pb-2">
                                        <div class="col-sm-8">
                    	        		<i class="fa fa-clock-o"></i> SALES MANAGERS
                                        </div>
                                        <div class="col-sm-4">
                                        <a style="margin-left:4%" href="<?= base_url('sales_manager')?>">Read more / Apply Now</a>
                                    </div>
                    	        	</div>
                                     <div class="course-date row pb-2">
                                        <div class="col-sm-8">
                    	        		<i class="fa fa-clock-o"></i> SALES MGR-CRS PYMT BUNINESS
                                        </div>
                                        <div class="col-sm-4">
                                        <a style="margin-left:4%" href="<?= base_url('sales_mgr_crs_pytm')?>">Read more / Apply Now</a>
                                    </div>
                    	        	</div>
                    	        </div><br />
                                <div class="course-header">
                    	    	
                        	    	<h3 class="course-title"><a>E COMMUNICATION</a></h3>
                    	        	<div class="course-date row pb-2">
                                        <div class="col-sm-8">
                    	        		<i class="fa fa-clock-o"></i> MRM E COM
                                        </div>
                                        <div class="col-sm-4">
                                        <a style="margin-left:4%" href="<?= base_url('mrm_ecom')?>">Read more / Apply Now</a>
                                    </div>
                    	        	</div>
                    	        </div><br />
                                <div class="course-header">
                    	    	
                        	    	<h3 class="course-title"><a >EMERGING ENTERPRISES GROUP</a></h3>
                    	        	<div class="course-date row pb-2">
                                        <div class="col-sm-8">
                    	        		<i class="fa fa-clock-o"></i> TERRITORY HEAD
                                        </div>
                                        <div class="col-sm-4">
                                        <a style="margin-left:4%" href="<?= base_url('terriotry_head')?>">Read more / Apply Now</a>
                                    </div>
                    	        	</div><br />
                    	        </div><br />
                                <div class="course-header">
                    	    	
                        	    	<h3 class="course-title"><a>HNW</a></h3>
                    	        	<div class="course-date row pb-2">
                                        <div class="col-sm-8">
                    	        		<i class="fa fa-clock-o"></i> PROD MGR ASSETS DEST- HNW
                                        </div>
                                        <div class="col-sm-4">
                                        <a style="margin-left:4%" href="<?= base_url('prod_mgr_assets')?>">Read more / Apply Now</a>
                                    </div>
                    	        	</div>                                   
                    	        </div><br />
                                <div class="course-header">
                    	    	
                        	    	<h3 class="course-title"><a>IT</a></h3>
                    	        	<div class="course-date row pb-2">
                                        <div class="col-sm-8">
                    	        		<i class="fa fa-clock-o"></i> Sap
                                        </div>
                                        <div class="col-sm-4">
                                        <a style="margin-left:4%" href="<?= base_url('sap')?>">Read more / Apply Now</a>
                                    </div>
                    	        	</div>
                    	        </div><br />
                                <div class="course-header">
                    	    	
                        	    	<h3 class="course-title"><a >INSTITUTIONAL BUSINESS</a></h3>
                    	        	<div class="course-date row pb-2">
                                        <div class="col-sm-8">
                    	        		<i class="fa fa-clock-o"></i> GIB-AREA HEAD
                                        </div>
                                        <div class="col-sm-4">
                                        <a style="margin-left:4%" href="<?= base_url('gib_area_head')?>">Read more / Apply Now</a>
                                    </div>
                    	        	</div>
                    	        </div><br />
                                <div class="course-header">
                    	    	
                        	    	<h3 class="course-title"><a>MERCHANT SERVICES</a></h3>
                    	        	<div class="course-date row pb-2">
                                        <div class="col-sm-8">
                    	        		<i class="fa fa-clock-o"></i> MERCHAT E-COMM
                                        </div>
                                        <div class="col-sm-4">
                                        <a style="margin-left:4%" href="<?= base_url('merchant_e_com')?>">Read more / Apply Now</a>
                                    </div>
                    	        	</div>
                    	        </div><br />
                                <div class="course-header">
                        	    	<h3 class="course-title"><a>RBB - BM</a></h3>
                    	        	<div class="course-date row pb-2">
                                        <div class="col-sm-8">
                    	        		<i class="fa fa-clock-o"></i> RBB BRANCH MANAGER
                                        </div>
                                        <div class="col-sm-4">
                                        <a style="margin-left:4%" href="<?= base_url('rbb_branch_manager')?>">Read more / Apply Now</a>
                                    </div>
                    	        	</div>
                    	        </div><br />
                                <div class="course-header">
                        	    	<h3 class="course-title"><a>TERRITORY HEAD</a></h3>
                    	        	<div class="course-date row pb-2">
                                        <div class="col-sm-8">
                    	        		<i class="fa fa-clock-o"></i> TERRITORY HEAD
                                        </div>
                                        <div class="col-sm-4">
                                        <a style="margin-left:4%" href="<?= base_url('terriotry_head')?>">Read more / Apply Now</a>
                                    </div>
                    	        	</div>
                    	        </div>          		
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- History End -->

        <!-- Vision End -->

        
        <!-- Team End -->

        <!-- Branches Start -->
        
        <!-- Branches End -->
		
        <!-- Partner Start -->
        <!--<div id="rs-partner" class="rs-partner pt-70 pb-70">
            <div class="container">
				<div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="80" 4ta-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="4" data-ipad-device-nav="false" data-ipad-device-dots="false" data-md-device="5" data-md-device-nav="false" data-md-device-dots="false">
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
