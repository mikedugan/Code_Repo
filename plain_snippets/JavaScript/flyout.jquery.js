//expects the following values to be set:
//   flyout menu:  "#fixedOptions"
//   expects an image to be the first li in the menu
//   default css should have it margin-right to ($('#fixedOptions').width()- $('#fixedOptions li:eq(0)').width() )

 function createFlyout() {
    //set some vars to work with
    var fly = $('#fixedOptions');
    var icon = $('#fixedOptions img');
    var iWidth = $('#fixedOptions img').width();
    var fWidth = fly.width();
    var hoverMargin = -(fWidth - iWidth);
    var noHoverMargin = -fWidth + iWidth;
  
    //set the initial margin
    fly.css("margin-right",noHoverMargin + "px");
    icon.click(function() {
          if( icon.hasClass("clicked")) {
            //if it's out, send it back in
        fly.css("transition","all 0.3s ease-out");
        fly.css("margin-right", hoverMargin); 
        icon.removeClass("clicked");
      }
          else {
            //if it's in, send it out
      fly.css("transition","all 0.3s ease-in");
      fly.css("margin-right",0);
      icon.addClass("clicked");
      }
    });
    }  
  }
