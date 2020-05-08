<time class="updated mb-3 text-primary uppercase font-bold block text-xs" datetime="{{ get_post_time('c', true) }}"><i class="fas fa-calendar"></i> {{ get_the_date() }}</time>
<p class="byline author vcard hidden">
  {{ __('By', 'sage') }} <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
    {{ get_the_author() }}
  </a>
</p>
