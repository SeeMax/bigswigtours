<?php /* Template Name: Tours */ get_header(); ?>
<main class="tours-page">
	<?php while (have_posts()) : the_post(); ?>	      

	  <h1>
	    Check out the Big Swig Tours. We’re exploring the Last Frontier, one craft brewery at a time. Join us on our quest.
	  </h1>

		<section class="tour-section">
	    <div class="content">
	     <?php get_template_part('partials/_tours') ?>
		  </div>
		</section>
  
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
