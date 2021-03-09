
<div class='card-wide'>
  <div class='flex-1'>
    <a href="{{ $newsBlock['permalink'] }}" title="" class='flex flex-wrap no-underline hover:no-underline border-none'>
      <span class='w-full text-xs md:text-sm px-6 uppercase mb-1 font-semibold'>{{ $newsBlock['date'] }}</span>
      <h3 class='w-full font-bold text-xl px-6 mt-0 mb-2'>{{ $newsBlock['title'] }}</h3>
      <span class='text-base px-6 mb-5 text-grey-darkest dark:text-grey-lightest leading-normal md:block hidden'>{!! $newsBlock['content'] !!}</span>
    </a>
  </div>
  <div class="flex-none mt-auto px-6">
    <div class='flex items-center justify-between'>
      @foreach($newsBlock['categories'] as $cat)
        @php $homecat = get_category($cat) @endphp
        <span class='category text-xs md:text-sm'><i class="fas fa-tags mr-1"></i>{{ $homecat->name }}</span>
      @endforeach
    </div>
  </div>
</div>
