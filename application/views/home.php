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
<body class="home1">
	<div class="full-width-header">
		<!-- Navbar -->
			<?php $this->load->view('navbar');?>
		<!--/ Navbar -->
	</div>
	<!-- Main Body -->

		<!-- Slider Area Start -->
        <div id="rs-slider" class="slider-overlay-2">     
        	<div id="home-slider">
				<!-- Item 1 -->
				<div class="item active">
					<img src="<?= base_url('assets/infops/')?>images/slider/home1/slide1.jpg" alt="Slide1" />
					<div class="slide-content">
						<div class="display-table">
							<div class="display-table-cell">
								<div class="container text-center">
									<h1 class="slider-title" data-animation-in="fadeInLeft" data-animation-out="animate-out">WELCOME TO infops.in</h1>
									<p data-animation-in="fadeInUp" data-animation-out="animate-out" class="slider-desc">The Infops.in A corporate group  </p>  
									<a href="<?= base_url('vision');?>" class="sl-readmore-btn mr-30" data-animation-in="lightSpeedIn" data-animation-out="animate-out">READ MORE</a>
									<a href="<?= base_url('latest_application');?>" class="sl-get-started-btn" data-animation-in="lightSpeedIn" data-animation-out="animate-out">GET STARTED NOW</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Item 2 -->
				<div class="item">
					<img src="<?= base_url('assets/infops/')?>images/slider/home1/slide2.jpg" alt="Slide2" />
					<div class="slide-content">
						<div class="display-table">
							<div class="display-table-cell">
								<div class="container text-center">
									<h1 class="slider-title" data-animation-in="fadeInUp" data-animation-out="animate-out">ARE YOU READY TO APPLY?</h1>
									<p data-animation-in="fadeInUp" data-animation-out="animate-out" class="slider-desc">The Infops.in A corporate group  </p>  
									<a href="<?= base_url('vision');?>" class="sl-readmore-btn mr-30" data-animation-in="fadeInUp" data-animation-out="animate-out">READ MORE</a>
									<a href="<?= base_url('latest_application');?>" class="sl-get-started-btn" data-animation-in="fadeInUp" data-animation-out="animate-out">GET STARTED NOW</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Item 3 -->
				<div class="item">
					<img src="<?= base_url('assets/infops/')?>images/slider/home1/slide3.jpg" alt="Slide3" />
					<div class="slide-content">
						<div class="display-table">
							<div class="display-table-cell">
								<div class="container text-center">
									<h1 class="slider-title" data-animation-in="fadeInUp" data-animation-out="animate-out">ARE YOU READY TO APPLY?</h1>
									<p data-animation-in="fadeInUp" data-animation-out="animate-out" class="slider-desc">The Infops.in A corporate group  </p>  
									<a href="<?= base_url('vision');?>" class="sl-readmore-btn mr-30" data-animation-in="fadeInUp" data-animation-out="animate-out">READ MORE</a>
									<a href="<?= base_url('latest_application');?>" class="sl-get-started-btn" data-animation-in="fadeInUp" data-animation-out="animate-out">GET STARTED NOW</a>
								</div>
							</div>
						</div>
					</div>
				</div>

        	</div>         
        </div>
        <!-- Slider Area End -->
		
		<!-- Services Start -->
        <div class="rs-services rs-services-style1" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-6">
                    	<div class="services-item rs-animation-hover">
                    	    <div class="services-icon">
                    	    	<i class="fa fa-american-sign-language-interpreting rs-animation-scale-up"></i>                    	        
                    	    </div>
                    	    <div class="services-desc">
                    	        <h4 class="services-title"><a href="<?= base_url('academic_training')?>" style="color:white"> Academic Training: <br><br></a> </h4>
                    	       <!-- <p>Lorem ipsum dolor sit amet Sed nec molestie justo</p>-->
                    	    </div>
                    	</div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                    	<div class="services-item rs-animation-hover">
                    	    <div class="services-icon">                    	        
                    	        <i class="fa fa-book rs-animation-scale-up"></i>
                    	    </div>
                    	    <div class="services-desc">
                    	        <h4 class="services-title"><a href="<?= base_url('course_content')?>" style="color:white"> Course Content: <br><br></a></h4>
                    	        <!--<p>Lorem ipsum dolor sit amet Sed nec molestie justo</p>-->
                    	    </div>
                    	</div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                    	<div class="services-item rs-animation-hover">
                    	    <div class="services-icon">
                    	        <i class="fa fa-user rs-animation-scale-up"></i>
                    	    </div>
                    	    <div class="services-desc">
                    	        <h4 class="services-title"><a href="<?= base_url('digital_marketing_traning')?>" style="color:white"> Digital Marketing Training: </a></h4>
                    	       <!-- <p>Lorem ipsum dolor sit amet Sed nec molestie justo</p>-->
                    	    </div>
                    	</div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                    	<div class="services-item rs-animation-hover">
                    	    <div class="services-icon">

                    	        <i class="fa fa-graduation-cap rs-animation-scale-up"></i>
                    	    </div>
                    	    <div class="services-desc">
                    	        <h4 class="services-title"><a href="<?= base_url('imat_examination')?>" style="color:white"> IMAT Examination: <br><br></a></h4>
                    	        <!--<p>Lorem ipsum dolor sit amet Sed nec molestie justo</p>-->
                    	    </div>
                    	</div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                      <div class="services-item rs-animation-hover">
                    	    <div class="services-icon">
                           
                    	        <i class="fa fa-bank rs-animation-scale-up"></i>
                    	    </div>
                    	    <div class="services-desc">
                    	        <h4 class="services-title"><a href="<?= base_url('freelancing')?>" style="color:white"> Freelancing: <br><br><br> </a></h4>
                    	        <!--<p>Lorem ipsum dolor sit amet Sed nec molestie justo</p>-->
                    	    </div>
                    	</div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                    	<div class="services-item rs-animation-hover">
                    	    <div class="services-icon">
                           
                    	        <i class="fa fa-openid rs-animation-scale-up"></i>
                    	    </div>
                    	    <div class="services-desc">
                    	        <h4 class="services-title"><a href="<?= base_url('mock_test')?>" style="color:white"> Mock Test: <br><br><br> </a></h4>
                    	        <!--<p>Lorem ipsum dolor sit amet Sed nec molestie justo</p>-->
                    	    </div>
                    	</div>
                    </div>
                </div>
            </div>
        </div>
		<!-- Services End -->

        <!-- About Us Start -->
    <div id="rs-about" class="rs-about sec-spacer">
        <div class="container">
            <div class="sec-title mb-50 text-center">
                <h2>Examination Test</h2>
                <p>Final Step towards your success</p>
                </p>
            </div>
            <div class="row text-center">
                <div class="col-sm-4 border-top-1">
                <div class="image-round"><img src="https://img.icons8.com/fluent/48/000000/under-computer.png"/></div>
                    <h5 class="mt-3 p-5">Freelancer</h5>
                </div>
                <div class="col-sm-4 border-top-1">
                <div class="image-round"><img src="https://img.icons8.com/officel/40/000000/test-passed.png"/></div>
                    <h5 class="mt-3 p-5">IMAT</h5>
                </div>
                <div class="col-sm-4 border-top-1">
                <div class="image-round"><img src="https://img.icons8.com/color/48/000000/new--v1.png"/></div>
                    <h5 class="mt-3 p-5">Latest Application</h5>
                </div>
                </div>
                <div class="row text-center">
                <div class="col-12 mt-3">
                    <a href="<?= base_url('examlogin'); ?>" class="primary-btn">Login Examination</a>
                </div>
            </div>
        </div>
    </div>
        <!-- About Us End -->
        <!-- About Us Start -->
    <div id="rs-about" class="rs-testimonial bg5 sec-spacer text-white">
        <div class="container">
            <div class="sec-title mb-50 text-center">
                <h2 class="text-white">ABOUT US</h2>
            </div>
            <div class="text-center">
                <p>The Infops is an interface for their candidate and it’s an institutional Service,</p>
                <p>
                 and a helpful tool to achieve their goals with our help on the Basis on candidate’s Qualification and eligibility.
                 The Infops it serves a platform to the candidate to get a secure feature as per their ability and ambitions. The Infops having Years of Experience in this. <a href="<?= base_url('vision')?>">Read More</a>
                </p>
            </div>
        </div>
    </div>
        <!-- About Us End -->

        <!-- Courses Start -->
        
        <!-- Courses End -->
		
		<!-- Counter Up Section Start-->
    <div class="rs-counter pt-100 pb-70 bg3">
        <div class="container">
            <div class="row">
            	<div class="col-lg-6 col-md-12">
            		<div class="counter-content">
            			<h2 class="counter-title">ACHEIVEMENTS</h2>
            			<div class="counter-text">
            				<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart like mine.</p>
            			</div>
            			<div class="counter-img rs-image-effect-shine">
              			<video controls autoplay  width="600" height="300">
                      <source src="https://infops.in/img/video.mp4" type="video/mp4">
                      <source src="<?= base_url('assets/infops/')?>movie.ogg"  type="video/ogg">
                      Your browser does not support the video tag.
                    </video>
                    <!-- <asp:Image ID="Image1" runat="server" Height="50%" ImageUrl="~/images/about/mission1.jpg" /> -->
            			</div>
            		</div>
            	</div>
            	<div class="col-lg-6 col-md-12 mt-80">
            		<div class="row">
                    <div class="col-md-6">
                        <div class="rs-counter-list">
                            <h2 class="counter-number plus">1160</h2>                  
                            <h4 class="counter-desc">Applications</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="rs-counter-list">
                            <h2 class="counter-number plus">10540</h2>
                            <h4 class="counter-desc">Applicants</h4>
                        </div>
                    </div>
            		</div>
            		<div class="row">
                    <div class="col-md-6">
                        <div class="rs-counter-list">
                            <h2 class="counter-number plus">14976</h2>                  
                            <h4 class="counter-desc">STUDENTS</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="rs-counter-list">
                            <h2 class="counter-number plus">3675</h2>
                            <h4 class="counter-desc">Satisfied Client</h4>
                        </div>
                    </div>
            		</div>
            	</div>
            </div>
        </div>
    </div>
       
    <div id="rs-testimonial" class="rs-testimonial bg5 sec-spacer">
			<div class="container">
				<div class="sec-title mb-50 text-center">
					<h2 class="white-color">WHAT PEOPLE SAYS</h2>      <!-- 
					<p class="white-color">Fusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.</p> -->
				</div>
				<div class="row">
          <div class="col-md-12">
						<div  class="rs-carousel owl-carousel" data-loop="true" data-items="2" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="2" data-md-device-nav="true" data-md-device-dots="true">
	                <div class="testimonial-item">
	                    <div class="testi-img">
	                      <!--  <img src="<?= base_url('assets/infops/')?>images/testimonial/1.jpg" alt="Jhon Smith"> -->
	                    </div>
	                    <div class="testi-desc">
	                        <h4 class="testi-name">Abhishek Chauhan Noida</h4>
	                        <p>
	                            During a time when the country was in an economic crisis, I had to search for employment. This task proved to be long and cumbersome. Interviews with other agencies were daunting and never resulted in job placement. But my search took a positive turn the day that I walked into A. R. Mazzotta. From the moment I arrived, it was clear that their qualified experts were committed to finding me a suitable place of employment. I would recommend A.R. Mazzotta to anyone who is serious and dedicated to finding the right job.”		                        </p>
	                    </div>
	                </div>
					        <div class="testimonial-item">
					            <div class="testi-img">
					            <!--   <img src="<?= base_url('assets/infops/')?>images/testimonial/2.jpg" alt="Jhon Smith"> -->
					            </div>
					            <div class="testi-desc">
					                <h4 class="testi-name">Sunita Deshmukh</h4>
					                <p>
					                    “My experience with The Infops.in was a pleasure. I had worked with employment agencies in the past and was disappointed. INFOPS took my job search seriously and gave their full attention to my requirements. The follow-through was amazing and I would certainly use them in the future. I was placed in a short period of time and am now gainfully employed. Thank you, The Infops.in”


					                </p>
					            </div>
					        </div>
					        <div class="testimonial-item">
					            <div class="testi-img">
					            <!--    <img src="<?= base_url('assets/infops/')?>images/testimonial/3.jpg" alt="Jhon Smith"> -->
					            </div>
					            <div class="testi-desc">
					                <h4 class="testi-name">Raj</h4>
					                <p>
					                    “I have found the professional staff at INFOPS to be extremely helpful, confidential and sincere in getting the right support at the right time, for their clients and employees. As a temporary employee, I have relied upon their judgment in client referrals, and they have never been wrong. I strongly recommend their services to any employer and employee.”
					                </p>
					            </div>
					        </div>
					        <div class="testimonial-item">
					            <div class="testi-img">
					             <!--    <img src="<?= base_url('assets/infops/')?>images/testimonial/4.jpg" alt="Jhon Smith"> -->
					            </div>
					            <div class="testi-desc">
					                <h4 class="testi-name">Vinay Aajwani</h4>
					                <p>I Believe that the plateform they provoide is the one of the best solution to achieve your Goal</p>
					            </div>
					        </div>
					        <div class="testimonial-item">
					            <div class="testi-img">
					               <!-- <img src="<?= base_url('assets/infops/')?>images/testimonial/5.jpg" alt="Jhon Smith"> -->
					            </div>
					            <div class="testi-desc">
					                <h4 class="testi-name">Dinesh</h4>
					                <p>“Infops was very helpfull for fresher's like me”</p>
					            </div>
					        </div>
                  <div class="testimonial-item">
					            <div class="testi-img">
					              <!--  <img src="<?= base_url('assets/infops/')?>images/testimonial/5.jpg" alt="Jhon Smith"> -->
					            </div>
					            <div class="testi-desc">
					                <h4 class="testi-name">Anubhav Tripathi</h4>
					                <p>“Guys if you have knowledge then this platform will help you a lot”</p>
					            </div>
					        </div>
            </div>
          </div>
			  </div>
			</div>
    </div>
