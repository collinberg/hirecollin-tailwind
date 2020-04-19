<section class='h-3/4 p-5 bg-grey flex justify-center align-center flex-col-reverse antialiased shadow-inner' style="background-color: #333; background-image: url('{!! $featured_image_background !!}'); background-size: cover; background-position: center center;">
  <header class='text-white text-center'>
    <h1 class="entry-title text-5xl">{!! get_the_title() !!}</h1>
    @include('partials/entry-meta')
  </header>
</section>
<article @php post_class('py-5') @endphp>

  <div class="entry-content">
    @php the_content() @endphp
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php comments_template('/partials/comments.blade.php') @endphp
</article>
