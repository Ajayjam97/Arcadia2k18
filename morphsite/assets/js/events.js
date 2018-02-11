var eventobj = {
'0' : '1.pdf',
'1':'2.pdf',
'2':'3.pdf'
};
var base_url = "https://arcadiachatbot.firebaseapp.com";

function eventpdf() {
	
	var drop = document.getElementById('events').value;
    document.getElementById('event_submit').innerHTML = '<a target="_blank" class="mu-reg-submit-btn"  href="'+base_url+'/'+eventobj[drop]+'">SUBMIT</a>';
}


$("#carousel > div:gt(0)").hide();

setInterval(function() {
  $('#carousel > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#carousel');
}, 3000);




function next(){

 // write a simple tween object
var tween = KUTE.fromTo('#path4429',  // target shape
   { path: '#path4429' }, // from shape
   { path: '#path4448' }, // to shape
   { // options
  easing: 'easingCubicInOut', 
  yoyo: false, repeat: 0, duration: 2500,
  morphIndex: 127
   }
 ).start();



var tween3 = KUTE.fromTo('#path4427',  // target shape
   { path: '#path4427' }, // from shape
   { path: '#path4446' }, // to shape
   { // options
  easing: 'easingCubicInOut', 
  yoyo: false, 
  repeat: 0, 
  duration: 2500,
  morphIndex: 127
   }
 ).start();


var tween2 = KUTE.fromTo('#path4425',  // target shape
   { path: '#path4425' }, // from shape
   { path: '#path4444' }, // to shape
   { // options
  easing: 'easingCubicInOut', 
  yoyo: false, repeat: 0, duration: 2500,
  morphIndex: 127
   }
 ).start();

}