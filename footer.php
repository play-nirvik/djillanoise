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
                <div class="gv-widget-alert"><span class="message">Lorem Ipsum Dolor Test</span><a href="#alert:dismiss" class="gv-widget-ctrl close">×</a></div>                <form name="gv-mc-horizontal">
                    <div class="row">
                        <h5 class="gv-h-slab gv-h-slab-normal text-center hidden-md hidden-lg ">
                            Get all my best stuff in your inbox.                        </h5>
                        <div class="col-sm-4 col-md-4">
                            <div class="form-group mc-field-group">
                                <label for="mce-fname">Name</label>
                                <input type="text" value="" name="fname" class="form-control" placeholder="Your Name Here">
                            </div>
                        </div>
                        <!-- <div class="clearfix visible-sm-block"></div> -->
                        <div class="col-sm-4 col-md-4">
                            <div class="form-group mc-field-group">
                                <label for="mce-email">Email</label>
                                <input type="email" value="" name="email" class="email form-control" placeholder="email@email.com" required="">
                            </div>
                        </div>
                        <div class="col-xs-8 col-sm-4 col-xs-no-gutter keep-left col-md-4">
                            <label>&nbsp;</label>
                            <button name="subscribe" id="mc-embedded-subscribe" class=" gv-btn gv-btn-red gv-btn-block gvmc-ctrl-subscribe">Subscribe</button>
                        </div>
                    </div>
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

    </div> <!-- end .gv-body-wrapper -->
<?php wp_footer(); ?>
</body>
</html>
