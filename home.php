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
                                <?php
                                    $banner_signature = ot_get_option('banner_signature_graphic');
                                    if(!empty($banner_signature)) {
                                ?>    
                                    <img src="<?php echo $banner_signature; ?>" class="gv-quote-sig">  
                                <?php } ?>
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
                    <div class="gv-widget-mailinglist fullwidth desktop">
                        <div class="gv-widget-content">
                            <form name="gv-mc-main-desktop" method="post">
                                <h1><?php echo ot_get_option('subscription_header'); ?></h1>
                                <h3 class="gv-h-serif"><?php echo ot_get_option('subscription_subheader'); ?></h3>
                                <div class="gv-form">
                                    <div class="row">
                                        <div class="col-xs-11 col-md-push-1">
                                            <div class="gv-widget-alert"><span class="message">Lorem Ipsum Dolor Test</span><a href="#alert:dismiss" class="gv-widget-ctrl close">×</a></div>                                        </div>
                                    </div>
                                    
                                    <?php 
                                    $mailchimp_shortcode = ot_get_option('mailchimp_shortcode');
                                    
                                    if(!empty($mailchimp_shortcode))
                                        echo do_shortcode($mailchimp_shortcode); 
                                    
                                    ?>
                                    
                                </div>
                            </form>
                        </div>
                        
                        <?php
                            $snapchat_image = ot_get_option('snapchat_image');
                            if(!empty($snapchat_image)) {
                        ?>    
                            <div class="gv-widget-standee">
                                <img src="<?php echo $snapchat_image; ?>">
                            </div>  
                        <?php } ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="gv-sect-mediaappr" class="gv-widget gv-widget-fulllength gv-widget-light">
        <div class="container">
            <h6 class="gv-h-sans-caps"><?php echo ot_get_option('featured_in_text'); ?></h6>
            <a href="#" class="mappr-logo-item" target="_blank">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/featured/iHeartMedia-08.png" class="img-responsive">
            </a>
            <a href="#" class="mappr-logo-item" target="_blank">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/featured/macys-logo-transparent.png" class="img-responsive">
            </a>
            <a href="#" class="mappr-logo-item" target="_blank">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/featured/media-temple.png" class="img-responsive">
            </a>
            <a href="#" class="mappr-logo-item" target="_blank">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/featured/Rockstar_energy_drink_logo.svg.png" class="img-responsive">
            </a>
            <a href="#" class="mappr-logo-item" target="_blank">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/featured/space-x.png" class="img-responsive">
            </a>
            <a href="#" class="mappr-logo-item" target="_blank">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/featured/the standard.png" class="img-responsive">
            </a>
                           
        </div>
    </div>
    
    <div class="gv-mixcloud-sect">
        <div class="container">
            <?php
                $mixcloud_header = ot_get_option('mixcloud_header');
                if(!empty($mixcloud_header)) {
            ?>    
                <h2><?php echo $mixcloud_header; ?></h2> 
            <?php } ?>
            
            <div class="row">
                <?php 
                    for($i = 1; $i <= 3; $i++) {
                        $mixcloud_feed = ot_get_option('mixcloud_feed_' . $i);
                        if(!empty($mixcloud_feed)) {
                ?>
                            <div class="col-md-4">
                                <?php echo $mixcloud_feed; ?>
                            </div>
                <?php
                        }
                        $mixcloud_feed = '';
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>