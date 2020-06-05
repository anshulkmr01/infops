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
		                    <h1 class="page-title">Digital Marketing Training:</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="<?= base_url('/');?>">Home</a>
		                        </li>
		                        <li>Digital Marketing Training:</li>
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
                <div class="row">
                    <div class="col-lg-6 col-md-12 rs-vertical-bottom mobile-mb-50">
                    	<a href="#">
							<img src="<?= base_url('assets/infops/')?>images/about/history.jpg" alt="History Image"/>
                    	</a>
                    </div>
                    <div class="col-lg-6 col-md-12">
		                <div class="abt-title">
		                    <h2>Digital Marketing Training:</h2>
		                </div>
                    	<div class="about-desc">
                			<p></p>
<p>The candidate will apply for Digital marketing Training</p>
<p>Digital Marketing Training fee will be 387RS</p>
<p>Once a candidate will apply for the Training candidate will able to avail the service line.</p>

                    	
                        </div>
                       

                                   </div>


											<ul>
													<li>Digital Marketing Training Meaning</li>
													<li>Plan</li>
													<li>Design</li>
													<li>Print</li>
													<li>Business knowledge</li>
													<li>Checklist for Marketing Material</li>
													<li>Deliverables:</li>
													<li>Marketing Collateral Questionnaire</li>
													<li>Contact information:</li>
											</ul>
													<p>Benefits of Marketing Material:</p>
											<ol>
														<li>Increases visibility of your brand.</li>
														<li>Develops lasting relationships with your audience.</li>
														<li>Improves brand awareness and recognition.</li>
														<li>Creates loyalty and trust, both, with your current customers and future prospects.</li>
														<li>Helps you to build the credibility.</li>
														<li>Positions your business in your industry.</li>
														<li>Generates traffic to your site to improve lead generation.</li>
														<li>Opens a channel of communication through social shares and comments.</li>
														<li>Helps your customer move through the purchase decision more quickly.</li>
														<li>Provides value with no strings attached</li>
											</ol>


     
                  </div>
			<?php if($this->session->userdata('new_student_user_data')){ ?>
				<?= anchor('payment/digital_marketing_traning/course_buy','Pay',['class'=>'btn-danger btn '])?>
			<?php }else{?>
					<?= anchor('registration','Register Here',['class'=>'btn-danger btn '])?>
			<?php } ?>
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
