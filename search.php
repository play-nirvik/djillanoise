<?php
/**
 * The template for displaying search results pages
 *
 */

get_header(); 
global $wp_query;
?>

	<div class="gv-content-wrapper">
		<div class="container">
		    
		    <div class="gv-meta-header">
                <h1>
                    <?php echo $wp_query->found_posts; ?> search result<br>
                    <small class="no-cap">for “<?php echo $_GET['s']; ?>”</small>
                </h1>
            </div>

		<?php if ( have_posts() ) : ?>

			<?php
			
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>

				<div class="row">
				    <div class="col-md-8">
				        <article id="post-<?php the_ID(); ?>" <?php post_class('gv-post'); ?>>
				            <?php if ( has_post_thumbnail() ) { ?>
				            <div class="gv-post-img">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <?php } ?>
                            
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <h1 class="gv-ctrl-title gv-post-title gv-liner-simple">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title();  ?></a>
                                                </h1>
                                </div>
                                <div class="col-sm-6 text-left">
                                    <?php the_excerpt(); ?>                      
                                </div>
                            </div>
				        </article>
				    </div>
				    <div class="col-md-4"></div>
				</div>
            
            <?php
			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		//else :
		//	get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</div>
	</div>

<?php get_footer(); ?>
