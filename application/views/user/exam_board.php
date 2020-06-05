<!DOCTYPE html>
<html>
<head>
	<title>Infops Examination Portal</title>
	<!-- Global Css using Helper -->
	<?php 
			globalCss(); 
	?>
	<!--/ Global Css using Helper -->
</head>
<style type="text/css">
	
body{
	-webkit-user-select: none;
	-moz-user-select: -moz-none;
	-ms-user-select: none;
	user-select: none;
}

</style>
<body onkeydown="return (event.keyCode != 116)">
	<!-- Navbar -->
		<?php $this->load->view('admin/navbar');?>
	<!--/ Navbar -->
	<!-- Main Body -->
	<div class="container-fluid">
		<div class="container mt-5" style="min-height: 400px;">
		<div class="row">
			<div class="col-1"></div>
			<div class="col-9">
				<?php
					if($question_data){
					foreach ($question_data as $key => $value) { ?>
				<div class="question-container">
					<?php
						$active_subject = "";
						$time_duration = time_to_seconds($value['duration']);
						if($value['subject'] == 'reasoning'){ $active_subject = "Reasoning";}
						if($value['subject'] == 'crt_afr'){ $active_subject = "Current Affairs";}
						if($value['subject'] == 'maths'){ $active_subject = "Maths";}
						if($value['subject'] == 'english'){ $active_subject = "English";}
						if($value['subject'] == 'typing'){ $active_subject = "Typing Test";}
						 ?>
					<h5><?= $active_subject ?></h5>
					<legend>Question no : <?= $value['s_no']?></legend>
					<?php if($value['subject'] == 'typing'){ ?>
						<h5>Paragraph:</h5>
						<br>
						<p id="msg">A Paragraph will be appeared here once you click on start button</p>
					<?php } else{?>
					<p class=""><?= $value['question']?></p>
					<p><img src="<?= $value['question_image']?>" style="width:500px;"></p>
					<?php }?>
					<hr>
				</div>
				<div class="option_container mt-5">
					<?php if($value['subject'] != 'typing'){ ?>
					<h6>Options:</h6>
					<?php }?>
					<form action="<?= base_url('submit_student_answer')?>" method="post" name="question_form">
					<?php if($value['subject'] != 'typing') { ?>
					<div class="form-group">
				  		<input type="hidden" name="question_ID" value=" <?= $value['ID']?>">
					    <div class="custom-control custom-radio">
					      <input type="radio" id="customRadio1" name="student_answer" value="a" class="custom-control-input">
					      <label class="custom-control-label" for="customRadio1"><span>a)</span> <?= $value['option_a']?></label>
					    </div>
					    <div class="custom-control custom-radio">
					      <input type="radio" id="customRadio2" name="student_answer" value="b" class="custom-control-input">
					      <label class="custom-control-label" for="customRadio2"><span>b)</span> <?= $value['option_b']?></label>
					    </div>
					    <div class="custom-control custom-radio">
					      <input type="radio" id="customRadio3" name="student_answer" value="c" class="custom-control-input">
					      <label class="custom-control-label" for="customRadio3"><span>c)</span> <?= $value['option_c']?></label>
					    </div>
					    <div class="custom-control custom-radio">
					      <input type="radio" id="customRadio4" name="student_answer" value="d" class="custom-control-input">
					      <label class="custom-control-label" for="customRadio4"><span>d)</span> <?= $value['option_d']?></label>
					    </div>
					    <div class="custom-control custom-radio" style="display: none;">
					      <input type="radio" id="customRadio_none" name="student_answer" value="none" checked class="custom-control-input">
					      <label class="custom-control-label" for="customRadio_none"><span></span> none</label>
					    </div>
					    <br>
				  		<label>Select an Option as your answer</label>
				  	</div>
				  	<button type="submit" class="btn btn-primary">Submit</button>
				  	<?php } else{ ?>
				  	<div class="form-group">
				  		
						<input type="hidden" name="is_typing_test" value="1">
				  		<input type="hidden" name="question_ID" value=" <?= $value['ID']?>">
						<input type="hidden" name="correct_words" id="correct">
						<input type="hidden" name="error_words" id="error">
						<input type="hidden" name="typing_speed" id="type_speed">
						<input type="hidden" name="ques_total_words" id="total_words">
					    <div class="">
					   		<textarea disabled="true" name="student_typing" id="mywords" placeholder="Click on Start Button and type here from above paragraph." class="form-control" rows="6" spellcheck="false"></textarea>
					    </div>
				  	</div>
				  	<button type="button" class="btn btn-primary" id="btn" value="start">Start Typing</button>
				  	<?php }?>
				  	</form>
				</div>
				<?php break; }} else{ ?>
					<form action="<?= base_url('finish_exam')?>" method="post">
					<div class="form-group">
						<h3>You Have Completed Your Exam</h3>
					   <h5>Finish Your Exam by clicking on below button</h5>
				  	</div>
				  	<button type="submit" class="btn btn-primary">Finish</button>
				  	</form>
				<?php }?>
			</div>
			<?php if(isset($time_duration)){?>
				<div class="col-2">Time Left:<br><span id="timer"><?= $time_duration?></span> sec</div>
			<?php }?>
		</div>
		</div>
	</div>
	<!--/ Main Body -->
	<!-- footer -->
	<footer class="page-footer font-small text-center pt-5" >
		<?php $this->load->view('admin/footer');?>
	</footer>
	<!-- /footer -->

