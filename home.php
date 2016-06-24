<?php
/**
 * The template for displaying home page
 *
 */

get_header();
?>

<section class="gv-billboard-wrapper" style="margin-top: 0px; margin-bottom: 0px; opacity: 1;">
    <div class="gv-billboard-features">
        <div class="gv-billboard">
            <div class="gv-billboard-poster" style="opacity: 1;">
                
                <?php
                    $banner_background = ot_get_option('banner_background_image');
                    if(!empty($banner_background)) {
                ?>    
                    <img src="<?php echo $banner_background; ?>" class="gv-billboard-poster-img">  
                <?php } ?>
                
            </div>
            <div class="gv-billboard-callout">
                <div class="container">
                    <div class="row">
                        <div class="gv-billboard-callout-inner">
                            <blockquote class="gv-quote-style">
                                <?php echo ot_get_option('banner_quote'); ?>                                
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php
                $banner_video = ot_get_option('banner_youtube_url');
                if(!empty($banner_video)) {
            ?>    
                <a href="#banner_video|modal-open-autoplay" class="gv-modal-ctrl gv-billboard-interact play-btn" alt="Open Video"></a>
            <?php } ?>
            
        </div>
    </div>
</section>

<?php
    if(!empty($banner_video)) {
?>  
    <div id="banner_video" class="gv-overlay gv-overlay-black">
        <div class="video-container">
            <a href="#banner_video|modal-close" class="gv-modal-ctrl gv-close gv-close-gray">×</a>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe id="banner_video_player" width="560" height="315" src="<?php echo $banner_video;  ?>" frameborder="0" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
<?php } ?>

<div class="gv-content-wrapper no-padding">
    <div class="gv-widget-wrapper gv-widget-bg gv-widget-fulllength">
        <div class="gv-widget clearfix">
            <div class="container"> 
                <div class="row clearfix">
                    <div class="gv-widget-mailinglist mobile gvmc-ctrl-nojs">
                        <a href="http://eepurl.com/LY3M5" target="_blank" class="gv-btn gv-btn-red">Subscribe</a>
                    </div>
                    <div class="gv-widget-mailinglist fullwidth desktop">
                        <div class="gv-widget-content">
                            <form name="gv-mc-main-desktop">
                                <h1><?php echo ot_get_option('subscription_header'); ?></h1>
                                <h3 class="gv-h-serif"><?php echo ot_get_option('subscription_subheader'); ?></h3>
                                <div class="gv-form">
                                    <div class="row">
                                        <div class="col-xs-11 col-md-push-1">
                                            <div class="gv-widget-alert"><span class="message">Lorem Ipsum Dolor Test</span><a href="#alert:dismiss" class="gv-widget-ctrl close">×</a></div>                                        </div>
                                    </div>
                                    <div class="gv-form-group">
                                        <div class="row">
                                            <div class="col-xs-4 col-md-push-1">
                                                <label for="mce-fname">
                                                    Name
                                                </label>
                                            </div>
                                            <div class="col-xs-4 col-md-push-1">
                                                <label for="mce-email">
                                                    Email
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mc-field-group col-xs-4 col-md-push-1">
                                                <input type="text" value="" name="fname" class="form-control" placeholder="Your Name Here">
                                            </div>
                                            <div class="mc-field-group col-xs-4 col-md-push-1">
                                                <input type="email" value="" name="email" class="required email form-control" placeholder="youremail@example.com">
                                            </div>
                                            <div class="col-xs-3 col-md-push-1">
                                                <div class="clear text-right">
                                                    <button name="subscribe" class="gvmc-ctrl-subscribe gv-btn gv-btn-red gv-btn-block">Subscribe</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="gv-widget-standee">
                            <img src="https://s3.amazonaws.com/gv2016wp/wp-content/uploads/20160112164228/snap-me-2.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="gv-sect-mediaappr" class="gv-widget gv-widget-fulllength gv-widget-light">
        <div class="container">
            <h6 class="gv-h-sans-caps"><?php echo ot_get_option('featured_in_text'); ?></h6>
            <a href="http://www.nytimes.com/2013/11/03/technology/riding-the-hashtag-in-social-media-marketing.html" class="mappr-logo-item" target="_blank">
                <img src="https://s3.amazonaws.com/gv2016wp/wp-content/uploads/20151120171816/NYT-logo.png" class="img-responsive" style="min-width:290px;">
            </a>
            <a href="http://www.forbes.com/sites/jimkeenan/2015/07/22/askgaryvee-changing-the-mentoring-game-for-young-entrepreneurs/" class="mappr-logo-item" target="_blank">
                <img src="https://s3.amazonaws.com/gv2016wp/wp-content/uploads/20151120171924/Forbes-logo.png" class="img-responsive" style="min-width:100px;">
            </a>
            <a href="http://fortune.com/40-under-40/2014/gary-vaynerchuk-40/" class="mappr-logo-item" target="_blank">
                <img src="https://s3.amazonaws.com/gv2016wp/wp-content/uploads/20151120172004/Fortune-logo.png" class="img-responsive" style="min-width:125px;">
            </a>
            <a href="http://www.inc.com/john-rampton/25-social-media-keynote-speakers-you-need-to-know.html" class="mappr-logo-item" target="_blank">
                <img src="https://s3.amazonaws.com/gv2016wp/wp-content/uploads/20151120172034/Inc-logo.png" class="img-responsive" style="min-width:105px;">
            </a>
            <a href="http://www.entrepreneur.com/video/244087" class="mappr-logo-item" target="_blank">
                <img src="https://s3.amazonaws.com/gv2016wp/wp-content/uploads/20151120172106/Entrepreneur-logo.png" class="img-responsive" style="min-width:150px;">
            </a>
            <a href="http://www.fastcompany.com/3042042/the-secret-behind-the-most-innovative-tweeters" class="mappr-logo-item" target="_blank">
                <img src="https://s3.amazonaws.com/gv2016wp/wp-content/uploads/20151120172142/Fast_Company-logo.png" class="img-responsive" style="min-width:140px;">
            </a>
            <a href="http://mashable.com/2015/02/17/john-legere-spoiled-ceos/#Xvhtq1XLfZqK" class="mappr-logo-item" target="_blank">
                <img src="https://s3.amazonaws.com/gv2016wp/wp-content/uploads/20151120172153/Mashable-logo.png" class="img-responsive" style="min-width:140px;">
            </a>
            <a href="http://www.wsj.com/articles/the-secret-to-a-perfect-six-second-video-1422244846?alg=y" class="mappr-logo-item" target="_blank">
                <img src="https://s3.amazonaws.com/gv2016wp/wp-content/uploads/20151120172156/tWSJ-logo.png" class="img-responsive" style="min-width:300px;">
            </a>
            <a href="http://www.crainsnewyork.com/40under40/Vaynerchuk" class="mappr-logo-item" target="_blank">
                <img src="https://s3.amazonaws.com/gv2016wp/wp-content/uploads/20151120171733/Crains-logo.png" class="img-responsive" style="min-width:150px;max-width:-6px;">
            </a>
            <a href="http://www.success.com/profile/gary-vaynerchuk" class="mappr-logo-item" target="_blank">
                <img src="https://s3.amazonaws.com/gv2016wp/wp-content/uploads/20160401203939/SUCCESS_logo_black.png" class="img-responsive" style="min-width:150px;max-width:150px;">
            </a>
                           
        </div>
    </div>
</div>

<?php get_footer(); ?>