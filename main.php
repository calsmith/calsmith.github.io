<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Cal Smith • Portfolio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="A collection of things...">
    <meta name="author" content="Cal Smith">
    
	<link href="css/style.css" rel="stylesheet"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>

<div class="navbar">
	<div class="title">Cal Smith <span class="subtitle">Portfolio</span></div>
	<ul class="links" id="nav-links">
		<li class="active"><a href="#hello">Hello World!</a></li>
		<li class="divider"></li>
		<li><a href="#glue">Glue Notebook</a></li>
		<li><a href="#glass">Glass Chrome App</a></li>
		<li><a href="#packd">Packd Social Shopping</a></li>
		<li><a href="#blogger">Blogger</a></li>
		<li class="divider"></li>
		<li><a href="#contact">Contact</a></li>
	</ul>
</div>

<div class="container">

	<div class="content" id="hello">
		<img src="img/me.png" width="194px" class="me">
		<div class="hero-container">
			<div class="hero">I'm Cal and these are a few things I have made</div>
			<div class="subtitle">I am an undergrad software engineer from Sydney, Australia with a passion for UXD and product.</div>
		</div>
	</div>

	<div class="content" id="glue">
		<h1>Glue Notebook</h1><div class="badge">iOS App</div>
		<div class="subtitle">An offline social network to store the important things about the people you meet in life. Free on the AppStore 2013 to 2014.</div>
		<img src="img/glue1.png" width="220px" class="glue1">
		<img src="img/glue2.png" width="220px" class="glue1">
		<h2>Design Challenges</h2>
		<ul>
			<li>Representing merged complex data sets as single UI objects. For example, combining the user’s contacts list with app-specific data.</li>
			<li>Basic natural language recognition used for detail based search. An example query: <i>"girls who like peanut butter"</i>.</li>
		</ul>
		<h2>Product Challenges</h2>
		<ul>
			<li>Demonstrating app’s value proposition so that access to sensitive information such as contacts and reminders could be granted.</li>
		</ul>
	</div>
	
	<div class="content" id="glass">
		<h1>Case Study: Google Glass</h1><div class="badge dark">University Project</div><div class="badge blue">Chrome App</div>
		<div class="subtitle">Researched design principles used by Google in the Glass UI and measured the usability of specific elements through heuristic evaluation interviews.</div>
		<div class="subtitle">Created a Chrome app simulating a HUD for motorbike riders with a custom interface based on Glass findings.</div>
		<img src="img/bike1.png" width="400px" class="bike1">
		<h2>Design Challenges</h2>
		<ul>
			<li>Representing textual/audio interactions visually.</li>
			<li>Establishing a UI standard for voice-controlled interactions which users intrinsically understand (buttons aren’t so great).</li>
			<li>Implementing natural language command processing in combination with Chrome’s speech to text API.</li>
		</ul>
		<div class="center"><img src="img/bike.gif" width="380px"></div>
		<p class="caption">A gif demonstrating basic music playback control using voice commands in the Chrome App. Other commands included <i>'read me the news'</i> and <i>'get directions to...'</i></p>
	</div>
	
	<div class="content" id="packd">
		<h1>Packd Social Shopping</h1><div class="badge">Web App</div><div class="badge grey">In Development</div>
		<div class="subtitle">A social network and online store which learns the user’s interests and personal taste as they interact with the site.</div>
		<img src="img/packd1.png" width="490px" class="packd1">
		<h2>Design Challenges</h2>		
		<ul>
			<li>A/B testing UI elements to maximise user interactions.</li>
			<li>Streamlining user on-boarding through content suggestions.</li>
			<li>Developing standard social controls from scratch</li>
			<li>Infinite content scrolling mechanism which adapts depending on content previously interacted with.</li>
		</ul>
		<a href="http://www.packd.net" class="big-link" target="_blank">View static packd prototype &rsaquo;</a>
	</div>
	
	<div class="content" id="blogger">
		<h1>Blogger</h1><div class="badge">Web App</div><div class="badge green">Internship</div>
		<div class="subtitle">Helped redesign the interface for the Blogger pages manager as part of my summer 2013 internship at Google.</div>
		<h2>Design Challenges</h2>
		<ul>
			<li>Testing and deploying a feature which will be used by millions of people.</li>
			<li>Designing a UI which can be localised into multiple languages with variable strings lengths.</li>
			<li>Working with Google's development tools and UI frameworks.</li>
		</ul>
		<a href="http://buzz.blogger.com/2014/02/making-it-easier-to-manage-pages-on.html" class="big-link" target="_blank">Read more on the Google blog &rsaquo;</a>
	</div>
	
	<div class="content" id="contact">
		<h1>Contact</h1>
		<div class="subtitle">I hope you enjoyed this! Please feel free to contact me at callumnsmith@gmail.com</div>
		<a href="#hello" class="big-link">Back to the top</a>
	</div>
	
	<div class="content" id="contact">
	</div>

</div>

<script src="js/main.js"></script>
</body>
</html>