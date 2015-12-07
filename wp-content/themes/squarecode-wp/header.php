<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<!--[if IE 7 ]>    <html class= "ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class= "ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class= "ie9"> <![endif]-->

<!--[if lt IE 9]>
   <script>
      document.createElement('header');
      document.createElement('nav');
      document.createElement('section');
      document.createElement('article');
      document.createElement('aside');
      document.createElement('footer');
   </script>
<![endif]-->


<title>
    <?php echo get_option( 'blogname'); ?>
    <?php wp_title(); ?>
</title>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- *************************************************************************
*****************                FAVICON               ********************
************************************************************************** -->

<?php if ( function_exists( 'get_option_tree') ) { $favicon=get_option_tree( 'vn_favicon' ); } ?>
<link rel="shortcut icon" href="<?php echo ($favicon); ?>" />

<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- *************************************************************************
*****************              CUSTOM CSS              ********************
************************************************************************** -->


<style type="text/css">
    <?php if (function_exists('get_option_tree')) {
        $css=get_option_tree('vn_custom_css');
    }
    ?> <?php echo ($css);
    ?>
</style>

<?php wp_head(); ?>

</head>

<?php $header_image=get_header_image(); if ( ! empty( $header_image ) ) : ?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
<?php endif; ?>

<?php $theme_options=get_option( 'option_tree'); ?>

<!-- *************************************************************************
*****************             ACCENT COLOR            ********************
************************************************************************** -->
<?php if ( function_exists( 'get_option_tree') ) { 
        $bodyimg=get_option_tree( 'vn_bodyimg' ); 
        $bodyrepeat=get_option_tree( 'vn_bodyrepeat' ); 
        $footerimg=get_option_tree( 'vn_footerimg' ); 
        $footerrepeat=get_option_tree( 'vn_footerrepeat' ); 
        $bodybackgroundcolor=get_option_tree( 'vn_bodybackgroundcolor' ); 
        $color1=get_option_tree( 'vn_color1' ); 
        $color2=get_option_tree( 'vn_color2' ); 
        $color3=get_option_tree( 'vn_color3' ); 
        $color4=get_option_tree( 'vn_color4' ); 
        $color5=get_option_tree( 'vn_color5' ); 
        $color6=get_option_tree( 'vn_color6' ); 
        $color7=get_option_tree( 'vn_color7' ); 
        $color8=get_option_tree( 'vn_color8' ); 
        $boxed=get_option_tree( 'vn_boxed' ); 
} ?>

<style type="text/css">
    
