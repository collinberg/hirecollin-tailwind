@if( is_single() )
<div class='entry-meta block my-2'>
  <time class="updated mb-3 text-white uppercase pr-3 font-semibold text-xs" datetime="{{ get_post_time('c', true) }}"><i class="fas fa-calendar mr-1 text-white"></i> {{ get_the_date() }}</time>
    @php $catListing = wp_get_post_categories($post->ID) @endphp
  @foreach($catListing as $cat)
    @php $homecat = get_category($cat) @endphp
    <span class='text-white text-xs md:text-sm font-semibold'><i class="fas fa-tags mr-1 text-white"></i>{{ $homecat->name }}</span>
  @endforeach
</div>
@else
<div class='entry-meta block my-2'>
  <time class="updated mb-3 text-grey-darker uppercase pr-3 font-semibold text-xs" datetime="{{ get_post_time('c', true) }}"><i class="fas fa-calendar mr-1 text-primary"></i> {{ get_the_date() }}</time>
    @php $catListing = wp_get_post_categories($post->ID) @endphp
  @foreach($catListing as $cat)
    @php $homecat = get_category($cat) @endphp
    <span class='text-grey-darker text-xs md:text-sm font-semibold'><i class="fas fa-tags mr-1 text-primary"></i>{{ $homecat->name }}</span>
  @endforeach
</div>
@endif
