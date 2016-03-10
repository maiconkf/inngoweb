var app = {};

app.init = function init() {
	app.openMenu();
};

app.openMenu = function() {
	var c = 0;
	$('.hamburger').off().on({
		'click' : function() {
			var $this = $(this);
			(c % 2 == 0) ? $this.addClass('is-active') : $this.removeClass('is-active');
			c++;
		}
	})
};

app.init();