<?php if ( function_exists( 'get_option_tree' ) ) { $boxed=get_option_tree( 'vn_boxed' ); } ?>
    <?php if ($boxed == ('yes')){ ?>
    
    #header_wrapper, .breadcrumb_wrapper, .page_wrap, #footer_widget_wrapper, #footer_wrapper, .page_wrap_home, .horizontal_menu_wrapper {
        max-width:1293px;
    }
    
    <?php } else { ?>
    
    #header_wrapper, .breadcrumb_wrapper, .page_wrap, .page_wrap_home, #footer_widget_wrapper, #footer_wrapper {
        max-width:100%;
    }
    
    <?php } ?>
    
    body {
    background-image:url("<?php echo ($bodyimg);?>");
    background-repeat:<?php echo ($bodyrepeat);?>;
    background-color:<?php echo ($bodybackgroundcolor);?>;
    }
    
    #footer_widget_wrapper, .search_EDD {
    background-image:url("<?php echo ($footerimg);?>");
    background-repeat:<?php echo ($footerrepeat);?>;
    background-color:<?php echo ($color1);?>;
    }
    
    hr {
    border-bottom:2px solid <?php echo ($bodybackgroundcolor);?>;
    } 
    
    .lined {
        border-bottom:2px solid <?php echo ($bodybackgroundcolor);?>;
    }
    
    #isa-related-downloads, #fes-comments-table {
    border-top:2px solid <?php echo ($bodybackgroundcolor);?>;
    } 
    
    .cr3ativstaff_employee_info {
    border-bottom:1px solid <?php echo ($bodybackgroundcolor);?> !important;
    border-top:1px solid <?php echo ($bodybackgroundcolor);?> !important;
    }
    
    .left_content_EDD [itemprop="description"] h5, .left_content_EDD [itemprop="description"] h4, .left_content_EDD [itemprop="description"] h3, .left_content_EDD [itemprop="description"] h2, .left_content_EDD [itemprop="description"] h1 {
        border-bottom:2px solid <?php echo ($bodybackgroundcolor);?> !important;
    }
    
    body .creativ-shortcode-toggle-active, body .creativ-shortcode-toggle .creativ-shortcode-toggle-content, body .creativ-shortcode-tab-buttons a.active, body .creativ-shortcode-tab-buttons a {
        border-color: <?php echo ($bodybackgroundcolor);?> !important;
    }
    
    body .creativ-shortcode-tabpane {
    border:1px solid <?php echo ($bodybackgroundcolor);?>;
    }
    
    .posted_details {
    border-top:1px solid <?php echo ($bodybackgroundcolor);?>;
    }
    
    .table-striped > tbody > tr:nth-child(odd) > td, .table-striped > tbody > tr:nth-child(odd) > th, .table-hover > tbody > tr:hover > td, .table-hover > tbody > tr:hover > th, .post_format, a.comment-reply-link, .edd_downloads, .EDD_Featured_Image, .preview_button, .EDD-thumb-details, #cr3ativeportfolio_portfolio-filter, #isa-related-downloads li, .pricetable-header, .edd-review-vote, .edd_comment_wrapper_main, .left_content_EDD .gallery, .circle {
    background-color:<?php echo ($bodybackgroundcolor);?>;
    }
    
    a, a:hover, a:focus, .toggle-up, .toggle-down, h3 i, .creativ-shortcode-alertbox-colour-theme.creativ-shortcode-alertbox a, .creativ-shortcode-alertbox-colour-theme.creativ-shortcode-alertbox a:hover, .fes-vendor-menu ul li a:hover, .fes-vendor-menu ul li.active a, .large_tagline {
    color:<?php echo ($color1);?>;
    }
    
    .edd-cart-added-alert {
    color:<?php echo ($color1);?> !important;
    }
    
    .breadcrumb_wrapper, .paginationprev, .paginationnext, h2.linkpost, a.comment-reply-link:hover, .more-link-hidden, .pricetable .pricetable-button-container a:hover, .fes-form-error.fes-error, #fes-view-comment a, a.view-product-fes, a.edit-product-fes:hover, .page-numbers:hover, .page-numbers, .fes-feat-image-btn, a.upload_file_button, a.btn-danger.delete:hover, a.insert-file-row, a.close.fes-remove-feat-image:hover, a.close.fes-remove-avatar-image:hover {
    background-color:<?php echo ($color1);?>;
    }
    
    .edd-submit.button, .edd-submit.button.gray, .edd-submit.button:visited, #edd-purchase-button, .edd-submit, input.edd-submit[type="submit"], li.edd_download_file a, .right_content li.cart_item.edd_checkout a, body .creativ-shortcode-button-colour-theme, .edd-reviews-voting-buttons a.vote-yes, .live_preview_button a {
        background-color:<?php echo ($color1);?>;
        border-color:<?php echo ($color1);?>;
    }
    
    .edd-submit.button:hover, .edd-submit.button.gray:hover, .edd-submit.button:visited:hover, #edd-purchase-button:hover, .edd-submit:hover, input.edd-submit[type="submit"]:focus, li.edd_download_file a:hover, .right_content li.cart_item.edd_checkout a:hover, body .creativ-shortcode-button-colour-theme:hover, .live_preview_button a:hover {
        background-color:<?php echo ($color2);?> !important;
        border-color:<?php echo ($color2);?> !important;
    }
    
    .owl-theme .owl-controls .owl-page span {
        border: 1px solid <?php echo ($color2);?> !important;
    }
    
    #edd_checkout_cart td, #edd_checkout_cart th {
        color:<?php echo ($color5);?> !important;
    }
    
    #edd_checkout_cart .edd_cart_header_row th, #edd_checkout_cart tfoot th.edd_cart_total, #edd_checkout_form_wrap #edd-discount-code-wrap, #edd_checkout_form_wrap #edd-login-account-wrap, #edd_checkout_form_wrap #edd-new-account-wrap, #edd_checkout_form_wrap #edd_final_total_wrap, #edd_checkout_form_wrap #edd_show_discount, #edd_purchase_receipt thead, #edd_purchase_receipt_products thead, #edd_purchase_receipt_products tfoot, #edd_user_history th, body.page-template-template-cr3ativstaff-php .one_third, pre, body .creativ-shortcode-alertbox-colour-theme, .fes-light-red {
        background: <?php echo ($bodybackgroundcolor);?> !important;
    }
    
    #edd_checkout_cart tr.edd_cart_header_row th, #edd_checkout_cart tfoot th.edd_cart_total, p#edd_final_total_wrap, #edd_checkout_form_wrap .edd-payment-icons:before, #edd_checkout_form_wrap legend, #edd_user_history .edd_purchase_row th,  p.sales {
    color:<?php echo ($color2);?> !important;
    }
    
    #cr3ativeportfolio_portfolio-filter li a.current, #cr3ativeportfolio_portfolio-filter li a:hover {
    background-color:<?php echo ($color2);?>;
    }
    
    .horizontal_menu_wrapper, ul.horiz li.current-menu-item li a, ul.horiz li.current-menu-parent ul.sub-menu li a, ul.horiz li ul {
    background-color:<?php echo ($color8);?>;
    }
    
    .recents_title h2 a:hover, .recents_meta_date p, .recents_meta_comments p, .recents_meta_comments a, .right_content .search input[type=text]:focus, .right_content .search input[type=submit]:hover, .search input[type=submit]:hover, .breadcrumbs, textarea:focus, input[type=text]:focus, input[type=email]:focus, input[type=url]:focus, input[type=password]:focus, input[type=tel]:focus, input[type=submit]:hover, h2 a:hover, h2.linkpost a:hover, .comment_title, .comment-author, #respond h3, .cr3ativstaff_employee_name a:hover, .cr3ativcareer_blog_wrapper h5 a:hover, .cr3ativcareer_post_read_more a:hover, .cr3ativcareer_widget li h3 a:hover, .fes-submit input.edd-submit.button:hover, button[type="submit"]:hover {
    color:<?php echo ($color2);?>;
    }
    
    #edd_checkout_form_wrap input.edd-input.required, #edd_checkout_form_wrap select.edd-select.required, #edd_purchase_receipt strong, #edd_purchase_receipt thead, #edd_purchase_receipt_products th, #edd_purchase_receipt_products .edd_purchase_receipt_product_name {
    color:<?php echo ($color2);?> !important;
    }
    
    .right_content .search input[type=text]:focus, textarea:focus, input[type=text]:focus, input[type=email]:focus, input[type=url]:focus, input[type=password]:focus, input[type=tel]:focus {
    border:1px solid <?php echo ($color2);?>;
    }
    
    .right_content .search input[type=submit]:hover, input[type=submit]:hover, #respond input[type=submit]:hover, .fes-submit input.edd-submit.button:hover, button[type="submit"]:hover {
    border:2px solid <?php echo ($color2);?>;
    }
    
    .search input[type=text]:focus, .search input[type=submit]:hover {
    border:3px solid <?php echo ($color2);?>;
    }
    
    .right_content .search input[type=submit], .left, .search input[type=text], .search input[type=submit], #header_wrapper, input[type=submit], #footer_wrapper, .paginationprev:hover, .paginationnext:hover, blockquote p, #respond input[type=submit], .edd-cart-quantity, blockquote, .single-download .edd_download_purchase_form, .more-link-hidden:hover, .wp-playlist-current-item, .pricetable .pricetable-button-container a, .pricetable-featured .pricetable-button-container a:hover, .edd-reviews-voting-buttons a.vote-no, .edd-reviews-voting-buttons a:hover, .fes-submit input.edd-submit.button, .fes-vendor-menu, #fes-view-comment a:hover, button[type="submit"], a.view-product-fes:hover, a.edit-product-fes, .page-numbers:hover, .page-numbers.current, .fes-feat-image-btn:hover, a.upload_file_button:hover, a.btn-danger.delete, a.insert-file-row:hover, a.close.fes-remove-feat-image, a.close.fes-remove-avatar-image, ul.horiz li.current-menu-item a, ul.horiz li a:hover, ul.horiz li.current-menu-parent li.current-menu-item a, ul.horiz li.current-menu-parent a {
    background:none repeat scroll 0 0 <?php echo ($color2);?>;
    background-color:<?php echo ($color2);?>;
    }
    
    .form-allowed-tags, .right_content .search input[type=text], .container a, textarea, input[type=text], input[type=email], input[type=url], input[type=password], input[type=tel], #bottom_menu ul li a, .copyright, .post_format, .meta_date, .single_meta, .posted_details, cite, a.comment-reply-link, .cr3ativstaff_employee_title, .nav li a, .nav li.current-menu-item li a, .nav li.current-menu-parent li a, #isa-edd-specs caption, .EDD-Author p, .EDD_Featured_Image p, li.cr3ativeportfolio_filter, .item_count, .small_tagline, ul.horiz li a, ul.horiz li.current-menu-item li a, ul.horiz li.current-menu-item li a {
    color:<?php echo ($color3);?>;
    }
    
    .right_content .search input[type=text], input[type=text], input[type=email], input[type=url], input[type=password], input[type=tel], textarea, .table-bordered {
    border:1px solid <?php echo ($color3);?>;
    }
    
    .table-bordered > thead > tr > th, .table-bordered > tbody > tr > th, .table-bordered > tbody > tr > td, .pricetable-column-inner {
    border: 1px solid <?php echo ($color3);?> !important;
    }
    
