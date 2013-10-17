var id;
  $(window).resize(function() {
    clearTimeout(id);
    id = setTimeout(function() {
    if($(window).innerHeight() < 700 || $(window).innerWidth < 900) {
	//do this if it's being resized down && params met   
 }

    else {
    //do this if it's being resized up
    }
  }, 1000);
  })
