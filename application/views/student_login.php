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
		                    <h1 class="page-title">Login</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="<?= base_url('/');?>">Home</a>
		                        </li>
		                        <li>Login</li>
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
                <form action="login_student" method="post">
                <div>
                    <h1  style="text-align:center" >Login For Apply</h1>
						<fieldset>
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Email*</label>
										<input name="email" id="email" value="<?= set_value('email')?>" class="form-control" type="email">
										<?= form_error('email')?>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>DOB</label>
										      <div class="form-group">
										        <div id="filterDate2">
										        <input  type="date" value="<?= set_value('DOB')?>" class="form-control" name="DOB">
												<?= form_error('DOB')?>
										  </div>
										</div>
									</div>
								</div>
							</div>                 	        
							<div class="form-group mb-0">
							<input class="btn-send" type="submit" value="Login">
							</div>
						</fieldset>
                </div>
            	</form>
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
