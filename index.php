<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/Mainstyle.css">
	<link rel="stylesheet" type="text/css" href="css/1HEADER.css">
	<link rel="icon" href="img/favicon2.png"/>
	<link rel="stylesheet" type="text/css" href="css/logInStyle.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<title>DISCORD | Your Place to Talk and Hang out</title>
</head>
<body>
<div class="container">
<?php 
include("1HEADER.php");
?>
	<div class="MainPage">
		<div class="heading">
			<h1>imagine a place...</h1>
			<br>
			<div class="textUnderHeading">
				...where you can belong to a school club, a gaming group, or a worldwide art community. <br> Where just you and a handful of friends can spend time together. A place that makes it easy <br> to talk every day and hang out more often.
			</div>
			<div class="Btn">
				<button class="btn downloadWindows"><svg width="24" height="24" viewBox="0 0 24 24" class="icon-nuGd5b"><g fill="currentColor"><path d="M17.707 10.708L16.293 9.29398L13 12.587V2.00098H11V12.587L7.70697 9.29398L6.29297 10.708L12 16.415L17.707 10.708Z"></path><path d="M18 18.001V20.001H6V18.001H4V20.001C4 21.103 4.897 22.001 6 22.001H18C19.104 22.001 20 21.103 20 20.001V18.001H18Z"></path></g></svg>Download for Windows</button>
				<button class="openInBrowser">Open Discord in your browser</button>
				<div class="loginHeader">
					<div class="usernameDiv">
						<form method="POST" action="#" onsubmit="event.preventDefault();">
							<input type="text" placeholder="Enter a username" class="browserUsername"/>
							<button class="usernameBtn">Proceed</button>
						</form>	
					</div>
					<div class="passwordDiv">
						<form method="POST" action="#" onsubmit="event.preventDefault();">
							<input type="password" placeholder="Enter a Password" class="browserUsername"/>
							<button class="usernameBtn">Proceed</button>
						</form>	
					</div>
				</div>
			</div>
			<p class="termsText">By registering, you agree to Discord's <a class="termsLink" href="#">Terms of Service</a> and <a class="termsLink" href="#">Privacy Policy</a></p>			
		</div>		
	</div>
	
</div>
<section id="moredetailsSection">
	<div class="detailRow1 fadein">
		<div class="drImg">
			<img src="img/studygroup.svg">
		</div>
		<div class="drdetails">
			<h1>
				Create an<br/>
				invite-only<br/>
				place where you<br/>
				belong
			</h1>
			<p>
				Discord servers are organized into topic-<br/>
				based channels where you can collaborate,<br/>
				share, and just talk about your day without<br/>
				clogging up a group chat.
			</p>
		</div>
	</div>

	<div class="detailRow2 fadein">
		<div class="drdetails">
			<h1>
				Where hanging<br/>
				out is easy
			</h1>
			<p>
				Grab a seat in a voice channel when you’re<br/>
				free. Friends in your server can see you’re<br/>
				around and instantly pop in to talk without<br/>
				having to call.
			</p>
		</div>
		<div class="drImg">
			<img src="img/studygroup2.svg">
		</div>
	</div>

	<div class="detailRow3 fadein">
		<div class="drImg">
			<img src="img/studygroup3.svg">
		</div>
		<div class="drdetails">
			<h1>
				From few to a<br/>
				fandom
			</h1>
			<p>
				Get any community running with moderation<br/>
				tools and custom member access. Give<br/>
				members special powers, set up private<br/>
				channels, and more.
			</p>
		</div>
	</div>
	<div class="detailRow4 fadein">
		<h1>
			RELIABLE TECH FOR STAYING CLOSE
		</h1>
		<p>
			Low-latency voice and video feels like you’re in the same room. Wave hello over video, watch friends stream their<br/>
			games, or gather up and have a drawing session with screen share.
		</p>
		<img src="img/laptopmobile.svg">
	</div>
</section>
<?php include("footer.php"); ?>
<script type="text/javascript" src="js/scrollbar.js"></script>
<script type="text/javascript" src="js/usernameAnimation.js"></script>
<script type="text/javascript" src="js/elementsAnimation.js"></script>
</body>
</html>