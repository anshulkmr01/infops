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
		                    <h1 class="page-title">Registration</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="<?= base_url('/');?>">Home</a>
		                        </li>
		                        <li>Registration</li>
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
                <form action="register_new_student" method="post">
                <div>
                    <h1  style="text-align:center" >Registration </h1>
						<fieldset>
							<div class="row">                                      
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Enter Your Name*</label>
										<input name="fname" value="<?= set_value('fname')?>" id="fname" class="form-control" type="text">
										<?= form_error('fname')?>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Last Name*</label>
										<input name="lname" id="lname" value="<?= set_value('lname')?>" class="form-control" type="text">
										<?= form_error('lname')?>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Email*</label>
										<input name="email" id="email" value="<?= set_value('email')?>" class="form-control" type="email">
										<?= form_error('email')?>
									</div>
								</div>
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
                            <div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Phone No*</label>
										<input name="phone" value="<?= set_value('phone')?>" class="form-control" type="number">
										<?= form_error('phone')?>
									</div>
								</div>
							</div>                 	        
							<div class="form-group mb-0">
                             I Accept  <input type="checkbox" name="is_checked">
                             <a href="term_condition">Term and Condition</a><br/>
							<?= form_error('is_checked')?>
							<span id="captImg"><?php echo $captchaImg; ?></span> 
							<input type="text" name="captcha" style="padding: 9px" />
							<?= form_error('captcha')?>
							<?= form_error('captcha1')?>
							<p>Can't read the image? click <a href="javascript:void(0);" class="refreshCaptcha">here</a> to refresh.</p>
							<input class="btn-send" type="submit" value="Submit Now">
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
	<!-- captcha refresh code -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('.refreshCaptcha').on('click', function(){
        $.get('<?= base_url().'Home/refresh_captcha'; ?>', function(data){
            $('#captImg').html(data);
        });
    });
});
</script>
</html>
