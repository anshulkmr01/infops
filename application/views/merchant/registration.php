<!DOCTYPE html>
<html>
<head>
	<title>Infops Merchant Registration</title>
	<!-- Global Css using Helper -->
	<?php 
			globalCss(); 
	?>
	<!--/ Global Css using Helper -->
</head>
<body>
	<!-- Navbar -->
		<?php $this->load->view('merchant/navbar');?>
	<!--/ Navbar -->
	<!-- Main Body -->
	<div class="container-fluid">
		<div class="row mt-5 pt-5">
			<div class="col-1"></div>
			<div class="col-sm-12 col-md-10 col-lg-7">
				<legend>Merchant Registration</legend>
				<form method="post" action="<?= base_url('merchant_registration')?>" class="border p-5">
				  <fieldset>
				    <div class="row">
					    <div class="col-md-6 col-sm-6 col-xs-12 ">
						    <div class="form-group">
						      <label for="name">Full Name*</label>
						      <input required type="text" name="name" class="form-control" id="name" value="<?= set_value('name'); ?>" aria-describedby="nameHelp" placeholder="Full Name">
						      <small id="nameHelp" class="form-text text-muted"><?= form_error('name'); ?></small>
						    </div>
						</div>
					    <div class="col-md-6 col-sm-6 col-xs-12 ">
						    <div class="form-group">
						      <label for="name">Email*</label>
						      <input required type="email" name="email" class="form-control" id="email" value="<?= set_value('email'); ?>" aria-describedby="emailHelp" placeholder="Email Address">
						      <small id="emailHelp" class="form-text text-muted"><?= form_error('email'); ?></small>
						    </div>
						</div>
				    	<div class="col-md-6 col-sm-6 col-xs-12 ">
						    <div class="form-group">
						      <label for="name">Phone Number*</label>
						      <input required type="number" name="phone" class="form-control" id="phone" value="<?= set_value('phone'); ?>" aria-describedby="phoneHelp" placeholder="Phone Number" pattern="[0-9]{10}">
						      <small id="phoneHelp" class="form-text text-muted"><?= form_error('phone'); ?></small>
						    </div>
						</div>
				    	<div class="col-md-6 col-sm-6 col-xs-12 ">
						    <div class="form-group">
						      <label for="name">Business Name*</label>
						      <input required type="text" name="business_name" class="form-control" id="business_name" value="<?= set_value('business_name'); ?>" aria-describedby="business_nameHelp" placeholder="Business Name">
						      <small id="business_nameHelp" class="form-text text-muted"><?= form_error('business_name'); ?></small>
						    </div>
						</div>
				    	<div class="col-md-6 col-sm-6 col-xs-12 ">
						    <div class="form-group">
						      <label for="name">Business Address*</label>
						      <textarea required name="business_address" class="form-control" placeholder="Business Address" id="business_address"><?= set_value('business_address'); ?></textarea>
						      <small id="business_addressHelp" class="form-text text-muted"><?= form_error('business_address'); ?></small>
						    </div>
						</div>
				    	<div class="col-md-6 col-sm-6 col-xs-12 ">
						    <div class="form-group">
						      <label for="name">Land Mark*</label>
						      <input required type="text" name="business_landmark" class="form-control" id="business_landmark" value="<?= set_value('business_landmark'); ?>" aria-describedby="" placeholder="Landmark">
						      <small id="" class="form-text text-muted"><?= form_error('business_landmark'); ?></small>
						    </div>
						</div>
				    	<div class="col-md-6 col-sm-6 col-xs-12 ">
						    <div class="form-group">
						      <label for="name">City*</label>
						      <input required type="text" name="business_city" class="form-control" id="business_city" value="<?= set_value('business_city'); ?>" aria-describedby="" placeholder="City">
						      <small id="" class="form-text text-muted"><?= form_error('business_city'); ?></small>
						    </div>
						</div>
				    	<div class="col-md-6 col-sm-6 col-xs-12 ">
						    <div class="form-group">
						      <label for="name">Pin Code*</label>
						      <input required type="number" name="business_pin" class="form-control" id="business_pin" value="<?= set_value('business_pin'); ?>" aria-describedby="" placeholder="PIN Code">
						      <small id="" class="form-text text-muted"><?= form_error('business_pin'); ?></small>
						    </div>
						</div>
				    	<div class="col-md-6 col-sm-6 col-xs-12 ">
						    <div class="form-group">
						      <label for="name">Date of Business Establish*</label>
						      <input required type="date" name="business_establish_date" class="form-control" id="business_establish_date" value="<?= set_value('business_establish_date'); ?>" aria-describedby="">
						      <small id="" class="form-text text-muted"><?= form_error('business_establish_date'); ?></small>
						    </div>
						</div>
				    	<div class="col-md-6 col-sm-6 col-xs-12 ">
						    <div class="form-group">
						      <label for="name">GST Number (Optional)</label>
						      <input type="text" name="GST_number" class="form-control" id="GST_number" value="<?= set_value('GST_number'); ?>" aria-describedby="" placeholder="GSTIN">
						      <small id="" class="form-text text-muted"><?= form_error('GST_number'); ?></small>
						    </div>
						</div>
				    	<div class="col-md-6 col-sm-6 col-xs-12 ">
						    <div class="form-group">
						      <label for="name">Business Nature*</label>
						      <select required type="text" name="business_nature" class="form-control">
						      	<option value="">Select from drop down</option>
						      	<option>ACCOUNTS SERVICE</option>
								<option>ADVERTISING SERVICES</option>
								<option>AIRLINE</option>
								<option>ART DELAERS</option>
								<option>ARTIFICIAL ACCESSORIES</option>
								<option>ARTIFICIAL LIMIB STORE</option>
								<option>AUTOMATIVE REPAIR SHOP</option>
								<option>AUTOMOBILE PARTS SHOP</option>
								<option>BABYSITTING SERVICES</option>
								<option>BAKERIES</option>
								<option>BANDS, ORCHESTRAS, ENTERTAINMENT</option>
								<option>BARBER SHOP</option>
								<option>BEAUTY AND HEALTH SHOP</option>
								<option>BICYCLE SHOP</option>
								<option>BIKE SHOWROOM</option>
								<option>BOAT DEALER</option>
								<option>BOOK STORE</option>
								<option>BOWLING ALLEYS</option>
								<option>CA SERVICE</option>
								<option>CAMRA STORE</option>
								<option>CAR RENTING</option>
								<option>CAR SHOWROOM</option>
								<option>CATERERS </option>
								<option>CHEMICALS PRODUCT</option>
								<option>CLOTH RENTING</option>
								<option>COMPUTER SERVICES</option>
								<option>COMPUTER SOFTWARE SHOP</option>
								<option>COSMETIC</option>
								<option>COURIER SHOP</option>
								<option>CYBER CAFÉ</option>
								<option>DAIRY PRODUCTS</option>
								<option>DATING OF ESCORT SERVICE </option>
								<option>DENTISTS </option>
								<option>DIGITAL GOODS MERCHANT</option>
								<option>DIRECT MARKTING</option>
								<option>DOCTOR</option>
								<option>DOCTOR EQUIPMENTS</option>
								<option>DOOR TO DOOR SALES</option>
								<option>DRY CLEAN</option>
								<option>DRY FRUITS</option>
								<option>E-CYCLE SHOP</option>
								<option>EDUCATION</option>
								<option>ELECTRONIC </option>
								<option>ELECTRONIC PART REPAIR SHOP</option>
								<option>EMPLOYMENT AGENCIES</option>
								<option>ENT DOCTOR</option>
								<option>E-SERVICES</option>
								<option>FAST FOOD RESTAURANTS</option>
								<option>FIREPEASE SHOP</option>
								<option>FLOOR COVERING STORES</option>
								<option>FLOWER SHOP</option>
								<option>FOOTWARE</option>
								<option>FRUIT SHOP</option>
								<option>FURNITURE SHOP</option>
								<option>FURRIERS AND FUR SHOP</option>
								<option>GARMENTS</option>
								<option>GENERAL CONTRACTORS</option>
								<option>GLASS PAPER / WALLPAPER SHOP</option>
								<option>GLASSWARE / CRYSTEL STORE</option>
								<option>GOVERMENT SERVICES</option>
								<option>GROCERY</option>
								<option>GUIDE SERVICES</option>
								<option>HARDWARE SHOP</option>
								<option>HOME APPLIANCES</option>
								<option>HOME DACOR </option>
								<option>HOSPITAL</option>
								<option>INSTITUTE</option>
								<option>INSURANCE</option>
								<option>LEATHER GOODS </option>
								<option>LIQURE, WINE, BEER SHOP</option>
								<option>LODGING,RESORT,HOTEL</option>
								<option>LOTTERIES</option>
								<option>LUGGAGE</option>
								<option>MASSAGE PARLORS</option>
								<option>MOBILE SHOP</option>
								<option>MONEY TRANSFER</option>
								<option>MOTION PICTURE </option>
								<option>MUSIC RECORD SERVICE</option>
								<option>OPTICALS</option>
								<option>PAINT SHOP</option>
								<option>PAPER SHOP</option>
								<option>PARKING LOT </option>
								<option>PAWN SHOP</option>
								<option>PAYMENT TRANSFER</option>
								<option>PET SHOP</option>
								<option>PETROL PUMP</option>
								<option>PHARMECY</option>
								<option>PHOTOCOPY SHOP</option>
								<option>PHOTOGRAPHIC STUDIO</option>
								<option>PLAY SHOP</option>
								<option>PLUMBING, HEATING EQUIPMENT </option>
								<option>RECORDS SHOP</option>
								<option>RESTAURANT</option>
								<option>RESTAURANT AND BAR</option>
								<option>SCHOOL COLLEGE</option>
								<option>SECOND HAND USED MERCHANDISE</option>
								<option>SHOE SHOP</option>
								<option>SOCIAL SERVICES</option>
								<option>SPORTS SHOP</option>
								<option>STAMP AND COIN STOP</option>
								<option>STATIONERY SHOP</option>
								<option>STORTING GOOD STORES</option>
								<option>TAX PAYMENT</option>
								<option>TAXICABS SERVICES</option>
								<option>TIRE SHOP</option>
								<option>TOURIST SERVICES</option>
								<option>TOY SHOP</option>
								<option>TRANSPORT</option>
								<option>TRAVEL AGENCIES</option>
								<option>TRUCK SHOP</option>
								<option>TYRES</option>
								<option>USED BIKE SHOWROOM</option>
								<option>USED CAR SHOWROOM</option>
								<option>UTILITIES - ELECTRIC, GAS, SANITARY, WATER</option>
								<option>VEGITABLE SHOP</option>
								<option>WATCH SERVICE</option>
								<option>WATCH SHOP</option>
								<option>KITCHEN APPLINCES</option>
								<option>GARAGE </option>
								<option>FINANCER</option>
								<option>GYM </option>
								<option>STORTS CLUB</option>
								<option>JEWELLERY SHOP</option>
								<option>BUILDER </option>
								<option>ART GALLERY</option>
								<option>Other</option>
						      </select>
						      <small id="" class="form-text text-muted"><?= form_error('business_nature'); ?></small>
						    </div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 ">
						    <div class="form-group">
						      <label for="name">Customer Type*</label>
						      <select required type="text" name="customer_type" class="form-control">
						      	<option value="">Select from drop down</option>
						      	<option>Individual</option>
						      	<option>Institutional</option>
						      </select>
						      <small id="" class="form-text text-muted"><?= form_error('customer_type'); ?></small>
						    </div>
						</div>
				    	<div class="col-md-6 col-sm-6 col-xs-12 ">
						    <div class="form-group">
						      <label for="name">Business Type*</label>
						      <input required type="text" name="business_type" class="form-control" id="business_type" value="<?= set_value('business_type'); ?>" aria-describedby="" placeholder="Business Type">
						      <small id="" class="form-text text-muted"><?= form_error('business_type'); ?></small>
						    </div>
						</div>
				    	<div class="col-md-6 col-sm-6 col-xs-12 ">
						    <div class="form-group">
						      <label for="name">Business URL (Optional)</label>
						      <input type="text" name="web_URL" class="form-control" id="web_URL" value="<?= set_value('web_URL'); ?>" aria-describedby="" placeholder="Website / Instagram / Facebook">
						      <small>Any Web URL</small>
						      <small id="" class="form-text text-muted"><?= form_error('web_URL'); ?></small>
						    </div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 ">
						    <div class="form-group">
						      <label for="name">Area Range*</label>
						      <select required name="area_range" class="form-control">
						      	<option value="">Select Area</option>
						      	<option>2 KM</option>
						      	<option>5 KM</option>
						      	<option>15 KM</option>
						      	<option>PEN India</option>
						      </select>
						    </div>
						</div>
				    </div>
				    <button type="submit" name="submit" class="btn btn-primary">Register</button>
				  </fieldset>
				</form>
			</div>
			<div class="col-sm-0 col-md-2 col-lg-3"></div>
			<div class="col-1"></div>
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
	<script type="text/javascript">
		function updateTextInput(val) {
          document.getElementById('range_val').innerHTML = val+" KM"; 
        }
	</script>
</html>
