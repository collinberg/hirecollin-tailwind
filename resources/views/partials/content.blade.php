<article @php post_class('flex flex-wrap mb-5 pb-5 border-b-2 dark:border-grey-darkest') @endphp>
  <header class='w-full'>
    @include('partials/entry-meta')
    <h2 class="entry-title text-2xl md:text-4xl font-display font-bold lg:w-4/5"><a href="{{ get_permalink() }}" class='text-black dark:text-grey-lighter hover:text-primary border-none hover:border-none'>{!! get_the_title() !!}</a></h2>
  </header>
  <div class="entry-summary lg:text-lg">
    @php the_excerpt() @endphp
  </div>
</article>
