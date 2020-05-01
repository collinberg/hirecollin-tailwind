<article @php post_class('flex flex-wrap w-full') @endphp>
  <div class="lg:w-1/2 lg:pr-5">
    @php the_post_thumbnail() @endphp
  </div>
  <div class='lg:w-1/2'>
    <header>
      <h2 class="entry-title text-3xl font-display font-bold border-none"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
      @include('partials/entry-meta')
    </header>
    <div class="entry-summary">
      @php the_excerpt() @endphp
    </div>
  </div>
</article>
