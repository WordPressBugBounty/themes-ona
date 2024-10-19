<?php

/**
 * Ona: Block Patterns
 *
 * @since 1.0
 */
if ( !function_exists( 'ona_register_block_patterns' ) ) {
    function ona_register_block_patterns() {
        if ( function_exists( 'register_block_pattern_category' ) ) {
            register_block_pattern_category( 'ona-general', array(
                'label' => __( 'Ona General', 'ona' ),
            ) );
            register_block_pattern_category( 'ona-footers', array(
                'label' => __( 'Ona Footers', 'ona' ),
            ) );
            register_block_pattern_category( 'ona-headers', array(
                'label' => __( 'Ona Headers', 'ona' ),
            ) );
            register_block_pattern_category( 'ona-sidebars', array(
                'label' => __( 'Ona Sidebars', 'ona' ),
            ) );
            register_block_pattern_category( 'ona-posts', array(
                'label' => __( 'Ona Posts', 'ona' ),
            ) );
            register_block_pattern_category( 'ona-pages', array(
                'label' => __( 'Ona Pages', 'ona' ),
            ) );
            register_block_pattern_category( 'ona-shop', array(
                'label' => __( 'Ona Shop', 'ona' ),
            ) );
            register_block_pattern_category( 'ona-forms', array(
                'label' => __( 'Ona Forms', 'ona' ),
            ) );
        }
        if ( function_exists( 'register_block_pattern' ) ) {
            $block_patterns = array(
                'general-hero-cover',
                'general-hero-minimal',
                'general-hero-creative',
                'general-hero-business',
                'general-hero-health',
                'general-hero-studio',
                'general-hero-photography',
                'general-page-title-with-image',
                'general-promo-boxes',
                'general-promo-boxes-creative',
                'general-promo-section',
                'general-promo-section-offset',
                'general-promo-section-travel',
                'general-promo-health',
                'general-quote-fashion',
                'general-partner-logos-fashion',
                'general-ad-banner-news',
                'general-cta-studio',
                'general-latest-youtube-video',
                'general-gallery-5-columns',
                'general-gallery-studio',
                'general-testimonials',
                'general-partner-logos-business',
                'general-about-business',
                'general-icon-boxes-business',
                'general-icon-boxes-studio',
                'general-intro-studio',
                'general-partner-logos-studio',
                'general-projects-business',
                'general-statistic-business',
                'general-testimonials-business',
                'general-team-business',
                'general-instagram-feed-health',
                'posts-grid-4-columns',
                'posts-grid-3-columns',
                'posts-grid-3-columns-with-featured',
                'posts-grid-3-columns-travel',
                'posts-grid-3-columns-environmental',
                'posts-grid-3-columns-travel-style-2',
                'posts-grid-2-columns-no-image',
                'posts-grid-2-columns-sticky-on-scroll',
                'posts-grid-2-columns-sticky-on-scroll-style-3',
                'posts-grid-2-columns-masonry',
                'posts-grid-4-columns-health',
                'posts-grid-3-columns-health',
                'posts-grid-4-columns-news',
                'posts-grid-4-columns-fashion',
                'posts-grid-3-columns-fashion',
                'posts-list-creative',
                'posts-list-minimal-no-image',
                'posts-list-travel',
                'posts-list-with-sidebar-health',
                'posts-list-with-sidebar-news',
                'posts-mixed-with-sidebar-news',
                'posts-mixed-news',
                'posts-masonry-news',
                'header-default',
                'header-centered-logo',
                'header-minimal',
                'header-transparent-creative',
                'header-creative',
                'header-travel',
                'header-fashion',
                'header-studio',
                'header-environmental',
                'header-business',
                'header-health',
                'header-news',
                'header-photography',
                'footer-default',
                'footer-creative',
                'footer-fashion',
                'footer-travel',
                'footer-minimal',
                'footer-environmental',
                'footer-business',
                'footer-health',
                'footer-news',
                'footer-photography',
                'footer-studio',
                'page-about',
                'page-contact',
                'page-404-photography',
                'forms-newsletter',
                'forms-newsletter-book',
                'sidebar-default',
                'sidebar-news'
            );
            foreach ( $block_patterns as $block_pattern ) {
                $pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );
                register_block_pattern( 'ona/' . $block_pattern, require $pattern_file );
            }
        }
    }

}
add_action( 'init', 'ona_register_block_patterns', 9 );