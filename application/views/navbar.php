<?php
  $url = basename($_SERVER['PHP_SELF']);
  $user_session_data = null;
  $user_session_data = $this->session->userdata('new_student_user_data');
?>

    <!--Preloader area start here-->
    <div class="book_preload">
        <div class="book">
            <div class="book__page"></div>
            <div class="book__page"></div>
            <div class="book__page"></div>
        </div>
    </div>
    <!-- Preloader are end here -->
    
    <!-- Toolbar Start -->
            <div class="rs-toolbar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="rs-toolbar-left">
                                <div class="welcome-message">
                                    <i class="fa fa-bank"></i><span>Welcome to The Infops.in</span>
                                    <?php if($user_session_data){?>
                                        <span style="color: #ff3115"><?= $user_session_data['email']; ?></span>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="rs-toolbar-right">
<!--                                 <div class="toolbar-share-icon">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div> -->
                                <?php if($user_session_data){?>
                                        <a href="<?= base_url('student_logout')?>" class="apply-btn">Logout</a> 
                                    <?php } else { ?>
                                <a href="<?= base_url('registration')?>" class="apply-btn">Registration Now</a>  |
                                <a href="<?= base_url('student_login')?>" class="apply-btn">Login</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Toolbar End -->

    <!--Header Start-->
            <header id="rs-header-2" class="rs-header-2">
                <!-- Menu Start -->
                <div class="menu-area menu-sticky">
                    <div class="container">
                        <div class="row rs-vertical-middle">
                            <div class="col-lg-3 col-md-12">
                                <div class="logo-area">
                                    <a href="<?= base_url('/')?>"><img src="<?= base_url('assets/infops/')?>images/logo-white.png" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-12">
                                <div class="main-menu">
                                    <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                                    <nav class="rs-menu">
                                    <ul class="nav-menu">
                                        <!-- Home -->
                                    <li class="current-menu-item current_page_item menu-item-has-children"> <a href="<?= base_url('/')?>" class="home">Home</a>
                                    </li>
                                    <li class="menu-item-has-children"><a>About Us</a>
                                        <ul class="sub-menu">
                                          <li> <a href="<?= base_url('vision')?>">Vision </a></li>
                                          <li><a href="<?= base_url('what_we_do')?>">What we do</a></li>
                                         <!--  <li><a href="<?= base_url('how_to_track')?>">How to Track</a></li>   -->
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"> <a>DIC & DOC</a>
                                        <ul class="sub-menu">
                                            <li> <a href="<?= base_url('disipline')?>">DISCIPLINES & MINIMUM ESSENTIAL EDUCATIONAL QUALIFICATION</a></li>
                                            <li><a href="<?= base_url('document_required')?>">Document Required</a></li>
                                        </ul>
                                    </li>
                                    <!-- <li class="menu-item-has-children"> <a>Track status</a>
                                        <ul class="sub-menu">
                                        <li> <a href="<?= base_url('')?>">Find Your Enrollment</a></li>
                                        </ul>
                                    </li> -->
                                    <li class="menu-item-has-children"> <a href="<?= base_url('latest_application')?>">Latest Applications</a>
                                    </li>
                                    <li class="menu-item-has-children"> <a href="<?= base_url('mock_test')?>">Mock test</a></li>
                                    <li class="menu-item-has-children"> <a href="<?= base_url('contact_us')?>">Contact</a></li>
                                    </ul>
                                    </nav>
                                </div>
                            </div>                                              
                        </div>
                    </div>
                </div>
            </header>
    <!--Header End-->
    
<!--Error/ Success Message-->

  <?php if($success = $this->session->flashdata('success')):?>
     <!--Toast-->
     <div class="bs-example float-message text-white bg-danger">
        <div class="toast" id="myToast">
            <div class="toast-header" style="background:#89be47">
                <strong class="mr-auto"><?= $success; ?></strong>
                <small></small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- <div class="toast-body">
                <div><?= $success; ?></div>
            </div> -->
        </div>
    </div>
    <!--/Toast-->
    <?php endif;?>

    <?php if($error = $this->session->flashdata('error')):?>
       <!--Toast-->
     <div class="bs-example float-message">
        <div class="toast" id="myToast">
            <div class="toast-header" style="background: #be4747">
                <strong class="mr-auto"><?= $error; ?></strong>
                <small></small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div><!-- 
            <div class="toast-body">
                <div><?= $error; ?></div>
            </div> -->
        </div>
    </div>
    <!--/Toast-->
    <?php endif;?>


    <?php if($warning = $this->session->flashdata('warning')):?>
       <!--Toast-->
     <div class="bs-example float-message">
        <div class="toast" id="myToast">
            <div class="toast-header" style="background: #008c9a">
                <strong class="mr-auto"><?= $warning; ?></strong>
                <small></small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div><!-- 
            <div class="toast-body">
                <div><?= $error; ?></div>
            </div> -->
        </div>
    </div>
    <!--/Toast-->
    <?php endif;?>
    <!--/Error/ Success Message End-->