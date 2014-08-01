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

<?php
 $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
 ?>
<h2><?php echo $term->name; // will show the name ?></h2>

 <?php
//echo get_query_var( 'taxonomy' ); // parent
//echo $term->slug; // will show the slug
 //echo $term->taxonomy; // will show the taxonomy

  ?>
  
  <ul class="thumbnails">
    
    
    <!-- pagination here --> 
    <!-- the loop -->
    <?php
    
		if ( have_posts() ) : ?>
    
    <!-- pagination here --> 
    <!-- the loop -->
    <?php while ( have_posts() ) : the_post(); ?>
    <?php 
				$classes2use = "filter-class-view sub-filter-class-view "; 
				$classes2use .= get_field('activity_type');
				$classes2use .= " ";
				$classes2use .= get_field('resturant_type');
				$classes2use .= " ";
				$classes2use .= $m = substr(get_field('event_start_date'), 4, 2);
            ?>
    <li <?php post_class($classes2use); ?>>
      <?php the_post_thumbnail('thumbnail'); ?>
      <div class='content-holder'>
        <h2>
          <?php the_title(); ?>
        </h2>
        <?php
                    $start_date = DateTime::createFromFormat('Ymd', get_field('event_start_date'));
                    $end_date = DateTime::createFromFormat('Ymd', get_field('event_end_date'));
                    
                    if($start_date){ ?>
        <h3 class="dates"><?php echo $start_date->format('d-m-Y'); ?> to <?php echo $end_date->format('d-m-Y'); ?></h3>
        <?php } ?>
        <?php $location = get_field('location'); ?>
        <!-- p class="address"><strong><?php //echo $location['address']; ?></strong></p -->
        <?php the_content(); ?>
        
      </div>
    </li>
    <?php endwhile; ?>
    
    <!-- end of the loop --> 
    <!-- pagination here -->
    
    <?php wp_reset_postdata(); ?>
    <?php else:  ?>
    <p>
      <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
    </p>
    <?php endif; ?>
    
    <!-- end of the loop --> 
    <!-- pagination here -->
    
    <?php wp_reset_postdata(); ?>
    
  </ul>
  <?php bootstrapwp_content_nav('nav-below');?>
</article>
<?php get_footer(); ?>
