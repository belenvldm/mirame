/*..
* https://www.belulopezdelmonte.com.ar
* @Belu López del Monte
..*/

$(document).ready(function() {
	$la = 0;

	$('.link').click(function() {
		if ($la == 0) {
			$('#project #content').animate({left: '-100%'}, 'slow');
			$la = 1;
		} else {
			$('#project #content').animate({left: '0'}, 'slow');
			$la = 0;
		}
	});

	// $('.link').on('click', function() {
	// 	$anchor = $(this).attr("title");

	// 	if ($anchor == "videoPrincipal") {
	// 		$('#project #content').animate({left: '-100%'}, 'slow');
	// 	}

		// if (delta>0) { 						// arriba
			// $(".active").prev().click();
			// event.preventDefault();
		// } else { 							// abajo
			// $(".active").next().click();
			// event.preventDefault()
		// }
	// });
});