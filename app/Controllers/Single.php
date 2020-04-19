<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Single extends Controller
{
    public function featuredImageBackground(){
      $featured_img = get_the_post_thumbnail_url(get_the_ID(),'full');

      return $featured_img;
    }


}
