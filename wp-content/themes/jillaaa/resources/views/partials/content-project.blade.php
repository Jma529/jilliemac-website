<?php

  $args = array(
  'post_type' => 'project',
  'orderby' => 'menu_order',
  'order' => 'ASC',
);

$project_loop = new WP_Query($args); 

if ($project_loop->have_posts() ):

while ($project_loop->have_posts() ): $project_loop->the_post(); ?>

<a href="{{ get_permalink() }}" class="project-tile h-fit">
  <article>
    <div class="image h-2/3 w-full flex justify-center">
      <img src="@thumbnail('full', false)" />
    </div>
    <div class="entry-summary py-4 pl-4">
    <h2 class="text-charcoal text-body">@title</h2>
      <p class="text-lg">@excerpt</p>
    </div>
  </article>
</a>
<?php endwhile; endif; ?>
