<?php

	function globalCss()
	{
		?>
		<?= link_tag("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css")?>
		<?= link_tag("assets/css/bootswatch/bootstrap.min.css")?>
		<?= link_tag("assets/css/custom-css.css")?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- FontAwsome Icons -->
		<link href="https://fonts.googleapis.com/css2?family=Raleway&family=Tangerine&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<link rel="shortcut icon" href="<?= base_url('assets/img/logo.png')?>">
		<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
		<?php
	}

	function globalJs()
	{
		?>
		
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		  
		<script
			type="text/javascript"
			src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<script 
			type="text/javascript"
			src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
		<script 
			type="text/javascript"
			src="<?= base_url("assets/js/custom-js.js")?>"></script>
		<script src="<?= base_url('assets/js/table-sorter.js')?>"></script>

		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<?php
	}

	//Infops Website
	function infops_globalCss()
	{
		?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<!-- FontAwsome Icons -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<?= link_tag("assets/css/custom-css.css")?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="<?= base_url('assets/infops/')?>apple-touch-icon.png">
        <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/infops/')?>images/fav.png">
        <!-- bootstrap v4 css -->
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/infops/')?>css/bootstrap.min.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/infops/')?>css/font-awesome.min.css">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/infops/')?>css/animate.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/infops/')?>css/owl.carousel.css">
		<!-- slick css -->
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/infops/')?>css/slick.css">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/infops/')?>css/magnific-popup.css">
		<!-- Offcanvas CSS -->
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/infops/')?>css/off-canvas.css">
		<!-- flaticon css  -->
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/infops/')?>fonts/flaticon.css">
		<!-- flaticon2 css  -->
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/infops/')?>fonts/fonts2/flaticon.css">
        <!-- rsmenu CSS -->
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/infops/')?>css/rsmenu-main.css">
        <!-- rsmenu transitions CSS -->
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/infops/')?>css/rsmenu-transitions.css">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/infops/')?>style.css">
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/infops/')?>css/responsive.css">
		<?php
	}

	//Infops_website
	function infops_globalJs()
	{
		?>
			 <!-- modernizr js -->
        <script src="<?= base_url('assets/infops/')?>js/modernizr-2.8.3.min.js"></script>
        <!-- jquery latest version -->
        <script src="<?= base_url('assets/infops/')?>js/jquery.min.js"></script>
        <!-- bootstrap js -->
        <script src="<?= base_url('assets/infops/')?>js/bootstrap.min.js"></script>
        <!-- owl.carousel js -->
        <script src="<?= base_url('assets/infops/')?>js/owl.carousel.min.js"></script>
		<!-- slick.min js -->
        <script src="<?= base_url('assets/infops/')?>js/slick.min.js"></script>
        <!-- isotope.pkgd.min js -->
        <script src="<?= base_url('assets/infops/')?>js/isotope.pkgd.min.js"></script>
        <!-- imagesloaded.pkgd.min js -->
        <script src="<?= base_url('assets/infops/')?>js/imagesloaded.pkgd.min.js"></script>
        <!-- wow js -->
        <script src="<?= base_url('assets/infops/')?>js/wow.min.js"></script>
        <!-- counter top js -->
        <script src="<?= base_url('assets/infops/')?>js/waypoints.min.js"></script>
        <script src="<?= base_url('assets/infops/')?>js/jquery.counterup.min.js"></script>
        <!-- magnific popup -->
        <script src="<?= base_url('assets/infops/')?>js/jquery.magnific-popup.min.js"></script>
        <!-- rsmenu js -->
        <script src="<?= base_url('assets/infops/')?>js/rsmenu-main.js"></script>
        <!-- plugins js -->
        <script src="<?= base_url('assets/infops/')?>js/plugins.js"></script>
		 <!-- main js -->
        <script src="<?= base_url('assets/infops/')?>js/main.js"></script>

		<?php
	}
?>