<?php include('header.php'); ?>
<html>
<body>
 
<div id="Layer1" style="position:absolute; left:53px; top:49px; width:486px; height:472px; z-index:1;">
<form class="form-horizontal" style="margin-left:30px;" method="POST" action="contact_query.php">
<div>
<h2>
	Feed Back Form 
</h2>
	<p class="full_name">
	<label for="full_name" style="font-size:18px; font-family:georgia; margin-top:10px;">Your Name</label>
		<input type="text" name="full_name" id="full_name" placeholder="Enter your full name . . . ." autofocus="autofocus" required/>
		
	</p>
		
	<p class="email">
	<label for="email" style="font-size:18px; font-family:georgia margin-top:10px;">Your Email Address</label>
		<input type="email" name="email" id="email" placeholder="Enter your email . . . ." required/>
		
	</p>	
	
	<p class="message">
	<label for="message" style="font-size:18px; font-family:georgia margin-top:10px;">Your Feedback</label>
	<textarea name="message" placeholder="Enter your feedback . . . ." required></textarea>
    <br />
	</p>
	<div align="left" class="controls" style="margin:10px;"><button type="submit" name="send_message" class="btn btn-success"> Submit</button>
	<br/>
	</div>
</form>
</div>
<div id="Layer2" style="position:absolute; left:596px; top:43px; width:354px; height:469px; z-index:2;">
  <h3><u>Comments</u></h3>
  <?php
	include('select.php');
	?>
	
</div>
</body>
</html>