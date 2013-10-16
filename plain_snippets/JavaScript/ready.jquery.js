//does something when the DOM is ready to be traversed

$(function() {
  //code here
  })();

//does something when everything is completely loaded
$(window).load(function(){
  //code here
})

//checks to see if there is an element in the set

var a = $('a');
if(a.get(0)) {
  //do something
  }

//or

if(a.length) {
  //do something
  }

//jquery each loop

var div = $('div');
div.each(function() {
  //do some stuff
  $(this).attr('title','some_div');
  })

//filter by some CSS/jQuery CSS attr

var right = $('.right');
right = right.filter(':even'); //returns only even .right elements
right = right.filter(':hidden'); //returns hidden, even .right elements

//custom jQuery filters
// Define custom filter by extending $.expr[':']    
$.expr[':'].positionAbsolute = function (element) {
  return $(element).css('position') === 'absolute'; 
  };

//anonymous function that executes a filter identical to above
$('div').filter(function () {
   return $(this).css('position') === 'absolute'; 
  })

//stack selector filters
//simply wrap each selector query in brackets [ ]
 alert($('a[title="jQuery"][href^="http://"]').length);
