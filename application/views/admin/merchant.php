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
					<h3>Merchants</h3>
					<?php if (isset($merchant_data) && $merchant_data!=null): ?>
					<table class="table table-hover table-responsive">
						<thead>
							<tr class="table-primary">
								<th scope="col">S No.</th>
								<th scope="col">ID</th>
								<th scope="col">EMP_ID</th>
								<th scope="col">Full Name</th>
								<th scope="col">Phone</th>
								<th scope="col">Email Address</th>
								<th scope="col">Business Name</th>
								<th scope="col">Address</th>
								<th scope="col">Landmark</th>
								<th scope="col">City</th>
								<th scope="col">PIN Code</th>
								<th scope="col">Establish Date</th>
								<th scope="col">GSTIN</th>
								<th scope="col">Business Type</th>
								<th scope="col">Customer Type</th>
								<th scope="col">Business Nature</th>
								<th scope="col">Area Range</th>
								<th scope="col">Package</th>
								<th scope="col">Amount</th>
								<th scope="col">Member since</th>
								<th scope="col">Txn ID</th>
								<th scope="col" class="text-center" colspan="3">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i=0;
							 foreach ($merchant_data as $key => $value):
							 	$i++;
							  ?>
								<tr class="table-light">
								<td scope="col"><?= $i; ?></td>
								<td scope="col"><?= $value->ID; ?></td>
								<td scope="col"><?= $value->emp_ID; ?></td>
								<td scope="col"><?= $value->name; ?></td>
								<td scope="col"><?= $value->email; ?></td>
								<td scope="col"><?= $value->phone; ?></td>
								<td scope="col"><?= $value->business_name; ?></td>
								<td scope="col"><?= $value->business_address; ?></td>
								<td scope="col"><?= $value->business_landmark; ?></td>
								<td scope="col"><?= $value->business_city; ?></td>
								<td scope="col"><?= $value->business_pin; ?></td>
								<td scope="col"><?= date('d/m/Y',strtotime($value->business_establish_date)); ?></td>
								<td scope="col"><?= $value->GST_number; ?></td>
								<td scope="col"><?= $value->business_type; ?></td>
								<td scope="col"><?= $value->customer_type; ?></td>
								<td scope="col"><?= $value->business_nature; ?></td>
								<td scope="col"><?= $value->area_range; ?></td>
								<td scope="col"><?= $value->package; ?></td>
								<td scope="col"  <?php if($value->amount == 0) echo('style="background:#ff7d7d"'); ?>><?= $value->amount; ?></td>
								<td scope="col"><?= date('d/m/Y', strtotime($value->package_start)); ?></td>
								<td scope="col"><?= $value->txnid; ?></td>
								<td scope="col">
									<a href="#" data-toggle="modal" data-target="#exampleModal" class="btn force_active btn-primary" data-id="<?= $value->ID?>">Activate</a>
								</td>
								<td scope="col">
									<a href="<?= base_url('view_merchent/'.$value->ID.'')?>" class="btn btn-primary">View</a>
								</td>
								<td scope="col">
									<a href="<?= base_url('delete_merchent/'.$value->ID.'')?>" class="btn-danger delete btn btn-sm">Delete</a>
								</td>
							</tr>
							<?php endforeach ?>
						</tbody>
					</table>
					<?php else: ?>
						<label>No Merchent Register yet...</label>
					<?php endif ?>
				</div>

			</div>
		<!-- /mainbody -->
		</div>
	<!-- footer -->
	<footer class="admin-footer">
		<?php include 'footer.php'?>
	<!--/ footer -->
	</footer>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Force Merchant Active</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <form action="<?= base_url('force_update_payment')?>" method="post">
	      <div class="modal-body">
		    <div class="form-group">
		      <input type="number" required="required" class="form-control" name="amount" placeholder="Amount">
		    </div>
		    <div class="form-group">
		      <input type="text" required="required" class="form-control" name="txnid" placeholder="Txn ID">
		    </div>
	      	<input type="hidden" name="ID" required="required" id="merchant_ID">
	      	<div class="form-group">
				<select name="package" required="required" class="form-control">
				<option value="">Select</option>
				<option value="silver">Silver</option>
				<option value="gold">Gold</option>
				<option value="diamond">Diamond</option>
				<option value="platinum">Platinum</option>
				</select>
	      	</div>
	      </div>
	      <div class="modal-footer">
	        <button type="submit" class="btn btn-primary">Update</button>
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
      	</form>
	    </div>
	  </div>
	</div>
</body>
	<?php 
			globalJs(); 
	?>
	<script type="text/javascript">
	// Setting Value of Docnament in Modal for update//
		$(document).on("click", ".force_active", function () {
	     var ID = $(this).data('id');
	     $("#merchant_ID").val(ID);;
	});
	</script>
</html>
