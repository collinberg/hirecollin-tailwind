<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class('tracking-normal antialiased dark:bg-black dark:text-white') @endphp>
    @php do_action('get_header') @endphp

    @include('partials.header')

          @yield('content')

    @php do_action('get_footer') @endphp

    @include('partials.footer')

    @php wp_footer() @endphp
  </body>
</html>
