<article @php post_class('flex flex-wrap w-full shadow-lg') @endphp>
  <div class="lg:w-1/2 lg:p-5">
    @if( !empty(get_the_post_thumbnail()) )
      @php the_post_thumbnail(); @endphp
    @else
      <img src="@asset('images/thumbnail.jpg')">
    @endif
  </div>
  <div class='lg:w-1/2 lg:p-5 p-3'>
    <header>
      <h2 class="entry-title text-3xl font-display font-bold"><a href="{{ get_permalink() }}" class='text-black hover:text-primary border-none hover:border-none'>{!! get_the_title() !!}</a></h2>
      @include('partials/entry-meta')
    </header>
    <div class="entry-summary">
      @php the_excerpt() @endphp
    </div>
  </div>
</article>
