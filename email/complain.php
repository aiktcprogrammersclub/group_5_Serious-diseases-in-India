<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>algorithm</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
	<div class="wrap">
	
		<h2>Complaint Box</h2>
		If you have any complaint regarding business of drug(medicine) or any illegal edible items or any illegal act that can cause death, you are free to complain here. <br>
Your Complaint will be posted to us through Email</br> 
		<!--comment form -->
		<form id="form" method="post" action="email_success.php">
			<!-- need to supply post id with hidden fild -->
			
			<label>
				<span>Your UserName *</span>
				<input type="text" name="username" id="username" placeholder="Your Username" required>
			</label>
			<label>
				<span>Your Email ID *</span>
				<input type="text" name="email" id="email" placeholder="Your Email ID" required>
			</label>
			<label>
				<span>Your Contact No. *</span>
				<input type=text name="contact" id="contact" placeholder="your contact number" required></textarea>
			</label> 
			<label>
				<span>Your Complaint *</span>
				<textarea name="complaint" id="complaint" cols="30" rows="10" placeholder="Type your complaint here..." required></textarea>
			</label>
			<input type="submit" id="submit" value="Submit Complaint">
		</form>
	</div>
</body>
</html>
