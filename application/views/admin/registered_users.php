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
					<h3>Registered Student List</h3>
					<div class="row mb-4 mt-4">
						<div class="col-sm-2">
							<a href="<?= base_url('registered_users/payment_done')?>" class="btn btn-success <?php if(isset($registered_users)) echo 'bg-primary'?>"><span>Enrolled Students</span></a>
						</div>
						<div class="col-sm-2">
							<a href="<?= base_url('registered_users/all')?>" class="btn btn-success <?php if(isset($students)) echo 'bg-primary'?>"><span>All Students</span></a>
						</div>
						<div class="col-sm-2">
							<a href="<?= base_url('registered_users/course_buy')?>" class="btn btn-success <?php if(isset($students)) echo 'bg-primary'?>"><span>Course Buyer</span></a>
						</div>
					</div>
					<?php if(isset($students)):?>
						<span class="text-danger mb-4">Deleting Student from All Students will delete Student from Enroll table too. </span>
					<?php endif;?>
					<?php if(isset($registered_users)):?>
					<table class="table table-hover">
						<thead>
							<tr class="table-primary">
								<th scope="col">S No.</th>
								<th scope="col">Enrollment</th>
								<th scope="col">Name</th>
								<th scope="col">Phone</th>
								<th scope="col">Email</th>
								<th scope="col">DOB</th>
								<th scope="col">Applied For</th>
								<th scope="col">Payment</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<?php
							// echo "<pre>";
							// print_r($registered_users);
						if($registered_users):
						$i = 0;
						?>
						<tbody>
							<?php
								foreach ($registered_users as $key => $value):
								$i++;
							?>
							<tr class="table-light">
								<td scope="row"><?= $i; ?></td>
								<td scope="row"><?= $value['enrollment_no']; ?></td>
								<td scope="row"><?= $value['fname']." ".$value['lname'] ?></td>
								<td scope="row"><?= $value['phone']; ?></td>
								<td scope="row"><?= $value['email']; ?></td>
								<td scope="row"><?= $value['DOB']; ?></td>
								<td scope="row"><?= $value['catID']; ?></td>
								<td scope="row">
									<a href="<?= base_url('/')?>view_student_data/<?= $value['enrollment_no'];?>" class="btn btn-primary btn-sm">View</a></td>
								<td scope="row">
									<a href="<?= base_url('/')?>remove_student_enroll/<?= $value['enrollment_no'];?>" class="btn btn-danger btn-sm delete">Delete</a></td>
							</tr>
							<?php
								endforeach;
							?>
						</tbody>
						<?php else: ?>
						<tfoot>
							<tr class="table-light">
								<td scope="row">0</td>
								<td scope="row">0</td>
								<td scope="row">0</td>
								<td scope="row">0</td>
								<td scope="row">0</td>
								<td scope="row">0</td>
								<td scope="row">0</td>
							</tr>
						</tfoot>
						<?php endif; ?>
					</table>
					<?php elseif(isset($students)):?>
					<table class="table table-hover">
						<thead>
							<tr class="table-primary">
								<th scope="col">S No.</th>
								<th scope="col">Name</th>
								<th scope="col">Phone</th>
								<th scope="col">Email</th>
								<th scope="col">DOB</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<?php
							// echo "<pre>";
							// print_r($registered_users);
						if($students):
						$i = 0;
						?>
						<tbody>
							<?php
								foreach ($students as $key => $value):
								$i++;
							?>
							<tr class="table-light">
								<td scope="row"><?= $i; ?></td>
								<td scope="row"><?= $value['fname']." ".$value['lname'] ?></td>
								<td scope="row"><?= $value['phone']; ?></td>
								<td scope="row"><?= $value['email']; ?></td>
								<td scope="row"><?= $value['DOB']; ?></td>
								<td scope="row">
									<a href="<?= base_url('/')?>remove_student_id/<?= $value['ID'];?>" class="btn btn-danger btn-sm delete">Delete</a></td>
							</tr>
							<?php
								endforeach;
							?>
						</tbody>
						<?php else: ?>
						<tfoot>
							<tr class="table-light">
								<td scope="row">0</td>
								<td scope="row">0</td>
								<td scope="row">0</td>
								<td scope="row">0</td>
								<td scope="row">0</td>
								<td scope="row">0</td>
							</tr>
						</tfoot>
						<?php endif; ?>
					</table>
					<?php elseif(isset($course_buyer)):?>
					<table class="table table-hover">
						<thead>
							<tr class="table-primary">
								<th scope="col">S No.</th>
								<th scope="col">Name</th>
								<th scope="col">Phone</th>
								<th scope="col">Email</th>
								<th scope="col">DOB</th>
								<th scope="col">Course Buy</th>
								<th scope="col">Txn ID</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<?php
							// echo "<pre>";
							// print_r($registered_users);
						if($course_buyer):
						$i = 0;
						?>
						<tbody>
							<?php
								foreach ($course_buyer as $key => $value):
								$i++;
							?>
							<tr class="table-light">
								<td scope="row"><?= $i; ?></td>
								<td scope="row"><?= $value['fname']." ".$value['lname'] ?></td>
								<td scope="row"><?= $value['phone']; ?></td>
								<td scope="row"><?= $value['email']; ?></td>
								<td scope="row"><?= $value['DOB']; ?></td>
								<td scope="row"><?= $value['product']; ?></td>
								<td scope="row"><?= $value['amount_recived']; ?></td>
								<td scope="row">
									<a href="<?= base_url('/')?>remove_course_buyer/<?= $value['s_no'];?>" class="btn btn-danger btn-sm delete">Delete</a></td>
							</tr>
							<?php
								endforeach;
							?>
						</tbody>
						<?php else: ?>
						<tfoot>
							<tr class="table-light">
								<td scope="row">0</td>
								<td scope="row">0</td>
								<td scope="row">0</td>
								<td scope="row">0</td>
								<td scope="row">0</td>
								<td scope="row">0</td>
								<td scope="row">0</td>
							</tr>
						</tfoot>
						<?php endif; ?>
					</table>

					<?php endif;?>
				</div>
			</div>
		<!-- /mainbody -->
		</div>
	<!-- footer -->
	<footer class="admin-footer">
		<?php include 'footer.php'?>
	<!--/ footer -->
	</footer>
</body>
	<?php 
			globalJs(); 
	?>
</html>
