<section class='h-3/4 p-5 bg-grey flex justify-center align-center flex-col-reverse antialiased shadow-inner' style="background-color: #333; background-image: url('{!! $featured_image_background !!}'); background-size: cover; background-position: center center;">
  <header class='text-white text-center'>
    <h1 class="entry-title text-3xl lg:text-5xl lg:mx-auto lg:w-3/4">{!! get_the_title() !!}</h1>
    @include('partials/entry-meta')
  </header>
</section>
<article @php post_class('py-5') @endphp>

  <div class="entry-content">
    @php the_content() @endphp
  </div>
</article>
