<!DOCTYPE html>
<html>
<head>
	<title>Infops Examination Portal</title>
	<!-- Global Css using Helper -->
	<?php 
		infops_globalCss(); 
		$user_session_data = $this->session->userdata('new_student_user_data');

	?>
	<!--/ Global Css using Helper -->
	<?php
		$MERCHANT_KEY = "x1qBVy6y";
		$SALT = "gTpj7PRi2P";
		// Merchant Key and Salt as provided by Payu.

		//$PAYU_BASE_URL = "https://sandboxsecure.payu.in";   // For Sandbox Mode
		$PAYU_BASE_URL = "https://secure.payu.in";      // For Production Mode

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
<body class="inner-page" onload="submitPayuForm()">
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
		                    <h1 class="page-title">Fee Payment</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="<?= base_url('/')?>">Home</a>
		                        </li>
		                        <li>Payment</li>
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
            	<?php
            	//Fee Payble Amout
            	$fee = 387;
            	?>
            	 <?php if($info = $this->session->flashdata('payment_info')):?>
            	 	<h6 class="text-info"><?= $info; ?></h6>
			     <?php endif;?>
                <h3>Payment For <?= $catID; ?></h3>

				<form action="<?php echo $action; ?>" method="post" name="payuForm">
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
				          <td><input type="hidden" name="firstname" id="firstname" value="<?= $user_session_data['fname']." ".$user_session_data['lname']?>" /></td>
				        </tr>
				        <tr>
				          <td><!-- Email:  --></td>
				          <td><input type="hidden" name="email" id="email" value="<?= $user_session_data['email'];?>" /></td>
				          <td><!-- Phone:  --></td>
				          <td><input type="hidden" name="phone" value="<?= $user_session_data['phone'];?>" /></td>
				        </tr>
				        <tr>
				          <td><!-- Product Info:  --></td>
				          <td colspan="3"><textarea name="productinfo" style="display:none "><?= $catID ."Registration"; ?></textarea>
				          	<input type="hidden" name="udf1" value="<?= $enrollment_no; ?>">
				          </td>
				        </tr>
				        <tr>
				          <td><!-- Success URI:  --></td>
				          <td colspan="3"><input type="hidden" name="surl" value="<?= base_url('payment_success')?>" size="64" /></td>
				        </tr>
				        <tr>
				          <td><!-- Failure URI:  --></td>
				          <td colspan="3"><input type="hidden" name="furl" value="<?= base_url('payment_failure')?>" size="64" /></td>
				        </tr>

				        <tr>
				          <td colspan="3"><input type="hidden" name="service_provider" value="payu_paisa" size="64" /></td>
				        </tr>
				          <?php if(!$hash) { ?>
				            <td colspan="4"><input type="submit" value="Pay Now" class="btn btn-danger" /> <b><?= $fee; ?></b> INR as Fee  </td>
				          <?php } ?>
				        </tr>
				      </table>
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
