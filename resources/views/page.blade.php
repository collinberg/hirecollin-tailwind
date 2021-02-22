@extends('layouts.app')


@section('content')

@include('partials.page-header')
<div class="wrap container pt-16" role="document">
  <div class="content">
    <main class="main page-content">
  @while(have_posts()) @php the_post() @endphp

    @include('partials.content-page')
  @endwhile

  </main>
  @if (App\display_sidebar())
    <aside class="sidebar">
      @include('partials.sidebar')
    </aside>
  @endif
  </div>
</div>
@endsection
