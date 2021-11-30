<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Download | DISCORD - Your Place to Talk and Hang out</title>
	<link rel="stylesheet" type="text/css" href="css/Mainstyle.css">
	<link rel="stylesheet" type="text/css" href="css/1HEADER.css">
	<link rel="stylesheet" type="text/css" href="css/logInStyle.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<link rel="icon" href="img/favicon2.png"/>
	<script src="https://kit.fontawesome.com/12583d8ffd.js" crossorigin="anonymous"></script>
</head>
<body>
	
<div class="DOWNLOADPAGE_Main">
	<?php
		include("1HEADER.php");
	?>

	<div class="mainContent">
		<div class="DownloadPage">
			<div class="HeadLine">
				<h1>get discord<br/>
				for any<br/>
				device</h1>
			</div>
			<p class="SubLine">
				An adventure awaits. Hang out with your friends on our desktop<br/>
				app and keep the conversation going on mobile.
			</p>
			<div class="Bottom_Btns">
				<button class="dwnlodWindows"><i class="fas fa-arrow-down"></i></i>&nbsp; Download For Windows</button>
					<p>Windows 7 or higher</p>
			</div>	
		</div>
		<div class="dwnloadimg">
			<img src="img/laptopbg.svg">
		</div>
	</div>
	<div class="downarrow"><a href="#mainContentDownload"><i class="fas fa-angle-double-down"></i></a></div>
</div>

<section class="downloadOptions">
	<div id="mainContentDownload" class="downloadCol1">
		<div class="downloadRow1 fadein">
			<p class="downloadHeading">iOS</p>
			<button class="downloadpgBtn">Download</button>
			<img src="img/downloadIOS.svg">
		</div>
		<div class="downloadRow2 fadein">
			<p class="downloadHeading">Linux</p>
			<button class="downloadpgBtn">Download</button>
			<img src="img/downloadLinux.svg">
		</div>
		<div class="downloadRow3 fadein">
			<p class="downloadHeading">Feeling Experimental?</p>
			<p class="downloadParagraph">
				Try our Public Test Build and test new features before they<br/>
				launch.
			</p>
			<button class="publicTestBtn">Download Public Build Test <i class="fas fa-chevron-down"></i></button>
		</div>
	</div>
	<div class="downloadCol2">
		<div class="downloadRow4 fadein">
			<p class="downloadHeading">Android</p>
			<button class="downloadpgBtn">Download</button>
			<img src="img/downloadAndroid.svg">
		</div>
		<div class="downloadRow5 fadein">
			<p class="downloadHeading">Mac</p>
			<button class="downloadpgBtn">Download</button>
			<img src="img/downloadMac.svg">
		</div>
	</div>
</section>
<?php include("footer.php"); ?>
<script type="text/javascript" src="js/elementsAnimation.js"></script>
<script type="text/javascript" src="js/scrollbar.js"></script>
</body>
</html>