{{--
  Title: News
  Description: A Block for pulling in 3 of your latests posts.
  Category: sceniber
  Icon: admin-post
  Keywords: testimonial quote
  Mode: auto
  PostTypes: page post
  SupportsMode: false
  SupportsMultiple: true
--}}
<section data-{{ $block['id'] }} class='py-5 lg:py-10 bg-white'>
  <div class='container'>
    <h2 class='w-full my-2 text-5xl font-bold leading-tight text-center text-primary'>{!! get_field('section_name') !!}</h2>
    <div class='flex flex-wrap'>
      @php
        $args = ['posts_per_page' => 2,];
        $news_block = get_posts( $args )
      @endphp

      @foreach($news_block as $newsBlock)
        @include('partials.card')
      @endforeach
    </div>
  </div>
</section>
