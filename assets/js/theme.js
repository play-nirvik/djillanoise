jQuery(document).ready(function($){
   
    // Open search modal on button click   
    $('.gv-search-toggle').click(function(e) {
        e.preventDefault();
        $('#gv-search').fadeIn('fast');
    });
    
    // Close search modal on button click
    $('.gv-close').click(function(e){
        e.preventDefault();
        $('#gv-search').fadeOut('fast');
    });
});
