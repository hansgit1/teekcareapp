window.onload = function(){
  $(document).ready(function() {
	   $('#fullpage').fullpage({
       slidesNavigation: true,
     });
  });


  var d = new Date();
  document.getElementById("dag").innerHTML = d.getDate();
  document.getElementById("maand").innerHTML = d.getMonth() +1;
  document.getElementById("jaar").innerHTML = d.getFullYear();

  var elements = document.getElementsByClassName('typewrite');
  for (var i=0; i<elements.length; i++) {
      var toRotate = elements[i].getAttribute('data-set'),
          period = elements[i].getAttribute('data-period'),
          delay = elements[i].getAttribute('data-delay'),
          loop = elements[i].getAttribute('data-loop');
          //optional data
          delay = (!delay) ? '1000' : delay;
          loop = (!loop) ? 'true' : loop;
      if (toRotate) {
        new typeWrite(elements[i], JSON.parse(toRotate), period, delay, loop);
      }
  }

  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".typewrite > span { border-right: 0.08em solid transparent}";
  css.innerHTML += ' @keyframes typewrite {border-right-color: transparent;}';
  css.innerHTML += ' .typewrite > span {animation-name: typewrite; animation-duration: 1s; animation-iteration-count: infinite;}';
  document.body.appendChild(css);
}

const aantalVragen = 20;
let currentVraag = 0;
let currentProcent = 0;
var elem = document.getElementById("progressBar_green");

function move() {
  // Als we bij laatste vraag zijn
  if (currentVraag == aantalVragen)
    return;

  currentVraag+=1;
  var id = setInterval(frame, 5);

  // Animeren tot de progressbar op de juiste positie staat
  function frame() {
    // Kleine stap om te animeren
    currentProcent += 0.1;

    // Waar de progressbar moet stoppen
    let newProcent = currentVraag/aantalVragen*100;

    // Element updaten
    elem.style.width = currentProcent + '%';

    // Als de progressbar op de juiste positie staat
    if (currentProcent >= newProcent)
      clearInterval(id);
  }
}
/*scroll*/
$(function() {
  $('.smoothScroll').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1500);
        return false;
      }
    }
  });
});

/*range slider*/
    var slider = document.getElementById("slider");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value;

    slider.oninput = function() {
    output.innerHTML = this.value;
}

/*typewriter*/
var typeWrite = function(el, toRotate, period, delay = 2000, loop = 'true') {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10);
        this.delay = parseInt(delay, 10);
        this.loop = loop.toLowerCase();
        this.halt = '';
        this.interval = this.period;
        this.txt = '';
        this.isDeleting = false;
        this.tick();
    };

    typeWrite.prototype.tick = function() {
       if(this.halt != 'stop') {
         //let us make deleting 1/5 of normal speed
      this.interval = (this.interval === this.delay) ? this.period / 5 : this.interval;

        var i       = this.loopNum % this.toRotate.length,
            fullTxt = this.toRotate[i],
            that    = this;

        this.txt = (this.isDeleting) ? fullTxt.substring(0, this.txt.length - 1) : fullTxt.substring(0, this.txt.length + 1);
        this.el.innerHTML = '<span>'+this.txt+'</span>';

        if (!this.isDeleting && this.txt === fullTxt) {
        this.isDeleting = true;
        this.interval = this.delay;
        if(this.loop === 'false' && this.loopNum == (this.toRotate.length - 1)) {
          this.halt = 'stop';
         }
        }
        else if (this.isDeleting && this.txt === '') {
        this.interval = this.period;
        this.isDeleting = false;
        this.loopNum++;
    }
  }
        setTimeout(function() {
        that.tick();
      }, that.interval);
};
