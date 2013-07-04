//@codekit-prepend "libs/modernizr-latest.js", "libs/jquery-2.0.2.js", "../modules/jquery-cookielaw/jquery-cookielaw.js", "../modules/wt-menu/wt-menu.js", "libs/ie-boxsizing.js";


/**
 * Custom functionality goes here
 */
$(function()
{
	$('body').cookielaw();
	$('#styx').wtmenu();
});