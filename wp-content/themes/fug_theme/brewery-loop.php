<div class="breweries-area">
  <div class="content">

  	<?php $argsBrew = array(
		  'post_type' => 'brewery',
		  'posts_per_page' => -1,
		  'order' => 'ASC',
		  'orderby' => 'menu_order'
		); $the_query = new WP_Query($argsBrew);?>
		<?php if ($the_query->have_posts()) : ?>
			<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
				
				<div class="single-brewery">
          <?php $image = get_field('tour_image'); if( !empty($image) ): ?>
		      	<div class="brewery_logo">
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						</div>
					<?php endif; ?>
          <h2>
           <?php the_title();?>
          </h2>
          <p>
            <?php the_field('brewery_description');?>
          </p>
        </div>
							
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		<?php endif; ?>

    
  </div>
</div>
