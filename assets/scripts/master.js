
'use strict';

if ('querySelector' in document && 'localStorage' in window && 'addEventListener' in window) {
	var mustard = 'cut';
}

var canvas          = document.getElementById('dots');
var context         = canvas.getContext('2d');
var maxParticles    = 1000;
var particlesArray  = [];
var particlesOrigin = {
	x: 0,
	y: 0
};

var Particle = function () {
	var self = this;

	this.color = randomColor();
	this.size = Math.round(random(50));
	this.half = Math.round(this.size / 2);

	this.position = {
		x: particlesOrigin.x - this.half,
		y: particlesOrigin.y - this.half
	};

	this.velocity = {
		x: random(0, 10) - 5,
		y: random(0, 10) - 5
	};
};

Particle.prototype.updateValues = function () {
	this.position.x += this.velocity.x;
	this.position.y += this.velocity.y;
};

Particle.prototype.draw = function () {
	if (this.withinCanvasBounds()) {
		context.fillStyle = this.color;
		context.beginPath();
		context.arc(this.position.x, this.position.y, this.half, 0, Math.PI * 2, true);
		context.closePath();
		context.fill();
	}
};

Particle.prototype.withinCanvasBounds = function () {
	var result = true;

	if (this.position.x < -this.size) {
		result = false;
	} else if (this.position.x > canvas.width + this.size) {
		result = false;
	}

	if (this.position.y < -this.size) {
		result = false;
	} else if (this.position.y > canvas.height + this.size) {
		result = false;
	}

	return result;
};

function addParticle() {
	var newParticle = new Particle();

	particlesArray.unshift(newParticle);

	if (particlesArray.length > maxParticles) {
		particlesArray.length = maxParticles;
	}
}

function animationLoop() {
	window.requestAnimationFrame(animationLoop);

	context.clearRect(0, 0, canvas.width, canvas.height);

	var particle;

	for (var _i = 0, _len = particlesArray.length; _i < _len; _i += 1) {
		particle = particlesArray[_i];
		particle.updateValues();
		particle.draw();
	}
}

function random(min, max) {
	if (min === undefined) {
		min = 0;
		max = 1;
	} else if (max === undefined) {
		max = min;
		min = 0;
	}

	return (Math.random() * (max - min)) + min;
}

function randomColor(alpha) {

	var colors = {
		r: randomInteger(0, 200),
		g: randomInteger(0, 200),
		b: randomInteger(0, 200)
	};

	colors.a = alpha ? alpha : random(0.75, 1);

	return 'rgba(' + colors.r + ', ' + colors.g + ', ' + colors.b + ', ' + colors.a + ')';
}

function randomInteger(min, max) {
	if (max === undefined) {
		max = min;
		min = 0;
	}

	return Math.floor(Math.random() * (max + 1 - min)) + min;
}

function updateParticlesOrigin(event) {
	event.preventDefault();

	particlesOrigin.x = event.pageX;
	particlesOrigin.y = event.pageY;

	addParticle();
}

canvas.width  = document.body.clientWidth;
canvas.height = document.body.clientHeight;

var devicePixelRatio = window.devicePixelRatio || 1;
var backingStoreRatio = context.webkitBackingStorePixelRatio || context.backingStorePixelRatio || 1;
var ratio = devicePixelRatio / backingStoreRatio;

if (devicePixelRatio !== backingStoreRatio) {
	var oldWidth  = canvas.width;
	var oldHeight = canvas.height;

	canvas.width  = oldWidth * ratio;
	canvas.height = oldHeight * ratio;

	canvas.style.width  = oldWidth + 'px';
	canvas.style.height = oldHeight + 'px';

	context.scale(ratio, ratio);
}

document.addEventListener('mousemove', updateParticlesOrigin);
document.addEventListener('touchmove', updateParticlesOrigin);

animationLoop();