.table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
    border-top:1px solid <?php echo ($color3);?>;
    }
    
    .table > tbody + tbody {
    border-top:2px solid <?php echo ($color3);?>;
    }
    
ul.horiz li.current-menu-parent li a {
    background-color: <?php echo ($color2);?>;
    color: <?php echo ($color3);?>;
}
    
    .recents_title h2, .recents_title h2 a, .right_content .search input[type=submit], .breadcrumbs a, .container a:hover, a#trigger-overlay, input[type=submit], #footer_widget p, #footer_widget a, #bottom_menu ul li a:hover, .search input[type=submit], .paginationprev a, .paginationnext a, blockquote p, h2.linkpost a, a.comment-reply-link:hover, .edd-submit.button, .edd-submit.button.gray, .edd-submit.button:visited, .edd-submit.button:hover, .edd-submit.button.gray:hover, .edd-submit.button:visited:hover, #edd-purchase-button:hover, .edd-submit:hover, input.edd-submit[type=submit]:focus, li.edd_download_file a, .nav li.current-menu-item a, .nav li a:hover, .nav li.current-menu-item li a:hover, .nav li.current-menu-parent a, .nav li.current-menu-parent li.current-menu-item a, .nav li.current-menu-parent li a:hover, .right_content li.cart_item.edd_checkout a, .wpmenucart-icon-shopping-cart-0:before, ul#menu-shopping-cart li a, .right_content .edd_price_option_name, .right_content .edd_price_option_price, .more-link-hidden, .more-link-hidden:hover, .more-link-hidden:focus, .more-link-hidden:active, .wp-playlist-caption .wp-playlist-item-title, .wp-playlist-item-album, .wp-playlist-item-artist, .pricetable .pricetable-column.pricetable-featured:before, .pricetable .pricetable-button-container a, .pricetable-featured .pricetable-button-container a:hover, .pricetable .pricetable-button-container a:hover, .edd-reviews-voting-buttons a, .edd-reviews-voting-buttons a:hover, .search_title, .fes-submit input.edd-submit.button,.fes-form-error.fes-error, .fes-vendor-menu ul li a, #fes-view-comment a, #fes-view-comment a:hover, button[type="submit"], #fes-vendor-announcements, a.view-product-fes, a.edit-product-fes, .page-numbers, .page-numbers:hover, .page-numbers.current, .fes-feat-image-btn, .fes-feat-image-btn:hover, a.upload_file_button, a.upload_file_button:hover, a.btn-danger.delete, a.btn-danger.delete:hover, a.insert-file-row, a.insert-file-row:hover, a.close.fes-remove-feat-image, a.close.fes-remove-feat-image:hover, a.close.fes-remove-avatar-image, a.close.fes-remove-avatar-image:hover, .live_preview_button a, .live_preview_button a:hover, ul.horiz li.current-menu-item a, ul.horiz li a:hover, ul.horiz li.current-menu-item li a:hover, ul.horiz li.current-menu-parent a, ul.horiz li.current-menu-parent li.current-menu-item a, ul.horiz li.current-menu-parent li a:hover, ul.horiz li.menu-item-has-children a:after, ul.horiz li.menu-item-has-children li.menu-item-has-children a:after, ul.horiz li.current-menu-item li a:hover, ul.horiz li.current-menu-item a, ul.horiz li a:hover, ul.horiz li.current-menu-parent li.current-menu-item a, ul.horiz li.current-menu-parent a, .customNavigation a:hover {
    color:<?php echo ($color4);?>;
    }
    
    .page_wrap, .page_wrap_home, #footer_widget .textwidget input[type=text], #footer_widget .textwidget input[type=email], #footer_widget .textwidget input[type=url], #footer_widget .textwidget input[type=password], #footer_widget .textwidget input[type=tel], #footer_widget .textwidget input[type=text]:focus, #footer_widget .textwidget input[type=email]:focus, #footer_widget .textwidget input[type=url]:focus, #footer_widget .textwidget input[type=password]:focus, #footer_widget .textwidget input[type=tel]:focus, .table .table, #respond input, #respond textarea, #respond input[type=submit]:hover, .right_content ul.horiz-cart, .edd-author-bio, .pricetable .pricetable-inner, .pricetable .pricetable-column.pricetable-featured, .pricetable .pricetable-column.pricetable-featured .pricetable-column-inner, .search_EDD input[type="text"], .vendor_contact_form, .member_details, ul.edd-cart {
    background-color:<?php echo ($color4);?>;
    background:none repeat scroll 0 0 <?php echo ($color4);?>;
    }
    
    p, ul, ol, ul ul, ul ol, ol ul, ol ol, table, .intro, .gallery-caption, .contentsingle .edd_price_option_name, .fes-help {
    color:<?php echo ($color5);?>;
    }
    
    #edd_checkout_form_wrap span.edd-description, .edd-cart-number-of-items, .creativ-shortcode-alertbox-colour-theme.creativ-shortcode-alertbox p {
        color:<?php echo ($color5);?> !important;
    }
    
    #footer_widget .textwidget div.wpcf7-mail-sent-ok, div.wpcf7-mail-sent-ok, .pricetable .pricetable-header p {
    color:<?php echo ($color5);?> !important;
    }
    
    h1, h2, h3, h4, h5, h6, .cr3ativeportfolio_custom_tax a, .cr3ativeportfolio_custom_tax, .edd_form legend, #isa-edd-specs td, .right_content ul.horiz-cart .edd-cart-item-title, .edd_subtotal, .more-link.edd, .cr3ativeportfolio_filter, #isa-related-downloads li a, .edd_feat_image_index .caption p, .index_purchase_form .edd_download_purchase_form .edd_price_options span, .pricetable h3.pricetable-name, .pricetable h4.pricetable-price, .pricetable .pricetable-feature, .highlight, ins, body .creativ-shortcode-tab-buttons a.active, body .creativ-shortcode-tab-buttons a:hover, th.col-author, th.col-content, #fes-product-name, .fes-light-red, .fes-vendor-comment-respond-form, #fes-product-list th, .fes-label label, table.edd-fpd th, .wp-playlist-tracks .wp-playlist-item-title, .fes-submission-form strong, .largetext {
    color:<?php echo ($color2);?>;
    }
    
    .right_content h4  {
    color:<?php echo ($color3);?>;
    }
    
    .right_content p, .right_content, .right_content ul li, .right_content ol li, #wp-calendar {
    color:<?php echo ($color6);?>;
    }
    
    .edd-cart-quantity, blockquote p:before, blockquote p:after, blockquote, blockquote p, body .creativ-shortcode-button:active, body .creativ-shortcode-button:hover, body .creativ-shortcode-button, body .creativ-shortcode-button:focus, ul#menu-menu2 li.register a {
        color:<?php echo ($color4);?>!important;
    }
        
    .menu_container, .pricetable .pricetable-column.pricetable-featured:before, #fes-vendor-announcements {
    background-color:<?php echo ($color7);?>;
    }
    
    blockquote:before {
        border-top-color: <?php echo ($color2);?>;
    }
    
    pre {
    border-left: 20px solid <?php echo ($color2);?>;
    }

    .popup .overlay {
        background-color:<?php echo ($color1);?>!important;
    }
    
    .mejs-container .mejs-controls {
    background:<?php echo ($color1);?>!important;
    }
    
    #cr3ativeportfolio_portfolio-filter li a, p.member_details_title, .circle {
    color:<?php echo ($color2);?> !important;
    }
    
    #cr3ativeportfolio_portfolio-filter li a.current, #cr3ativeportfolio_portfolio-filter li a:hover {
    color:<?php echo ($color4);?> !important;
    }
    
    .quote-image {
    background-color: <?php echo ($color4);?>;
    }
    
    .caption p.EDD_Price1, .caption .thumb_author_details .EDD-Author p {
    color:<?php echo ($color3);?> !important;
    }
    
    .pricetable-featured .pricetable-button-container a {
    background-color:<?php echo ($color1);?>;
    }
    
    .wp-playlist-light .wp-playlist-playing, .wp-playlist-item:hover {
    background-color:<?php echo ($bodybackgroundcolor);?> !important;
    }
    
    *[itemprop="fileFormat"], *[itemprop="datePublished"], *[itemprop="dateModified"], *[itemprop="softwareVersion"], *[itemprop="fileSize"], *[itemprop="requirements"], #isa-edd-specs td:last-child {
    color:<?php echo ($color5);?> !important;
    }
    
    .contentsingle a.edd-wl-action, a.edd-wl-action.edd-wl-button {
        color:<?php echo ($color1);?>;
        border:2px solid <?php echo ($color1);?> !important;
    }
    
    .contentsingle a.edd-wl-action:hover, a.edd-wl-action.edd-wl-button:hover {
    color:<?php echo ($color4);?> !important;
        background:<?php echo ($color1);?> !important;
    }
    
    .right_content a.edd-wl-action {
    color:<?php echo ($color4);?>!important;
        border: none !important;
    }
    
    .right_content a.edd-wl-action.edd-wl-button:hover {
    background:<?php echo ($color4);?>!important;
        color:<?php echo ($color2);?>!important;
    }
    
    .modal-footer a.edd-wl-button {
    background:<?php echo ($color1);?> !important;
        color:<?php echo ($color4);?> !important;
        border: none !important;
    }
    
    .modal-footer a.edd-wl-button:hover {
    background:<?php echo ($color2);?>!important;
        color:<?php echo ($color4);?>!important;
        border: none !important;
    }
    
