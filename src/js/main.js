// SCROLL HEIGHT
// $(document).scrollTop();
// INIT FULLPAGE
$(document).ready(function() {
    $('#content').fullpage({
        //Navigation
        menu: '#menu',
        lockAnchors: true,
        anchors:['1', '2', '3', '4', '5', '6', '7', '8', '9','10', '11', '12', '13'],
        navigation: true,
        navigationPosition: 'right',
        // navigationTooltips: ['slide1', 'slide2', 'slide3'],
        showActiveTooltip: false,
        slidesNavigation: false,
        slidesNavPosition: 'bottom',
        //Scrolling
        css3: true,
        scrollingSpeed: 600,
        autoScrolling: false,
        fitToSection: false,
        fitToSectionDelay: 1000,
        scrollBar: true,
        easing: 'easeInOutCubic',
        easingcss3: 'ease',
        loopBottom: false,
        loopTop: false,
        loopHorizontal: true,
        continuousVertical: false,
        normalScrollElements: '#skrollr-body',
        scrollOverflow: false,
        touchSensitivity: 10,
        normalScrollElementTouchThreshold: 3,

        //Accessibility
        keyboardScrolling: false,
        animateAnchor: true,
        recordHistory: true,

        //Design
        controlArrows: true,
        verticalCentered: true,
        resize : false,
        // sectionsColor : ['#ccc', '#fff'],
        paddingTop: '3em',
        paddingBottom: '10px',
        fixedElements: '#header, .footer',
        responsiveWidth: 640,
        responsiveHeight: 0,

        //Custom selectors
        sectionSelector: '.section',
        slideSelector: '.slide',

        //events
        onLeave: function(index, nextIndex, direction){
            // var leavingSection = $(this);

            if(index == 1 && direction == 'down'){
                 $(".floater").addClass('sec1');
            }
             if(index == 2 && direction == 'down'){
                 $(".floater").addClass('sec2');
            }
            // else if(index == 2 && direction == 'up'){}
         
            // SCROLLHELPER - Counts current scroll position
            // if(direction =='down'){
            //     var position = $(document).scrollTop();

            //     console.log(position);
            // }  

            
        },
        afterLoad: function(anchorLink, index){
            // INDEX 2 STATE
            if(index == 2){
            }
        },
        afterRender: function(){
            // SKROLLR INIT
            // var s = skrollr.init();
            // var alts = '.st18,#sky,#bg1,#bg2,.star'; 
            // if ($(window).width() > 640) {
            //     skrollr.init();
            //   } else {
            //     skrollr.init().destroy();
            //     $(alts).addClass('noSkrollr');
            //   }
            
        },
        afterResize: function(){},
        afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
        onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){ 
                    // Adjust Scroll Intensity
            var idx = Math.abs(index - nextIndex)*2.5; 
            $.fn.fullpage.setScrollingSpeed(idx*500);
        }
    });
});


// $(function() {
//         var message = "Welcome!";
//         var original;

//         $(window).focus(function() {
//             if (original) {
//                 document.title = original;
//             }
//         }).blur(function() {
//             var title = $("Come Back!").text();
//             if (title != message) {
//                 original = title;
//             }
//             document.title = message;
//         });
// });

$(window).blur(function() {
    document.title = 'Hello!'; 
}).focus(function() {
    document.title = original;
});


// Our spinning object thingy
var canvas = document.getElementById("cube"),
    ctx = canvas.getContext('2d'),
    points = [],
    r = 0;
    var a = 20; 
    var b = 10; 
    var d = 20; 
    var minDist = 200; 
    var dist; 

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

    // track mouse
    var currentMousePos = { x: 1, y: 1 };
    $(document).mousemove(function(event) {
        currentMousePos.x = event.pageX;
        currentMousePos.y = event.pageY;
    });
    
// create points
for (var i = 0; i < a; i++) {
    var scaleX = currentMousePos.x;
    var scaleZ = currentMousePos.y;
    var rand = Math.random() * canvas.height;
    points.push({
        cy: rand,
        cx: rand * 0.3 + 300,
        r: 360 / a * i,
        p: {x: null, y: null},
        d: Math.random() * (d + 5) + 50,
        s: (Math.random() - 0.5) * 0.7,
        size: Math.random() * 3 + 1,

    })
}

// render loop
function render(){

    var scaleX = currentMousePos.x;
    var scaleZ = currentMousePos.y;



    ctx.clearRect(0, 0, canvas.width, canvas.height);

    ctx.strokeStyle = 'rgba(255, 255, 255,'+ 1.0 +')';
    ctx.fillStyle = '#fff';
    ctx.lineWidth = 1;
    ctx.beginPath();
    for (var i=0, len = points.length; i < len; i++) {
        var p = points[i];
        
        for (var j = i + 1; j < points.length; j++) {
            var p2 = points[j];
            distance(p.p.x, p.p.y, p2.p.x, p2.p.y);
        }


        p.r += p.s;

        var vel = {
            x: p.d * Math.cos(p.r * Math.PI / scaleZ*1) + scaleZ/10,
            y: p.d * Math.sin(p.r * Math.PI / scaleX*1) + scaleX/10
        };

        
        var centx, centy;
        centx = p.p.x - p.size * 0.5;
        centy = p.p.y - p.size * 0.5;
        ctx.fillRect(centx, centy, p.size, p.size);        
        

        p.p.x = p.cx + vel.x;
        p.p.y = p.cy + vel.y;
    }
    ctx.stroke();
    ctx.closePath();

}

function distance(p1x, p1y, p2x, p2y) {
    var dx = p1x - p2x;
    var dy = p1y - p2y;
    dist = Math.sqrt(dx*dx + dy*dy);
     
    if (dist <= minDist) {        
        ctx.moveTo(p1x, p1y);
        ctx.lineTo(p2x, p2y);        
    }  
}



window.requestAnimFrame = (function(){
    return  window.requestAnimationFrame   ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame    ||
        window.oRequestAnimationFrame      ||
        window.msRequestAnimationFrame     ||
    function(callback) {
        window.setTimeout(callback, 1000 / 60);
    };
})();

(function animloop() {
    requestAnimFrame(animloop);
    render();
})();