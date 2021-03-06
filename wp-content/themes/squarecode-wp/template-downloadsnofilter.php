<?php  
/* 
Template Name: EDD-Pagination
*/  
?>

<?php get_header(); ?>

    <!-- Start of breadcrumb wrapper -->
    <div class="breadcrumb_wrapper">

        <!-- Start of breadcrumbs -->
        <div class="breadcrumbs">
            <?php if(function_exists('bcn_display'))
                {
                bcn_display();
            }?>
        </div><!-- End of breadcrumbs -->

        <div class="clearfix"></div>

    </div><!-- End of breadcrumb wrapper -->

    <!-- Start of page wrap -->
    <div class="page_wrap">

        <!-- Start of main content -->
        <div class="main_content">
            
            <div class="center">
                
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                 
                
                <?php the_content('        '); ?>
                <?php endwhile; ?>
                <?php else: ?>
                <p>
                  <?php _e( 'There are no posts to display. Try using the search.', 'squarecode' ); ?>
                </p>
                <?php endif; ?>
                
                <!-- Start of search -->
            <div class="search_EDD">

                <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">

                <?php $searchresults = get_search_query(); ?>
                <?php if ($searchresults != ('')){ ?>
                <input type="text" placeholder="<?php _e( 'Search The Marketplace', 'squarecode' ); ?>" value="<?php echo $searchresults; ?>" name="s" id="s" />
                <?php } else { ?>

                <input type="text" value="" name="s" id="s" placeholder="<?php _e( 'Search The Marketplace', 'squarecode' ); ?>" />

                <?php } ?>
                <input type="hidden" name="post_type" value="download" />
                <input type="submit" id="searchsubmit" value="<?php _e( 'Search', 'squarecode' ); ?>" />

            </form>
                
                <div class="clear"></div>
                
            </div>
            <!-- End of search_EDD -->
                
            </div>

                <!-- Start of wrapper -->
                <div class="cr3ativeportfolio_wrapper"> 
                    
                    <?php 
                        $temp = $wp_query; 
                        $wp_query = null; 
                        $wp_query = new WP_Query(); 
                        $wp_query->query('post_type=download'.'&paged='.$paged); 
                    ?>

                    <!-- Start of cr3ativeportfolio_portfolio-wrapper -->
                    <div id="cr3ativeportfolio_portfolio-wrapper">

                        <!-- Start of cr3ativeportfolio portfolio-list ul -->                    
                        <ul id="cr3ativeportfolio_portfolio-list">
                            <?php while ($wp_query->have_posts()) : $wp_query->the_post();  ?>

                            <?php
                                $terms = get_the_terms( $post->ID, 'download_category' );

                                if ( $terms && ! is_wp_error( $terms ) ) : 
                                    $links = array();

                                    foreach ( $terms as $term ) 
                                    {
                                        $links[] = $term->name;
                                    }
                                    $links = str_replace(' ', '-', $links);	
                                    $tax = join( " ", $links );		
                                else :	
                                    $tax = '';	
                                endif;
                            ?>

                            <li class="cr3ativeportfolio_portfolio-itemthree <?php echo strtolower($tax); ?> all min-height">
                            <?php if ( has_post_thumbnail() ) { ?>            

                            <!-- Start of EDD Featured Image Index -->
                            <div class="edd_feat_image_index">

                                <?php the_post_thumbnail(''); ?>
                                
                                <!-- Start of the overlay section on the thumbnail -->
                                <div class="caption" onclick="">
        
                                    <p><?php the_title (); ?></p>
                                    
                                    <p class="EDD_Price1"><?php _e( 'ITEM PRICE:', 'squarecode' ); ?> <?php edd_price($post->ID); ?></p>
                                    
                                    <a class="more-link-hidden" href="<?php the_permalink (); ?>"><?php _e( 'DETAILS', 'squarecode' ); ?></a>
                                    
                                    <div class="thumb_author_details">
                                        
                                        <div class="EDD-Avatar"><?php echo get_avatar( get_the_author_meta('email'), '80' ); ?></div>

                                        <div class="EDD-Author"><p><?php _e( 'By:', 'squarecode' ); ?>&nbsp;<?php the_author() ?></p></div>
                                        
                                    </div>
                                    
                                </div><!-- End of the overlay section on the thumbnail -->
                                    
                                    
                                <!-- Start of the item details under the thumbanail -->
                                <div class="EDD-thumb-details">

                                    <span class="more-link edd" href="<?php the_permalink (); ?>"><?php the_title (); ?></span>
                                    
                                    <?php edd_price($post->ID); ?>

                                    <div class="thumb_author_details">
                                        
                                        <div class="EDD-Avatar"><?php echo get_avatar( get_the_author_meta('email'), '80' ); ?></div>

                                        <div class="EDD-Author"><p><?php _e( 'By:', 'squarecode' ); ?>&nbsp;<?php the_author() ?></p></div>
                                        
                                    </div>

                                </div><!-- End of the item details under the thumbanail -->

                            </div><!-- End of EDD Featured Image Index -->

                                <?php } else { ?>

                            <!-- Start of EDD No Feat Image Index -->
                            <div class="edd_nofeat_image_index">

                                <a class="more-link eddnocenter" href="<?php the_permalink (); ?>"><?php the_title (); ?></a>
                                <?php the_excerpt (); ?>

                            </div><!-- End of EDD No Fea Image Index -->

                                <?php } ?> 

                            </li>

                          <?php endwhile;?> 

                      </ul>

                        <div class="cr3ativeportfolioclear"></div>
                        
                <!-- Start of edd_download_pagination -->
                <div id="edd_download_pagination" class="navigation">
                <?php cr3ativ_pagination(); ?>

                </div><!-- End of edd_download_pagination -->
                
                <?php $wp_query = null; $wp_query = $temp;  // Reset ?>

                    </div>
                    <!-- end #portfolio-wrapper--> 

                </div>
                <!-- End of wrapper --> 

              <div class="cr3ativeportfolioclear"></div>

        </div>
        <!-- End of main content -->

        <div class="clearfix"></div>

    </div>
    <!-- End of page wrap -->

    <?php get_footer(); ?>
