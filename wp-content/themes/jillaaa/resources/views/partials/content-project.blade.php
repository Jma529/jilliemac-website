<?php

  $args = array(
  'post_type' => 'project',
  'orderby' => 'menu_order',
  'order' => 'ASC',
);

$project_loop = new WP_Query($args); 

if ($project_loop->have_posts() ):

while ($project_loop->have_posts() ): $project_loop->the_post(); ?>

<a href="{{ get_permalink() }}">
  <article class="text-stone h-[50vh] bg-cover bg-no-repeat saturate-0 hover:saturate-100" @php(post_class()) style="background-image:url('@thumbnail('full', false)')">

  <div class="entry-summary bg-charcoal bg-opacity-80 py-4 pl-4">
    <p class="text-white">@title</p>
    @php(the_excerpt())
  </div>
  </article>
</a>
<?php endwhile; endif; ?>
