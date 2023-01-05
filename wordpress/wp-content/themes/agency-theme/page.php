<?php get_header(); ?>

			

		<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

			<!-- article -->


				<?php the_content(); ?>

				<?php comments_template( '', false ); // Remove if you don't want comments. ?>

				<br class="clear">

				<?php edit_post_link(); ?>


			<!-- /article -->

		<?php endwhile; ?>

		<?php else : ?>

			<!-- article -->


				<h2><?php esc_html_e( 'Sorry, nothing to display.', 'agency-th' ); ?></h2>


			<!-- /article -->

		<?php endif; ?>




<?php get_footer(); ?>