var c = document.getElementById("c");
var ctx = c.getContext("2d");
var cw = c.width = window.innerWidth;
var ch = c.height = window.innerHeight;
var cx = cw / 2,
  cy = ch / 2;
var rad = Math.PI / 180;
var requestId = null;
var frames = 360;
var R = cx / 2;

var colors = ["#FA2E59", "#FF703F", "#FF703F", "#F7BC05", "#ECF6BB", "#76BCAD"];

function Particle(x, y) {
  this.a = Math.random() * 2 * Math.PI;
  this.R = randomIntFromInterval(9, 15);
  this.r0 = this.R;
  this.speed = .25 + Math.random();
  this.x = x;
  this.y = y;
  this.color = colors[~~(Math.random() * colors.length)];
}

Particle.prototype.draw = function() {
  if (this.r > 0) {
    ctx.fillStyle = this.color;
    ctx.beginPath();
    ctx.arc(this.x, this.y, this.r, 0, 2 * Math.PI);
    ctx.fill();
  }
}

var pathRy = [];
var particles = [];

function buildTrajectory() {
  pathRy.length = 0;
  for (var a = 0; a <= 360; a += 1) {
    var o = {}
    var t = a * rad;
    o.x = cx + (R * Math.cos(t)) / (1 + (Math.sin(t) * Math.sin(t)));
    o.y = cy + (R * Math.sin(t) * Math.cos(t)) / (1 + (Math.sin(t) * Math.sin(t)));
    pathRy.push(o);
  }
}

function particlesArray() {
  particles.length = 0;
  for (var i = 0; i < pathRy.length; i += 1) {
    var particle = new Particle(pathRy[i].x, pathRy[i].y);
    particles.push(particle);
  }
}

buildTrajectory();
particlesArray();

function Draw() {
  requestId = window.requestAnimationFrame(Draw);
  frames += 1.5;
  ctx.clearRect(0, 0, cw, ch);
  for (var i = 0; i < particles.length; i += 1) {
    var n = ((~~frames - i) % particles.length);
    var p = particles[n];
    p.R = i * p.speed;
    p.r = p.r0 - i / 10;
    p.x = pathRy[n].x + p.R * Math.cos(p.a);
    p.y = pathRy[n].y + p.R * Math.sin(p.a);
    particles[i].draw();
  }
  ctx.globalCompositeOperation = "lighten";
}

function Init() {
  if (requestId) {
    window.cancelAnimationFrame(requestId);
    requestId = null;
  }
  cw = c.width = window.innerWidth;
  ch = c.height = window.innerHeight;
  cx = cw / 2;
  cy = ch / 2;
  R = cx / 2;
  buildTrajectory();
  particlesArray();
  Draw();
};

window.setTimeout(function() {
  Init();
  window.addEventListener('resize', Init, false);
}, 15);

function randomIntFromInterval(mn, mx) {
  return ~~(Math.random() * (mx - mn + 1) + mn);
}