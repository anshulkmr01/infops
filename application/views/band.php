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
                  
                    <div >
                        <div class="abt-title">
                            <h2>About Us</h2>
                        </div>
                        <div class="about-desc">
                            <p>Bands are the categories in which the post has been declared:</p>
<p>Every Band has their Own Role and package, Band are divided into</p>
<ul>
<li>E1</li>
<li>E2</li>
<li>E3</li>
<li>E4</li>
<li>D1</li>
<li>DA</li>
</ul>
<p>E1 to E3 fresher candidates can apply For E4 and above the candidate who wants to apply must have experience.</p>
<p>Every Band will have different pay package.</p>
<p>E1 &ndash; 4 lacs &ndash; 5.4 lacs</p>
<p>E2 &ndash; 5 lacs &ndash; 6 lacs</p>
<p>E3 &ndash; 5.5 lacs &ndash; 8.6 lacs</p>
<p>E4 &ndash; 10 lacs &ndash; 12.6 lacs</p>
<p>D1&nbsp; - 16 lacs &ndash; 19 lacs</p>
<p>DA &ndash; 23 lacs &ndash; 26 lacs&nbsp;&nbsp;&nbsp;</p>
                        
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
