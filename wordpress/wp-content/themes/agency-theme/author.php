<?php get_header(); ?>

            <!-- Head Section -->
            <section class="page-section bg-dark-alfa-50 parallax-3 banner-height" data-background="wp-content/themes/Silverstone/images/full-width-images/section-bg-10.jpg">
                <div class="relative container align-left">
                    
                    <div class="row">
                        
                        <div class="col-md-8">
                            <h1 class="hs-line-11 font-alt mb-0 mb-xs-0 mt-100 mt-xs-40"><?php wp_title(''); ?></h1>
                            <div class="hs-line-4 font-alt">
                                Your Fitment&nbsp;Professionals
                            </div>
                        </div>
                        
                        <div class="col-md-4 mt-30">
                            <div class="mod-breadcrumbs font-alt align-right mt-120 mt-xs-40">
                                <a href="<?php echo get_home_url(); ?>">|| Home</a>&nbsp;||&nbsp;<span><?php wp_title(''); ?></span>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End Head Section -->
            
            <!-- Divider -->
                <hr class="whiteb mt-50 mb-0 "/>
            <!-- End Divider -->






 <!-- Section -->
 <section class="page-section">
     <div class="container relative page bg-white-curved">

         <div class="row">

             <!-- Content -->
             <div class="section-text col-sm-9">

               
               <h2 class="section-title font-alt align-left mb-20 mb-sm-20">
                 
               </h2>

		<?php if ( have_posts() ): the_post(); ?>

			<h1><?php esc_html_e( 'Author Archives for ', 'tdfgroupltd' ); echo get_the_author(); ?></h1>

		<?php if ( get_the_author_meta( 'description' ) ) : ?>

		<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>

			<h2><?php esc_html_e( 'About ', 'tdfgroupltd' ); echo get_the_author(); ?></h2>

			<?php echo wpautop( get_the_author_meta( 'description' ) ); ?>

		<?php endif; ?>

		<?php rewind_posts(); while ( have_posts() ) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail() ) : // Check if Thumbnail exists. ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<?php the_post_thumbnail( array( 120, 120 ) ); // Declare pixel size you need inside the array. ?>
					</a>
				<?php endif; ?>
				<!-- /post thumbnail -->

				<!-- post title -->
				<h2>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
				</h2>
				<!-- /Post title -->

				<!-- post details -->
				<span class="date">
					<time datetime="<?php the_time( 'Y-m-d' ); ?> <?php the_time( 'H:i' ); ?>">
						<?php the_date(); ?> <?php the_time(); ?>
					</time>
				</span>
				<span class="author"><?php esc_html_e( 'Published by', 'tdfgroupltd' ); ?> <?php the_author_posts_link(); ?></span>
				<span class="comments"><?php comments_popup_link( __( 'Leave your thoughts', 'tdfgroupltd' ), __( '1 Comment', 'tdfgroupltd' ), __( '% Comments', 'tdfgroupltd' ) ); ?></span>
				<!-- /post details -->

				<?php tdfgrouphtml5wp_excerpt( 'tdfgrouphtml5wp_index' ); // Build your custom callback length in functions.php. ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else : ?>

			<!-- article -->
			<article>

				<h2><?php esc_html_e( 'Sorry, nothing to display.', 'tdfgroupltd' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

			<?php get_template_part( 'pagination' ); ?>




			</div>
               <!-- End Content -->


              <?php get_sidebar(); ?>


           </div>

       </div>
   </section>
   <!-- End Section -->


<?php get_footer(); ?>
