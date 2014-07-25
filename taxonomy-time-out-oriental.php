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
  <ul class="thumbnails">
    <?php	
			$args = array(
				/*'meta_key' => 'event_start_date',
			   'orderby' => 'meta_value_num',*/
			   'order' => 'ASC',
				'post_type'    => 'activities',
				'time-out' => 'entertainment',
				'post_status'  => 'publish',
			); 
                
			// the query
			$the_query = new WP_Query( $args );
	 		
		if ( $the_query->have_posts() ) : ?>
    
    <!-- pagination here --> 
    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
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
        <p class="address"><strong><?php echo $location['address']; ?></strong></p>
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
  </ul>
  <?php bootstrapwp_content_nav('nav-below');?>
</article>
<?php get_footer(); ?>
