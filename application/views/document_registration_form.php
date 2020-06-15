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
										          <select name="course" id="pg_course" required class="form-control">
<option value="">Select Course for PG:</option>
<option>Master of Science (BOTANY).</option>
<option>Diploma in Medical (D.M).</option>
<option>Executive Fellow Program In Management (E.F.P.M).</option>
<option>Executive Management Programme (E.M.P).</option>
<option>Fellow Programme in Management (F.P.M).</option>
<option>FACULTY DEVELOPMENT PROGRAMME (FDP).</option>
<option>Fellow Programme in Management (FELLOWSHIP).</option>
<option>Master of Law (LL.M).</option>
<option>Master of Arts (M.A).</option>
<option>Master of Arts (M.A. (SWDS)).</option>
<option>Management (M.A.M).</option>
<option>Master of Arts in Personal Management (M.A.P.M).</option>
<option>Master of Arts (M.A.S.L.P).</option>
<option>Master of Audiology & Speech Language Pathology (M.A.S.L.P).</option>
<option>Master of Arts in Theatre & Television (M.A.T.T).</option>
<option>Master of Architecture (M.Arch).</option>
<option>Master of Business Administration (M.B.A).</option>
<option>Master of Business Economics (M.B.E).</option>
<option>Master of Business Laws (M.B.L).</option>
<option>Master of Business Management (M.B.M).</option>
<option>Master of Business Studies (M.B.S).</option>
<option>Master of Computer Applications (M.C.A).</option>
<option>Master of Communication & Journalism (M.C.J).</option>
<option>Master of Comparative Laws (M.C.L).</option>
<option>Master of Computer Management (M.C.M).</option>
<option>Master of Corporate Secretaryship (M.C.S).</option>
<option>Master of Chirurgical (M.Ch).</option>
<option>Master of Commerce (M.Com).</option>
<option>Doctor of Medicine (M.D).</option>
<option>Sports Medicine (M.D).</option>
<option>Management Development Programme (M.D.P).</option>
<option>Master of Dental Surgery (M.D.S).</option>
<option>Master of Design (M.Des).</option>
<option>Master of Engineering (M.E).</option>
<option>Master of Education (M.Ed).</option>
<option>Master of education in Artificial Intelligence (M.Ed AI).</option>
<option>Master of Fine Arts (M.F.A).</option>
<option>Master of Finance & Control (M.F.C).</option>
<option>Master of Film Management (M.F.M).</option>
<option>Master of Financial Services (M.F.S).</option>
<option>Master of Fishery Science (M.F.Sc).</option>
<option>Master of Fishery Sciences (M.F.Sc).</option>
<option>Master of Foreign Trade (M.F.T).</option>
<option>Master of Hospital Administration (M.H.A).</option>
<option>Master of Hospitality & Hotel Management (M.H.H.M).</option>
<option>Master of Hospitality Management (M.H.M).</option>
<option>Master of Human Resource Management (M.H.R.M).</option>
<option>Master Of Health Science (M.H.Sc).</option>
<option>Masters of Hospitality and Tourism Management (M.H.T.M).</option>
<option>Master of International Business (M.I.B).</option>
<option>Master of Information Management (M.I.M).</option>
<option>Master of Journalism (M.J).</option>
<option>Master of Laws (M.L).</option>
<option>Master of Library and Information Science (M.L.I.Sc).</option>
<option>Master of Labour Management (M.L.M).</option>
<option>Master of Library Science (M.L.Sc).</option>
<option>Master of Marketing Management (M.M.M).</option>
<option>Master of Management Program (M.M.P).</option>
<option>Master of Management Studies (M.M.S).</option>
<option>Master of Occupational Theraphy (M.O.T).</option>
<option>Master of Performing Arts (M.P.A).</option>
<option>Master of Psychiatric Epidemiology (M.P.E).</option>
<option>Master Of Physical Education (M.P.Ed).</option>
<option>Master of Public Health (M.P.H).</option>
<option>Masters Programme in International Business (M.P.I.B).</option>
<option>Master of Performance Management (M.P.M).</option>
<option>Diploma in Prosthetics & Orthotics (M.P.O).</option>
<option>Masters in Public Systems Management (M.P.S.M).</option>
<option>Master of Physiotheraphy (M.P.T).</option>
<option>Master of Pharmacy (M.Pharma).</option>
<option>Master of Philosophy (M.Phil).</option>
<option>Master of Rehabilitation Science (M.R.Sc).</option>
<option>M.S. in Library and Information Science (M.S).</option>
<option>Master of Science (M.S).</option>
<option>Master of Social Dynamics (M.S.D).</option>
<option>Masters Programme In Sports Physiotheraphy (M.S.P.T).</option>
<option>Master of Social Work (M.S.W).</option>
<option>Master of Science (M.Sc).</option>
<option>Master of Tourism Administrations (M.T.A).</option>
<option>Master of Tourism Management (M.T.M).</option>
<option>Master of Technology (M.Tech).</option>
<option>Master of Veterinary Science (M.V.Sc).</option>
<option>Doctor of Medicine Unani (Mahir e Tibb).</option>
<option>Master of Business Administration (MBA).</option>
<option>MANAGEMENT DEVELOPMENT PROGRAMEE (MDP).</option>
<option>Master of Industrial Relation and Personal Management (MIR and PM).</option>
<option>Master of Personnel Management (MPM).</option>
<option>Master of Personal Management and Industrial Relation (MPM and IR).</option>
<option>Post Graduate Diploma (P Diplomo).</option>
<option>Post Graduate Diploma (P.G.D.D.R.M).</option>
<option>Post Graduate Diploma (P.G.D.D.T.(MD:P&N)).</option>
<option>Post Graduate Diploma (P.G.D.E.I).</option>
<option>Post Graduate Diploma (P.G.D.R.P).</option>
<option>Post Graduate Diploma (P.G.D.S.E.(MR)).</option>
<option>Post Graduate Programme (P.G.P).</option>
<option>POST GRADUATE PROGRAME FOR EXECUTIVES (PGEXP).</option>
<option>POST-GRADUATE PROGRAMME IN MANAGEMENT (PGP.</option>
<option>POST GRADUATE PROGRAMME IN AGRIBUSINESS MANAGEMENT (PGP-ABM).</option>
<option>PUBLIC MANAGEMENT AND POLICY (PGP-PMP).</option>
<option>PGPX IN -VISIONARY LEADERSHIP IN MANUFACTURING (PGPEX-VLM).</option>
<option>POST GRADUATE PROGRAME IN  MANAGEMENT (PGPM).</option>
<option>MANAGEMENT FOR EXECUTIVES (PGPX).</option>
<option>Doctor of Philosophy (Ph. D).</option>
<option>Visual Information Processing (Visual Information Processing).</option>				

										          </select>
										          <select name="course" id="ug_course" required class="form-control" disabled="disabled" style="display: none;">
<option value="">Select Course:</option>
<option>Bachelor of Arts (B.A)</option>
<option>Bachelor of Arts Bachelor of Education (B.A. B.Ed).</option>
<option>Bachelor of Arts Bachelor of Law (B.A.B.L).</option>
<option>Bachelor of Arts Bachelor of Law (B.A.LLB).</option>
<option>Bachelor of Ayurvedic Medicine and Surgery (B.A.M.S).</option>
<option>Bachelor of Applied Sciences (B.A.S).</option>
<option>Bachelor of Arts (B.A.S.L.P).</option>
<option>Bachelor of Audiology and Speech Language Pathology (B.A.S.L.P).</option>
<option>Bachelor of Architecture (B.Arch).</option>
<option>Bachelor of Business Administration (B.B.A).</option>
<option>Bachelor of Business Administration Bachelor of Law (B.B.A LL.B).</option>
<option>Bachelor of Business Management (B.B.M).</option>
<option>Bachelor of Business Studies (B.B.S).</option>
<option>Bachelor of Computer Applications (B.C.A).</option>
<option>Bachelor of Communication Journalism (B.C.J).</option>
<option>Bachelor of Computer Science (B.C.S).</option>
<option>Bachelor of Commerce (B.Com).</option>
<option>Bachelor of Divinity (B.D).</option>
<option>Bachelor of Dental Surgery (B.D.S).</option>
<option>Basic Development Therapy (B.D.T).</option>
<option>Bachelor of Design (B.Des).</option>
<option>Bachelor of Engineering (B.E).</option>
<option>Bachelor of Electronic Science (B.E.S).</option>
<option>Bachelor of Education (B.Ed).</option>
<option>Bachelor of education in Artificial Intelligence (B.Ed AI).</option>
<option>Bachelor of Education (B.EdQ.</option>
<option>Bachelor of Elementary Education (B.EI.ED).</option>
<option>Bachelor of Elementary Education (B.EL.Ed).</option>
<option>Bachelor of Fine Arts (B.F.A).</option>
<option>Bachelor of Financial Investment and Analysis (B.F.I.A).</option>
<option>Bachelor of Fishery Sciences (B.F.S).</option>
<option>Bachelor of Fashion Technology (B.F.Tech).</option>
<option>Bachelor of General Law (B.G.L).</option>
<option>Behavioral Healthcare Education (B.H.Ed).</option>
<option>Bachelor of Hotel Management (B.H.M).</option>
<option>Bachelor Hotel Management and Catering Technology (B.H.M.C.T).</option>
<option>Bachelor of Hospitality and Tourism Management (B.H.T.M).</option>
<option>Bachelor of Information Systems Management (B.I.S.M).</option>
<option>Bachelor of Laws (B.L).</option>
<option>Bachelor of Library and Information Science (B.L.I.S).</option>
<option>Bachelor of Labour Management (B.L.M).</option>
<option>Bachelor Library Science (B.L.Sc).</option>
<option>Bachelor of Literature (B.Lit).</option>
<option>Bachelor of Medical Laboratory Technology (B.M.L.T).</option>
<option>Bachelor of Mental Retardation (B.M.R).</option>
<option>Bachelor of Medical Record Science (B.M.R.Sc).</option>
<option>Bachelor in Mobility Science (B.M.Sc).</option>
<option>Bachelor of Medical Technology (B.M.T).</option>
<option>Bachelor of Naturopathy and Yogic Sciences (B.N.Y.Sc).</option>
<option>Bachelor of Occupational Therapy (B.O.T).</option>
<option>Bachelor of Occupational Therapy (B.O.Th).</option>
<option>Bachelor of Optometry and Vision Science (B.Optom).</option>
<option>Bachelor of Physical Education (B.P.E).</option>
<option>Bachelor Of Physical Education (B.P.Ed).</option>
<option>Bachelor in Prosthetics and Orthotics (B.P.O).</option>
<option>Bachelor of Public Relations (B.P.R).</option>
<option>Bachelor of Physiotherapy (B.P.T).</option>
<option>Bachelor of Pharmacy (B.Pharma).</option>
<option>Bachelor of Rehabilitation Therapy (B.R.T).</option>
<option>Bachelor of Science (B.S).</option>
<option>Bachelor in Science Education (B.S.E).</option>
<option>Bachelor of Speech Language & Audiology (B.S.L.A).</option>
<option>Bachelor of Socio Legal Sciences Bachelor of Laws (B.S.L.LL.B).</option>
<option>Bachelor of Siddha Medical Sciences (B.S.M.S).</option>
<option>Bachelor Of Social Work (B.S.W).</option>
<option>Bachelor of Science (B.Sc).</option>
<option>Bachelor of Science Bachelor of Education (B.Sc.B.Ed).</option>
<option>Bachelor of Science in Education (B.Sc.Ed).</option>
<option>Bachelor of Tourism Administration (B.T.A).</option>
<option>Basic Training Certificate (B.T.C).</option>
<option>Bachelor of Technology (B.Tech).</option>
<option>Bachelors of Technology (B.Tech).</option>
<option>Bachelor of Unani Medicine & Surgery (B.U.M.S).</option>
<option>Bachelor of Veterinary Science (B.V.Sc).</option>
<option>Bachelor of Medicine (Bachelor of Medicine).</option>
<option>Bachelor of Journalism and Mass Communication (BJMC).</option>
<option>Bachelor of Law (LL.B).</option>
<option>Bachelor of Medicine Bachelor of Surgery (M.B.B.S).</option>
<option>Master of Journalism and Mass Communication (MJMC).</option>
<option>Doctor of Philosophy (Ph. D).</option>
<option>Clinical Psychology (Psy.D (Cl.Psy)).</option>
<option>Under Graduate Basic Training (U.G.B.T).</option>
<option>Under Graduate Training (U.G.T).</option>
<option>Under Graduate Teacher Training (U.G.T.T).</option>

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
<option>Bachelor of Arts (B.A)</option>
<option>Schooling</option>
<option>Bachelor of Arts Bachelor of Education (B.A. B.Ed).</option>
<option>Bachelor of Arts Bachelor of Law (B.A.B.L).</option>
<option>Bachelor of Arts Bachelor of Law (B.A.LLB).</option>
<option>Bachelor of Ayurvedic Medicine and Surgery (B.A.M.S).</option>
<option>Bachelor of Applied Sciences (B.A.S).</option>
<option>Bachelor of Arts (B.A.S.L.P).</option>
<option>Bachelor of Audiology and Speech Language Pathology (B.A.S.L.P).</option>
<option>Bachelor of Architecture (B.Arch).</option>
<option>Bachelor of Business Administration (B.B.A).</option>
<option>Bachelor of Business Administration Bachelor of Law (B.B.A LL.B).</option>
<option>Bachelor of Business Management (B.B.M).</option>
<option>Bachelor of Business Studies (B.B.S).</option>
<option>Bachelor of Computer Applications (B.C.A).</option>
<option>Bachelor of Communication Journalism (B.C.J).</option>
<option>Bachelor of Computer Science (B.C.S).</option>
<option>Bachelor of Commerce (B.Com).</option>
<option>Bachelor of Divinity (B.D).</option>
<option>Bachelor of Dental Surgery (B.D.S).</option>
<option>Basic Development Therapy (B.D.T).</option>
<option>Bachelor of Design (B.Des).</option>
<option>Bachelor of Engineering (B.E).</option>
<option>Bachelor of Electronic Science (B.E.S).</option>
<option>Bachelor of Education (B.Ed).</option>
<option>Bachelor of education in Artificial Intelligence (B.Ed AI).</option>
<option>Bachelor of Education (B.EdQ.</option>
<option>Bachelor of Elementary Education (B.EI.ED).</option>
<option>Bachelor of Elementary Education (B.EL.Ed).</option>
<option>Bachelor of Fine Arts (B.F.A).</option>
<option>Bachelor of Financial Investment and Analysis (B.F.I.A).</option>
<option>Bachelor of Fishery Sciences (B.F.S).</option>
<option>Bachelor of Fashion Technology (B.F.Tech).</option>
<option>Bachelor of General Law (B.G.L).</option>
<option>Behavioral Healthcare Education (B.H.Ed).</option>
<option>Bachelor of Hotel Management (B.H.M).</option>
<option>Bachelor Hotel Management and Catering Technology (B.H.M.C.T).</option>
<option>Bachelor of Hospitality and Tourism Management (B.H.T.M).</option>
<option>Bachelor of Information Systems Management (B.I.S.M).</option>
<option>Bachelor of Laws (B.L).</option>
<option>Bachelor of Library and Information Science (B.L.I.S).</option>
<option>Bachelor of Labour Management (B.L.M).</option>
<option>Bachelor Library Science (B.L.Sc).</option>
<option>Bachelor of Literature (B.Lit).</option>
<option>Bachelor of Medical Laboratory Technology (B.M.L.T).</option>
<option>Bachelor of Mental Retardation (B.M.R).</option>
<option>Bachelor of Medical Record Science (B.M.R.Sc).</option>
<option>Bachelor in Mobility Science (B.M.Sc).</option>
<option>Bachelor of Medical Technology (B.M.T).</option>
<option>Bachelor of Naturopathy and Yogic Sciences (B.N.Y.Sc).</option>
<option>Bachelor of Occupational Therapy (B.O.T).</option>
<option>Bachelor of Occupational Therapy (B.O.Th).</option>
<option>Bachelor of Optometry and Vision Science (B.Optom).</option>
<option>Bachelor of Physical Education (B.P.E).</option>
<option>Bachelor Of Physical Education (B.P.Ed).</option>
<option>Bachelor in Prosthetics and Orthotics (B.P.O).</option>
<option>Bachelor of Public Relations (B.P.R).</option>
<option>Bachelor of Physiotherapy (B.P.T).</option>
<option>Bachelor of Pharmacy (B.Pharma).</option>
<option>Bachelor of Rehabilitation Therapy (B.R.T).</option>
<option>Bachelor of Science (B.S).</option>
<option>Bachelor in Science Education (B.S.E).</option>
<option>Bachelor of Speech Language & Audiology (B.S.L.A).</option>
<option>Bachelor of Socio Legal Sciences Bachelor of Laws (B.S.L.LL.B).</option>
<option>Bachelor of Siddha Medical Sciences (B.S.M.S).</option>
<option>Bachelor Of Social Work (B.S.W).</option>
<option>Bachelor of Science (B.Sc).</option>
<option>Bachelor of Science Bachelor of Education (B.Sc.B.Ed).</option>
<option>Bachelor of Science in Education (B.Sc.Ed).</option>
<option>Bachelor of Tourism Administration (B.T.A).</option>
<option>Basic Training Certificate (B.T.C).</option>
<option>Bachelor of Technology (B.Tech).</option>
<option>Bachelors of Technology (B.Tech).</option>
<option>Bachelor of Unani Medicine & Surgery (B.U.M.S).</option>
<option>Bachelor of Veterinary Science (B.V.Sc).</option>
<option>Bachelor of Medicine (Bachelor of Medicine).</option>
<option>Bachelor of Journalism and Mass Communication (BJMC).</option>
<option>Bachelor of Law (LL.B).</option>
<option>Bachelor of Medicine Bachelor of Surgery (M.B.B.S).</option>
<option>Master of Journalism and Mass Communication (MJMC).</option>
<option>Doctor of Philosophy (Ph. D).</option>
<option>Clinical Psychology (Psy.D (Cl.Psy)).</option>
<option>Under Graduate Basic Training (U.G.B.T).</option>
<option>Under Graduate Training (U.G.T).</option>
<option>Under Graduate Teacher Training (U.G.T.T).</option>
<option>Bachelor of Technology (B.Tech).</option>
<option>Master of Science (BOTANY).</option>
<option>Diploma in Medical (D.M).</option>
<option>Executive Fellow Program In Management (E.F.P.M).</option>
<option>Executive Management Programme (E.M.P).</option>
<option>Fellow Programme in Management (F.P.M).</option>
<option>FACULTY DEVELOPMENT PROGRAMME (FDP).</option>
<option>Fellow Programme in Management (FELLOWSHIP).</option>
<option>Master of Law (LL.M).</option>
<option>Master of Arts (M.A).</option>
<option>Master of Arts (M.A. (SWDS)).</option>
<option>Management (M.A.M).</option>
<option>Master of Arts in Personal Management (M.A.P.M).</option>
<option>Master of Arts (M.A.S.L.P).</option>
<option>Master of Audiology & Speech Language Pathology (M.A.S.L.P).</option>
<option>Master of Arts in Theatre & Television (M.A.T.T).</option>
<option>Master of Architecture (M.Arch).</option>
<option>Master of Business Administration (M.B.A).</option>
<option>Master of Business Economics (M.B.E).</option>
<option>Master of Business Laws (M.B.L).</option>
<option>Master of Business Management (M.B.M).</option>
<option>Master of Business Studies (M.B.S).</option>
<option>Master of Computer Applications (M.C.A).</option>
<option>Master of Communication & Journalism (M.C.J).</option>
<option>Master of Comparative Laws (M.C.L).</option>
<option>Master of Computer Management (M.C.M).</option>
<option>Master of Corporate Secretaryship (M.C.S).</option>
<option>Master of Chirurgical (M.Ch).</option>
<option>Master of Commerce (M.Com).</option>
<option>Doctor of Medicine (M.D).</option>
<option>Sports Medicine (M.D).</option>
<option>Management Development Programme (M.D.P).</option>
<option>Master of Dental Surgery (M.D.S).</option>
<option>Master of Design (M.Des).</option>
<option>Master of Engineering (M.E).</option>
<option>Master of Education (M.Ed).</option>
<option>Master of education in Artificial Intelligence (M.Ed AI).</option>
<option>Master of Fine Arts (M.F.A).</option>
<option>Master of Finance & Control (M.F.C).</option>
<option>Master of Film Management (M.F.M).</option>
<option>Master of Financial Services (M.F.S).</option>
<option>Master of Fishery Science (M.F.Sc).</option>
<option>Master of Fishery Sciences (M.F.Sc).</option>
<option>Master of Foreign Trade (M.F.T).</option>
<option>Master of Hospital Administration (M.H.A).</option>
<option>Master of Hospitality & Hotel Management (M.H.H.M).</option>
<option>Master of Hospitality Management (M.H.M).</option>
<option>Master of Human Resource Management (M.H.R.M).</option>
<option>Master Of Health Science (M.H.Sc).</option>
<option>Masters of Hospitality and Tourism Management (M.H.T.M).</option>
<option>Master of International Business (M.I.B).</option>
<option>Master of Information Management (M.I.M).</option>
<option>Master of Journalism (M.J).</option>
<option>Master of Laws (M.L).</option>
<option>Master of Library and Information Science (M.L.I.Sc).</option>
<option>Master of Labour Management (M.L.M).</option>
<option>Master of Library Science (M.L.Sc).</option>
<option>Master of Marketing Management (M.M.M).</option>
<option>Master of Management Program (M.M.P).</option>
<option>Master of Management Studies (M.M.S).</option>
<option>Master of Occupational Theraphy (M.O.T).</option>
<option>Master of Performing Arts (M.P.A).</option>
<option>Master of Psychiatric Epidemiology (M.P.E).</option>
<option>Master Of Physical Education (M.P.Ed).</option>
<option>Master of Public Health (M.P.H).</option>
<option>Masters Programme in International Business (M.P.I.B).</option>
<option>Master of Performance Management (M.P.M).</option>
<option>Diploma in Prosthetics & Orthotics (M.P.O).</option>
<option>Masters in Public Systems Management (M.P.S.M).</option>
<option>Master of Physiotheraphy (M.P.T).</option>
<option>Master of Pharmacy (M.Pharma).</option>
<option>Master of Philosophy (M.Phil).</option>
<option>Master of Rehabilitation Science (M.R.Sc).</option>
<option>M.S. in Library and Information Science (M.S).</option>
<option>Master of Science (M.S).</option>
<option>Master of Social Dynamics (M.S.D).</option>
<option>Masters Programme In Sports Physiotheraphy (M.S.P.T).</option>
<option>Master of Social Work (M.S.W).</option>
<option>Master of Science (M.Sc).</option>
<option>Master of Tourism Administrations (M.T.A).</option>
<option>Master of Tourism Management (M.T.M).</option>
<option>Master of Technology (M.Tech).</option>
<option>Master of Veterinary Science (M.V.Sc).</option>
<option>Doctor of Medicine Unani (Mahir e Tibb).</option>
<option>Master of Business Administration (MBA).</option>
<option>MANAGEMENT DEVELOPMENT PROGRAMEE (MDP).</option>
<option>Master of Industrial Relation and Personal Management (MIR and PM).</option>
<option>Master of Personnel Management (MPM).</option>
<option>Master of Personal Management and Industrial Relation (MPM and IR).</option>
<option>Post Graduate Diploma (P Diplomo).</option>
<option>Post Graduate Diploma (P.G.D.D.R.M).</option>
<option>Post Graduate Diploma (P.G.D.D.T.(MD:P&N)).</option>
<option>Post Graduate Diploma (P.G.D.E.I).</option>
<option>Post Graduate Diploma (P.G.D.R.P).</option>
<option>Post Graduate Diploma (P.G.D.S.E.(MR)).</option>
<option>Post Graduate Programme (P.G.P).</option>
<option>POST GRADUATE PROGRAME FOR EXECUTIVES (PGEXP).</option>
<option>POST-GRADUATE PROGRAMME IN MANAGEMENT (PGP.</option>
<option>POST GRADUATE PROGRAMME IN AGRIBUSINESS MANAGEMENT (PGP-ABM).</option>
<option>PUBLIC MANAGEMENT AND POLICY (PGP-PMP).</option>
<option>PGPX IN -VISIONARY LEADERSHIP IN MANUFACTURING (PGPEX-VLM).</option>
<option>POST GRADUATE PROGRAME IN  MANAGEMENT (PGPM).</option>
<option>MANAGEMENT FOR EXECUTIVES (PGPX).</option>
<option>Doctor of Philosophy (Ph. D).</option>
<option>Visual Information Processing (Visual Information Processing).</option>
<option>Other</option>
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
													<span id="email_error" style="color:#dc3545!important"></span>
													<?= form_error('email'); ?>
													<?= form_error('valid_email')?>
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
													<span id="phone_error" style="color:#dc3545!important"></span>
													<?= form_error('phone'); ?>
													<?= form_error('phone1')?>
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
													<input  required name="location" value="<?= set_value('location')?>" id="location" class="form-control" type="text">
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
					<button class="form-sumbit-validation">Submit</button>
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
		var pg_course = document.getElementById('pg_course');
		var ug_course = document.getElementById('ug_course');


		function ug() {
			graduation_td.style.display = 'none';
			graduation.style.display = 'none';
			graduation.removeAttribute('required');
			graduation.setAttribute('disabled','disabled');

			postgraduation_td.style.display = 'none';
			postgraduation.style.display = 'none';
			postgraduation.removeAttribute('required');
			postgraduation.setAttribute('disabled','disabled');

			pg_course.setAttribute('disabled','disabled');
			pg_course.style.display = 'none';

			ug_course.removeAttribute('disabled','disabled');
			ug_course.style.display = 'block';


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

			pg_course.setAttribute('disabled','disabled');
			pg_course.style.display = 'none';

			ug_course.removeAttribute('disabled','disabled');
			ug_course.style.display = 'block';
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

			ug_course.setAttribute('disabled','disabled');
			ug_course.style.display = 'none';

			pg_course.removeAttribute('disabled','disabled');
			pg_course.style.display = 'block';
		}
	</script>
	<script type="text/javascript">
		//Confirm Delete //
		$(document).ready(function(){
		    $(".form-sumbit-validation").click(function(e){

			var phone = $("#phone").val();
			var email = $("#email").val();
			var domain = email.split('@')[1];


			if(domain != 'gmail.com' && domain != 'rediff.com' && domain != 'yahoo.com' && domain != 'linkedin.com' && domain != 'outook.com'&& domain != 'live.com'){
	             $("#email_error").html('Enter a Valid Email');
	              $("#email").focus(); 
	            e.preventDefault();
	            return false;
			}
			else{
				 $("#email_error").html(' ');
			}	

			if(phone.length != 10){
	            e.preventDefault();
	            $("#phone_error").html('Mobile Number must be 10 Digit');
	              $("#phone").focus(); 
	            return false;
			}
			else{
	            $("#phone_error").html(' ');
			}

		    });
		});

	</script>
</html>
