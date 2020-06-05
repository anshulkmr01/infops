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
		                    <h1 class="page-title">Mock Test</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="<?= base_url('/');?>">Home</a>
		                        </li>
		                        <li>Mock Test</li>
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
                   
                    <div>
		               
                       <div class=" course-item">
                        	
                        	<div >
                    	        <div class="course-header pb-3">
                                    <div class="course-date row pb-2">
                                        <div class="col-md-4 col-lg-2 col-5 col-sm-5">
                                   	 Current Affairs 
                                        </div>
                                        <div class="col-2">
                                    <a class="btn btn-sm btn-danger" href="<?= base_url('current_affair_mock')?>">Read more </a>
                                    </div>
                                    <div class="col-2">
                                    <?php if($this->session->userdata('new_student_user_data')){ ?>
                                    <?= anchor('payment/current_affairs/course_buy','Pay',['class'=>'btn btn-sm btn-danger'])?>
                                    <?php }else{?>
                                    <?= anchor('registration','Register Here',['class'=>'btn btn-sm btn-danger'])?>
                                    <?php } ?>
                                </div>
                                    </div>
                                    <div class="course-date pb-2 row">
                                        <div class="col-md-4 col-lg-2 col-5 col-sm-5">
                    	        		English Mock Test
                                    </div>
                                    <div class="col-2">
                                    <a class="btn btn-sm btn-danger" href="<?= base_url('english_mock')?>">Read more </a>
                                    </div>
                                    <div class="col-2">
                                    <?php if($this->session->userdata('new_student_user_data')){ ?>
                                    <?= anchor('payment/english_ock_test/course_buy','Pay',['class'=>'btn btn-sm btn-danger'])?>
                                    <?php }else{?>
                                    <?= anchor('registration','Register Here',['class'=>'btn btn-sm btn-danger'])?>
                                    <?php } ?>
                                </div>
                    	        	</div>
                                    <div class="course-date pb-2 row">
                                        <div class="col-md-4 col-lg-2 col-5 col-sm-5">
                    	        		IELTS And TOFEL
                                    </div>
                                    <div class="col-2">
                                    <a class="btn btn-sm btn-danger" href="<?= base_url('IELS_mock')?>">Read more </a>
                                    </div>
                                    <div class="col-2">
                                    <?php if($this->session->userdata('new_student_user_data')){ ?>
                                    <?= anchor('payment/IELTS_and_TOFEL/course_buy','Pay',['class'=>'btn btn-sm btn-danger'])?>
                                    <?php }else{?>
                                    <?= anchor('registration','Register Here',['class'=>'btn btn-sm btn-danger'])?>
                                    <?php } ?>
                                </div>
                    	        	</div>
                                    <div class="course-date pb-2 row">
                                        <div class="col-md-4 col-lg-2 col-5 col-sm-5">
                    	        		Reasoning Mock Test
                                    </div>
                                    <div class="col-2">
                                    <a class="btn btn-sm btn-danger" href="<?= base_url('reasoning_mock')?>">Read more </a>
                                        </div>
                                       <div class="col-2"><?php if($this->session->userdata('new_student_user_data')){ ?>
                                    <?= anchor('payment/reasoning_mock_test/course_buy','Pay',['class'=>'btn btn-sm btn-danger'])?>
                                    <?php }else{?>
                                    <?= anchor('registration','Register Here',['class'=>'btn btn-sm btn-danger'])?>
                                    <?php } ?>
                                </div>
                    	        	</div>
                                  
                                    <div class="course-date pb-2 row">
                                        <div class="col-md-4 col-lg-2 col-5 col-sm-5">
                    	        		Mathematical Mock Test
                                    </div>
                                    <div class="col-2">
                                    <a class="btn btn-sm btn-danger" href="<?= base_url('maths_mock')?>">Read more </a>
                                    </div>
                                    <div class="col-2">
                                    <?php if($this->session->userdata('new_student_user_data')){ ?>
                                    <?= anchor('payment/mathematical_mock_test/course_buy','Pay',['class'=>'btn btn-sm btn-danger'])?>
                                    <?php }else{?>
                                    <?= anchor('registration','Register Here',['class'=>'btn btn-sm btn-danger'])?>
                                    <?php } ?>
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
