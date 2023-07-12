TweenLite.set("#container", { perspective: 600 });
TweenLite.set("img", { xPercent: "-50%", yPercent: "-50%" });

var total = 30;
var warp = document.getElementById("container");
var w = window.innerWidth;
var h = window.innerHeight;

var rosas = [];

for (var i = 0; i < total; i++) {
  var Div = document.createElement("div");
  TweenLite.set(Div, {
    attr: { class: "dot" },
    x: R(0, w),
    y: R(-200, -150),
    z: R(-200, 200),
  });
  warp.appendChild(Div);
  rosas.push(Div);
}

function animarRosas() {
  for (var i = 0; i < rosas.length; i++) {
    var rosa = rosas[i];
    TweenMax.to(rosa, R(6, 15), {
      y: h + 100,
      ease: Linear.easeNone,
      repeat: -1,
      delay: -15,
    });
    TweenMax.to(rosa, R(4, 8), {
      x: "+=100",
      rotationZ: R(0, 180),
      repeat: -1,
      yoyo: true,
      ease: Sine.easeInOut,
    });
    TweenMax.to(rosa, R(2, 8), {
      rotationX: R(0, 360),
      rotationY: R(0, 360),
      repeat: -1,
      yoyo: true,
      ease: Sine.easeInOut,
      delay: -5,
    });
  }
}

function pararAnimacaoRosas() {
  for (var i = 0; i < rosas.length; i++) {
    var rosa = rosas[i];
    TweenMax.killTweensOf(rosa);
  }
}

function R(min, max) {
  return min + Math.random() * (max - min);
}
