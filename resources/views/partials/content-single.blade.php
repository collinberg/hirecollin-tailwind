<section class='flex flex-col-reverse bg-primary text-white h-1/2 pb-5'>
  <header class='container'>
    <h1 class="entry-title text-3xl lg:text-5xl font-bold w-3/4">{!! get_the_title() !!}</h1>
    @include('partials/entry-meta')
  </header>
</section>
<article @php post_class('py-5') @endphp>

  <div class="entry-content">
    @php the_content() @endphp
  </div>
</article>
