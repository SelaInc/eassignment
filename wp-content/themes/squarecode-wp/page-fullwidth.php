<?php  
/* 
Template Name: Fullwidth-Page 
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

                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            
                <h1 class="title center"><?php the_title (); ?></h1>

                <?php if ( has_post_thumbnail() ) { ?>

                <?php the_post_thumbnail(''); ?>

                <?php } ?>

                <?php the_content( '        '); ?>

                <?php endwhile; ?>

                <?php else: ?>

                <p>
                    <?php _e( 'There are no posts to display. Try using the search.', 'squarecode' ); ?>
                </p>

                <?php endif; ?>

        </div>
        <!-- End of main content -->

        <div class="clearfix"></div>

    </div>
    <!-- End of page wrap -->

    <?php get_footer(); ?>