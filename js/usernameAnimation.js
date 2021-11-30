$(function(){
	let btnwindows = $(".btn");
	let btnOpenBrowser = $(".openInBrowser");
	let btnbrowserUsername = $(".usernameDiv");
	let passwordDiv = $(".passwordDiv");
	let usernameBtn = $(".usernameBtn");
	passwordDiv.hide();
	btnbrowserUsername.hide();
	$(".termsText").hide();

	btnOpenBrowser.click(function(){
		btnwindows.slideUp(100);
		btnOpenBrowser.slideUp(100);
		btnbrowserUsername.slideDown(500);
		$(".termsText").slideDown(500);
	});
	usernameBtn.click(function(){
		if($(".browserUsername").val()!="")
		{
			btnbrowserUsername.slideUp(100);
			passwordDiv.slideDown(500);
		}
	});

	
});