ul.horiz li.current-menu-parent li a:hover, ul.horiz li.current-menu-parent ul.sub-menu li a:hover, ul.horiz li.current-menu-parent ul.sub-menu li.current-menu-item a, ul.sub-menu li a:hover {
    background-color: <?php echo ($color2);?>;
    color: <?php echo ($color4);?>;
}
    
    ul#menu-menu2 li.register a {
    background-color: <?php echo ($color2);?>!important;
    }
    
    ul#menu-menu2 li.register a:hover, a.wpmenucart-contents.empty-wpmenucart-visible:hover, a.wpmenucart-contents {
    background-color:<?php echo ($color1);?> !important;
    }
    
    a.wpmenucart-contents.empty-wpmenucart-visible {
        background-color: transparent !important;
    }
    
    @media only screen and (max-width: 640px) {
    
    .cr3ativstaff_employee_info {
    border-bottom: 0 solid transparent !important;
    border-top: 0 solid transparent !important;
}
    }
    

</style>

<body <?php body_class(); ?>>

        <!-- Start of header wrapper -->
        <div id="header_wrapper">

            <!-- Start of header -->
            <header>

                <!-- Start of top logo -->
                <div class="top_logo">
                    <a href="<?php echo site_url(); ?>">
                        <?php if ( function_exists( 'get_option_tree' ) ) { $logopath=get_option_tree( 'vn_toplogo' ); } ?>
                        <img src="<?php echo $logopath; ?>" alt="<?php _e( 'top logo', 'squarecode' ); ?>" />
                    </a>

                </div>
                <!-- End of top logo -->

                <!-- Start of container -->
                <div class="container">

                    <section>         
                        
                        <?php if ( function_exists( 'get_option_tree' ) ) { $menu=get_option_tree( 'vn_menuchoice' ); } ?>
                        <?php 
                            if(($menu == 'popout') || ($menu == 'both'))
                        { ?>

                        <a id="trigger-overlay">&nbsp;</a>
                        
                        <?php  } ?>       
                         
                        <?php wp_nav_menu( array( 'menu_class'=>'cr3_edd_cart', 'theme_location' => 'cart', 'fallback_cb' => 'false', ) ); ?>          
                        
                    </section>

                </div>
                <!-- End of container -->
                
                <?php 
                    if(($menu == 'popout') || ($menu == 'both'))
                { ?>

                <!-- Start of overlay -->
                <div class="overlay overlay-hugeinc">

                    <!-- Start of menu container -->
                    <div class="menu_container">

                        <button type="button" class="overlay-close"><?php _e( 'Close', 'squarecode' ); ?></button>

                        <!-- Start of left -->
                        <div class="left">

                            <!-- Start of nav menu -->
                            <div class="nav">

                                <?php wp_nav_menu( array( 'menu_class'=>'nav', 'menu_id'=>'demo1', 'theme_location' => 'popout', ) ); ?>
                                <div class="clearfix"></div>

                            </div>
                            <!-- End of nav menu -->

                            <div class="clearfix"></div>

                        </div>
                        <!-- End of left -->

                        <!-- Start of right -->
                        <div class="right">

                            <!-- Start of recents -->
                            <div class="recents">

                                <?php 
                                    $blog_query=null; 
                                    $blog_query=new WP_Query( 'post_type=post&showposts=4'); 
                                    $blog_query->query('post_type=post&showposts=4'); 
                                ?>

                                <?php while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>

                                <!-- Start of recents title -->
                                <div class="recents_title">
                                    <h2><a href="<?php the_permalink (); ?>"><?php the_title (); ?></a></h2>
                                    <!-- Start of recents meta date -->
                                    <div class="recents_meta_date">
                                        <p><?php the_time(get_option('date_format')); ?></p>

                                    </div>
                                    <!-- End of recents meta date -->
                                    
                                    <?php if ('open' == $post->comment_status) { ?>

                                    <!-- Start of recents meta comments -->
                                    <div class="recents_meta_comments">
                                        <p>
                                            <?php if (get_comments_number()==1) { ?>

                                            <?php comments_popup_link( '0', '1', '%', 'comments-link', ''); ?>

                                            <?php _e( 'comment', 'squarecode' ); ?>

                                            <?php } else { ?>

                                            <?php comments_popup_link( '0', '1', '%', 'comments-link', ''); ?>

                                            <?php _e( 'comments', 'squarecode' ); ?>

                                            <?php } ?>
                                        </p>

                                    </div>
                                    <!-- End of recents meta comments -->
                                    
                                    <?php } ?>

                                </div>
                                <!-- End of recents title -->
                                
                                <?php endwhile; ?> <?php wp_reset_query(); ?>

                            </div>
                            <!-- End of recents -->

                            <!-- Start of search -->
                            <div class="search">

                                <?php get_search_form(); ?>

                            </div>
                            <!-- End of search -->

                            <div class="clearfix"></div>
                            
                        </div>
                        <!-- End of right -->

                    </div>
                    <!-- End of menu container -->

                </div>
                <!-- End of overlay -->

                <div class="clearfix"></div>
                
                <?php } ?>

            </header>
            <!-- End of header -->

            <?php 
                if(($menu == 'horizontal') || ($menu == 'both'))
            { ?>
            
            <div class="clearfix"></div>

            <!-- Start of horizontal menu wrapper -->
            <div class="horizontal_menu_wrapper">

                <!-- Start of horizontal menu -->
                <div class="horizontal_menu">

                    <?php wp_nav_menu( array( 'menu_class'=>'horiz', 'theme_location' => 'horizontal', ) ); ?> 

                </div>
                <!-- End of horizontal menu -->

            </div>
            <!-- End of horizontal menu wrapper -->

            <?php } ?>
            
        </div>
        <!-- End of header wrapper -->