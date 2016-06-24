jQuery(document).ready(function($){
   
    // Open search modal on button click   
    $('.gv-search-toggle').click(function(e) {
        e.preventDefault();
        $('#gv-search').fadeIn('fast');
    });
    
    // Close search modal on button click
    $('.gv-search .gv-close').click(function(e){
        e.preventDefault();
        $('#gv-search').fadeOut('fast');
    });
    
    // Open video overlay and autoplay video   
    $('.gv-billboard .play-btn').click(function(e) {
        e.preventDefault();
        $('body').addClass('modal-active');
        $('#banner_video').fadeIn('fast');
        
        var videoURL = $('#banner_video_player').attr('src') + '?autoplay=1';
        $('#banner_video_player').attr('src', videoURL);
    });
    
    // Close video overlay and stop video playback
    $('.video-container .gv-close').click(function(e){
        e.preventDefault();
        $('body').removeClass('modal-active');
        $('#banner_video').fadeOut('fast');
        
        var videoURL = $('#banner_video_player').attr('src');
        var tempArr = videoURL.split("?");
        
        $('#banner_video_player').attr('src', tempArr[0]);
    });
});
