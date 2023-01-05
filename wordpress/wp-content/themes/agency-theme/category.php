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

			   <h1><?php esc_html_e( 'Category: ', 'tdfgroupltd' ); single_cat_title(); ?></h1>

			   <?php get_template_part( 'loop' ); ?>

			   <?php get_template_part( 'pagination' ); ?>

			</div>
               <!-- End Content -->


              <?php get_sidebar(); ?>


           </div>

       </div>
   </section>
   <!-- End Section -->


<?php get_footer(); ?>
