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
		                    <h1 class="page-title">Academic Training:</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="<?= base_url('/');?>">Home</a>
		                        </li>
		                        <li>Academic Training:</li>
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
		                    <h2>Academic Training:</h2>
		                </div>
                    	<div class="about-desc">
                			<p></p>
								<p>The candidate will apply for the training for their further studies</p>
								<p>Academic Training fee will be 387RS</p>
								<p>Once a candidate will apply for the Training candidate will able to receive their study material/Course Content.</p>
								<p>We have divided this Course Content into 4 parts:</p>
								<ol>
								<li>Schooling</li>
								<li>Undergraduate</li>
								<li>Graduate</li>
								<li>Post Graduate</li>
								</ol>
                        </div>
                    </div>
					<table>
						<thead>
							<tr>
								<th>Course Name</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
						</tbody>
						<tr>
							<td>10<sup>th</sup> class</td>
							<td><?php if($this->session->userdata('new_student_user_data')){ ?>
				            	<?= anchor('payment/acadmic_traning_10th/course_buy','Pay',['class'=>'btn-danger btn '])?>
					            <?php }else{?>
					           		<?= anchor('registration','Register / Login',['class'=>'btn-danger btn btn-sm'])?>
					        	<?php } ?>
        		
        					</td>
						</tr>
						<tr>
							<td>12<sup>th</sup> class</td>
							<td><?php if($this->session->userdata('new_student_user_data')){ ?>
				            	<?= anchor('payment/acadmic_traning_12th/course_buy','Pay',['class'=>'btn-danger btn '])?>
					            <?php }else{?>
					           		<?= anchor('registration','Register / Login',['class'=>'btn-danger btn btn-sm'])?>
					        	<?php } ?>
        		
        					</td>
						</tr>
						<tr>
							<td>BA (Bachelor of Arts)</td>
							<td><?php if($this->session->userdata('new_student_user_data')){ ?>
				            	<?= anchor('payment/acadmic_traning_BA/course_buy','Pay',['class'=>'btn-danger btn '])?>
					            <?php }else{?>
					           		<?= anchor('registration','Register / Login',['class'=>'btn-danger btn btn-sm'])?>
					        	<?php } ?>
        		
        					</td>
						</tr>
						<tr>
							<td>MA (Masters of Arts)</td>
							<td><?php if($this->session->userdata('new_student_user_data')){ ?>
				            	<?= anchor('payment/acadmic_traning_MA/course_buy','Pay',['class'=>'btn-danger btn '])?>
					            <?php }else{?>
					           		<?= anchor('registration','Register / Login',['class'=>'btn-danger btn btn-sm'])?>
					        	<?php } ?>
        		
        					</td>
						</tr>
						<tr>
							<td>Bsc (Bachelor of Science)</td>
							<td><?php if($this->session->userdata('new_student_user_data')){ ?>
				            	<?= anchor('payment/acadmic_traning_BSC/course_buy','Pay',['class'=>'btn-danger btn '])?>
					            <?php }else{?>
					           		<?= anchor('registration','Register / Login',['class'=>'btn-danger btn btn-sm'])?>
					        	<?php } ?>
        		
        					</td>
						</tr>
						<tr>
							<td>Msc (Masters of Science)</td>
							<td><?php if($this->session->userdata('new_student_user_data')){ ?>
				            	<?= anchor('payment/acadmic_traning_MSC/course_buy','Pay',['class'=>'btn-danger btn '])?>
					            <?php }else{?>
					           		<?= anchor('registration','Register / Login',['class'=>'btn-danger btn btn-sm'])?>
					        	<?php } ?>
        		
        					</td>
						</tr>
						<tr>
							<td>BFS (Bachelor of Fine Arts)</td>
							<td><?php if($this->session->userdata('new_student_user_data')){ ?>
				            	<?= anchor('payment/acadmic_traning_BFS/course_buy','Pay',['class'=>'btn-danger btn '])?>
					            <?php }else{?>
					           		<?= anchor('registration','Register / Login',['class'=>'btn-danger btn btn-sm'])?>
					        	<?php } ?>
        		
        					</td>
						</tr>
						<tr>
							<td>Bcom (Bachelor of Commerce)</td>
							<td><?php if($this->session->userdata('new_student_user_data')){ ?>
				            	<?= anchor('payment/acadmic_traning_BCOM/course_buy','Pay',['class'=>'btn-danger btn '])?>
					            <?php }else{?>
					           		<?= anchor('registration','Register / Login',['class'=>'btn-danger btn btn-sm'])?>
					        	<?php } ?>
        		
        					</td>
						</tr>
						<tr>
							<td>Mcom (Masters of Commerce)</td>
							<td><?php if($this->session->userdata('new_student_user_data')){ ?>
				            	<?= anchor('payment/acadmic_traning_MCOM/course_buy','Pay',['class'=>'btn-danger btn '])?>
					            <?php }else{?>
					           		<?= anchor('registration','Register / Login',['class'=>'btn-danger btn btn-sm'])?>
					        	<?php } ?>
        		
        					</td>
						</tr>
						<tr>
							<td>BCA (Bachelor of computer Arts)</td>
							<td><?php if($this->session->userdata('new_student_user_data')){ ?>
				            	<?= anchor('payment/acadmic_traning_BCA/course_buy','Pay',['class'=>'btn-danger btn '])?>
					            <?php }else{?>
					           		<?= anchor('registration','Register / Login',['class'=>'btn-danger btn btn-sm'])?>
					        	<?php } ?>
        		
        					</td>
						</tr>
						<tr>
							<td>MCA (Masters of Computer Arts)</td>
							<td><?php if($this->session->userdata('new_student_user_data')){ ?>
				            	<?= anchor('payment/acadmic_traning_MCA/course_buy','Pay',['class'=>'btn-danger btn '])?>
					            <?php }else{?>
					           		<?= anchor('registration','Register / Login',['class'=>'btn-danger btn btn-sm'])?>
					        	<?php } ?>
        		
        					</td>
						</tr>
						<tr>
							<td>BTech (Bachelor of Technology)</td>
							<td><?php if($this->session->userdata('new_student_user_data')){ ?>
				            	<?= anchor('payment/acadmic_traning_BTECH/course_buy','Pay',['class'=>'btn-danger btn '])?>
					            <?php }else{?>
					           		<?= anchor('registration','Register / Login',['class'=>'btn-danger btn btn-sm'])?>
					        	<?php } ?>
        		
        					</td>
						</tr>
						<tr>
							<td>MTech (Masters of Technology)</td>
							<td><?php if($this->session->userdata('new_student_user_data')){ ?>
				            	<?= anchor('payment/acadmic_traning_MTECH/course_buy','Pay',['class'=>'btn-danger btn '])?>
					            <?php }else{?>
					           		<?= anchor('registration','Register / Login',['class'=>'btn-danger btn btn-sm'])?>
					        	<?php } ?>
        		
        					</td>
						</tr>
						<tr>
							<td>BBA (Bachelor of Business Administration)</td>
							<td><?php if($this->session->userdata('new_student_user_data')){ ?>
				            	<?= anchor('payment/acadmic_traning_BBA/course_buy','Pay',['class'=>'btn-danger btn '])?>
					            <?php }else{?>
					           		<?= anchor('registration','Register / Login',['class'=>'btn-danger btn btn-sm'])?>
					        	<?php } ?>
        		
        					</td>
						</tr>
						<tr>
							<td>MBA (Masters of Business Administration)</td>
							<td><?php if($this->session->userdata('new_student_user_data')){ ?>
				            	<?= anchor('payment/acadmic_traning_MBA/course_buy','Pay',['class'=>'btn-danger btn '])?>
					            <?php }else{?>
					           		<?= anchor('registration','Register / Login',['class'=>'btn-danger btn btn-sm'])?>
					        	<?php } ?>
        		
        					</td>
						</tr>
					</table>
                    
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
