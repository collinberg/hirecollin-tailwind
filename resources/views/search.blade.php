@extends('layouts.app')

@section('content')
  @include('partials.page-header')
<section class='container pt-5 lg:pt-10 flex flex-wrap min-h-screen'>
  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-search')
  @endwhile
</section>
  {!! get_the_posts_navigation() !!}
@endsection
