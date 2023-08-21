<article @php(post_class())>
  @thumbnail
    <h2 class="entry-title">
      <a href="{{ get_permalink() }}">
        {!! $title !!}
      </a>
    </h2>

    @include('partials.entry-meta')
  <div class="entry-summary">
    @php(the_excerpt())
  </div>
</article>