<!-- Testimonial End -->
        <div class="container-fluid pt-5 pb-5 mb-5">
                <div class="sec-title mb-50 text-center">
                    <h2 class="">Employer's Choice</h2>   <!--    
                    <p class="">Fusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.</p> -->
                </div>
                <div class="clients mb-3">
                    <section class="customer-logos slider">
                      <div class="slide"><img src="assets/img/clients/wipro.jpg" alt="Wipro"></div>
                      <div class="slide"><img src="assets/img/clients/cong.png" alt="Congnizent"></div>
                      <div class="slide"><img src="assets/img/clients/axis.jpg" alt="Congnizent"></div>
                      <div class="slide"><img src="assets/img/clients/harman.jpg" alt="Harman"></div>
                      <div class="slide"><img src="assets/img/clients/ntt.jpg" alt="NTT"></div>
                      <div class="slide"><img src="assets/img/clients/quest.jpg" alt="Quest"></div>
                      <div class="slide"><img src="assets/img/clients/synechron.png" alt="Synechron"></div>
                      <div class="slide"><img src="assets/img/clients/yash.png" alt="Yash"></div>
                      <div class="slide"><img src="assets/img/clients/tcs.png" alt="TCS"></div>
                      <div class="slide"><img src="assets/img/clients/IDBI.jpg" alt="IDBI"></div>
                      <div class="slide"><img src="assets/img/clients/hdfc.jpg" alt="HDFC"></div>
                      <div class="slide"><img src="assets/img/clients/hcl.png" alt="HCL"></div>
                      <div class="slide"><img src="assets/img/clients/sbi.jpg" alt="SBI"></div>
                      <div class="slide"><img src="assets/img/clients/india-mart.jpg" alt="India Mark"></div>
                      <div class="slide"><img src="assets/img/clients/titan.jpg" alt="Titan"></div>
                      <div class="slide"><img src="assets/img/clients/clutchgroup.jpg" alt="Clutch Group"></div>
                      <div class="slide"><img src="assets/img/clients/cms.jpg" alt="CMS"></div>
                      <div class="slide"><img src="assets/img/clients/cocacola.jpg" alt="Coca Cola"></div>
                      <div class="slide"><img src="assets/img/clients/daimler.jpg" alt="Daimler"></div>
                   </section>
                </div>
        </div>
<!--/ Main Body -->
<!-- footer -->
	<?php $this->load->view('footer');?>
<!-- /footer -->
</body>
	<?php 
		infops_globalJs(); 
	?>
    <style type="text/css">
        



.image-round {
    width: 75px;
    height: 75px;
    box-shadow: 2px 2px 20px 0px #5d5d5d2e;
    border-radius: 50%;
    line-height: 75px;
    text-align: center;
    margin: auto;

    position: absolute;
    left: 50px;
    background: #fff;
    right: 50px;
    bottom: 120px;
  }
  .border-top-1{
    border-top:1px solid #e2e2e2;
  }
    </style>
    <script type="text/javascript">
        
$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
    </script>
</html>
