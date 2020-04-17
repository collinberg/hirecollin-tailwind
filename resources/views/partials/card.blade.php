<div class='w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink'>
  <div class='flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg'>
    <a href="{!! $home_item['permalink'] !!}" title="" class='flex flex-wrap no-underline hover:no-underline border-none'>
      <img src="{!! $home_item['thumbnail'] !!}" class="h-full w-full rounded-t pb-6">
      <span class='w-full text-grey-darker text-xs md:text-sm px-6 uppercase mb-2'><i class="fas fa-clock"></i> {!! $home_item['date'] !!}</span>
      <h3 class='w-full font-bold text-xl px-6 text-black'>{!! $home_item['title'] !!}</h3>
      <span class='text-base px-6 mb-5 text-grey-darkest leading-normal'>{!! $home_item['content'] !!}</span>
    </a>
  </div>
  <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
    <div class='flex items-center justify-between'>
      <p class='text-gray-600 text-xs md:text-sm'><i class="fas fa-tags"></i> 1 Min Read</p>
    </div>
  </div>
</div>
