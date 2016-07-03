<?php
/**
 * Template Name: Events
 *
 */

get_header();
?>

<section class="gv-billboard-wrapper gv-page-feature">
    <div class="gv-billboard">
        <div class="gv-billboard-poster" style="opacity: 0.807143;">
            <?php the_post_thumbnail( 'full' ); ?>
        </div>
        <div class="gv-billboard-callout">
            <div class="container text-right">
                <h1 class="col-sm-6 pull-right"><?php the_title() ?></h1>
            </div>
        </div>
    </div>
</section>

<div class="gv-content-wrapper no-padding">
    <div id="gv-event-page" class="gv-page-wrapper container">
    <?php

        $args = array(
            'post_type'=> 'event',
            'posts_per_page'=> -1
            );              
        
        $the_query = new WP_Query( $args );
        if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
        
        $event_venue = get_post_meta(get_the_ID(), 'event_venue', true);
        $event_link = get_post_meta(get_the_ID(), 'event_link', true);
        $event_date = get_post_meta(get_the_ID(), 'event_date_picker', true);
        $event_date_array = explode(' ', $event_date);
        $event_date = $event_date_array[0] . ' ' . $event_date_array[1];
        $event_day = $event_date_array[2];
        ?>
           <div class="event clearfix">
                <div class="ecol col-sm-2 col-md-3 col-lg-2 event-date">
                    <h3 class="gv-h-welter70">
                        <?php echo $event_date; ?>
                        <span class="event-date-day"><?php echo $event_day; ?></span>
                    </h3>
                </div>
                <div class="ecol col-sm-3 col-md-3 col-lg-4">
                    <h3 class="event-title"><?php the_title() ?></h3>
                </div>
                <div class="ecol col-sm-3 col-md-3 col-lg-3">
                    <div class="event-location"><?php echo $event_venue; ?></div>
                </div>
                <?php if(!empty($event_link)) { ?>
                <div class="col-sm-4 col-md-3 col-lg-3 event-ctrls">
                    <a href="<?php echo $event_link; ?>" target="_blank" class="gv-btn gv-btn-blue gv-btn-xlong">Info</a>
                </div>
                <?php } ?>
            </div> 
        <?php
            endwhile;
            endif;
            wp_reset_postdata();
        ?>
    </div>
</div>

<?php get_footer(); ?>