<?php
	/**
	 * Template Name: Activities Dynamic Menu
	 */
	 get_header();
?>
<?php get_template_part('nav-secondary') ?>

<nav class="span10">
  <h2>Time Out at the Harrington</h2>
  <hr>
  <ul class="timeout-nav">
    <?php $args = array(
	'orderby'            => 'date',
	'order'              => 'ASC',
	'style'              => 'list',
	'show_count'         => 0,
	'hide_empty'         => 1,
	'use_desc_for_title' => 1,
	'child_of'           => 0,
	'hierarchical'       => 1,
	'title_li'           => __( '' ),
	'show_option_none'   => __( 'No categories' ),
	'number'             => null,
	'echo'               => 1,
	'depth'              => 0,
	'current_category'   => 0,
	'pad_counts'         => 0,
	'taxonomy'           => 'time-out'
); ?>
    <?php wp_list_categories( $args ); ?>
  </ul>
</nav>
<article class="span10 contentarea">
  <hr>
 <p>Select a time out event above.</p>
  <?php bootstrapwp_content_nav('nav-below');?>
</article>
<?php get_footer(); ?>
