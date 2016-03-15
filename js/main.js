var app = {};

app.init = function init() {
	app.openMenu();
	app.datePicker();
	app.scrollPage();
	app.viewMore();
	app.maps();
};

app.openMenu = function() {
	var c = 0;
	$('.hamburger').off().on({
		'click' : function() {
			var $this = $(this),
				$modal = $('#modal'),
				posOffset = $('.open-modal').position(),
				top;

			if($('body').find('#menu').length > 0) {
				top = '45px';
			} else {
				top = posOffset.top;
			}

			if(c % 2 == 0) {
				$this.addClass('is-active');
				$modal.show().animate({'top' : '0'}, 'fast', 'linear').find('.hamburger').css({'left' : posOffset.left, 'top' : top});
			} else {
				$('.hamburger').removeClass('is-active');
				$modal.animate({'top' : '100vh'}, 'fast', 'linear', function() {
					$modal.hide().find('.hamburger').addClass('is-active');
				});
			}

			c++;

			$(window).resize(function() {
				var $menu = $('.open-modal'),
					posOffset = $menu.position();

				$modal.find('.hamburger').css('left', posOffset.left);
			});
		}
	});

};

app.datePicker = function() {
	$('.datepicker').pickadate({
		format: 'dd mmm, yyyy',
	    selectMonths: true,
	    selectYears: 15
	});
};

app.scrollPage = function() {
	var winHeight = $(window).height()+70,
		body = $('html, body');

	$('.arrow-scroll').off().on({
		'click' : function() {
			body.stop().animate({scrollTop: winHeight}, '300', 'swing');
		}
	});
};

app.viewMore = function() {
	$('.view-more').off().on({
		'click' : function() {
			var $this = $(this),
				$card = $('.card'),
				pos = $this.parents('.card').index();

			$('.card').stop().animate({'width' : '49%'}, 'fast', 'linear');

			if($card.eq(pos).find('.extended').is(':visible')) {
				$card.eq(pos).stop().animate({'width' : '49%'}, 'fast', 'linear').find('img').stop().animate({'width' : '627px'}, 'fast', 'linear');
				$card.eq(pos).find('.extended').fadeOut(function() {
					$card.eq(pos).find('.name').fadeIn();
				});
			} else {
				$card.eq(pos).stop().animate({'width' : '100%'}, 'fast', 'linear').find('img').css('width', '1280px');
				$card.eq(pos).find('.name').fadeOut(function() {
					$card.eq(pos).find('.extended').fadeIn();
				});
			}

			$('.name').show();
			$('.extended').hide();
		}
	});
};

app.maps = function() {
	$('.maps').off().on({
		'click' : function() {
			$('.maps iframe').css('pointer-events', 'auto');
		},
		'mouseleave' : function() {
			$('.maps iframe').css('pointer-events', 'none');
		}
	});
};

app.init();