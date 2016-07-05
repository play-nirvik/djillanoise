<?php
/**
 * The template for displaying all single posts and attachments
 *
 */

get_header(); 

// Start the loop.
while ( have_posts() ) : the_post();
?>
	<article id="post-<?php the_ID() ?>" class="<?php post_class() ?>">
	    <?php if (has_post_thumbnail()) { ?>
	        <section class="gv-billboard-wrapper gv-page-feature">
    	        <div class="gv-billboard">
                    <div class="gv-billboard-poster" style="opacity: 0.831429;">
                      <?php the_post_thumbnail(); ?>  
                    </div>
                </div>
    	    </section> 
        <?php  } ?>
        
        <div class="gv-single-wrapper <?php echo (!has_post_thumbnail()) ? 'adjust-margin' : '';  ?>">
            <div class="container">
                <div class="row">
                    <div class="gv-single-content col-md-12">
                        <h1 class="gv-ctrl-title gv-liner">
                            <a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a>
                        </h1>
                        <div class="gv-post-author row">
                            <div class="col-xs-12 col-sm-7">
                                <div class="gv-post-avatar">
                                    <?php echo get_avatar( get_the_author_email()); ?>
                                </div>
                                <div class="gv-post-author-links">
                                    <h5 class="gv-h-slab">
                                        by <?php the_author_posts_link(); ?>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-5">
                                <h6 class="gv-h-slab gv-post-date text-right">
                                    1 month ago                                
                                    <span class="middot">·</span>
                                    5 min read                            
                                </h6>
                            </div>
                        </div>
                        <div class="gv-post-content clearfix">
                            <?php the_content(); ?>
                        </div>
                        <div class="gv-post-footer">
                            <div class="gv-post-comments">
                                 <?php
                                	// If comments are open or we have at least one comment, load up the comment template.
                                	if ( comments_open() || get_comments_number() ) {
                                		comments_template();
                                	}
                                 ?>                           
                            </div>
                            
                            <?php
                            $posttags = get_the_tags();
                            if ($posttags) {
                            ?>
                                <div class="gv-post-tags">
                                <?php
                                  foreach($posttags as $tag) {
                                ?>
                                    <a href="<?php echo get_tag_link($tag->term_id); ?>" class="link-blue">#<?php echo $tag->name; ?></a>
                            <?php } ?>
                                 </div>
                            <?php } ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</article>

<?php
	// End of the loop.
endwhile;

get_footer(); ?>
