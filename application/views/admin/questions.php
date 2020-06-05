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
							<div class="col-2"><a href="<?= base_url('fetch_question/maths')?>"><div class="w-100 mr-1 btn btn-success" <?php if($subject == 'maths' ) echo "style='background:#2c3e50'";?> >Maths</div></a></div>
							<div class="col-2"><a href="<?= base_url('fetch_question/english')?>"><div class="w-100 mr-1 btn btn-success" <?php if($subject == 'english' ) echo "style='background:#2c3e50'";?> >English</div></a></div>
							<div class="col-2"><a href="<?= base_url('fetch_question/crt_afr')?>"><div class="w-100 mr-1 btn btn-success" <?php if($subject == 'crt_afr' ) echo "style='background:#2c3e50'";?> >Current Affairs</div></a></div>
							<div class="col-2"><a href="<?= base_url('fetch_question/reasoning')?>"><div class="w-100 mr-1 btn btn-success" <?php if($subject == 'reasoning' ) echo "style='background:#2c3e50'";?> >Reasoning</div></a></div>
							<div class="col-2"><a href="<?= base_url('fetch_question/typing')?>"><div class="w-100 mr-1 btn btn-success" <?php if($subject == 'typing' ) echo "style='background:#2c3e50'";?> >Typing</div></a></div>
						</div>
						<hr>
						<legend class="text-uppercase"><?= $subject; ?></legend>
						<div class="mb-3 mt-3">
						<form>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add Question</button>
						</form>
						</div>
						<div class="table">
							<table class="table table-hover">
							  <thead>
							    <tr class="table-primary">
							      <th scope="col">S.No.</th>
							      <th scope="col">Question</th>
							      <th scope="col"></th>
							      <th scope="col"></th>
							      <th scope="col"></th>
							    </tr>
							  </thead>
							  <tbody>
							  	<?php if(isset($question_data)){
							  		$i = 0;
							  	foreach ($question_data as $key => $value) { $i++; ?>
							    <tr class="table-light">
							      <th scope="row"><?= $i; ?></th>
							      <td class="w-100"><?= $value['question'] ?>
							      <?php if($value['question_image']){?>
							      	<br>
							      	<br>
							      	<img src="<?= $value['question_image'] ?>" style="width: 300px; height: 140px">
							      <?php } ?></td>
							      <td><a data-toggle="modal"
							      data-id="<?= $value['ID'] ?>"
							      data-subject="<?= $value['subject'] ?>"
							      data-ques="<?= $value['question'] ?>"
							      data-option_a="<?= $value['option_a'] ?>"
							      data-option_b="<?= $value['option_b'] ?>"
							      data-option_c="<?= $value['option_c'] ?>"
							      data-option_d="<?= $value['option_d'] ?>"
							      data-correct_option="<?= $value['correct_option'] ?>"
							      data-duration="<?= $value['duration'] ?>"
							      href="#edit_question" class="edit_question"><span class="btn btn-info btn-sm">Edit</span></a></td>
							      <td><a
							      data-toggle="modal" 
							      data-ques="<?= $value['question'] ?>"
							      data-option_a="<?= $value['option_a'] ?>"
							      data-option_b="<?= $value['option_b'] ?>"
							      data-option_c="<?= $value['option_c'] ?>"
							      data-option_d="<?= $value['option_d'] ?>"
							      data-correct_option="<?= $value['correct_option'] ?>"
							      data-duration="<?= $value['duration'] ?>"
							      href="#view_question" class=" view_question"><span class="btn btn-primary btn-sm">View</span></td>
							      <td><a href="<?= base_url('delete_question/'.$value['ID'].'/'.$subject)?>"><span data-toggle="modal" class="btn btn-danger btn-sm delete">Delete</span></a></td>
							    </tr>
								<?php } } else { ?>
								<tr class="table-warning">
							      <th scope="row"></th>
							      <td>No Question Added Yet.</td>
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
		<!-- Add question modal -->
		<?php if($subject == 'typing'){?>
		<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Add Paragraph for typing test</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		       <form action="<?= base_url('save_question')?>" method="post">
				  <fieldset>
				    <div class="form-group">
				      <legend>Paragraph:</legend>
				      <textarea required name="question" class="form-control" rows="3"></textarea>
				    </div>
				  	<div class="form-group">
				  		<input type="hidden" name="subject" value="<?= $subject; ?>">
				  		<input type="time" required value="00:59" name="duration">
				  	</div>
				    <button type="submit" class="btn btn-primary">Save</button>
				  </fieldset>
				</form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>
		<?php } else{?>
		<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Add Question With A Correct Answer</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		       <form action="<?= base_url('save_question')?>" method="post" enctype="multipart/form-data">
				  <fieldset>
				    <div class="form-group">
				      <legend>Question:</legend>
				      <textarea required name="question" class="form-control" rows="3"></textarea>
				      
				      <small>Image file for question:</small>
				      <br><input type="file" name="question_image">
				    </div>
				  	<div class="form-group">
				  		<input type="hidden" name="subject" value="<?= $subject; ?>">
					    <div class="custom-control custom-radio">
					      <input type="radio" id="customRadio1" name="correct_option" value="a" checked class="custom-control-input">
					      <label class="custom-control-label" for="customRadio1">a)</label>
					      <textarea required class="form-control" name="option_a" rows="2"></textarea>
					    </div>
					    <div class="custom-control custom-radio">
					      <input type="radio" id="customRadio2" name="correct_option" value="b" class="custom-control-input">
					      <label class="custom-control-label" for="customRadio2">b)</label>
					      <textarea required class="form-control" name="option_b" rows="2"></textarea>
					    </div>
					    <div class="custom-control custom-radio">
					      <input type="radio" id="customRadio3" name="correct_option" value="c" class="custom-control-input">
					      <label class="custom-control-label" for="customRadio3">c)</label>
					      <textarea required class="form-control" name="option_c" rows="2"></textarea>
					    </div>
					    <div class="custom-control custom-radio">
					      <input type="radio" id="customRadio4" name="correct_option" value="d" class="custom-control-input">
					      <label class="custom-control-label" for="customRadio4">d)</label>
					      <textarea required class="form-control" name="option_d" rows="2"></textarea>
					    </div>
					    <br>
				  		<label>Select a correct answer*</label>
				  		<br>
				  		Question Duration: <input type="time" required value="00:59" name="duration">
				  	</div>
				    <button type="submit" class="btn btn-primary">Save</button>
				  </fieldset>
				</form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>
		<?php }?>
		<!-- /Add question madal -->
		<!-- View Question Modal -->
		<?php if($subject == 'typing'){?>
		<div class="modal fade bd-example-modal-lg" id="view_question" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">View Paragraph</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
				  <fieldset>
				    <div class="form-group">
				      <legend>Paragraph:</legend>
				      <div id="ques_view_div"></div>
				    </div>
				    <div>Time Duration: <span id="time_duration"></span></div>
				  </fieldset>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>
		<?php } else{?>
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
				      <div><img src="" alt="img"></div>
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
		<?php }?>
		<!--/ View Question Moal -->
		<!-- Edit Question Modal -->
		<?php if($subject == 'typing'){?>
		<div class="modal fade bd-example-modal-lg" id="edit_question" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Edit Paragraph</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		       <form action="<?= base_url('update_question')?>" method="post">
				  <fieldset>
				    <div class="form-group">
				      <legend>Paragraph:</legend>
				      <textarea required name="question" id="ques_textarea" class="form-control" rows="3"></textarea>
				    </div>
				  	<div class="form-group">
				  		<input type="hidden" name="ID" id="ques_id">
				  		<input type="hidden" name="subject" id="subject">
				  		<input type="time" required id="time_duration_input" name="duration">
				  	</div>
				    <button type="submit" class="btn btn-primary">Update</button>
				  </fieldset>
				</form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>
		<?php } else{?>
		<div class="modal fade bd-example-modal-lg" id="edit_question" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Edit Question</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		       <form action="<?= base_url('update_question')?>" method="post" enctype="multipart/form-data">
				  <fieldset>
				    <div class="form-group">
				      <legend>Question:</legend>
				      <textarea required name="question" id="ques_textarea" class="form-control" rows="3"></textarea>
				      <small>Image file for question:</small>
				      <br><input type="file" name="question_image">
				      <br><input type="checkbox" name="remove_image"> <span>Remove Image</span> 
				    </div>
				  	<div class="form-group">
				  		<input type="hidden" name="ID" id="ques_id">
				  		<input type="hidden" name="subject" id="subject">
					    <div class="custom-control custom-radio">
					      <input type="radio" id="customRadio_a" name="correct_option" value="a" class="custom-control-input">
					      <label class="custom-control-label" for="customRadio_a">a)</label>
					      <textarea required class="form-control" id="option_a_textarea" name="option_a" rows="2"></textarea>
					    </div>
					    <div class="custom-control custom-radio">
					      <input type="radio" id="customRadio_b" name="correct_option" value="b" class="custom-control-input">
					      <label class="custom-control-label" for="customRadio_b">b)</label>
					      <textarea required class="form-control" id="option_b_textarea" name="option_b" rows="2"></textarea>
					    </div>
					    <div class="custom-control custom-radio">
					      <input type="radio" id="customRadio_c" name="correct_option" value="c" class="custom-control-input">
					      <label class="custom-control-label" for="customRadio_c">c)</label>
					      <textarea required class="form-control" id="option_c_textarea" name="option_c" rows="2"></textarea>
					    </div>
					    <div class="custom-control custom-radio">
					      <input type="radio" id="customRadio_d" name="correct_option" value="d" class="custom-control-input">
					      <label class="custom-control-label" for="customRadio_d">d)</label>
					      <textarea required class="form-control" id="option_d_textarea" name="option_d" rows="2"></textarea>
					    </div>
					    <br>
				  		<label>Select a correct answer*</label>
				  		<br>
				  		Question Duration: <input type="time" required id="time_duration_input" name="duration"/>
				  	</div>
				    <button type="submit" class="btn btn-primary">Update</button>
				  </fieldset>
				</form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>
		<?php }?>
		<!--/ Edit Question Moal -->
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
