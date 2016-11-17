astro.init();
drop.init({
	selector: '.menu-item-has-children'
});
formSaver.init();
stickyFooter.init();

fluidvids.init({
	selector: ['iframe', 'object'],
	players: ['www.youtube.com', 'player.vimeo.com', 'www.slideshare.net', 'www.google.com/maps', 'maps.google.com']
});