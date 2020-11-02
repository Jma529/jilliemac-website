<?php
/*
 * The template for displaying the front page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * 
 * @package Jill_Augustus
 */

get_header();

//Variables
$image = get_the_post_thumbnail_url( get_the_ID(), 'full' );

?>

<section class="section section-home-hero" <?php if( has_post_thumbnail() ) : ?> style="background-image: url('<?php echo $image; ?>');"<?php endif; ?>>
  <h1>I am the new home page</h1>
</div>