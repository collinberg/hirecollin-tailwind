@extends('layouts.app')

@section('content')
  @include('partials.page-header')
<section class='container pt-5 lg:pt-10 flex flex-wrap'>
  <main class='w-full md:w-3/4 md:pr-6'>
    @if (!have_posts())
      <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
      </div>
      {!! get_search_form(false) !!}
    @endif
    @while (have_posts()) @php the_post() @endphp
      @include('partials.content-'.get_post_type())
    @endwhile
  </main>
  <aside class="sidebar w-full md:w-1/4 md:pl-6">
    @include('partials.sidebar')
  </aside>
</section>
<div class='container pb-10'>
  {!! get_the_posts_navigation() !!}
</div>

@endsection
