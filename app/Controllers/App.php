<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public function newsFeed()
    {
      $args= [
        'posts_per_page'  => 2,
      ];

      $latest_posts = get_posts( $args );

      return array_map(function ($post) {
          return [
              'date'      => get_the_time('M, Y', $post->ID),
              'categories'=> wp_get_post_categories($post->ID),
              'content'   => get_the_excerpt( $post->ID ),
              'title'     => get_the_title( $post->ID ),
              'permalink' => get_the_permalink( $post->ID ),
              'thumbnail' => get_the_post_thumbnail_url($post->ID,'news_thumb') ?: \App\asset_path('images/thumbnail.jpg')
          ];
      }, $latest_posts);
    }

}
