{{--
  Title: Testimonial
  Description: A Block for providing statement and a persons name.
  Category: sceniber
  Icon: admin-comments
  Keywords: testimonial quote
  Mode: auto
  PostTypes: page post
  SupportsMode: false
  SupportsMultiple: true
--}}
<section data-{{ $block['id'] }} class="px-3 py-5">
  <blockquote>
      {!! get_field('testimonial') !!}
      <cite>
        <span>{{ get_field('author') }}</span>
      </cite>
  </blockquote>
</section>

<style type="text/css">
  [data-{{$block['id']}}] {
    background: {{ get_field('background_color') }};
    color: {{ get_field('text_color') }};
  }
</style>
