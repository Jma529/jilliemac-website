<section class="bg-charcoal lg:px-wrapper-lg px-wrapper-sm lg:py-section-y-lg py-section-y-sm">
  <h2 class="mb-40 text-stone">Recent Work</h2>
  <div class="grid grid-cols-3 gap-8">
    <div class="w-full">
      <!-- Start project loop -->
  @while(have_posts()) @php(the_post())
    @include('partials.content-project')
  @endwhile

</div>
</div>
</section>
