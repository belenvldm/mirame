/*..
* https://www.belulopezdelmonte.com.ar
* @Belu López del Monte
..*/

var isToggle = 0;
$nameActual = "home";

(function ($) {
    $('.toggle').click(function() {
        if (isToggle == 0) {
            aparecer();
        } else {
            desaparecer();
        }
    });

    $('.gral, #circle, #nav li').click(function() {
        if (isToggle == 1) {
            desaparecer();
        }
    });

    // $('#navmenu').click(function(e) {
        // $name = e.target.name;
    //     $('#'+$nameActual).fadeOut('slow','swing').animate({left: "-50%"},'slow', function () {
    //         $('#'+$nameActual).css({left: "100%"});
        // $nameActual = $name;
    //     });
    //     if ($name != "home") {
    //         $('#circle').css({display: "none"});
    //     } else {
    //         $('#circle').css({display: "block"});
    //     }
    //     $('#'+$name).fadeIn('slow', 'swing').animate({left: 0}, 'slow');
    // });
}) (jQuery);

function aparecer() {
    $('#nav').animate({left: "0"});
    $('.gral').animate({left: "17em"});
    isToggle = 1;
}

function desaparecer() {
    $('#nav').animate({left: "-20%"});
    $('.gral').animate({left: "0"});
    isToggle = 0;
}