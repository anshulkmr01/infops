<!DOCTYPE html>
<html>
<head>
	<title>Infops Examination Portal</title>
	<!-- Global Css using Helper -->
	<?php 
		infops_globalCss(); 
	?>
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
		                    <h1 class="page-title">IMAT Examination</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="<?= base_url('/');?>">Home</a>
		                        </li>
		                        <li>IMAT Examination</li>
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
                <div >
                  <div >
				<p>
               <h2>IMAT Examination</h2>
               <?= anchor('document_registration_form/imat','Apply now',['class'=>'btn btn-danger'])?>
                </p>
IMAT Examination:<br />
IMAT stands for Informative Assessment Test<br />
IMAT is not just an Exam it&rsquo;s a first Step for a candidate towards their goals.<br />
As you know in India there are 789+ Universities, and 37,203+ Colleges<br />
And the count of graduate students is 4-6 million every year.<br />
But due to limited contacts or the average RANKING of the college they are unable to provide a good opportunity to their students.<br />
IMAT is the Exam which can help students after their college to get their Dream Job with the smart package.<br />
<div style="text-align:center">
<p></p>
<p><b>4 Easy Steps between You and your Future</b></p>

<p>IMAT Test</p>
&darr;
<p>Get Score</p>
&darr;
<p>Profile sent to companies</p>
&darr;
<p>Get selected</p>
&nbsp;</div>
<p>Who can apply for IMAT?</p>
<ul>
<li>Final Year Student</li>
<li>Graduate Student</li>
<li>Post graduate Student</li>
</ul>

<p>Our contacts:</p>
We are working with some top most listed companies and some startups also.<br />
We are with 20+ Organizations.<br />
Let&rsquo;s talk about these Organizations:<br />
<p>We are with 3 IT companies, 5 Banks / Lading Institution, 8 Entertainment companies,
<br />
 4 Telecommunication companies, 6 Education Institutes and 18+ startup companies.</p>
<p>IMAT Focus:</p>
<ol>
<li>Conducting IMAT Exam</li>
<li>Provide good opportunity to our candidate.</li>
<li>Provide them High package as per their qualification.</li>
</ol>
<p></p>

<p>Once the students clear this IMAT we will recommend their profile to the companies with our reference code.</p>
<p>This Test scale will contain:</p>
<ol>
<li>English Test</li>
<li>Mathematic Test</li>
<li>Reasoning Test</li>
<li>Current Affair Test (at least 2 years)</li>
</ol>
<p>We will allow this IMAT Exam for 20,000 to 25,000 students only every year.</p>
<p>We work pan India level.</p>
<p>Benefits of IMAT:</p>
<ol>
<li>Candidate can enhance their Knowledge.</li>
<li>Candidate will get our reference to get a secure job.</li>
<li>Candidate will not have to worry about their future once they clear IMAT.</li>
<li>Candidate can increase their hiring chance by 87% with IMAT.</li>
<li>Because of our Limited Seats of IMAT we are able to provide a higher paying job to our Candidate</li>
<li>We refer our fresher candidate at E1 Band.</li>
</ol>
<p>If you want to know about Band in detail than <a href="<?= base_url('band')?>">click here </a>  </p>
<p>Now the fee of the IMAT will be 387 INR only (including tax).</p>

<p>Companies hiring process:</p>
<p>Nowadays companies are hiring candidate with 4 concepts</p>
<ol>
<li>Hiring in reference employee</li>
<li>Hiring from their consulting company</li>
<li>Hiring from IMAT</li>
<li>Hiring from job portals who can provide them some resumes of the candidate</li>
</ol>
<p>Let&rsquo;s suppose a company comes with 100 vacancies</p>
<p>10 are filled by references of the employees</p>
<p>15 are filled by consulting company</p>
<p>60 filled by IMAT</p>
<p>15 filled by job portals who provide them candidates resumes in bulk</p>
<p>Now how There is huge percentage of hiring by IMAT Because of</p>
<ol>
<li>IMAT Contacts</li>
<li>IMAT Examination</li>
<li>IMAT Quality Check</li>
<li>IMAT Score</li>
<li>IMAT References</li>
</ol>
<p>We have more than 87% placement of our IMAT candidate.</p>

 <?= anchor('document_registration_form/imat','Apply now',['class'=>'btn btn-danger'])?>
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
</html>
