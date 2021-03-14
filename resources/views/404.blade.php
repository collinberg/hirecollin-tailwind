@extends('layouts.app')

@section('content')
  @include('partials.page-header')
<section class='container pt-5 lg:pt-10 flex flex-wrap h-screen'>
  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, I can\'t seem to find anything on that. ¯\_(ツ)_/¯ ' , 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif
</section>
@endsection
