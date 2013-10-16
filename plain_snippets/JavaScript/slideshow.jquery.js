//expects the following vars to be set:
//   individual slides   ".slideshow"
//   insert an element in addSliderBtns if there is a parent container class/ID 

 function createSlideshow(){
     cSlide = $('.slideshow:eq(0)'); //the current slide
     $('.slideshow').not(':eq(0)').hide();  //make all others invisible

      //add the next and previous buttons and set vars
    addSliderBtns(cSlide);   ///create the buttons
     prev = $('.prev');   //set them equal to vars
     next = $('.next');

     next.click(nClick); prev.click(pClick);
    });
  }

  function addSliderBtns(cSlide) {
      //if you don't understand this part, you should quit your job
      $('.slideshow').parent()..after('<button class="prev"></button>');
      $('.slideshow').parent().after('<button class="next"></button>');
  }

  function pClick() {
    cSlide.slideToggle(500); //slide out
    if(cSlide.is('.slideshow:eq(0)')) {  //if it's the first
      console.log('first');
      cSlide.parent().append(cSlide);   //make it the last
    }

    cSlide = cSlide.prev();  //set it equal to the previous item
    cSlide.slideToggle(500);  //slide in 
  }

  function nClick() {
    cSlide.slideToggle(500); //slide out
    var s = $('.slideshow').size();
   if(cSlide.is('.slideshow:last-child')){  //if it's last
    console.log('last');
      cSlide.parent().prepend(cSlide); //make it first
    }
    cSlide = cSlide.next();  //set it equal to the next item
    cSlide.slideToggle(500); //slide it in
}
