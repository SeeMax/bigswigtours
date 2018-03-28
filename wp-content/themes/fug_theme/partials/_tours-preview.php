<div class="headline-container"> 
	<h2>The Tours</h2>
</div>
<?php $argsTour = array(
  'post_type' => 'tour',
  'posts_per_page' => -1,
  'order' => 'ASC',
  'orderby' => 'menu_order'
); $the_query = new WP_Query($argsTour);?>
<?php $i = 1;?>
<?php if ($the_query->have_posts()) : ?>
	<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
		<div class="single-tour-container singleTourContainer">
			
			<span class="tour-count"><?php echo $i;?></span>
		
      <div class="tour-panel-one background-image-section"
				<?php 
      	$image = get_field('tour_image'); 
      	$size = 'large'; 
      	$thumb = $image['sizes'][ $size ];
      	if (!empty($image))
      :?>
        style='background-image: url("<?php echo $thumb; ?>");'
    	<?php endif;?>
    >
			<div class="image-overlay-black"></div>
			<h3><?php the_title();?></h3>
			</div>	
			<div class="tour-panel-two">
				<div class="tour-words">
					<?php the_field('tour_preview');?>
				</div>
				<div class="tour-breweries">
					<span class="brewery-title">
						Potential Stops:
					</span>
					<?php $posts = get_field('tour_breweries'); if( $posts ): ?>
						<?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
		          <span class="single-brewery">
		          	<a href="<?php the_field('brewery_link', $p->ID);?>" target="_blank">
		          		<?php echo get_the_title( $p->ID ); ?>
		          	</a>
		          </span>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="tour-panel-three">
				<div class="tour-details">
					<div class="tour-times">
						<?php if( have_rows('tour_times') ):?>
		    			<?php while ( have_rows('tour_times') ) : the_row();?>

		    				<?php if( have_rows('single_tour_time') ):?>
		    					<?php while ( have_rows('single_tour_time') ) : the_row();?>
		    						<div class="single-tour-time">
		    							<span class="tour-season">
		    								<?php the_sub_field('tour_season');?>:
		    							</span>
					    				<!-- <span class="tour-start">
					    					<?php the_sub_field('tour_start');?> 
					    				</span> -->
					    				<span class="tour-days">
					    					<?php the_sub_field('tour_days');?>    
					    				</span>
					    			</div>
		    					<?php endwhile;?>
								<?php endif;?>
								
						  <?php endwhile;?>
						<?php endif;?>
					</div>



					<div class="tour-rate">
						<?php if( get_field('tour_rate_prefix') ): ?>
			    		<span class="per-rate"><?php the_field('tour_rate_prefix')?></span>
			    	<?php endif;?>
		    		<sup>$</sup><?php the_field('tour_rate');?>
		    		<!-- <?php if( get_field('tour_rate_suffix') ): ?>
		    			<span class="per-rate"><?php the_field('tour_rate_suffix')?></span>
		    		<?php endif;?> -->
		    	</div> 

		    	<div class="tour-duration">
						Approx <?php the_field('tour_duration');?>
					</div>
				</div>

				
				<div class="tour-links">
					<div class="button single-tour-button">
		      	<a class="c-block-fill" href="<?php the_permalink();?>"></a>
		      	Learn More
		    	</div>
		 			<div class="button tickets-button">
				  	<a href="<?php the_field('tour_buy_link');?>" class="peekBookButton" data-button-text="<?php the_field('tour_buy_cta');?>"><?php the_field('tour_buy_cta');?></a>
					</div>
		    </div>

			</div>
		</div>	
		<?php $i++;?>
	<?php endwhile; ?>
	<?php wp_reset_query(); ?>
<?php endif; ?>