<?php get_header(); ?>
               

	<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>

		<!-- article -->



			<?php the_content(); // Dynamic Content. ?>

			<?php the_tags( __( 'Tags: ', 'agency-th' ), ', ', '<br>' ); // Separated by commas with a line break at the end. ?>

		

			<?php edit_post_link(); // Always handy to have Edit Post Links available. ?>


		
		<!-- /article -->

	<?php endwhile; ?>

	<?php else : ?>

		<!-- article -->
		

			<h1><?php esc_html_e( 'Sorry, nothing to display.', 'agency-th' ); ?></h1>

		
		<!-- /article -->

	<?php endif; ?>

               <!-- End Content -->




<?php get_footer(); ?>