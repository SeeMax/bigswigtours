<?php get_header('subpage'); ?>
<main class="single-tour-page">

	<section class="hero-section background-image-section"		
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
    <div class="content">

    	<div class="tour-hero-times">
    		<?php if( have_rows('tour_times') ):?>
		    	<?php while ( have_rows('tour_times') ) : the_row();?>

    				<?php if( have_rows('single_tour_time') ):?>
    					<?php while ( have_rows('single_tour_time') ) : the_row();?>
    						<div class="single-tour-time">
    							<span class="tour-season"><?php the_sub_field('tour_season');?></span>:
									<span class="tour-days">
										<?php the_sub_field('tour_days');?>    
									</span> //
									<span class="tour-start">
										<?php the_sub_field('tour_start');?>
									</span>
									<span>-</span>
									<span class="tour-end">
										<?php the_sub_field('tour_end');?>
									</span>
			    			</div>
    					<?php endwhile;?>
						<?php endif;?>
						
				  <?php endwhile;?>
				<?php endif;?>
			</div>

    	<h1><?php the_title();?></h1>
    	<h4><?php the_field('tour_headline');?></h4>
    	
    </div>
	</section>
	
	<?php while (have_posts()) : the_post(); ?>
	  <section class="tour-words-section">
			<div class="content">
				<div class="tour-overview">
					<?php the_field('tour_overview');?>
				</div>
				<?php if( get_field('tour_asterisk') ): ?>
					<div class="tour-asterisk">
						*<?php the_field('tour_asterisk');?>
					</div>
				<?php endif; ?>
			</div>
		</section>
		<section class="tour-cta-section">
 			<div class="button tickets-button">
		  	<a href="<?php the_field('tour_buy_link');?>" class="peekBookButton" data-button-text="<?php the_field('tour_buy_cta');?>"><?php the_field('tour_buy_cta');?></a>
			</div>
		</section>	
		<section class="tour-details-section">
			<div class="content">

				<div class="cta-area">
					<h3>The Details</h3>
					<ul class="tour-timing">


						<?php if( have_rows('tour_times') ):?>
				    	<?php while ( have_rows('tour_times') ) : the_row();?>

		    				<?php if( have_rows('single_tour_time') ):?>
		    					<?php while ( have_rows('single_tour_time') ) : the_row();?>
	    							<li class="tour-season">
	    								<span>
	    									<?php the_sub_field('tour_season');?>
	    								</span>
	    							</li>
										<li>
				    					<span class="tour-start">
				    						<?php the_sub_field('tour_start');?>
				    					</span>
				    					-
				    					<span class="tour-end">
				    						<?php the_sub_field('tour_end');?>
				    					</span>
				    				</li>
				    				<li>
				    					<span class="tour-days">
				    						<?php the_sub_field('tour_days');?>    
				    					</span>
				    				</li>
		    					<?php endwhile;?>
								<?php endif;?>
								
						  <?php endwhile;?>
						<?php endif;?>
						<li class="duration">
							<span>
								Lasts Approximately <?php the_field('tour_duration');?>
							</span>
						</li>
					</ul>
				
					
					<?php if( have_rows('tour_includes') ): ?>
						<ul class="tour-includes">
							<li class="list-title">
								The Tour Includes
							</li>
							<?php while ( have_rows('tour_includes') ) : the_row();  ?>  
								<li>
									<span>
										<?php the_sub_field('single_tour_inclusion');?>
									</span>
								</li>
		    			<?php endwhile;?>
		    		</ul>
			   	<?php endif;?>
								
					<?php if( have_rows('tour_pickup') ): ?>
						<ul class="tour-pickup">
							<li class="list-title">
								Pickup from
							</li>
							<?php while ( have_rows('tour_pickup') ) : the_row();  ?>  
								<li>
									<a class="c-block-fill" href="<?php the_sub_field('single_pickup_location_map');?>" target="_blank"></a>
									<span>
										<?php the_sub_field('single_pickup_location');?>
									</span>
								</li>
		    			<?php endwhile;?>
		    		</ul>
			   	<?php endif;?>				
					
					<?php if( have_rows('tour_requirements') ): ?>
						<ul class="tour-requirements">
							<li class="list-title">
								Tour Requirements
							</li>
							<?php while ( have_rows('tour_requirements') ) : the_row();  ?>  
								<li>
									<span><?php the_sub_field('single_tour_requirement');?>
									</span>
								</li>
		    			<?php endwhile;?>
			   		</ul>
			   	<?php endif;?>


					<div class="tour-rate">
						<?php if( get_field('tour_rate_prefix') ): ?>
			    		<span class="per-rate"><?php the_field('tour_rate_prefix')?></span>
			    	<?php endif;?>
		    		<sup>$</sup><?php the_field('tour_rate');?>
		    		<?php if( get_field('tour_rate_suffix') ): ?>
		    			<span class="per-rate"><?php the_field('tour_rate_suffix')?></span>
		    		<?php endif;?>
		    	</div> 
							
					
			   	
			   	<div class="tour-links">
			 			<div class="button tickets-button">
					  	<a href="<?php the_field('tour_buy_link');?>" class="peekBookButton" data-button-text="<?php the_field('tour_buy_cta');?>"><?php the_field('tour_buy_cta');?></a>
						</div>
			    </div>
		  	</div>
		  	<div class="breweries-area">
				<h3>The Breweries</h3>
	    	<?php $posts = get_field('tour_breweries'); if( $posts ): ?>
					<?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
	          <div class="single-brewery">
	          	<a href="<?php the_field('brewery_link', $p->ID);?>" class="c-block-fill" target="_blank"></a>
	            <?php $image = get_field('brewery_logo', $p->ID); if( !empty($image) ): ?>
				      	<div class="brewery_logo">
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								</div>
							<?php endif; ?>
							<div class="brewery-words">
								<h4>
									<span><?php echo get_the_title( $p->ID ); ?></span>
								</h4>
	            	<?php the_field('brewery_description', $p->ID);?>
	            </div>
	          </div>
					<?php endforeach; ?>
				<?php endif; ?>
				<?php if( get_field('tour_breweries_note') ): ?>
					<div class="brewery-note">
						<span>*</span><?php the_field('tour_breweries_note');?>
					</div>
  			<?php endif;?>
			</div>
			</div>
	  </section>
	  <section class="cancelation-section">
	  	<div class="content">
	  		<span>Cancelation Policy:</span> <?php the_field('cancelation_policy');?>
	  	</div>
	  </section>

		

	<?php endwhile; ?>	
</main>
<?php get_footer(); ?>
