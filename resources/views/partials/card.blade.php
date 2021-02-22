
<div class='card-wide'>
  <div class='flex-1 bg-white overflow-hidden shadow-lg'>
    <a href="{{ $newsBlock['permalink'] }}" title="" class='flex flex-wrap no-underline hover:no-underline border-none'>
      <h3 class='w-full font-bold text-xl px-6 mt-5'>{{ $newsBlock['title'] }}</h3>
      <span class='w-full text-xs md:text-sm px-6 uppercase mb-2 font-semibold'>{!! get_the_time('M, Y', $newsBlock->ID) !!}</span>

      <span class='text-base px-6 mb-5 text-grey-darkest leading-normal md:block hidden'>{!! $newsBlock['content'] !!}</span>
    </a>
  </div>
  <div class="flex-none mt-auto bg-white overflow-hidden shadow-lg px-6 py-3">
    <div class='flex items-center justify-between'>
      @foreach( wp_get_post_categories($newsBlock->ID) as $cat)
        @php $homecat = get_category($cat) @endphp
        <p class='category text-xs md:text-sm'><i class="fas fa-tags mr-1"></i>{{ $homecat->name }}</p>
      @endforeach
    </div>
  </div>
</div>
