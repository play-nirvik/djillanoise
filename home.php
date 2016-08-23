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
    
    <?php
        $blog_section_1 = ot_get_option('blog_section_1');
        $post_1 = get_post($blog_section_1);
        if(!empty($post_1)) {
    ?>
        <section class="gv-section">
            <div class="container">
                <div class="gv-col-module col-md-6">
                    <h1 class="gv-liner"><?php echo $post_1->post_title; ?></h1>
                    <p><?php echo pd_get_excerpt_from_content($post_1->ID); ?></p>
                    <div class="gv-section-footer text-right">
                        <a href="<?php echo esc_url( get_permalink($post_1->ID) ); ?>" class="link-blue link-bold">Read My Story &gt;&gt;</a>
                    </div>
                </div>
                <div class="gv-col-module col-md-6">
                    <?php if ( has_post_thumbnail( $post_1->ID ) ) { ?>
                    <div class="gv-billboard gv-billboard-white gv-billboard-small">
                        <div class="gv-billboard-header text-right">
                            <h4 class="h3 gv-h-welter50">Read This</h4>
                        </div>
                        <div class="gv-billboard-poster">
                            <?php echo get_the_post_thumbnail( $post_1->ID, 'medium' ); ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            
        </section>
    <?php } ?>
    
    <div id="gv-sect-mediaappr" class="gv-widget gv-widget-fulllength gv-widget-light">
        <div class="container">
            <h6 class="gv-h-sans-caps"><?php echo ot_get_option('featured_in_text'); ?></h6>
            <?php
                $featured_in_images = ot_get_option('featured_in_images');
                if(!empty($featured_in_images)) {
                    $image_array = explode(',', $featured_in_images);
                    foreach ($image_array as $value) {
            ?> 
                    <a href="#" class="mappr-logo-item" target="_blank">
                        <img src="<?php echo $value; ?>" class="img-responsive">
                    </a>
            <?php
                    }
                }
            ?>
        </div>
    </div>
    
    <?php
        $blog_section_2 = ot_get_option('blog_section_2');
        $post_2 = get_post($blog_section_2);
        if(!empty($post_2)) {
    ?>
        <div id="gv-sect-blog" class="gv-section">
            <div class="container">
                <h4 class="h3 gv-h-welter50">Read This</h4>
                <div class="row">
                    <div class="col-sm-6 col-md-8">
                        <?php if ( has_post_thumbnail( $post_2->ID ) ) { ?>
                            <div class="gv-post-img">
                                <a href="<?php echo esc_url( get_permalink($post_2->ID) ); ?>">
                                    <?php echo get_the_post_thumbnail( $post_2->ID, 'full' ); ?>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <h1 class="gv-liner-simple">
                            <a href="<?php echo esc_url( get_permalink($post_2->ID) ); ?>"><?php echo $post_2->post_title; ?></a>
                        </h1>
                        <h5 class="gv-h-slab gv-post-date">
                            <?php echo get_the_date( 'F j, Y', $post_2->ID ); ?> 
                        </h5>
                        <p><?php echo pd_get_excerpt_from_content($post_2->ID); ?></p>
                        <div class="text-right">
                            <a href="<?php echo esc_url( get_permalink($post_2->ID) ); ?>" class="gv-post-permalink link-blue">Read More &gt;&gt;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    
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

<div id="gv-sect-events" class="gv-section">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="clearfix"></div>
                <div class="gv-widget gv-widget-events theme-white">
                    <h3 class="gv-h-welter50">
                        Upcoming Events
                    </h3>
                    
                    <div class="event-listing">
                        <?php
                        $args = array(
                            'numberposts'=> 3,            // should show 5 but only shows 3
                            'post_type'=>'event',         // posts only
                        );    
                        $events = get_posts($args);
                        
                        if(!empty($events)) {
                            foreach($events as $event) {
                                $event_venue = get_post_meta($event->ID, 'event_venue', true);
                                $event_link = get_post_meta($event->ID, 'event_link', true);
                                $event_link = (empty($event_link)) ? '#' : $event_link;
                                $event_date = get_post_meta($event->ID, 'event_date_picker', true);
                                $event_date_array = explode(' ', $event_date);
                        ?>
                        <div class="clearfix event event-3-col">
                            <div class="widget-event-date text-center">
                                <div class="h3 gv-h-welter50"><?php echo $event_date_array[0]; ?></div>
                                <div class="h2 gv-h-welter50"><?php echo $event_date_array[1]; ?></div>
                            </div>
                            <div class="widget-event-title">
                                <h3 class="event-title"><?php echo $event->post_title; ?></h3>
                                <h4 class="event-location"><?php echo $event_venue; ?></h4>
                            </div>
                            <div class="widget-event-info">
                                <a href="<?php echo $event_link; ?>" target="_blank" class="gv-btn gv-btn-blue gv-btn-block">Info</a>
                            </div>
                        </div>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="event-widget-footer text-right">
                        <a href="<?php echo site_url(); ?>/events" class="link-blue link-bold">See all events &gt;&gt;</a>
                    </div>
                </div>
            </div>
                
            <div class="col-md-6 col-md-push-1">
                <?php
                    $contact_form_header = ot_get_option('contact_form_header');
                    $contact_form_shortcode = ot_get_option('contact_form_shortcode');
                    if(!empty($contact_form_header)) {
                ?>    
                    <h3 class="h1 gv-liner-simple"><?php echo $contact_form_header; ?></h3> 
                <?php } ?>
                <div id="gform_widget-2" class="gform_widget">
                    <?php echo do_shortcode($contact_form_shortcode); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
