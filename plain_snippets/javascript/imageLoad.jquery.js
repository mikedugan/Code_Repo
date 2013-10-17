jQuery.fn.loadComplete = function (fn) {
    return this.each(function () {
        if (this.complete || this.readyState == 'complete') {
            fn.call(this);
        } else {
            $(this).load(fn);
        }
    });
};

$('img').loadComplete(function(){
   $(this).fadeIn(800);
});

//don't forget to initially hide them!