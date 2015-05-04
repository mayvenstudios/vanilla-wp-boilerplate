(function ($) {
    var el = $('input.clear, textarea.clear');
     el.focus(function(e) {
         if (e.target.value == e.target.defaultValue)
             e.target.value = '';
     });
     el.blur(function(e) {
         if (e.target.value == '')
             e.target.value = e.target.defaultValue;
     });
 
}(jQuery));