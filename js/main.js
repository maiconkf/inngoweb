var app = {};

app.init = function init() {
	app.openMenu();
	app.datePicker();
	app.viewMore();
};

app.openMenu = function() {
	var c = 0;
	$('.hamburger').off().on({
		'click' : function() {
			var $this = $(this),
				$modal = $('#modal');

			if(c % 2 == 0) {
				$this.addClass('is-active');
				$modal.show().animate({'top' : '0'}, 'fast', 'linear');
			} else {
				$('.hamburger').removeClass('is-active');
				$modal.animate({'top' : '100vh'}, 'fast', 'linear', function() {
					$modal.hide().find('.hamburger').addClass('is-active');
				});
			}
			c++;

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


app.init();