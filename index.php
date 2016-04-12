<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="shortcut icon" href="img/fav-bee.png">
		<title> Pam Gluss | Animator</title>
		<link rel="stylesheet" href="css/style.css">
		
		<!-- Bootstrap Links -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		
		<!-- jQuery-->
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> 
		 
		<script src="js/script.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/classie/1.0.1/classie.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		
    <script src="./js/scroll.js"></script>
	
	<!-- Google Analytics -->
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-76293253-1', 'auto');
  ga('send', 'pageview');

</script>
		
	</head>
	
	<body data-spy="scroll" data-target=".navbar-right" data-offset="20">
		<header class="navbar-fixed-top">
			<nav id="pam-nav">
				<h1 class="navbar-left"><a href="#demo-reel">Pamela Gluss</a></h1>
				<img src="img/fav-bee.png" class="navbar-left" alt="bee icon" title="BZZZZZ">
				<div class="nav">
					<ul class="navbar-right">
						<li> <a href="#demo-reel"> Home </a> </li>
						<li> <a href="#about"> About </a></li>
						<li> <a href="#portfolio"> Portfolio </a> </li>
						<li> <a href="#resume"> Resume </a> </li>
						<li> <a href="#contact"> Contact </a> </li>
					</ul>
				</div><!-- end of .nav-->
			</nav>
		</header>
			
		<div class="container">
		<div class="innertube">
			<div class="home-section" id="demo-reel">
				<h2> Welcome!</h2>
				<p> Hey there! My name is <em>Pamela Gluss</em>!</p>
				<p>I am a <em>2D Animator!</em> While you're here, check out my demo reel: </p>
				<iframe src="https://player.vimeo.com/video/155779842" width="650" height="365" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div> <!-- end of #demo-reel-->
			
			<div class="home-section" id="about">
				<h2> About Me </h2>
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-5">
						<div id="about-text">
							<p> Glad I caught your interest!</p> 
							
							<p>I attended the Rochester Institute of Technology majoring in Animation with a minor in Web Design and Development and a concentration in Psychology. </p>
						
							<p> I grew to love animation as a child watching Digimon and playing Final Fantasy. I love video games, webcomics, riding motorcycles, exploring new places, meeting new cats and taking care of my own, telling lame jokes and learning new things.</p>
							
							<p>I am currently located in the <em>San Francisco Bay Area.</em> I’m in search of employment doing animation, character design or preproduction. I’m also in the market for work in web design and development and UX/UI design.</p>
							
							<p> Keep scrolling to see my portfolio!</p>
						</div>
					</div>
				
					<div class="col-md-6">
						<img src="img/headshot.jpg" class="img-responsive" alt="It's Me!" title="It's Me!">
						<p class="caption"> That's me!</p>
					</div>
					
				</div><!-- end of .row -->
			</div> <!-- end of #about-->
			
			<div class="home-section" id="portfolio">
				<h2>Portfolio</h2>
					
				<h3>Animation</h3>
					<div id="animation-thumb" class="row">
						<div class="hovereffect col-md-4">
						<img src="img/thumb/queen-bee.png" alt="Queen Bee Thumbnail">
							<div class="overlay">
								<p> Queen Bee 2015 </p>
								<a class="info" href="https://vimeo.com/129923617">Watch It</a>
							</div>
						</div>
						
						<div class="hovereffect col-md-4">
						<img src="img/thumb/snowman-nonstop.png" alt="Snowman Nonstop Thumbnail">
							<div class="overlay">
								<p> Snowman Nonstop 2014</p>
								<a class="info" href="https://vimeo.com/89410970">Watch It</a>
							</div>
						</div>
						
						<div class="hovereffect col-md-4">
						<img src="img/thumb/stars-align.png" alt="Stars Align Thumbnail">
							<div class="overlay">
								<p> Stars Align 2013 </p>
								<a class="info" href="https://vimeo.com/89410967">Watch It</a>
							</div>
						</div>
					</div><!-- end of #animation-thumb-->
					
					<div id="animation-slider" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
							<li data-target="#animation-slider" data-slide-to="0" class="active"></li>
							<li data-target="#animation-slider" data-slide-to="1"></li>
							<li data-target="#animation-slider" data-slide-to="2"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
							<div class="item active">
							  <img src="img/thumb/queen-bee.png" alt="Queen Bee">
							  <div class="carousel-caption">
							   <a href="https://vimeo.com/129923617"> Watch It</a>
							  </div>
							</div>
							
							<div class="item">
							  <img src="img/thumb/snowman-nonstop.png" alt="Snowman Nonstop">
							  <div class="carousel-caption">
								<a href="https://vimeo.com/89410970">Watch It</a>
							  </div>
							</div>
							
							 <div class="item">
							  <img src="img/thumb/stars-align.png" alt="Stars Align">
							  <div class="carousel-caption">
								<a href="https://vimeo.com/89410967">Watch It</a>
							  </div>
							</div>
						  </div>

						  <!-- Controls -->
						  <a class="left carousel-control" href="#animation-slider" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" data-target="#animation-slider" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						  </a>
						</div>
					
					<p><a href="videos.php">See More</a> </p>
					
				<h3>Artwork</h3>
				<div id="artwork-thumb" class="row">
					
					<div class="hovereffect col-md-4">
						<img src="img/thumb/chardesign-thumb.jpg" alt="Character Design Artwork">
							<div class="overlay">
								<p> Character Design </p>
								<a class="info" href="videos.php#character-art">See More</a>
							</div>
						</div>
						
						<div class="hovereffect col-md-4">
						<img src="img/thumb/storyboard-thumb.jpg" alt="Preproduction Artwork">
							<div class="overlay">
								<p> Preproduction</p>
								<a class="info" href="videos.php#storyboards">See More</a>
							</div>
						</div>
						
						<div class="hovereffect col-md-4">
						<img src="img/thumb/illustration-thumb.jpg" alt="Illustrations">
							<div class="overlay">
								<p> Illustrations </p>
								<a class="info" href="videos.php#illustrations">See More</a>
							</div>
						</div>
				</div><!-- end of #artwork-thumb-->
				
				<div id="artwork-slider" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
							<li data-target="#artwork-slider" data-slide-to="0" class="active"></li>
							<li data-target="#artwork-slider" data-slide-to="1"></li>
							<li data-target="#artwork-slider" data-slide-to="2"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
							<div class="item active">
							  <img src="img/thumb/chardesign-thumb.jpg" alt="Character Design">
							  <div class="carousel-caption">
							   <a href="videos.php#character-art">See More</a>
							  </div>
							</div>
							
							<div class="item">
							  <img src="img/thumb/storyboard-thumb.jpg" alt="Preproduction">
							  <div class="carousel-caption">
								<a href="videos.php#storyboards">See More</a>
							  </div>
							</div>
							
							 <div class="item">
							  <img src="img/thumb/illustration-thumb.jpg" alt="Illustrations">
							  <div class="carousel-caption">
								<a href="videos.php#illustrations">See More</a>
							  </div>
							</div>
						  </div>

						  <!-- Controls -->
						  <a class="left carousel-control" data-target="#artwork-slider" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" data-target="#artwork-slider" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						  </a>
						</div>
				
				<p><a href="videos.php#portfolio-artwork-thumb"> See More</a> </p>
				
				<h3>Hobbies</h3>
				<div id="hobby-thumb" class="row">
					<div class="hovereffect col-md-4">
						<img src="img/thumb/3d-thumb.jpg" alt="3D Modeling and Animation">
							<div class="overlay">
								<p>3D Modeling and Animation </p>
								<a class="info" href="videos.php#3D">See More</a>
							</div>
						</div>
						
						<div class="hovereffect col-md-4">
						<img src="img/thumb/photography-thumb.jpg" alt="Photography">
							<div class="overlay">
								<p>Photography</p>
								<a class="info" href="videos.php#photography">See More</a>
							</div>
						</div>
						
						<div class="hovereffect col-md-4">
						<img src="img/thumb/other-thumb.jpg" alt="Other">
							<div class="overlay">
								<p>Other Projects</p>
								<a class="info" href="videos.php#graphic-design">See More</a>
							</div>
						</div>
				</div><!-- end of #hobby-thumb-->
				
				<div id="hobby-slider" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
							<li data-target="#hobby-slider" data-slide-to="0" class="active"></li>
							<li data-target="#hobby-slider" data-slide-to="1"></li>
							<li data-target="#hobby-slider" data-slide-to="2"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
							<div class="item active">
							  <img src="img/thumb/3d-thumb.jpg" alt="3D Modeling and Animation">
							  <div class="carousel-caption">
							   <a href="videos.php#3D">See More</a>
							  </div>
							</div>
							
							<div class="item">
							  <img src="img/thumb/photography-thumb.jpg" alt="Photography">
							  <div class="carousel-caption">
								<a href="videos.php#photography">See More</a>
							  </div>
							</div>
							
							 <div class="item">
							  <img src="img/thumb/other-thumb.jpg" alt="Other">
							  <div class="carousel-caption">
								<a href="videos.php#graphic-design">See More</a>
							  </div>
							</div>
						  </div>

						  <!-- Controls -->
						  <a class="left carousel-control" data-target="#hobby-slider" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" data-target="#hobby-slider" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						  </a>
						</div>
				
				<p><a href="videos.php#portfolio-hobby-thumb"> See More</a></p>
				
			</div> <!-- end of #portfolio-->
			
			<div class="home-section" id="resume">
				<h2> Resume </h2>
				<span class="fake-link" data-toggle="collapse" data-target="#resume-toggled" aria-expanded="false" aria-controls="resume-toggled">Click here to toggle my HTML resume </span>
				<div class="collapse" id="resume-toggled">
					<div id="resume-head">
						<div class="resume-content row">
							<div class="col-md-5">
								<h3>Pamela Gluss</h3>
								<p> pamela@gluss.com </p>
								<p>gluss.com/pamela</p>
								<p> (650) 464 7108 </p>
							</div>
							
							<div class="col-md-2"></div>
							
							<div class="col-md-5">
								<h3>2D Animator</h3>
								<p>600 Old La Honda Road</p>
								<p>Woodside, CA</p>
								<p>94062</p>
							</div>
						</div>
					</div><!-- end of #resume-head-->
					
					<div id="resume-body">
						<div class="resume-content"><!-- Education-->
							<h4>Highlights</h4>
							<p>Creative, driven, multitalented designer. Delivers compelling marketing strategies through storytelling, motion and design. Looking for an entry level creative position.</p>
							<h4> Education</h4>
							<p> Rochester Institute of Technology: Graduated in May 2015 with cumulative GPA of 3.2</p>
							<p> BFA in Animation with a minor in Web Design and Development and a concentration in Psychology </p>
						</div>
						
						<div class="resume-content"><!-- work experience-->
							<h4> Work Experience</h4>
							<p> Freelancer for Hedgehog Consulting, Avanti Pizza Belmont, Imnlightment Productions and Others (January 2016 - Present): <span class="resume-small"> Assisting with design, marketing, branding, social media, Web Development, photography and other tasks as needed to help small businesses grow and acquire new clientele.</span></p>
							
							<p>Office, Marketing and Web Dev Assistant at Imnlightment Productions (May 2015 - January 2016): <span class="resume-small"> Investigated story ideas, researched content and wrote copy for the website, edited and maintained the website using Wordpress and custom HTML and CSS, interfaced with potential clients, current clients and business partners to keep projects running smoothly and on time and picked up any other miscellaneous office tasks such as sending invoices, scheduling meetings or writing contracts. Also developed marketing materials and design aesthetic to improve the professional appearance of the company. </span></p>
							
							<p> File Clerk at Jerome Marks Agency (May 2014 - August 2015): <span class="resume-small">Maintained organization of hundreds of files alphabetized and sorted by date, created lists of clients whose policies needed to be worked with, printed insurance policies and delivered them to the correct agent, and maintained the efficiency of the office. </span> </p>
							
							<p> Office Assistant at Facilities Management at RIT (December 2012 - August 2014): <span class="resume-small">Answered phones, processed work orders, took meeting notes, created schedules for other student workers, completed large scale data entry tasks and used Excel formulas and graphs to analyze them. This allowed staff to track their hours better and create more efficient schedules.</span> </p>
							
							<p> Farmer's Market Vendor for Mighty Mouth Foods (Summer of 2010 and 2011): <span class="resume-small">Represented a company that sold dehydrated kale chips. Picked up product, set up the stall, advertised the product to passersby, presented professional product information to potential buyers, handled the cash transactions and accounting at the end of each market and brought everything back to the company headquarters.</span> </p>
						</div>
						
						<div class="resume-content"><!-- Applicable Skills-->
							<h4>Applicable Skills</h4>
							<p>Traditional animation<span class="resume-small"> using hand drawn and digital animation </span></p>
							<p>Animating, inking and coloring<span class="resume-small"> in ToonBoom, TVPaint and Adobe Flash. 2D Puppet animation using ToonBoom and After Effects</span> </p>
							<p>Editing Audio and Video, Compositing and Masking<span class="resume-small"> using Adobe After Effects and Premiere </span></p>
							<p>Character and Prop Design</p>
							<p>Modeling, UV mapping, texturing and sculpting<span class="resume-small"> in Maya and ZBrush</span></p>
							<p>Adobe Creative Suite<span class="resume-small"> for layouts, wireframes, mockups and designs</span> </p>
							<p>Front end development<span class="resume-small"> in HTML5, CSS6, Bootstrap and jQuery</span> </p>
							<p>Installing and Utilizing<span class="resume-small"> Wordpress, Drupal, Joomla and Node.js</span></p>
							<p>Backend Development<span class="resume-small"> in JavaScript, PHP, mySQL and Perl</span> </p>
							<p>Creative writing and storytelling </p>
							<p>Editing written pieces<span class="resume-small"> for conciseness, clarity, spelling and grammar</span></p>
							<p>Photo lighting and composition </p>
							<p>Photography using Canon Rebel T3i </p>
							<p>Photo Editing and Retouching<span class="resume-small"> with Photoshop and optimization for print and web</span> </p>
							<p>Microsoft Office and Google Docs </p>
							<p>Team leader, project coordinator, office manager </p>
							<p>Fielding calls, maintaining communications, keeping notes and synthesizing tasks </p>
							
						</div>
					</div><!-- end of #resume-body-->
				</div><!-- end of #resume-toggled-->
				<p>Or, download the <a href="img/resume.pdf">PDF</a> </p>
			</div> <!-- end of #resume-->
			
			<div class="home-section" id="contact">
				<h2> Contact </h2>
				<p>I would love to hear from you!</p>
				<p>Have questions about things I’m currently working on? Want to work on something together? Need references or other information? Get in touch.</p>
					<form action="php/sendmail.php" method="post">
						<div class="form-group">
							<label for="name">Name:</label>
							<input type="text" name="name" maxlength="50">
						</div>
						<div class="form-group">
							<label for="email">Email:</label>
							<input type="text" name="email" maxlength="50">
						</div>
						
						<div class="form-group">
							<label for "messsage">Message: </label>
							<textarea class="form-control" name="message" rows="3" maxlength="2000"></textarea>
						</div>
						
						<div class="form-group">
							<input type="submit" value="Send">
						</div>
					</form>
					
				<p id="form-outcome">
					<?php echo $formOutcome; ?> 
				</p>
				
				<p> Or, just send me an email at <a href="mailto:pamela@gluss.com?Subject=Website%20Contact" target="_top">pamela@gluss.com</a></p>
				<p> Let's talk!</p>
			</div> <!-- end of #contact-->
			
			
		
		</div> <!-- end of .innertube-->
		</div><!-- End of .container-->
		
		<footer>
				<ul>
					<li><p> © 2016 Pamela Gluss </p></li>
					
					<span class="align-right">
					<li><a href="https://www.linkedin.com/in/pamelagluss"><img src="img/linkedin.png" alt="LinkedIn"> </a> </li>
					<li><a href="http://vimeo.com/user26048530"><img src="img/vimeo.png" alt="Vimeo" /></a> </li>
					<li><a href="http://pamimation.tumblr.com/"><img src="img/tumblr.png" alt="Tumblr"> </a> </li>
					</span>
				</ul>
			</footer>
	</body>
