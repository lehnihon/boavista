( function( $ ) {
	$(window).scroll(function() {
        if ($(this).scrollTop() > 600) {
			var FunctionOne = function () {
				var r = $.Deferred();

	        	$(".anima-a").css('visibility','visible');
	        	$(".anima-a").addClass('animated bounceInLeft');
	        	$(".anima-c").css('visibility','visible');
	        	$(".anima-c").addClass('animated bounceInRight');
				setTimeout(function () {
				r.resolve();
				}, 500);
				return r;
			};
	
			FunctionOne().done(
				function () {
		        	$(".anima-b").css('visibility','visible');
		        	$(".anima-b").addClass('animated fadeIn');
				}
			);

        }

        if ($(this).scrollTop() > 900) {
        	$(".anima-d").css('visibility','visible');
        	$(".anima-d").addClass('animated bounceInLeft');
        	$(".anima-e").css('visibility','visible');
        	$(".anima-e").addClass('animated bounceInLeft');

        	$(".anima-f").css('visibility','visible');
        	$(".anima-f").addClass('animated bounceInRight');
        	$(".anima-g").css('visibility','visible');
        	$(".anima-g").addClass('animated bounceInRight');

        }
        if($(this).scrollTop() > 1300) {
			var FunctionOne = function () {
				var r = $.Deferred();

	        	$(".anima-h").css('visibility','visible');
	        	$(".anima-h").addClass('animated fadeIn');

				setTimeout(function () {
				r.resolve();
				}, 500);
				return r;
			};
	
			FunctionOne().done(
				function () {
		        	$(".anima-i").css('visibility','visible');
		        	$(".anima-i").addClass('animated fadeIn');
				}
			);
        } 
	});

} )( jQuery );