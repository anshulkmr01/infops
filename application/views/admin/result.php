<!DOCTYPE html>
<html>
<head>
	<title>Infops Examination</title>
	<!-- Global Css using Helper -->
	<?php 
			globalCss(); 
	?>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/admin-panel.css')?>">
	<!--/ Global Css using Helper -->
</head>
<body>
	<!-- Navbar -->
		<?php include 'navbar.php'?>
	<!--/ Navbar -->

		<div class="sub-body">
		<!-- Navbar -->
			<?php include 'sidebar.php'?>
		<!--/ Navbar -->

		<!-- mainbody -->
			<div class="cms-body">
				<div class="container">
					<div class="row">
						<div class="col-sm-5 alert-message">
							<?php if($success = $this->session->flashdata('success')):?>
						    	<div class="alert alert-warning">
						    		<?= $success; ?>
						    	</div>
						    <?php endif;?>

						    <?php if($error = $this->session->flashdata('error')):?>
						    	<div class="alert alert-danger">
						    		<?= $error; ?>
						    	</div>
						    <?php endif;?>
						</div>
						<div class="col-sm-7"></div>
					</div>
				</div>
				<div class="container">
					<div class="form-group mt-4">
						<div class="row text-center">
							<div class="col-2"><a href="<?= base_url('result/imat')?>"><div class="w-100 mr-1 btn btn-success" <?php if($catID == 'imat') echo "style='background:#2C3E50'";?>>IMAT</div></a></div>
							<div class="col-2"><a href="<?= base_url('result/freelancer')?>"><div class="w-100 mr-1 btn btn-success" <?php if($catID == 'freelancer') echo "style='background:#2C3E50'";?>>Freelancer</div></a></div>
							<div class="col-2"><a href="<?= base_url('result/latest_application')?>"><div class="w-100 mr-1 btn btn-success" <?php if($catID == 'latest_application') echo "style='background:#2C3E50'";?>>Latest Application</div></a></div>
						</div>
						<hr>
						<div class="table">
							<table class="table table-hover">
							  <thead>
							    <tr class="table-primary">
							      <th scope="col">S.No.</th>
							      <th scope="col">Full Name</th>
							      <th scope="col">Email</th>
							      <th scope="col">Phone</th>
							      <th scope="col">DOB</th>
							      <th scope="col">Enrollment</th>
							      <th scope="col">Result Option</th>
							    </tr>
							  </thead>
							  <tbody>
							  	<?php $i=0; if($cat_result){ foreach ($cat_result as $key => $value) { $i++; ?>
							    <tr class="table-light">
							      <th scope="row"><?= $i; ?></th>
							      <td><?= $value['fname']; echo " ". $value['lname']; ?></td>
							      <td><?= $value['email'];?></td>
							      <td><?= $value['phone'];?></td>
							      <td><?= $value['DOB'];?></td>
							      <td>111</td>
							      <td><a href="<?= base_url('student_result/'.$value['enrollment_no'].'')?>" class=" view_question"><span class="btn btn-primary btn-sm">View</span></td>
							    </tr>
								<?php }} else{?>
							    <tr class="table-warning">
							      <th scope="row"></th>
							      <td class="w-100">No Exam Done yet</td>
							      <td></td>
							      <td></td>
							      <td></td>
							    </tr>
								<?php } ?>
							  </tbody>
							</table> 
						</div>
					</div>
				</div>
			</div>
		<!-- /mainbody -->
		</div>
		<!-- View Question Modal -->
		<div class="modal fade bd-example-modal-lg" id="view_question" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">View Question</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		       <form action="<?= base_url('save_question')?>" method="post">
				  <fieldset>
				    <div class="form-group">
				      <legend>Question:</legend>
				      <div id="ques_view_div"></div>
				    </div>
				  	<div class="form-group">
					    <ol type="a">
					    	<li id="option_a_li"></li>
					    	<li id="option_b_li"></li>
					    	<li id="option_c_li"></li>
					    	<li id="option_d_li"></li>
					    </ol>
					    <label class="text-primary">Correct Answer is: Option <b id="correct_option_label"></b></label>
				  	</div>
				  	 <div>Time Duration: <span id="time_duration"></span></div>
				  </fieldset>
				</form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>
		<!--/ View Question Moal -->
	<!-- footer -->
	<footer class="admin-footer">
		<?php include 'footer.php'?>
	<!--/ footer -->
	</footer>
	
</body>
	<?php 
			globalJs(); 
	?>
<script type="text/javascript">
	
// Setting Value of Docnament in Modal view//
	$(document).on("click", ".view_question", function () {
     $("#ques_view_div").html($(this).data('ques'));
     $("#option_a_li").html($(this).data('option_a'));
     $("#option_b_li").html($(this).data('option_b'));
     $("#option_c_li").html($(this).data('option_c'));
     $("#option_d_li").html($(this).data('option_d'));
     $("#correct_option_label").html($(this).data('correct_option'));
     $("#time_duration").html($(this).data('duration'));
});

// Setting Value of Docnament in Modal for update//
	$(document).on("click", ".edit_question", function () {
     $("#ques_id").val($(this).data('id'));
     $("#ques_textarea").val($(this).data('ques'));
     $("#subject").val($(this).data('subject'));
     $("#option_a_textarea").val($(this).data('option_a'));
     $("#option_b_textarea").val($(this).data('option_b'));
     $("#option_c_textarea").val($(this).data('option_c'));
     $("#option_d_textarea").val($(this).data('option_d'));

     var correct_option = 'customRadio_'+$(this).data('correct_option');
     $("#"+correct_option).attr('checked','checked');

     $("#time_duration_input").val($(this).data('duration'));
});


</script>
</html>
