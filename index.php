<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Youki Iimori</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/prefixfree.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!--<body data-spy="scroll" data-target=".navbar-fixed-top">-->

<body>
	<header>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

				</div><!-- navbar-header -->
				<div class="collapse navbar-collapse" id="collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="#featured">Home</a></li>
						<li><a href="#aboutMe">About Me</a></li>
						<li><a href="#portfolio">Portfolio</a></li>
						<li><a href="#contact">Contact</a></li>
						<li id="resumeButton"><a href="images/Youki_Iimori%20(Coding).pdf">Resume</a></li>
					</ul>
				</div><!-- collapse navbar-collapse -->
			</div><!-- container -->
		</nav>
		<div class="seller fullheight" id="featured">
			<h1>Youki Iimori <small>Creative Developer</small></h1>
		</div>
		<!--seller-->


	</header>

	<div class="main">
		<div class="page" id="aboutMe">
			<div class="content container">
				<h2>About Me</h2>
				<div class="row">
					<p class="col-md-5 col-md-offset-1">Hello! My name is Youki Iimori, and I'm a creative developer from Rochester Institute of Technology. I have a deep passion for making things that move and fascinate people, from drawings to web sites. I have experience using Maya as well as proficiency in C#, HTML, and CSS, with some knowledge of JavaScript as well.</p>
					<p class="col-md-5">In my free time I love playing games, both tabletop (like Magic the Gathering and Dungeons and Dragons) and video (like League of Legends and Pokemon). I also enjoy watching anime, and you may find me catching up on new episodes at the gym. My deep love of my hobbies fuels my creativity, which in turn drives my work to reach the height of quality that my other hobbies follow.</p>
				</div>
				<!--row-->
			</div><!-- content container -->
		</div><!-- mission page -->

		<div class="page" id="portfolio">
			<h2>Portfolio <small><br>Click an image for more info</small></h2>
			<div class="carousel slide" data-ride="carousel" id="portfolioPage">
				<ol class="carousel-indicators">
				</ol>
				<div class="carousel-inner">
					<div class="item active"><a href="#amiibaseModal" data-toggle="modal" data-target="#amiibaseModal"><img src="images/amiibaseLogo.PNG" alt="amiibase"></a></div>
					<div class="item"><a href="#bellModal" data-toggle="modal" data-target="#bellModal"><img src="images/bell.PNG" alt="bell"></a></div>
					<div class="item"><a href="#asteroidsModal" data-toggle="modal" data-target="#asteroidsModal"><img src="images/asteroidsOpen.PNG" alt="asteroids"></a></div>
				</div><!-- carousel-inner -->

				<a class="left carousel-control" href="#portfolioPage" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#portfolioPage" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div><!-- featured carousel -->
		</div>
		<!--portfolio-->

		<!-- Modal amiibase -->
		<div class="modal fade" id="amiibaseModal" tabindex="-1" role="dialog" aria-labelledby="amiibaseModalTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title" id="amiibaseModalTitle">Amiibase Web Application</h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p>The Amiibase Web Application was a group project made using the Amiibo API. It takes in any combination of character name, series name, Amiibo type, and number of desired results, then displays results matching the desired description.</p>
						<img style="padding: 20px; max-width: 150%; width: 100%;" src="images/amiibaseExample.PNG" alt="amiibaseExample">
						<p>The HTML work for this API was minimal, however the JavaScript and CSS were more extensive. My partner and I each leaned towards our specialties, mine being the design and CSS and his being the JavaScript, however we both worked on all aspects of the project.</p>
						<a href="https://people.rit.edu/ygi1700/230/project2/Amiibase/Amiibase.html">Please, feel free to try the application out yourself.</a>
						<h4>Skills Used:</h4><p><em>JavaScript, HTML, CSS</em></p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal bell-->
		<div class="modal fade" id="bellModal" tabindex="-1" role="dialog" aria-labelledby="bellModalTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title" id="bellModalTitle">Bell Necklace 3D Model</h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p>This project was a 3D model done in a solo environment. It is meant to be used as a game asset, and as such has had basic texture maps applied to it. The materials were made using images from <a href="https://www.textures.com/">textures.com</a> that were edited in Adobe Photoshop. Upon completion in Maya, the asset was exported over to Unity.</p>
						<img style="padding: 20px; max-width: 150%; width: 100%;" src="images/bellExample.PNG" alt="bellExample">
						<h4>Skills Used:</h4><p><em>Maya, Unity</em></p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal asteroids-->
		<div class="modal fade" id="asteroidsModal" tabindex="-1" role="dialog" aria-labelledby="asteroidsModalTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title" id="asteroidsModalTitle">Asteroids</h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p>As the title suggests, this project is a recreation of the classic Arcade game <em>Asteroids</em>. However, it works as quite a good example of my coding abilities, as the game was coded from the ground up using Unity C#. The assets and start/end screens were all made by hand, and no physics from the Unity physics engine were used. </p>
						<img style="padding: 20px; max-width: 150%; width: 100%;" src="images/asteroidsExample.PNG" alt="asteroidsExample">
						<h4>Skills Used:</h4><p><em>C#, Unity, Procreate</em></p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<div class="page" id="contact">
			<h2>Contact</h2>
		</div>
		<div class="page" id="contactPage">
			<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">

				<label>First Name</label>
				<input name="name" placeholder="Type Here">

				<label>Last Name</label>
				<input name="lastname" placeholder="Type Here">

				<label>Email</label>
				<input name="email" type="email" placeholder="person@sample.com">

				<label>Message</label>
				<textarea name="message" placeholder="Type Here"></textarea>

				<label>Please confirm you are human:<br> 2 + 2 = ?</label>
				<input name="human" placeholder="Type Here">

				<input id="submit" name="submit" type="submit" value="Submit">

			</form>
		</div>
	</div>

	<?PHP
 	// ** Form validation code **
	// #1 - was the submit button pressed?
    if (isset($_POST["submit"])){ 
    	$to = "yiimoriDesign@gmail.com";
    	
    	// #2 - if a value for the `email` form field is missing, give a default value
    	// else, use the value from the form field
			$from = empty(trim($_POST["email"])) ? "noemail@sample.com" : sanitize_string($_POST["email"]);
			
			$subject = "Web Form";
			
			// #3 - same as above, except with the `message` form field
			$message = empty(trim($_POST["message"])) ?  "No message" : sanitize_string($_POST["message"]);
			
			// #4 - same as above, except with the `name` form field
			$name = empty(trim($_POST["name"])) ? "No name" : sanitize_string($_POST["name"]);
           
            //Inserted Homework, same as above but for the lastname form field
            $lastname = empty(trim($_POST["lastname"])) ? "No last name" : sanitize_string($_POST["lastname"]);
        	
			// #5 - same as above, except with the `human` form field
			$human = empty(trim($_POST["human"])) ? "0" : sanitize_string($_POST["human"]);
			
			$headers = "From: $from" . "\r\n";
			
			// #6 - add the user's name to the end of the message
			$message .= "\n\n - $name $lastname \n";
			
			// #7 - if they know what 2+2 is, send the message
			if (intval($human) == 4){
			
				// #8 - mail returns false if the mail can't be sent
				$sent = mail($to,$subject,$message,$headers);
				if ($sent){
					echo "<p><b>You sent:</b> $message</p>";
				}else{
					echo "<p>Mail unable to be sent.</p>";
				}
			}else{
				echo "<p>Confirmation Failed.</p>";
			}

    }
    
    // #9 - this handy helper function is very necessary whenever
    // we are going to put user input onto a web page or a database
    // For example, if the user entered a <script> tag, and we added that <script> tag to our HTML page
    // they could perform an XSS attack (Cross-site scripting)
    function sanitize_string($string){
	//$string = trim($string);
	//$string = strip_tags($string);
	return $string;
    }
?>

	<footer>
		<div class="content container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<p>Phone Correspondence: <span class="phone">503-349-1630</span></p>
					<p>Check out my <a href="https://www.linkedin.com/in/youki-iimori/">Linkedin</a>!</p>
				</div><!-- col-sm-6 -->
				<div class="col-sm-6">
					<nav class="navbar navbar-default">
						<ul class="nav navbar-nav navbar-right">
							<li>Twitter: <a href="https://twitter.com/TheJapaneseJew">@TheJapaneseJew</a></li>
							<li>Email: <a href="#">yiimoriDesign@gmail.com</a></li>
						</ul>
					</nav>
				</div><!-- col-sm-6 -->
			</div><!-- row -->
		</div><!-- content container -->
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="js/myscript.js"></script>
</body>

</html>
