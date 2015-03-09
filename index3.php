<!DOCTYPE  html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Algorithm</title>
		
		<!-- CSS -->
		<link rel="stylesheet" href="css/style1.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/social-icons.css" type="text/css" media="screen" />
		<!--[if IE 8]>
			<link rel="stylesheet" type="text/css" media="screen" href="css/ie8-hacks.css" />
		<![endif]-->
		<!-- ENDS CSS -->	
		
		<!-- GOOGLE FONTS 
		<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>-->
		
		<!-- JS -->
		<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.13.custom.min.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script>
		<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
		<script type="text/javascript" src="js/custom.js"></script>
		
		<!-- Isotope -->
		<script src="js/jquery.isotope.min.js"></script>
		
		<!--[if IE]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<!--[if IE 6]>
			<script type="text/javascript" src="js/DD_belatedPNG.js"></script>
			<script>
	      		/* EXAMPLE */
	      		//DD_belatedPNG.fix('*');
	    	</script>
		<![endif]-->
		<!-- ENDS JS -->
		
		
		
		
		

	</head>
	
	<body>

			<!-- HEADER -->
			<div id="header">
				<!-- wrapper-header -->
				<div class="wrapper">
					<!--<a href="index.html"><img id="logo" src="img/logo.png" alt="Nova" /></a>
					<!-- search -->
					<div class="top-search">
						<form  method="get" id="searchform" action="#">
							<div>
								<input type="text" value="Search..." name="s" id="s" onfocus="defaultInput(this)" onblur="clearInput(this)" />
								<input type="submit" id="searchsubmit" value=" " />
							</div>
						</form>
					</div>
					<!-- ENDS search -->
				</div>
				<!-- ENDS wrapper-header -->					
			</div>
			<!-- ENDS HEADER -->
			
			
			<!-- Menu -->
			<div id="menu">
			
			
			
				<!-- ENDS menu-holder -->
				<div id="menu-holder">
					<!-- wrapper-menu -->
					<div class="wrapper">
						<!-- Navigation -->
						<ul id="nav" class="sf-menu">
							<li><a href="index.html">Home</a></li>
							<li class=""><a href="features.html">Features</a>
								
							</li>
							<li><a href="blog.html">NGO</a></li>
							<li><a href="portfolio.html">Portfolio</a></li>
							<li><a href="gallery.html">Gallery</a>
								
							</li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
						<!-- Navigation -->
					</div>
					<!-- wrapper-menu -->
				</div>
				<!-- ENDS menu-holder -->
			</div>
			<!-- ENDS Menu -->
			

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
		<h1></h1>
	<?php
		// retrive post
		include('config.php');
		include ('function.php');
		dbConnect();
		
		$query = mysql_query(
			'SELECT *
			FROM post
			WHERE post_id = 1');
		$row = mysql_fetch_array($query);
	?>
		<div class="post">
			<h2><?php echo $row['post_title']?></h2>
			<p><?php echo $row['post_body']?></p>
		</div>

	<?php
		// retrive comments with post id
		$comment_query = mysql_query(
			"SELECT *
			FROM comment
			WHERE post_id = {$row['post_id']}
			ORDER BY comment_id DESC
			LIMIT 15");
	?>

		<h2>Feedback.....</h2>
		<div class="comment-block">
		<?php while($comment = mysql_fetch_array($comment_query)): ?>
			<div class="comment-item">
				<div class="comment-avatar">
					<img src="<?php echo avatar($comment['mail']) ?>" alt="avatar">
				</div>
				<div class="comment-post">
					<h3><?php echo $comment['name'] ?> <span>said....</span></h3>
					<p><?php echo $comment['comment']?></p>
				</div>
			</div>
		<?php endwhile?>
		</div>

		<h2>Submit new feedback</h2>
		<!--comment form -->
		<form id="form" method="post">
			<!-- need to supply post id with hidden fild -->
			<input type="hidden" name="postid" value="<?php echo $row['post_id']?>">
			<label>
				<span>Name *</span>
				<input type="text" name="name" id="comment-name" placeholder="Your name here...." required>
			</label>
			<label>
				<span>Email *</span>
				<input type="email" name="mail" id="comment-mail" placeholder="Your mail here...." required>
			</label>
			<label>
				<span>Your comment *</span>
				<textarea name="comment" id="comment" cols="30" rows="10" placeholder="Type your comment here...." required></textarea>
			</label>
			<input type="submit" id="submit" value="Submit Comment">
		</form>
	</div>
</body>
</html>
