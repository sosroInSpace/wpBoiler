$(document).ready(function(){
	// call your functions
	ok_console_stamp();
	mobile_menu();
});

// okmg console stamp
function ok_console_stamp(){
	console.log('%c Website built by okmg.com ','background: #E28564; color: #333; font-weight: bold; text-transform: uppercase;padding:2.5px 10px;border-radius:5px;');
}
// mobile menu

function mobile_menu(){
	var burger_button = $('.hamburger');
	mobile_nav = $('.mobile-menu-wrapper');
	hamburger_active = 'is-active';
	mobile_nav_active = 'mobile-nav-active';

	burger_button.click(function(){
		$(this).toggleClass(hamburger_active);
		mobile_nav.toggleClass(mobile_nav_active);
	});

	
}