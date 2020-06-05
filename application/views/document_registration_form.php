<!DOCTYPE html>
<html>
<head>
	<title>Infops Examination Portal</title>
	<!-- Global Css using Helper -->
	<?php 
		infops_globalCss();
		  $user_session_data = null;
		  $user_session_data = $this->session->userdata('new_student_user_data');
	?>

     <link href="<?= base_url('assets/infops/')?>css/style-admitcard.css" rel="stylesheet" type="text/css" />
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
		                    <h1 class="page-title">Upload Your Document</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="<?= base_url('/')?>">Home</a>
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
        <h1  style="text-align:center">Upload Your Document </h1>
        <div  class="course-desc">
        <div class="course-instructor">
           	<div class="row">
        	<h3 class="instructor-title">BASIC <span class="primary-color">INFORMATION</span></h3>
    		<div class="row info-list">
       		<div class="BoxD border- padding mar-bot">
			<div>
				<?= form_open_multipart('submit_user_document'); ?>
				<input type="hidden" value="<?= $catID; ?>" name="catID">
				<div>
				<table class="table table-bordered">
			 		<div >
			            <div>
			                                   
			                <div >
			                    <div>
			                        <h3 >
			                        <strong>Your Information</strong>
			                        </h3>
			                    </div>
			                    <div>
			                        <div class="card-body">
			                        	 <?php if($catID != 'freelancer'){?>
			                            <div class="row">                                      
											<div class="col-md-6 col-sm-12">
												<div class="form-group">
												<b>Please Select Your Education* <br /></b>
												<?php if($catID == 'imat') {?>
										          <input type="radio" onclick="ug();" class="" name="education" id="optionsRadios1" value="UF"> Under Graduation
										          | 
										      	<?php }?>
										          <input type="radio" onclick="graduation_function();" class="" name="education" id="optionsRadios2" value="G"> Graduate 
										          | <input type="radio" onclick="postgraduation_function();" class=""  checked name="education" id="optionsRadios3" value="PG"> Post Graduate <br>
										          <small>Specify your qualfication below</small>
										          <select name="course" required class="form-control">
<option value="">Select Course:</option>
<option <?php if(set_value('course') == "BCA") echo "selected";?> value="BCA" >BCA</option>
<option <?php if(set_value('course') == "BBA") echo "selected";?> value="BBA" >BBA</option>
<option <?php if(set_value('course') == "BA") echo "selected";?> value="BA" >BA</option>
<option <?php if(set_value('course') == "BCOM") echo "selected";?> value="BCOM" >BCOM</option>
<option <?php if(set_value('course') == "LLB") echo "selected";?> value="LLB" >LLB</option>
<option <?php if(set_value('course') == "B.TECH") echo "selected";?> value="B.TECH" >B.TECH</option>
<option <?php if(set_value('course') == "BSC") echo "selected";?> value="BSC" >BSC</option>
<option <?php if(set_value('course') == "B.ED") echo "selected";?> value="B.ED" >B.ED</option>
<option <?php if(set_value('course') == "MCA") echo "selected";?> value="MCA" >MCA</option>
<option <?php if(set_value('course') == "MBA") echo "selected";?> value="MBA" >MBA</option>
<option <?php if(set_value('course') == "MA") echo "selected";?> value="MA" >MA</option>
<option <?php if(set_value('course') == "MCOM") echo "selected";?> value="MCOM" >MCOM</option>
<option <?php if(set_value('course') == "LLM") echo "selected";?> value="LLM" >LLM</option>
<option <?php if(set_value('course') == "M.TECH") echo "selected";?> value="M.TECH" >M.TECH</option>
<option <?php if(set_value('course') == "MSC") echo "selected";?> value="MSC" >MSC</option>
<option <?php if(set_value('course') == "PHD") echo "selected";?> value="PHD" >PHD</option>
<option <?php if(set_value('course') == "DIPLOMA") echo "selected";?> value="DIPLOMA" >DIPLOMA</option>
<option <?php if(set_value('course') == "OTHER") echo "selected";?> value="OTHER" >OTHER</option>
										          </select>
									        	 </div>
									         </div>
								        </div>                
			                             <?php } else{ ?> 
			                             	<div class="row"> 
											<div class="col-md-6 col-sm-12">
												<div class="form-group">
													<label><b>Latest Education*</b></label><br>
										          <small>Specify your qualfication below</small>
													 <select name="course" required class="form-control">
<option value="">Select Education:</option>
<option <?php if(set_value('course') == "SCHOOLING") echo "selected";?> value="SCHOOLING" >SCHOOLING</option>
<option <?php if(set_value('course') == "BCA") echo "selected";?> value="BCA" >BCA</option>
<option <?php if(set_value('course') == "BBA") echo "selected";?> value="BBA" >BBA</option>
<option <?php if(set_value('course') == "BA") echo "selected";?> value="BA" >BA</option>
<option <?php if(set_value('course') == "BCOM") echo "selected";?> value="BCOM" >BCOM</option>
<option <?php if(set_value('course') == "LLB") echo "selected";?> value="LLB" >LLB</option>
<option <?php if(set_value('course') == "B.TECH") echo "selected";?> value="B.TECH" >B.TECH</option>
<option <?php if(set_value('course') == "BSC") echo "selected";?> value="BSC" >BSC</option>
<option <?php if(set_value('course') == "B.ED") echo "selected";?> value="B.ED" >B.ED</option>
<option <?php if(set_value('course') == "MCA") echo "selected";?> value="MCA" >MCA</option>
<option <?php if(set_value('course') == "MBA") echo "selected";?> value="MBA" >MBA</option>
<option <?php if(set_value('course') == "MA") echo "selected";?> value="MA" >MA</option>
<option <?php if(set_value('course') == "MCOM") echo "selected";?> value="MCOM" >MCOM</option>
<option <?php if(set_value('course') == "LLM") echo "selected";?> value="LLM" >LLM</option>
<option <?php if(set_value('course') == "M.TECH") echo "selected";?> value="M.TECH" >M.TECH</option>
<option <?php if(set_value('course') == "MSC") echo "selected";?> value="MSC" >MSC</option>
<option <?php if(set_value('course') == "PHD") echo "selected";?> value="PHD" >PHD</option>
<option <?php if(set_value('course') == "DIPLOMA") echo "selected";?> value="DIPLOMA" >DIPLOMA</option>
<option <?php if(set_value('course') == "OTHER") echo "selected";?> value="OTHER" >OTHER</option>
										          </select>
												</div>
											</div>
											</div>   
			                             <?php } ?>          
										<div class="row">                                      
											<div class="col-md-6 col-sm-12">
												<div class="form-group">
													<label>First Name*</label>
													<input required  name="fname" id="fname" value="<?php if($user_session_data) echo($user_session_data['fname'])?>" class="form-control" type="text">
													<?= form_error('fname'); ?>
												</div>
											</div>
											<div class="col-md-6 col-sm-12">
												<div class="form-group">
													<label>Last Name*</label>
													<input required  name="lname" id="lname"value="<?php if($user_session_data) echo($user_session_data['lname'])?>" class="form-control" type="text">
													<?= form_error('lname'); ?>
												</div>
											</div>
										</div>

			                            <div class="row">                                      
											<div class="col-md-6 col-sm-12">
												<div class="form-group">
													<label>Enter Father Name*</label>
													<input required  name="father_name" value="<?= set_value('father_name')?>" id="father_name" class="form-control" type="text">
													<?= form_error('father_name'); ?>
												</div>
											</div>
											<div class="col-md-6 col-sm-12">
												<div class="form-group">
													<label>Gender</label>
													<select name="gender" required id="gender" class="form-control">
		<option value="">Select Gender</option>
		<option <?php if(set_value('gender') == "male") echo "selected";?> value="male">Male</option>
		<option <?php if(set_value('gender') == "female") echo "selected";?> value="female">Female</option>
		<option <?php if(set_value('gender') == "other") echo "selected";?> value="other">Other</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6 col-sm-12">
												<div class="form-group">
													<label>Email*</label>
													<input required  name="email" value="<?php if($user_session_data) echo($user_session_data['email'])?>" id="email" class="form-control" type="email">
													<?= form_error('email'); ?>
												</div>
											</div>
											<div class="col-md-6 col-sm-12">
												<div class="form-group">
													<label>DOB</label>
			                                        <div>
												  <div >
												    <div >
												      <div class="form-group">
												        <div id="filterDate2">
												          
												          <!-- Datepicker as text field -->         
												          <div class="input-group date">
