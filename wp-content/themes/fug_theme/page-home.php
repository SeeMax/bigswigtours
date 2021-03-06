<?php /* Template Name: Home */ get_header(); ?>
<main class="home-page" id="home">
	<?php while (have_posts()) : the_post(); ?>
		<section class="hero-section">
			<div class="tag-line-section">
				<div class="tripadvisor-logos">
					<a class="c-block-fill" target="_blank" href="https://www.tripadvisor.com/Attraction_Review-g60880-d6776569-Reviews-Big_Swig_Tours-Anchorage_Alaska.html"></a>
					<img src="<?php echo get_template_directory_uri(); ?>/img/TA-logo-19.svg">
				</div>
				<div class="content">
					<h3><?php the_field('hero_headline');?></h3>
				</div>
				<h4><a href="#tours"><?php the_field('hero_cta');?></a></h4>
		  </div>
			<video id="bgvid" playsinline autoplay muted loop poster="<?php echo get_template_directory_uri(); ?>/img/promo-vid-poster.png">
				<source src="https://seemaxwork.s3.amazonaws.com/video/bigswig-promo.mp4" type="video/mp4">
			</video>
		</section>


	  <section class="tour-section" id="tours">
	    <div class="content">
	     	<?php get_template_part('partials/_tours-preview') ?>
		  </div>
		</section>

		<section class="quote-section background-image-section"
      <?php
      	$image = get_field('quote_background_image');
      	$size = 'large';
      	$thumb = $image['sizes'][ $size ];
      	if (!empty($image))
      :?>
        style='background-image: url("<?php echo $thumb; ?>");'
    	<?php endif;?>
    >
    	<div class="image-overlay-black"></div>
			<div class="content">
				 <h3><?php the_field('quote_quote');?></h3>
				 <h4><?php the_field('quote_author');?></h4>
				<img src="<?php echo get_template_directory_uri(); ?>/img/white-peaks.svg">
	    </div>
		</section>

		<section class="about-section" id="about">
			<div class="content">
				<h2>About</h2>
				<p><?php the_field('about_body_copy');?></p>
				<h3><?php the_field('about_callout');?></h3>
				<?php if( have_rows('member_logos') ):?>
					<div class="membership-logos">
						<h3>Big Swig is a proud member of</h3>
						<!-- <div class="hr-container">
							<hr />
						</div> -->
						<?php while ( have_rows('member_logos') ) : the_row();?>
							<?php $image = get_sub_field('single_member_logo');?>
							<a class="single-members-logo" href="<?php the_sub_field('single_member_link');?>" target="_blank">
								<img src="<?php echo $image['url'];?>" />
							</a>
						<?php endwhile;?>
					</div>
				<?php endif;?>
			</div>
		</section>

		<section class="contact-section">
			<div class="contact-line contactLine">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 8 70">
					<style type="text/css">
						.st0{fill:none;stroke:#FFFFFF;stroke-width:8;stroke-miterlimit:10;}
					</style>
					<line class="st0" x1="4" y1="0" x2="4" y2="70"/>
				</svg>
			</div>

			<div class="content">
				<h3><?php the_field('contact_headline');?></h3>
				<ul class="">
					<h4>
						<a href="tel:+1-<?php the_field('phone_number', 'options');?>">
							<?php the_field('phone_number', 'options');?>
						</a>
					</h4>
					<h4>
						<a href="mailto:<?php the_field('contact_email', 'options');?>">
							<?php the_field('contact_email', 'options');?>
						</a>
					</h4>
				</ul>
	    </div>

	    <div class="contact-line bottom-contact-line contactLine">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 8 70">
					<style type="text/css">
						.st0{fill:none;stroke:#FFFFFF;stroke-width:8;stroke-miterlimit:10;}
					</style>
					<line class="st0" x1="4" y1="0" x2="4" y2="70"/>
				</svg>
			</div>
		</section>

		<section class="carousel-section background-image-section"
      <?php
      	$image = get_field('carousel_background_image');
      	$size = 'large';
      	$thumb = $image['sizes'][ $size ];
      	if (!empty($image))
      :?>
        style='background-image: url("<?php echo $thumb; ?>");'
    	<?php endif;?>
    >
			<div class="content">
				<div class="brand-carousel brandCarousel">
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/tagline-icon.svg" >
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/logo-mark.svg" >
				</div>
	    </div>
		</section>

		<section class="giftcard-section">
			<div class="content">
				<div class="giftcard-tile">
					<h3><?php the_field('group_sales_headline');?></h3>
					<p><?php the_field('group_sales_body');?></p>
					<div class="button">
						<a class="c-block-fill" href="mailto:<?php the_field('contact_email', 'options');?>"></a>
						<?php the_field('group_sales_cta');?>
					</div>
				</div>
				<div class="giftcard-tile">
					<h3><?php the_field('giftcard_headline');?></h3>
					<p><?php the_field('giftcard_body');?></p>
					<div class="button">
						<a href="<?php the_field('giftcard_link');?>" class="peekBbookButton" target="_blank" data-button-text="<?php the_field('giftcard_cta');?>">
							<?php the_field('giftcard_cta');?>
						</a>
					</div>
				</div>
	    </div>
		</section>




	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
