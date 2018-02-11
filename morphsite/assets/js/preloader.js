(function(){

  var preload= document.getElementById("preloader");
  var loading= 0;
  var id= setInterval(frame, 30)

  function frame(){
   
    if(loading==100){

    	clearInterval(id);
    	window.open("home.html", "_self");
    } else {

        loading++;
        if(loading==90)
        {
            $('#preloader').addClass('animated fadeOut');

        }
       

    }

  }


})();