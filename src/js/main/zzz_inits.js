astro.init();
drop.init({
	selector: '.menu-item-has-children'
});
stickyFooter.init();

fluidvids.init({
	selector: ['iframe', 'object'],
	players: ['www.youtube.com', 'player.vimeo.com', 'www.slideshare.net', 'www.google.com/maps', 'maps.google.com']
});

// Add show/hide password checkbox
;(function (window, document, undefined) {

	'use strict';

	// Check that password fields exists
	var pws = document.querySelector( '.wpwebapp-form-password' );
	if ( !pws ) return;

	// Get submit button
	var submit = document.querySelector( '.wpwebapp-form-button' );
	if ( !submit ) return;

	// Inject password toggle
	var div = document.createElement('div');
	div.innerHTML = '<p>x</p><label class="x-ray margin-bottom"><input type="checkbox" data-x-ray=".wpwebapp-form-password" data-default="hide"> Show password</label>';
	submit.parentNode.insertBefore( div.childNodes[1], submit );

	// Initialize X-Ray
	xray.init();

})(window, document);