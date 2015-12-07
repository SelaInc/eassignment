<?php 

$author = get_query_var( 'vendor' );
$author = get_user_by( 'slug', $author );

if ( ! $author ) {
	$author = get_current_user_id();
}

get_header(); ?>

    <!-- Start of breadcrumb wrapper -->
    <div class="breadcrumb_wrapper">

        <!-- Start of breadcrumbs -->
        <div class="breadcrumbs">
            <?php if(function_exists('bcn_display'))
                {
                bcn_display();
            }?>
        </div><!-- End of breadcrumbs -->

        <!-- Clear Fix --><div class="clear"></div>

    </div><!-- End of breadcrumb wrapper -->

    <!-- Start of page wrap -->
    <div class="page_wrap">

        <!-- Start of main content -->
        <div class="main_content">
            
            <h1 class="EDD_title_small"><?php the_title (); ?></h1>

            <!-- Start of left content -->
            <div class="left_content_EDD">
                            
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                
                    <!-- Start of EDD Featured Image Container -->
                    <div class="EDD_Featured_Image">
                        
                        <?php $videourl = get_post_meta($post->ID, 'video_url', $single = true); ?>
                        
                        <?php if ($videourl != ('')) { ?> 
                        
                        <div class="video-container">
                        <?php   echo wp_oembed_get( $videourl );
                        ?>
                        </div>
                        <?php } else { ?>
                        
                        <?php the_post_thumbnail(''); ?>
                        
                        <?php } ?>
                        
                        <?php $livepreviewurl = get_post_meta($post->ID, 'live_preview_url', $single = true); ?>
                        
                        <?php if ($livepreviewurl != ('')) { ?> 
                        
                            <!-- Start of live preview button -->
                            <div class="live_preview_button">
                                <a href="<?php echo $livepreviewurl; ?>" target="_blank"><?php _e( 'Live Preview', 'squarecode' ); ?></a>

                            </div><!-- End of live preview button -->
                
                        <?php } ?>
                        
                        <?php if( function_exists( 'easy_image_gallery' ) ) {
                        
                        $eddgallery = easy_image_gallery (); ?>
                        
                        <?php if ($eddgallery != ('')){ ?> 
                        
                        <p><?php _e( 'Click to view larger images', 'squarecode' ); ?></p>
                        
                        <?php echo easy_image_gallery (); } ?>
                        
                        <?php } ?>
 
                        </div><!-- End of EDD Featured Image Container -->
                
                <div class="clear"></div>

                    <!-- Start of content single -->
                    <section class="contentsingle">

                        <!-- Start of post class -->
                        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <?php the_content(); ?>
                                                        
                        </div><!-- End of post class -->
                        
                    </section><!-- End of content single -->
                
                    <?php endwhile; ?> 

                    <?php else: ?> 
                    <p><?php _e( 'There are no posts to display. Try using the search.', 'squarecode' ); ?></p> 

                    <?php endif; ?>
                
                    <div class="clearbig"></div>
                
                    <!-- Start of comment wrapper -->
                    <div class="edd_comment_wrapper">

                        <!-- Start of comment wrapper main -->
                        <div class="edd_comment_wrapper_main">

                        <?php comments_template(); ?>
                        <?php comment_form(); ?>

                        </div><!-- End of comment wrapper main -->

                        <div class="clear"></div>

                    </div><!-- End of comment wrapper -->                 

            </div>
            <!-- End of left content -->

            <!-- Start of right content -->
            <div class="right_content edd_downloads">

                <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('cr3ativ-edd') ) : else : ?>		
                <?php endif; ?> 
                

                
                            <!-- Start of posted details -->
                            <div class="posted_details">

                                <!-- Start of metacats -->
                                <div class="metacats">
                                <?php _e( 'Posted In:', 'squarecode' ); ?> &nbsp;<?php echo get_the_term_list( $post->ID, 'download_category', '', ', ', '' ); ?>

                                </div><!-- End of metacats -->

                                <!-- Start of metacats -->
                                <div class="metacats">
                                <?php _e( 'Tags:', 'squarecode' ); ?> <?php echo get_the_term_list( $post->ID, 'download_tag', '', ', ', '' ); ?>

                                </div><!-- End of metacats -->

                            </div><!-- End of posted details -->
            
            
                
                
                <div class="edd-author-bio">
                
                    <div class="EDD-Avatar">
                        <?php echo get_avatar( get_the_author_meta('email'), '80' ); ?>
                    
                    </div>

                    <div class="EDD-Author"><?php $author = get_the_author(); ?>
                        <p><span class="copyright"><?php _e( 'Copyright', 'squarecode' ); ?>&nbsp;<?php echo date('Y'); ?></span></p>
                        
                         <?php
                            include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
                         ?>
                        
                        <?php
                        $plugin_name = 'edd-fes/edd-fes.php';
                        $is_active = is_plugin_active($plugin_name);
                        if ($is_active == '1') { ?>
                        
                        <?php $new_store_url = get_the_author_meta( 'user_login' ); ?>
                        <p><a href="<?php echo site_url(); ?>/<?php _e( 'shop', 'squarecode' ); ?>/<?php echo str_replace(" ","-", $new_store_url); ?>"><?php echo the_author_meta( 'display_name' ); ?></a></p>
                        
                        <?php } else { ?>
                        
                        <p><?php the_author_posts_link(); ?></p>
                        
                        <?php } ?>

                    </div>
            
                    <div class="clear"></div>
                    
                </div>

            </div>
            <!-- End of right content -->

        </div>
        <!-- End of main content -->

        <div class="clearfix"></div>

    </div>
    <!-- End of page wrap -->

    <?php get_footer(); ?>