<?php
  $user_session_data = null;
  $user_session_data = $this->session->userdata('new_student_user_data');
  $b_strip_ad = $this->advertisement->view_platinum_ad();
  $l_strip_ad = $this->advertisement->silver_gold_ad();
  $r_strip_ad = $this->advertisement->silver_gold_ad();
?>
        <!-- Advertisement section -->
        <?php if ($b_strip_ad): ?>
            <div class="b-strip">
            <span class="close-b-strip close-banner"><i class="far fa-times-circle"></i></span>
            <a href="<?= $b_strip_ad['web_URL']?>">
                <?= $b_strip_ad['ad_title'] ?>
                <img src="<?= base_url($this->config->item('ad_files').'/'.$b_strip_ad['ad_file_name'])?>">
            </a>
        </div>
        <?php endif ?>
        <!-- Advertisement section end -->

        <!-- Right advertisement -->
        <?php if ($r_strip_ad): ?>
        <div class="r-strip">
            <span class="close-r-strip close-banner"><i class="far fa-times-circle"></i></span>
            <a href="<?= $r_strip_ad['web_URL']?>">
                <?= $r_strip_ad['ad_title'] ?>
                <img src="<?= base_url($this->config->item('ad_files').'/'.$r_strip_ad['ad_file_name'])?>">
            </a>
        </div>
            
        <?php endif ?>
        <!-- Right advertisement -->

        <!-- Left advertisement -->
        <?php if ($l_strip_ad): ?>
        <div class="l-strip">
            <span class="close-l-strip close-banner"><i class="far fa-times-circle"></i></span>
            <a href="<?= $l_strip_ad['web_URL']?>">
                <?= $l_strip_ad['ad_title'] ?>
                <img src="<?= base_url($this->config->item('ad_files').'/'.$l_strip_ad['ad_file_name'])?>">
            </a>
        </div>
        <?php endif ?>
        <!-- Left advertisement -->

        <!-- Footer Start -->
        <footer id="rs-footer" class="bg3 rs-footer">
		      	<!-- Footer Top -->
            <div class="footer-top"  style="margin-top:-100px">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-12">
                            <div class="about-widget">
                              <h1 style="color:White">About Us</h1>
                                <p>The Infops is an interface for their candidate and it’s an institutional Service, and a helpful tool to achieve their goals with our help on the Basis on candidate’s Qualification and eligibility.</p>
                                <p class="margin-remove"><a href="<?= base_url('vision')?>">Read More..</a></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <h5 class="footer-title">RECENT POSTS</h5>
                            <div class="recent-post-widget">
                                <div class="post-item">
                                    <div class="post-date">
                                        <span>28</span>
                                        <span>June</span>
                                    </div>
                                    <div class="post-desc">
                                        <h5 class="post-title"><a href="#">While the lovely valley team work</a></h5>
                                        <span class="post-category">Keyword Analysis</span>
                                    </div>
                                </div>
                                <div class="post-item">
                                    <div class="post-date">
                                        <span>28</span>
                                        <span>June</span>
                                    </div>
                                    <div class="post-desc">
                                        <h5 class="post-title"><a href="#">I must explain to you how all this idea</a></h5>
                                        <span class="post-category">Spoken English</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12">
                        <div class="about-widget">
                            <h5 class="footer-title">OUR SITEMAP</h5>
                            <ul class="sitemap-widget">
                                <li class="active"><a href="<?= base_url('/')?>"><i class="fa fa-angle-right" aria-hidden="true"></i>Home</a></li>
                                <li><a href="<?= base_url('vision')?>"><i class="fa fa-angle-right" aria-hidden="true"></i>Our Vision</a></li>
                                <li><a href="<?= base_url('mock_test')?>"><i class="fa fa-angle-right" aria-hidden="true"></i>Mock Test</a></li>   
                                <?php if($user_session_data){?>
                                <li><a href="<?= base_url('student_logout')?>"><i class="fa fa-angle-right" aria-hidden="true"></i>Logout</a></li> 
                                <?php } else { ?>
                                <li><a href="<?= base_url('student_registration')?>"><i class="fa fa-angle-right" aria-hidden="true"></i>Registration</a></li>
                                <li><a href="<?= base_url('student_login')?>"><i class="fa fa-angle-right" aria-hidden="true"></i>Login </a></li>
                                <?php } ?>
                                <li><a href="<?= base_url('admin')?>"><i class="fa fa-angle-right" aria-hidden="true"></i>Admin Login</a></li>
                                <li><a href="<?= base_url('contact_us')?>"><i class="fa fa-angle-right" aria-hidden="true"></i>Contact</a></li>  <li><a href="<?= base_url('latest_appliaction')?>"><i class="fa fa-angle-right" aria-hidden="true"></i>Latest Applications</a></li>
                                
                            </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <h5 class="footer-title">Our Policy</h5>
                            <div class="recent-post-widget" >
                           <p><a href="<?= base_url('term_condition')?>" style="color:white">Term and Condition</a> </p>
                               <p> <a href="<?= base_url('privacy_policy')?>" style="color:white">Privacy Policy</a></p>
                                 
                                <p> <a href="<?= base_url('band')?>" style="color:white">Band</a></p>
                                
                           
                            </div>
                        </div>
                    </div>
<!--                     <div class="footer-share">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>    
                        </ul>
                    </div> -->
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="copyright">
                        <p>© 2020 <a href="#">Infops</a>. All Rights Reserved.</p> Powered by <a href="https://kbrostechno.com">Kbros technologies</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->
                <!-- start scrollUp  -->
        <div id="scrollUp">
            <i class="fa fa-angle-up"></i>
        </div>
        