function collapsePost() {
    $('a.colPost').click(function(event) { 
    event.preventDefault();
    $(this).toggleClass('collapsed');
    if($(this).hasClass('collapsed')) {
      $(this).text('Expand'); }
    else {$(this).text('Collapse');}
    var post = $(this).parent().parent().children('.content');
    var author = post.siblings('.postInfo'); 
    author.toggleClass('postcollapsed'); post.toggle();
    });
  }