</body>
	<?php

	function time_to_seconds($time){
		$time = explode(':', $time);
		return $time[0]*60 + $time[1];
	}

		globalJs(); 
	?>
<script type="text/javascript">
		// Initializing timer variable.
		var x = <?= $time_duration?>;
		var y = document.getElementById("timer");
		// Display count down for 20 seconds
		setInterval(function(){
		if( x>=1)
		{
		x--;
		y.innerHTML= ''+x+'';
		}
		}, 1000);

	//Prevent Ctrl+S (and Ctrl+W for old browsers and Edge)
	document.onkeydown = function (e) {
	    e = e || window.event;//Get event

	    if (!e.ctrlKey) return;

	    var code = e.which || e.keyCode;//Get key code

	    switch (code) {
	        case 83://Block Ctrl+S
	        case 87://Block Ctrl+W -- Not work in Chrome and new Firefox
	            e.preventDefault();
	            e.stopPropagation();
	            break;
	    }
	};

	document.addEventListener('contextmenu', event => event.preventDefault());

	window.onload=function(){ 
	    window.setTimeout(function() { document.question_form.submit(); }, <?= $time_duration.'000'?>);
	};
</script>

<?php if(isset($value['subject']) == 'typing'){?>

<script type="text/javascript">
	
const setOfWords = ["<?= $value['question']?>"];

const msg = document.getElementById('msg');
const typeWords = document.getElementById('mywords');
const btn = document.getElementById('btn');

const correct = document.getElementById('correct');
const error = document.getElementById('error');
const type_speed = document.getElementById('type_speed');
const total_words = document.getElementById('total_words');

let startTime , endTime;

const playGame = () =>{

	msg.innerText = setOfWords;

	let date = new Date();
	startTime =date.getTime();
	btn.innerText = "Done";
	btn.value = "done";
}

const endPlay = () =>{
	let date = new Date();
	endTime =date.getTime();
	let totalTime = ((endTime - startTime)/1000);

	let totalStr = typeWords.value;
	let wordCount = wordCounter(totalStr);

	let speed = Math.round((wordCount / totalTime) * 60);

	type_speed.value = speed;
	let finalMsg = "Your Typing Speed was " +speed+ " words per minute, ";

	finalMsg += compareWords(msg.innerText, totalStr);

	msg.innerText = finalMsg;

	btn.innerText = "Submit";
	btn.value = "submit";
}

const compareWords = (str1, str2) =>{ 
	let words1 = str1.split(" "); // word length
	let words2 = str2.split(" ");
	let cnt = 0;

	words1.forEach(function(item, index){
		if(item == words2[index]){
			cnt ++; // correct
		}
	})

	let errorWords = (words1.length - cnt); // error

	correct.value = cnt;
	error.value = errorWords;
	total_words.value = words1.length;

	return (cnt + " correct out of " + words1.length + " words & the total number of error were "+errorWords + ".");
}
const wordCounter = (str) =>{
		let response = str.split(" ").length;
		return response;
}

btn.addEventListener('click', function(){
	if (this.value == 'start'){
		typeWords.disabled = false;
		playGame();
	}
	else if
		(this.value == "done"){
			typeWords.readOnly = true;
			endPlay();
		}
	else if
		(this.value == "submit"){
			btn.type="submit";
		}
});

</script>

<?php } else{?>
<script type="text/javascript">
	
	document.onkeydown = function (e) {
	    return false;
	}

</script>
<?php }?>
</html>
