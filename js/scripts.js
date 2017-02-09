(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
	// Remove last divider
	//	var divider = document.getElementsByClassName('divider');
	//	var len = divider.length -1;
	//	divider[len].innerHTML=' ';
	

	//Hamburger Menu
	var nav = document.getElementById( 'topnav' ), button, menu;
	if ( ! nav ) {
		return;
	}

	button = nav.getElementsByTagName( 'button' )[0];
	menu   = nav.getElementsByTagName( 'ul' )[0];
	if ( ! button ) {
		return;
	}

	// Hide button if menu is missing or empty.
	if ( ! menu || ! menu.childNodes.length ) {
		button.style.display = 'none';
		return;
	}
	
	//Adds and removes toggled-on class, as well as changes icon between x and bars
	button.onclick = function() {
		if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
			menu.className = 'nav-menu';
		}

		if ( -1 !== button.className.indexOf( 'toggled-on' ) ) {
			button.className = button.className.replace( ' toggled-on', '' );
			button.innerHTML = '<i class="fa fa-bars" aria-hidden="true"></i>';
			menu.className = menu.className.replace( ' toggled-on', '' );
		} else {
			button.className += ' toggled-on';
			button.innerHTML = '<i class="fa fa-times" aria-hidden="true"></i>';
			menu.className += ' toggled-on';
		}
	};
	
	});
	
})(jQuery, this);
