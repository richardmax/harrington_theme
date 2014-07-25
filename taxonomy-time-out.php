<?php
	/**
	 * Template Name: Activities
	 */
	 get_header();
?>
<?php get_template_part('nav-secondary') ?>

<nav class="span4">
		<h1 class="title">Time out</h1>
			
											<?php get_template_part('menu-filter-activities') ?>
		</nav>
<article class="span6 contentarea">
  <hr>
 <p>Select a time out event above.</p>
  <?php bootstrapwp_content_nav('nav-below');?>
</article>
<?php get_footer(); ?>















