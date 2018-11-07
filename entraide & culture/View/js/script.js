// Global
var win = window,
    doc = document;

// Global Functions

function hasClass(el, cls) {
    return el.className.match(new RegExp('(\\s|^)' + cls + '(\\s|$)'));
};

function addClass(el, cls) {
    if (!this.hasClass(el, cls)) {
        el.className += " " + cls;
    }
};

function removeClass(el, cls) {
    if (this.hasClass(el, cls)) {

        var reg = new RegExp('(\\s|^)' + cls + '(\\s|$)');
        el.className = el.className.replace(reg, ' ');
    }
};

// Elements

var site = doc.getElementsByClassName('site-wrap')[0];
var wrap = doc.getElementsByClassName('panel-wrap')[0];

var panel = doc.getElementsByClassName('panel');

var zoom = doc.getElementsByClassName('js-zoom');

var nav_up = doc.getElementsByClassName('js-up'),
    nav_left = doc.getElementsByClassName('js-left'),
    nav_right = doc.getElementsByClassName('js-right'),
    nav_down = doc.getElementsByClassName('js-down');

var nav_upb = doc.getElementsByClassName('jsupb'),
    nav_upc = doc.getElementsByClassName('jsupc'),
    nav_upd = doc.getElementsByClassName('jsupd'),
    nav_leftb = doc.getElementsByClassName('jsleftb'),
    nav_leftc = doc.getElementsByClassName('jsleftc'),
    nav_rightb = doc.getElementsByClassName('jsrightb'),
    nav_P2xM1y = doc.getElementsByClassName('moveP2xM1y'),
    nav_M2xP1y = doc.getElementsByClassName('moveM2xP1y'),
    nav_Mggg = doc.getElementsByClassName('moveMggg'),
    nav_downb = doc.getElementsByClassName('jsdownb');
    nav_moveA = doc.getElementsByClassName('moveA');
    nav_moveDownc = doc.getElementsByClassName('moveDownc');

var animation = doc.getElementsByClassName('js-animation');

// Tracking
var pos_x = 0,
    pos_y = 0;

function setPos() {
    wrap.style.transform = 'translateX(' + pos_x + '00%) translateY(' + pos_y + '00%)';
    setTimeout(function () {
        removeClass(wrap, 'animate');
    }, 600);
}

setPos();

function moveUp() {
    addClass(wrap, 'animate');
    pos_y++;
    setPos();
}
function moveUpb() {
    addClass(wrap, 'animate');
    pos_y-=2;
    pos_x-=1;
    setPos();
}
function moveUpc() {
    addClass(wrap, 'animate');
    pos_y+=2;
    pos_x+=1;
    setPos();
}
function moveUpd() {
    addClass(wrap, 'animate');
    pos_y+=2;
    pos_x-=1;
    setPos();
}

function moveLeft() {
    addClass(wrap, 'animate');
    pos_x++;
    setPos();
}
function moveLeftc() {
    addClass(wrap, 'animate');
    pos_x+=2;
    setPos();
}
function moveLeftb() {
    addClass(wrap, 'animate');
    pos_x-=2;
    setPos();
}

function moveRight() {
    addClass(wrap, 'animate');
    pos_x--;
    setPos();
}
function moveRightb() {
    addClass(wrap, 'animate');
    pos_x-=2;
    pos_y--;
    setPos();
}

function moveDown() {
    addClass(wrap, 'animate');
    pos_y--;
    setPos();
}
function moveDownb() {
    addClass(wrap, 'animate');
    pos_y-=2;
    setPos();
}
function moveDownc() {
    addClass(wrap, 'animate');
    pos_y+=2;
    setPos();
}
function moveP2xM1y(){
    addClass(wrap, 'animate');
    pos_y+=1;
    pos_x-=2;
    setPos();
}
function move2Mggg(){
    addClass(wrap, 'animate');
    pos_y-=1;
    pos_x+=2;
    setPos();
}
function moveM2xP1y(){
    addClass(wrap, 'animate');
    pos_y+=1;
    pos_x+=2;
    setPos();
}
function moveA(){
    addClass(wrap, 'animate');
    pos_y-=2;
    pos_x+=1;
    setPos();
}

for (var x = 0; x < nav_up.length; x++) {
    if (window.CP.shouldStopExecution(0)) break;
    nav_up[x].addEventListener('click', moveUp);
}
window.CP.exitedLoop(0);

for (var x = 0; x < nav_left.length; x++) {
    if (window.CP.shouldStopExecution(1)) break;
    nav_left[x].addEventListener('click', moveLeft);
}
window.CP.exitedLoop(1);

for (var x = 0; x < nav_right.length; x++) {
    if (window.CP.shouldStopExecution(2)) break;
    nav_right[x].addEventListener('click', moveRight);
}
window.CP.exitedLoop(2);

