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
        <!--Header Start-->
    </div>
        
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="page-title">About Us</h1>
                            <ul>
                                <li>
                                    <a class="active" href="<?= base_url('/');?>">Home</a>
                                </li>
                                <li>About Us</li>
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
                            <h2>WHAT WE DO</h2>
                        </div>
                        <div class="about-desc">
                            <ul>
                            <li>Online Internship Program.</li>
                            <li>Marketing Training</li>
                            <li>Digital Marketing Training</li>
                            <li>Career Counseling</li>
                            <li>Admission Test Program</li>
                            <li>Academic Training </li>
                            <li>Course Content</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- History End -->

        <!-- Mission Start -->
        
        <!-- Mission End -->

        <!-- Vision Start -->
        
        <!-- Vision End -->

        <!-- Calltoaction Start -->
        
        <!-- Calltoaction End -->

        <!-- Team Start -->
        
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
<!--/ Main Body -->
<!-- footer -->
    <?php $this->load->view('footer');?>
<!-- /footer -->

</body>
    <?php 
        infops_globalJs(); 
    ?>
</html>
