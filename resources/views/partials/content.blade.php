<article @php post_class('flex flex-wrap mb-10') @endphp>
  <div class=''>
    <header>
      <h2 class="entry-title text-4xl font-display font-bold"><a href="{{ get_permalink() }}" class='text-black hover:text-primary border-none hover:border-none'>{!! get_the_title() !!}</a></h2>
      @include('partials/entry-meta')

    </header>
    <div class="entry-summary lg:text-lg">
      @php the_excerpt() @endphp
    </div>
  </div>
</article>
