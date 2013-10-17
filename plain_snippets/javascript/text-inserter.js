	
//uses a select box to input content from file into a text area 
var sel = $('select');
	sel.change(function() {
		var f = $(this).val();
		$.get("./path/to/file/" + f, function(d) {
			$('textarea').val(d);
		})
	})
