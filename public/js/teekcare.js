
$(document).ready(function() {
   $('#fullpage').fullpage({
     slidesNavigation: true,
     controlArrows: false
   });

   $('.volgendeVraagButton').click(()=>{
      $.fn.fullpage.moveSlideRight();
   })

   $('#dagboekButton').click(function(){
    $.fn.fullpage.moveSectionDown();
  });

  $('#inleverenResultaten').click(function(){
    $.fn.fullpage.moveSectionDown();
  });
  $('#homeButton').click(function(){
    $.fn.fullpage.moveTo(1);
  });

  $.fn.fullpage.setAllowScrolling(false);
  $.fn.fullpage.setKeyboardScrolling (false);

   var d = new Date();
    document.getElementById("dag").innerHTML = d.getDate();
    document.getElementById("maand").innerHTML = d.getMonth() +1;
    document.getElementById("jaar").innerHTML = d.getFullYear();

  var slider1 = document.getElementById("myRange");
  var output1 = document.getElementById("demo");
  output1.innerHTML = slider1.value;

  slider1.oninput = function() {
    output1.innerHTML = this.value;
  }

  var slider2 = document.getElementById("myRange2");
  var output2 = document.getElementById("demo2");
  output2.innerHTML = slider2.value;

  slider2.oninput = function() {
    output2.innerHTML = this.value;
  }

  var slider3 = document.getElementById("myRange3");
  var output3 = document.getElementById("demo3");
  output3.innerHTML = slider3.value;

  slider3.oninput = function() {
    output3.innerHTML = this.value;
  }

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
});

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

function printPDF(){
  window.print();
}
