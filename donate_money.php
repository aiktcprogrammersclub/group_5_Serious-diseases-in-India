<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>algorithm</title>
	<link rel="stylesheet" href="css/style2.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
	<div class="wrap">
	
		<h2>Donate Money</h2>
		 <br> Your Little Donation is precious<br>
		
		<!--comment form -->
		<form id="form" method="post">
			<!-- need to supply post id with hidden fild -->
			
			<label>
				<span>Your Name *</span>
				<input type="text" name="username" id="username" placeholder="Your Username" required>
			</label>
			<label>
				<span>Your Email ID *</span>
				<input type="text" name="email" id="email" placeholder="Your Email ID" required>
			</label>
			<label>
				<span>Your Contact No. *</span>
				<input type=text name="contact" id="contact" placeholder="your contact number" required></text>
			</label> 
			
			<label>
				<span>Your Address *</span>
				<textarea name="address" id="address" cols="30" rows="10" placeholder="Type your Address" required></textarea>
			</label>
			<label>
				<span>Payment Through *</span>
					<select name="Payment through">
   					 <option value="cash">Cash</option>
   					 <option value="cheque">Cheque</option>
   					 <option value="credit">Online Payment</option>
  					</select>
			</label> 
			<label>
				<span>Amount *</span>
				<input type=text name="amount" id="amount" required></textarea>
			</label>
			<input type="submit" id="submit" value="Submit">
		</form>
	</div>
</body>
</html>

