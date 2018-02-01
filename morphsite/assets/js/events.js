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

