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
		<div class="row">
		    <div class="col-md-8">

			<?php
			
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>

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
                                	<h5 class="gv-h-slab gv-post-date">
				                    	<?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>
				                    </h5>
				                    
                                    <?php the_excerpt(); ?>   
                                    
                                    <p>
					                    <a href="<?php the_permalink(); ?>" class="gv-post-permalink link-blue"><?php _e('Read More &gt;&gt;', 'djillanoise'); ?></a>
					                </p>
                                </div>
                            </div>
				        </article>
            
            <?php
			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'djillanoise' ),
				'next_text'          => __( 'Next page', 'djillanoise' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'djillanoise' ) . ' </span>',
			) );

		endif;
		?>
				</div>
				
				<?php get_template_part( 'includes/content', 'sidebar' ); ?>
				
			</div>

		</div>
	</div>

<?php get_footer(); ?>
