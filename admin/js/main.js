// .. MOUSE PARA LA MASCARA ..
var domBody = $( "body" );
var jsCursorFollower = $('.js-cursor-follower');
function divMouseFollow(){domBody.mousemove(function(e){var t=e.pageX,a=e.pageY;TweenMax.to(jsCursorFollower,.4,{x:t,y:a})})}$(document).ready(function(){$(".cursor-follower").length&&divMouseFollow()});