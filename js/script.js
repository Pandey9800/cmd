var colors = ['green', 'orange', 'blue']; // Define Your colors here, can be html name of color, hex, rgb or anything what You can use in CSS
var active = 0;
setInterval(function(){
    document.querySelector('upleft').style.background = colors[active];
    active++;
    if (active == colors.length) active = 0;
}, 30000);