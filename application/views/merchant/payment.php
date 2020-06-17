<!DOCTYPE html>
<html>
<head>
	<title>Infops Merchant Registration</title>
	<!-- Global Css using Helper -->
	<?php 
			globalCss(); 
	?>
	<!--/ Global Css using Helper -->
	<?php
		$MERCHANT_KEY = "x1qBVy6y";
		$SALT = "gTpj7PRi2P";
		// Merchant Key and Salt as provided by Payu.

		$PAYU_BASE_URL = "https://sandboxsecure.payu.in";   // For Sandbox Mode
		//$PAYU_BASE_URL = "https://secure.payu.in";      // For Production Mode

		$action = '';

		$posted = array();
		if(!empty($_POST)) {
		    //print_r($_POST);
		  foreach($_POST as $key => $value) {    
		    $posted[$key] = $value; 
		  
		  }
		}

		$formError = 0;

		if(empty($posted['txnid'])) {
		  // Generate random transaction id
		  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
		} else {
		  $txnid = $posted['txnid'];
		}
		$hash = '';
		// Hash Sequence
		$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
		if(empty($posted['hash']) && sizeof($posted) > 0) {
		  if(
		          empty($posted['key'])
		          || empty($posted['txnid'])
		          || empty($posted['amount'])
		          || empty($posted['firstname'])
		          || empty($posted['email'])
		          || empty($posted['phone'])
		          || empty($posted['productinfo'])
		          || empty($posted['surl'])
		          || empty($posted['furl'])
		      || empty($posted['service_provider'])
		  ) {
		    $formError = 1;
		  } else {
		    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
		  $hashVarsSeq = explode('|', $hashSequence);
		    $hash_string = '';  
		  foreach($hashVarsSeq as $hash_var) {
		      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
		      $hash_string .= '|';
		    }

		    $hash_string .= $SALT;


		    $hash = strtolower(hash('sha512', $hash_string));
		    $action = $PAYU_BASE_URL . '/_payment';
		  }
		} elseif(!empty($posted['hash'])) {
		  $hash = $posted['hash'];
		  $action = $PAYU_BASE_URL . '/_payment';
		}

	?>
<script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
</script>
</head>
  
<body onload="submitPayuForm()">
	<!-- Navbar -->
		<?php $this->load->view('merchant/navbar');?>
	<!--/ Navbar -->
	<!-- Main Body -->
	<div class="container-fluid" style="min-height: 400px;">
		<div class="row mt-5">
			<div class="col-1 pt-5"></div>
			<div class="col-sm-5 col-md-5 col-lg-4 pt-5">
				<?php
            	//Fee Payble Amout
            	$fee = 387;
            	?>
            	<legend>Select Package & pay</legend>
				<div class="form-group">
				  <label>Merchant Details:-</label><br>
				  <label for=""><b>Name: </b><?= $merchant_data['name'];?></label><br>
				  <label for=""><b>Email:</b> <?= $merchant_data['email'];?></label><br>
				  <label for=""><b>Phone:</b> <?= $merchant_data['phone'];?></label><br><br>
				  <label for="">Select Your Advertisement Package:</label>
				</div>
            	<form action="<?php echo $action; ?>" method="post" name="payuForm">
            	 <select name="productinfo" class="form-control">
				  	<option <?php if(isset($_POST['productinfo']) && $_POST['productinfo'] == 'Silver Package') echo 'selected' ?> value="Silver Package">Silver</option>
				  	<option <?php if(isset($_POST['productinfo']) && $_POST['productinfo'] == 'Gold Package') echo 'selected' ?> value="Gold Package">Gold</option>
				  	<option <?php if(isset($_POST['productinfo']) && $_POST['productinfo'] == 'Dimond Package') echo 'selected' ?> value="Dimond Package">Dimond</option>
				  	<option <?php if(isset($_POST['productinfo']) && $_POST['productinfo'] == 'Platinum Package') echo 'selected' ?> value="Platinum Package">Platinum</option>
				  </select>

				      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
				      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
				      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
				      <table>
				        <tr>
				          <!-- <td><b>Mandatory Parameters</b></td> -->
				        </tr>
				        <tr>
				          <td><!-- Amount:  --></td>
				          <td><input type="hidden" name="amount" value="<?= $fee; ?>" /></td>
				          <td><!-- First Name:  --></td>
				          <td><input type="hidden" name="firstname" id="firstname" value="<?= $merchant_data['name']?>" /></td>
				        </tr>
				        <tr>
				          <td><!-- Email:  --></td>
				          <td><input type="hidden" name="email" id="email" value="<?= $merchant_data['email']?>" /></td>
				          <td><!-- Phone:  --></td>
				          <td><input type="hidden" name="phone" value="<?= $merchant_data['phone']?>" /></td>
				        </tr>
				        <tr>
				          <td><!-- Product Info:  --></td>
				          <td colspan="3">
				          	<input type="hidden" name="udf1" value="<?= $merchant_data['ID']?>">
				          </td>
				        </tr>
				        <tr>
				          <td><!-- Success URI:  --></td>
				          <td colspan="3"><input type="hidden" name="surl" value="<?= base_url('merchant_payment_success')?>" size="64" /></td>
				        </tr>
				        <tr>
				          <td><!-- Failure URI:  --></td>
				          <td colspan="3"><input type="hidden" name="furl" value="<?= base_url('merchant_payment_failure')?>" size="64" /></td>
				        </tr>

				        <tr>
				          <td colspan="3"><input type="hidden" name="service_provider" value="payu_paisa" size="64" /></td>
				        </tr>
				          <?php if(!$hash) { ?>
				            <td colspan="4"><input type="submit" value="Pay Now" class="btn btn-primary" /> <b><?= $fee; ?></b> INR as Fee  </td>
				          <?php } ?>
				        </tr>
				      </table>
				</form>
			</div>
			<div class="col-sm-1 col-md-1 col-lg-3 pt-5"></div>
			<div class="col-sm-5 col-md-5 col-lg-4 pt-5">
				<legend>Package Detail</legend>
				<table class="table">
					<thead>
					<tr>
						<th>Pakage</th>
						<th>Start Date</th>
						<th>Expire Date</th>
					</tr>
					<tbody>
						<tr>
							<td>s</td>
							<td>s</td>
							<td>s</td>
						</tr>
					</tbody>
					</thead>
				</table>
			</div>
		</div>
	</div>
	<!--/ Main Body -->
	<!-- footer -->
	<footer class="page-footer font-small text-center pt-5" >
		<?php $this->load->view('merchant/footer');?>
	</footer>
	<!-- /footer -->

</body>
	<?php 
			globalJs(); 
	?>
</html>
