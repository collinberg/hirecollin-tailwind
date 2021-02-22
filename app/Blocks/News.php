<?php

namespace App\Blocks;

class News {

  public static function newsFeed()
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
