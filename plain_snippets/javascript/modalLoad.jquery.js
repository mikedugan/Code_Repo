  function modal() {
    var html = "./path/to/modalFile.html";

    var div= $('a#modal'); //the empty container div in your doc for the modal dialog
    feedback.click(function() {
        $('#modDisplay').dialog({position: {my: 'right top', at:'center center', of: window}}).load(html); 
        return false; //prevent the page from navigating
    });
  }
