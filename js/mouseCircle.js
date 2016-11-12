/*..
* https://www.belulopezdelmonte.com.ar
* @Belu López del Monte
..*/

var canvas = document.getElementById('circle');     // Tomo el canvas
var context = canvas.getContext('2d');              // Defino que sea 2D
var img = document.createElement('IMG');            // Creo un elemento img
var posX;                                           // Posicion X del Mouse
var posY;                                           // Posicion Y del Mouse


function getMousePos(canvas, evt) {
    var rect = canvas.getBoundingClientRect();
    return {
        x: evt.clientX - rect.left,
        y: evt.clientY - rect.top
    };
}

window.addEventListener('mousemove', function(evt) {
    mousePos = getMousePos(canvas, evt);
    posX = mousePos.x;
    posY = mousePos.y;

    updateCircle();
}, false);

function drawCircle (posX, posY) {
    // Save the state, so we can undo the clipping
    context.save();
    // Create a circle
    context.beginPath();
    context.arc(posX, posY, 74, 0, Math.PI * 2, false);
    // Clip to the current path
    context.clip();
    context.drawImage(img, 0, 0);
    // Undo the clipping
    context.restore();
}

function updateCircle() {
    // $('body').mouseout(function() {
    //     context.clearRect(-200, -200, canvas.width, canvas.height);
    // });
    context.clearRect(0,0, canvas.width, canvas.height);
    return setTimeout(drawCircle(posX, posY), 1);
}

img.src = "http://localhost/develop/Actuales/vidrieras/bin/imgs/bg.jpg";