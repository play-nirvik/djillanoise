<?php
/**
 * The template for displaying home page
 *
 */

get_header();
?>

<div class="gv-page-wrapper container">
        
        <?php
    	// Start the loop.
    	while ( have_posts() ) : the_post();
        ?>
        <div class="gv-page-content">
            <h1><strong><?php the_title() ?></strong></h1>
            
        <?php
            the_post_thumbnail();
    		the_content();
    
    		wp_link_pages( array(
    			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'djillanoise' ) . '</span>',
    			'after'       => '</div>',
    			'link_before' => '<span>',
    			'link_after'  => '</span>',
    			'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'djillanoise' ) . ' </span>%',
    			'separator'   => '<span class="screen-reader-text">, </span>',
    		) );
    		
    		edit_post_link(
    			sprintf(
    				/* translators: %s: Name of current post */
    				__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'djillanoise' ),
    				get_the_title()
    			),
    			'<footer class="entry-footer"><span class="edit-link">',
    			'</span></footer><!-- .entry-footer -->'
    		);
    
    		// If comments are open or we have at least one comment, load up the comment template.
    		if ( comments_open() || get_comments_number() ) {
    			comments_template();
    		}
		?>
        </div>
        <?php
    		// End of the loop.
    	endwhile;
    	?>
</div>

<?php get_footer(); ?>