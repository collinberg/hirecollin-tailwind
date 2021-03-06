<?php

namespace App;

use Roots\Sage\Container;
use Roots\Sage\Assets\JsonManifest;
use Roots\Sage\Template\Blade;
use Roots\Sage\Template\BladeProvider;

/**
 * Theme assets
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('sage/main.css', asset_path('styles/main.css'), false, null);
    wp_enqueue_style('OpenSans' ,'link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&family=PT+Serif:wght@700&display=swap', false, null);

    wp_enqueue_script('sage/main.js', asset_path('scripts/main.js'), ['jquery'], null, true);

    if( is_front_page() ) {
      wp_enqueue_script('sage/particles.js', asset_path('scripts/homeParticles.js'), ['jquery'], null, true);
    }

    if (is_single() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}, 100);

/**
 * Theme setup
 */
add_action('after_setup_theme', function () {
    /**
     * Enable features from Soil when plugin is activated
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil-clean-up');
    add_theme_support('soil-jquery-cdn');
    add_theme_support('soil-nav-walker');
    add_theme_support('soil-nice-search');
    add_theme_support('soil-relative-urls');

    /**
     * Enable plugins to manage the document title
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Register navigation menus
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage')
    ]);

    /**
     * Enable post thumbnails
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable HTML5 markup support
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

    /**
     * Enable selective refresh for widgets in customizer
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Use main stylesheet for visual editor
     * @see resources/assets/styles/layouts/_tinymce.scss
     */
    add_editor_style(asset_path('styles/main.css'));

    /**
     * Enables Block styles
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/
     */
     add_theme_support( 'wp-block-styles' );
     add_theme_support( 'align-wide' );

     add_theme_support('custom-background',
       array(
         'default-color' => 'f5efe0',
       )
     );

}, 20);

/**
 * Register sidebars
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ];
    register_sidebar([
        'name'          => __('Primary', 'sage'),
        'id'            => 'sidebar-primary'
    ] + $config);
    register_sidebar([
        'name'          => __('Footer', 'sage'),
        'id'            => 'sidebar-footer'
    ] + $config);
});

/**
 * Updates the `$post` variable on each iteration of the loop.
 * Note: updated value is only available for subsequently loaded views, such as partials
 */
add_action('the_post', function ($post) {
    sage('blade')->share('post', $post);
});

/**
 * Setup Sage options
 */
add_action('after_setup_theme', function () {
    /**
     * Add JsonManifest to Sage container
     */
    sage()->singleton('sage.assets', function () {
        return new JsonManifest(config('assets.manifest'), config('assets.uri'));
    });

    /**
     * Add Blade to Sage container
     */
    sage()->singleton('sage.blade', function (Container $app) {
        $cachePath = config('view.compiled');
        if (!file_exists($cachePath)) {
            wp_mkdir_p($cachePath);
        }
        (new BladeProvider($app))->register();
        return new Blade($app['view']);
    });

    /**
     * Create @asset() Blade directive
     */
    sage('blade')->compiler()->directive('asset', function ($asset) {
        return "<?= " . __NAMESPACE__ . "\\asset_path({$asset}); ?>";
    });
});
// -------------------------------------------------------------
// Homepage Thumbnail
// -------------------------------------------------------------
function news_thumbnail() {
  add_image_size( 'news_thumb', 600, 400, array( 'center', 'center' ) );
}
add_action('init', __NAMESPACE__ .'\\news_thumbnail');

// -------------------------------------------------------------
// Fix Titles for Archives
// -------------------------------------------------------------
add_filter( 'get_the_archive_title', function ($title) {

    if ( is_category() ) {

            $title = single_cat_title( '', false );

        } elseif ( is_tag() ) {

            $title = single_tag_title( '', false );

        } elseif ( is_author() ) {

            $title = '<span class="vcard">' . get_the_author() . '</span>' ;

        }

    return $title;

});
// -------------------------------------------------------------
// Removes or edits the 'Protected:' part from posts titles
// -------------------------------------------------------------
function remove_protected_text() {
  return __('%s');
}
add_filter( 'protected_title_format',  __NAMESPACE__ .'\\remove_protected_text' );

add_filter('init', function () {
    if (is_admin()) {
        return;
    }
    wp_deregister_script( 'jquery-core' );
    wp_register_script( 'jquery-core', "https://code.jquery.com/jquery-3.5.1.min.js", array(), '3.5.1' );
    wp_deregister_script( 'jquery-migrate' );
    wp_register_script( 'jquery-migrate', "https://code.jquery.com/jquery-migrate-3.3.1.min.js", array(), '3.3.1' );
});
// -------------------------------------------------------------
// Register Custom Theme Block Category: Sceniber
// -------------------------------------------------------------
add_filter( 'block_categories', __NAMESPACE__ .'\\sceniber_block_categories', 10, 2 );
function sceniber_block_categories( $categories, $post ) {
    if ( $post->post_type !== 'page' ) {
        return $categories;
    }
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'sceniber',
                'title' => __( 'Sceniber', 'sage' ),
                'icon'  => 'cover-image',
            ),
        )
    );
}

// -------------------------------------------------------------
// Anrchors on H2
// -------------------------------------------------------------
function anchor_content_h2($content) {

    // Pattern that we want to match
    $pattern = '<h2>(.*?)</h2>';

    // now run the pattern and callback function on content
    // and process it through a function that replaces the title with an id
    $content = preg_replace_callback('/<h2>(.*?)<\/h2>/', function ($matches) {
                $title = $matches[1];
                $slug = sanitize_title_with_dashes($title);
                return '<h2 id="' . $slug . '" style="scroll-margin: 50px 0 0 10px;"><a href="#'. $slug .'" class="no-underline border-none text-grey-darkest dark:text-grey-light">' . $title . '</a></h2>';
            }, $content);
    return $content;
}

add_filter('the_content', __NAMESPACE__ .'\\anchor_content_h2');
