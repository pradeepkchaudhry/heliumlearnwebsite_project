<?php
/**
 * ============================================================
 * HELIUM LEARN — BLOG HEADER REMOVAL: functions.php snippet
 * ============================================================
 * HOW TO ADD THIS (choose ONE option):
 *
 * OPTION A — Code Snippets Plugin (recommended, safest):
 *   1. In WordPress Admin, go to: Plugins → Add New
 *   2. Install & activate "Code Snippets" by Code Snippets Pro
 *   3. Go to: Snippets → Add New
 *   4. Paste the code inside the function below (skip the
 *      outer function declaration — just paste the inner code)
 *   5. Set "Run snippet everywhere" → Save and Activate
 *
 * OPTION B — Theme functions.php (direct edit):
 *   1. WordPress Admin → Appearance → Theme File Editor
 *   2. Select functions.php on the right
 *   3. Paste the ENTIRE block below at the bottom of the file
 *   4. Click "Update File"
 *   WARNING: This will be lost if you update the theme.
 *   Use a child theme to be safe.
 * ============================================================
 */

/**
 * Inject CSS to hide the WordPress header on all blog pages.
 * Targets: home/blog, single posts, archives, category, tag, author pages.
 */
function helium_hide_blog_header() {
    // Only run on blog-related pages
    if ( is_home() || is_single() || is_archive() || is_category() || is_tag() || is_author() || is_search() ) {
        echo '<style id="helium-hide-header">
            /* Hide WordPress theme header on blog pages */
            .site-header,
            header.site-header,
            #masthead,
            #header,
            .header,
            .navbar,
            .nav-bar,
            .main-navigation,
            #site-navigation,
            #primary-navigation,
            .header-main,
            .site-branding {
                display: none !important;
                visibility: hidden !important;
                height: 0 !important;
                overflow: hidden !important;
            }
            /* Remove top padding/margin added for fixed header */
            body, .site, #page, #content, .content-area {
                padding-top: 0 !important;
                margin-top: 0 !important;
            }
        </style>' . "\n";
    }
}
add_action( 'wp_head', 'helium_hide_blog_header', 100 );


/**
 * ALTERNATIVE: Remove the header PHP template entirely.
 * This is cleaner than CSS hiding but requires template access.
 * Add this instead of (or alongside) the CSS approach.
 *
 * This works with themes that call get_header() in their templates.
 * It replaces get_header() with a blank output on blog pages.
 */
function helium_maybe_suppress_header() {
    if ( is_home() || is_single() || is_archive() || is_category() || is_tag() || is_author() || is_search() ) {
        // Suppress the action that renders the header HTML
        remove_all_actions( 'get_header' );
    }
}
add_action( 'wp', 'helium_maybe_suppress_header' );
