
$(document).ready(function() {
   $('#fullpage').fullpage({
     slidesNavigation: true,
     controlArrows: false
   });

  //  $('.volgendeVraagButton').click(()=>{
  //     $.fn.fullpage.moveSlideRight();
  //  })

  $('.volgendeVraagButton').on('click', function(e){
      // e.preventDefault();
      var target = $(this).data('target');
      var slide = $(this).data('slide');
      var value = document.getElementById(target).value;
      sendPostRequest(slide, value);
      $.fn.fullpage.moveSlideRight();
  });


   $('#dagboekButton').click(function(){
    $.fn.fullpage.moveSectionDown();
  });

  $('#inleverenResultaten').click(function(){
    $.fn.fullpage.moveSectionDown();
    sendPostRequest(slider1.value, slider2.value, slider3.value);
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

  var slider4 = document.getElementById("myRange4");
  var output4 = document.getElementById("demo4");
  output4.innerHTML = slider4.value;

  slider4.oninput = function() {
    output4.innerHTML = this.value;
  }

  var slider5 = document.getElementById("myRange5");
  var output5 = document.getElementById("demo5");
  output5.innerHTML = slider5.value;

  slider5.oninput = function() {
    output5.innerHTML = this.value;
  }

  var slider6 = document.getElementById("myRange6");
  var output6 = document.getElementById("demo6");
  output6.innerHTML = slider6.value;

  slider6.oninput = function() {
    output6.innerHTML = this.value;
  }

  var slider7 = document.getElementById("myRange7");
  var output7 = document.getElementById("demo7");
  output7.innerHTML = slider7.value;

  slider7.oninput = function() {
    output7.innerHTML = this.value;
  }

  var slider8 = document.getElementById("myRange8");
  var output8 = document.getElementById("demo8");
  output8.innerHTML = slider8.value;

  slider8.oninput = function() {
    output8.innerHTML = this.value;
  }

  var slider9 = document.getElementById("myRange9");
  var output9 = document.getElementById("demo9");
  output9.innerHTML = slider9.value;

  slider9.oninput = function() {
    output9.innerHTML = this.value;
  }

  var slider10 = document.getElementById("myRange10");
  var output10 = document.getElementById("demo10");
  output10.innerHTML = slider10.value;

  slider10.oninput = function() {
  output10.innerHTML = this.value;
  }

  var slider11 = document.getElementById("myRange11");
  var output11 = document.getElementById("demo11");
  output11.innerHTML = slider11.value;

  slider11.oninput = function() {
  output11.innerHTML = this.value;
  }
  
  var slider12 = document.getElementById("myRange12");
  var output12 = document.getElementById("demo12");
  output12.innerHTML = slider12.value;

  slider12.oninput = function() {
  output12.innerHTML = this.value;
  }

  var slider13 = document.getElementById("myRange13");
  var output13 = document.getElementById("demo13");
  output13.innerHTML = slider13.value;

  slider13.oninput = function() {
  output13.innerHTML = this.value;
  }

  var slider14 = document.getElementById("myRange14");
  var output14 = document.getElementById("demo14");
  output14.innerHTML = slider14.value;

  slider14.oninput = function() {
  output14.innerHTML = this.value;
  }

  var slider15 = document.getElementById("myRange15");
  var output15 = document.getElementById("demo15");
  output15.innerHTML = slider15.value;

  slider15.oninput = function() {
  output15.innerHTML = this.value;
  }

  var slider16 = document.getElementById("myRange16");
  var output16 = document.getElementById("demo16");
  output16.innerHTML = slider16.value;

  slider16.oninput = function() {
  output16.innerHTML = this.value;
  }

  var slider17 = document.getElementById("myRange17");
  var output17 = document.getElementById("demo17");
  output17.innerHTML = slider17.value;

  slider17.oninput = function() {
  output17.innerHTML = this.value;
  }

  var slider18 = document.getElementById("myRange18");
  var output18 = document.getElementById("demo18");
  output18.innerHTML = slider18.value;

  slider18.oninput = function() {
  output18.innerHTML = this.value;
  }

  var slider19 = document.getElementById("myRange19");
  var output19 = document.getElementById("demo19");
  output19.innerHTML = slider19.value;

  slider19.oninput = function() {
  output19.innerHTML = this.value;
  }

  var slider20 = document.getElementById("myRange20");
  var output20 = document.getElementById("demo20");
  output20.innerHTML = slider20.value;

  slider20.oninput = function() {
  output20.innerHTML = this.value;
  }

  var slider21 = document.getElementById("myRange21");
  var output21 = document.getElementById("demo21");
  output21.innerHTML = slider21.value;

  slider21.oninput = function() {
  output21.innerHTML = this.value;
  }

  var slider22 = document.getElementById("myRange22");
  var output22 = document.getElementById("demo22");
  output22.innerHTML = slider22.value;

  slider22.oninput = function() {
  output22.innerHTML = this.value;
  }

  var slider23 = document.getElementById("myRange23");
  var output23 = document.getElementById("demo23");
  output23.innerHTML = slider23.value;

  slider23.oninput = function() {
  output23.innerHTML = this.value;
  }

  var slider24 = document.getElementById("myRange24");
  var output24 = document.getElementById("demo24");
  output24.innerHTML = slider24.value;

  slider24.oninput = function() {
  output24.innerHTML = this.value;
  }

  var slider25 = document.getElementById("myRange25");
  var output25 = document.getElementById("demo25");
  output25.innerHTML = slider25.value;

  slider25.oninput = function() {
  output25.innerHTML = this.value;
  }

  console.log(slider1.value, slider2.value);
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
      that    = this;
     that.tick();
   }, that.interval);
};

function printPDF(){
  window.print();
}

function sendPostRequest(slider, value) {
  var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
  var url = $('form').attr('action');
  var body = {};
  var uid = $('input[name="user_id"]').attr('value');
  body._token = CSRF_TOKEN;
  body.uid = uid;
  body.slider = {};
  body.slider.result = slider;
  body.slider.value = value;
  console.log(body);
  $.ajax({
      /* the route pointing to the post function */
      url: url,
      type: 'POST',
      /* send the csrf-token and the insput to the controller */
      data: body,
      dataType: 'JSON',
      /* remind that 'data' is the response of the AjaxController */
      success: function (response) { 
          if(response.status === "success") {
            // do something with response.message or whatever other data on success
            console.log(response);
        } else if(response.status === "error") {
            // do something with response.message or whatever other data on error
            console.log(response.message);
        }
          
      }
  }); 
}

