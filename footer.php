<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 */
?>

        <div id="gv-main-footer" class="gv-widget-wrapper gv-widget-fulllength gv-footer">
            <div class="container">
                <div class="form-group row">
                    <div class="col-md-3">
                        <div class="gv-mark-type">
                            <a href="<?php echo site_url(); ?>" class="no-hover"><?php echo ot_get_option('logo_text'); ?></a>
                        </div>
                    </div>
                    <div class="col-sm-10 col-md-9 gv-nav-footer">
                        <?php
                            wp_nav_menu( array(
                                'menu' => 'Footer Menu'
                            ) );
                        ?>                 
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-3">
                        <h6 class="gv-h-slab gv-h-slab-normal gv-h-grey"><?php _e('Keep in Touch', 'djillanoise'); ?></h6>
                        
                        <?php $social_media_links = ot_get_option('social_media_links'); ?>
                        
                        
                        <div id="gv_widgets_socialprops-4" class="gv-widget gv-widget-socialprops clearfix text-left">
                            <div class="sidebar-c-5">      
                            <?php 
                                if(!empty($social_media_links)) {
                                    foreach ($social_media_links as $key => $value) { 
                                        $social_media_name = strtolower($value['name']);
                            ?>
                            
                            <span class="wrap-social-item">
                                <a class="hover-social sp-<?php echo $social_media_name; ?>" href="<?php echo $value['href']; ?>" alt="" target="_blank">
                                    <i class="fa fa-<?php echo $social_media_name; ?>"></i>
                                </a>
                            </span>
                            
                            <?php            
                                    }
                                }
                                
                            ?>
                            
                    </div>
                </div>                                          
            </div>
            <div class="col-sm-12 col-md-8 col-md-push-1">
                <div class="gv-widget-mailinglist horizontal">
                    <div class="gv-form">
                        <form method="post" class="gv-mc-horizontal">
                            <?php 
                            $mailchimp_shortcode = ot_get_option('mailchimp_shortcode');
                            
                            if(!empty($mailchimp_shortcode))
                                echo do_shortcode($mailchimp_shortcode); 
                            
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
                <div class="row">
                    <div class="col-sm-8 col-md-6 gv-footer-fineprint">
                        <p>&copy; <?php echo ot_get_option('logo_text'); ?> 2016<br>
                        <a href="<?php echo ot_get_option('privacy_policy_link'); ?>"><?php _e('Privacy Policy', 'djillanoise'); ?></a></p>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="gv-search" class="gv-overlay gv-overlay-white">
            <div class="container">
                <a href="#gv-search|modal-close" class="gv-close gv-close-gray gv-modal-ctrl">×</a>
                <div class="search-form clearfix">
                    <form class="search" method="get" action="<?php echo site_url(); ?>" role="search">
                        <button class="gv-btn gv-btn-white search-submit" type="submit" role="button">
                            <i class="fa fa-search"></i>
                        </button>
                        <input class="search-input" type="search" name="s" placeholder="Type Here">
                    </form>
                </div>
            </div>
        </div>

    </div> <!-- end .gv-body-wrapper -->
<?php wp_footer(); ?>
</body>
</html>