<input required  type="date" name="DOB" value="<?php if($user_session_data) echo($user_session_data['DOB'])?>" class="form-control">
													<?= form_error('DOB'); ?>
												            <div class="input-group-addon" >
												              <span class="glyphicon glyphicon-th"></span>
												            </div>
												          </div>
												        </div>    
												      </div>
												    </div>
												  </div>
												</div>
											  </div>
											</div>
										</div>
										
			                            <div class="row">
											<div class="col-md-6 col-sm-12">
												<div class="form-group">
													<label>Phone No*</label>
													<input required  name="phone"value="<?php if($user_session_data) echo($user_session_data['phone'])?>" id="phone" class="form-control" type="number">
													<?= form_error('phone'); ?>
												</div>
											</div>
											 <?php if($catID == 'imat'){?>
											<div class="col-md-6 col-sm-12">
												<div class="form-group">
													<label>Select Organization </label>
													<select required name="organization" id="DropDownList1" class="form-control">
														<option selected="selected" value="">Select an Organization</option>
														<option value="all">All</option>
														<option value="it">IT</option>
														<option value="finance">Finance</option>
														<option value="banking_institute">Banking / Leading Institute</option>
														<option value="entertainment ">Entertainment </option>
														<option value="telecommunication">Telecommunication</option>
													</select>
			                                    </div>
											</div>
										<?php } elseif($catID == 'freelancer'){ ?>
											<div class="col-md-6 col-sm-12">
												<div class="form-group">
													<label>Select Organization </label>
													<select required name="organization" id="DropDownList1" class="form-control">
														<option selected="selected" value="">Select an Organization</option>
														<option value="it">IT</option>
														<option value="entertainment ">Content Writer </option>
														<option value="telecommunication">Telecommunication</option>
													</select>
			                                    </div>
											</div>
										<?php }?>
										</div>	
			                            <div class="row">                                      
											<div class="col-md-6 col-sm-12">
												<div class="form-group">
													<label>Your Location</label>
													<input  required name="location" id="location" class="form-control" type="text">
													<?= form_error('location'); ?>
												</div>
											</div>
										</div>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
			    <?php if($catID != 'freelancer'){?>
			        <tr>
					  <td><b>Upload Your Photo* <br /><input required type="file" name="photo"></b></td>
					  <td><b>Upload Your ID Proof*: <br /></b> <input required type="file" name="identity_doc"></td>
					</tr>
					<tr>
					  <td><b>Upload Your 10th Certificate*<br /> </b><input required type="file" name="10th"></td>
					  <td><b>Upload Your 12th Certificate*</b> <br /> <input required type="file" name="12th"></td>
					</tr>
					<tr>
					  <td style="width:1600px">
					  	<div id="gr_td">
					  		<b>Graduate (Provisional certificate/ mark sheet) *:<br /> </b><input required type="file" id="gr" name="graduation">
					  	</div>
					  </td>
					  <td style="width:1600px">
					  	<div id="pg_td">
						  	<b>Post Graduate (Provisional certificate/ mark sheet) *:<br /> </b><input required type="file" id="pg" name="post_graduation">
					  	</div>
					  </td>
					</tr>
				<?php if($catID == 'imat'){?>
			       <tr>
					  <td style="width:1600px"><b>Please Upload Your Latest Resume*:<br /> </b><input required type="file" name="resume"> </td>
					  <td style="width:1600px"></td>
					</tr>
				<?php } ?>
				<?php } else{?>
			       <tr>
					  <td style="width:3200px; border: 1px solid #fff !important"></td>
					</tr>
				<?php } ?>
				</table>
	            </div>
				<div class="apply-button">
					<button>Submit</button>
				</div>
				<?= form_close(); ?>
            </div>
            </div>
			</div>
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
	<script type="text/javascript">
		var graduation = document.getElementById('gr');
		var postgraduation = document.getElementById('pg');
		var graduation_td = document.getElementById('gr_td');
		var postgraduation_td = document.getElementById('pg_td');

		function ug() {
			graduation_td.style.display = 'none';
			graduation.style.display = 'none';
			graduation.removeAttribute('required');
			graduation.setAttribute('disabled','disabled');

			postgraduation_td.style.display = 'none';
			postgraduation.style.display = 'none';
			postgraduation.removeAttribute('required');
			postgraduation.setAttribute('disabled','disabled');
		}

		function graduation_function() {

			graduation_td.style.removeProperty('display');
			graduation.style.display = 'block';
			graduation.setAttribute('required','required');
			graduation.removeAttribute('disabled');

			postgraduation_td.style.display = 'none';
			postgraduation.style.display = 'none';
			postgraduation.removeAttribute('required');
			postgraduation.setAttribute('disabled','disabled');
		}
		function postgraduation_function() {
			graduation_td.style.removeProperty('display');
			graduation.style.display = 'block';
			graduation.setAttribute('required','required');
			graduation.removeAttribute('disabled');

			postgraduation_td.style.removeProperty('display');
			postgraduation.style.display = 'block';
			postgraduation.setAttribute('required','required');
			postgraduation.removeAttribute('disabled');
		}
	</script>
</html>
