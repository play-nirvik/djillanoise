<div class="col-md-4 gv-global-sidebar">
   <div class="gv-widget clearfix">
        <div class="gv-widget-mailinglist sidebar">
            <h2 class="h1 text-right">
                <p>Subscribe <span class="nobreak">for access</span> <span class="nobreak">to exclusive</span> content.</p>
            </h2>
            
            <?php 
                $mailchimp_shortcode = ot_get_option('mailchimp_shortcode');
                
                if(!empty($mailchimp_shortcode))
                    echo do_shortcode($mailchimp_shortcode); 
                
            ?>
                                    
        </div>
    </div>
    
    <?php $social_media_links = ot_get_option('social_media_links'); ?>
    
    <div id="gv_widgets_socialprops-2" class="gv-widget gv-widget-socialprops clearfix text-center">
        <div class="sidebar-c-5">           
        <?php 
            if(!empty($social_media_links)) {
                foreach ($social_media_links as $key => $value) { 
                    $social_media_name = strtolower($value['name']);
        ?>
                <span class="wrap-social-item">
                    <a class="sp-circle sp-<?php echo $social_media_name; ?>" href="<?php echo $value['href']; ?>" alt="" target="_blank">
                        <i class="fa fa-<?php echo $social_media_name; ?>"></i>
                    </a>
                </span>
        <?php            
                }
            }
            
        ?>
        </div>
    </div>        
    
    <?php
        $args = array(
            'numberposts'=>2,            // should show 5 but only shows 3
            'post_type'=>'post',         // posts only
            'meta_key'=>'_thumbnail_id', // with thumbnail
        );    
        $articles = get_posts($args);
        
        if(!empty($articles)) {
            foreach($articles as $article) {
    ?>
    
                <div class="gv-widget gv-widget-articleunit">
                    <div class="gv-articleunit">
                        <h4 class="gv-h-welter50 text-right">Must Read</h4>
                        <div class="gv-articleunit-content">
                            <div class="gv-articleunit-thumb">
                                <a href="<?php echo get_permalink($article->ID); ?>">
                                    <?php echo get_the_post_thumbnail( $article->ID, 'medium', array( 'class' => 'attachment-ad-unit-size size-ad-unit-size' ) ); ?>
                                </a>
                            </div>
                            <h3 class="h2 gv-liner-simple">
                                <a href="<?php echo get_permalink($article->ID); ?>">
                                    <?php echo $article->post_title; ?>                       
                                </a>
                            </h3>
                        </div>
                        <div class="gv-articleunit-footer">
                            <span class="gv-articuleunit-date"><?php echo get_the_date( 'F d, Y', $article->ID ); ?></span>
                            <a href="<?php echo get_permalink($article->ID); ?>">Read Now &gt;&gt;</a>
                        </div>
                    </div>
                </div>
    <?php
            }
        }
    ?>

    <div class="clearfix"></div>
    
    <div class="gv-widget gv-widget-events theme-black">
        <h3 class="h1">Upcoming Events</h3>
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
                    <div class="clearfix event event-2-col">
                        <a href="<?php echo $event_link; ?>" class="event-linker" target="_blank">
                            <div class="widget-event-date text-center">
                                <div class="h3 gv-h-welter50"><?php echo $event_date_array[0]; ?></div>
                                <div class="h2 gv-h-welter50"><?php echo $event_date_array[1]; ?></div>
                            </div>
                            <div class="widget-event-title">
                                <h3 class="event-title"><?php echo $event->post_title; ?></h3>
                                <h4 class="event-location"><?php echo $event_venue; ?></h4>
                            </div>
                        </a>
                        <div class="widget-event-info">
                            <a href="<?php echo $event_link; ?>" class="event-linker" target="_blank"></a>
                            <a href="<?php echo $event_link; ?>" target="_blank" class="gv-btn gv-btn-blue gv-btn-block">Info</a>
                        </div>
                    </div>
        <?php
                }
            }
        ?>
    
        <div class="event-widget-footer text-center">
            <a href="<?php echo site_url(); ?>/events" class="gv-btn gv-btn-blue gv-btn-block" target="_blank" title="View all events">
                <i class="fa fa-calendar-check-o hidden-md"></i>&nbsp;&nbsp;View All
            </a>
        </div>
    </div>
</div>