for (var x = 0; x < nav_down.length; x++) {
    if (window.CP.shouldStopExecution(3)) break;
    nav_down[x].addEventListener('click', moveDown);
}
window.CP.exitedLoop(3);

// ~~~~~~~~

for (var x = 0; x < nav_upb.length; x++) {
    if (window.CP.shouldStopExecution(~4)) break;
    nav_upb[x].addEventListener('click', moveUpb);
}
window.CP.exitedLoop(4);

for (var x = 0; x < nav_leftb.length; x++) {
    if (window.CP.shouldStopExecution(5)) break;
    nav_leftb[x].addEventListener('click', moveLeftb);
}
window.CP.exitedLoop(5);

for (var x = 0; x < nav_rightb.length; x++) {
    if (window.CP.shouldStopExecution(6)) break;
    nav_rightb[x].addEventListener('click', moveRightb);
}
window.CP.exitedLoop(6);

for (var x = 0; x < nav_downb.length; x++) {
    if (window.CP.shouldStopExecution(7)) break;
    nav_downb[x].addEventListener('click', moveDownb);
}
window.CP.exitedLoop(7);

for (var x = 0; x < nav_P2xM1y.length; x++) {
    if (window.CP.shouldStopExecution(8)) break;
    nav_P2xM1y[x].addEventListener('click', moveP2xM1y);
}
window.CP.exitedLoop(8);

for (var x = 0; x < nav_M2xP1y.length; x++) {
    if (window.CP.shouldStopExecution(9)) break;
    nav_M2xP1y[x].addEventListener('click', moveM2xP1y);
}
window.CP.exitedLoop(9);

for (var x = 0; x < nav_leftc.length; x++) {
    if (window.CP.shouldStopExecution(10)) break;
    nav_leftc[x].addEventListener('click', moveLeftc);
}
window.CP.exitedLoop(10);

for (var x = 0; x < nav_Mggg.length; x++) {
    if (window.CP.shouldStopExecution(11)) break;
    nav_Mggg[x].addEventListener('click', move2Mggg);
}
window.CP.exitedLoop(11);

for (var x = 0; x < nav_moveA.length; x++) {
    if (window.CP.shouldStopExecution(12)) break;
    nav_moveA[x].addEventListener('click', moveA);
}
window.CP.exitedLoop(12);

for (var x = 0; x < nav_moveDownc.length; x++) {
    if (window.CP.shouldStopExecution(12)) break;
    nav_moveDownc[x].addEventListener('click', moveDownc);
}
window.CP.exitedLoop(12);

for (var x = 0; x < nav_upc.length; x++) {
    if (window.CP.shouldStopExecution(13)) break;
    nav_upc[x].addEventListener('click', moveUpc);
}
window.CP.exitedLoop(13);



for (var x = 0; x < nav_upd.length; x++) {
    if (window.CP.shouldStopExecution(14)) break;
    nav_upd[x].addEventListener('click', moveUpd);
}
window.CP.exitedLoop(14);









//~~~~~~~~~~

// Animations
window.CP.exitedLoop(3);
for (var x = 0; x < animation.length; x++) {
    if (window.CP.shouldStopExecution(4)) break;
    (function (_x) {
        animation[_x].addEventListener('click', function () {
            toggleAnimation(_x);
        });
    })(x);
}
window.CP.exitedLoop(4);

function toggleAnimation(i) {
    for (var x = 0; x < animation.length; x++) {
        if (window.CP.shouldStopExecution(5)) break;
        if (i === x) {
            addClass(animation[x], 'active');
            addClass(wrap, animation[x].getAttribute('data-animation'));
        } else {
            removeClass(animation[x], 'active');
            removeClass(wrap, animation[x].getAttribute('data-animation'));
        }
    }
    window.CP.exitedLoop(5);

}

for (var x = 0; x < zoom.length; x++) {
    if (window.CP.shouldStopExecution(6)) break;
    zoom[x].addEventListener('click', zoomOut);
}
window.CP.exitedLoop(6);

function zoomOut(e) {
    e.stopPropagation();
    addClass(site, 'show-all');
    for (var x = 0; x < panel.length; x++) {
        if (window.CP.shouldStopExecution(7)) break;
        (function (_x) {
            panel[_x].addEventListener('click', setPanelAndZoom);
        })(x);
    }
    window.CP.exitedLoop(7);
}

function setPanelAndZoom(e) {
    pos_x = -e.target.getAttribute('data-x-pos'),
        pos_y = e.target.getAttribute('data-y-pos');
    setPos();
    zoomIn();
}


function zoomIn() {
    for (var x = 0; x < panel.length; x++) {
        if (window.CP.shouldStopExecution(8)) break;
        panel[x].removeEventListener('click', setPanelAndZoom);
    }
    window.CP.exitedLoop(8);
    removeClass(site, 'show-all');
}
