<!-- FOOTER  -->
<div class="footer" >
  <div class="content">
    <div class="footer-titles">
	    <h2>Big Swig</h2>
	    <div class ="footer-image">
	    	<img src="<?php echo get_template_directory_uri(); ?>/img/seam-icon.svg">
	    </div>
	  </div>
    <ul class="footer-contact">
      <li>
      	<a class="c-block-fill" href="tel:+1-<?php the_field('phone_number', 'options');?>"></a>
      	<?php the_field('phone_number', 'options');?>
     	</li>
     	<li>
	      <a class="c-block-fill" href="mailto:<?php the_field('contact_email', 'options');?>"></a>
	      <?php the_field('contact_email', 'options');?>
	    </li>
	    <li>
      	<a class="c-block-fill" href="https://www.instagram.com/bigswigtours" target"_blank" ></a>
      	#BigSwig
      </li>
    </ul>
    <ul class="footer-social">
	    <li> 
	      <a class="c-block-fill" href="http://www.facebook.com/bigswigtours" target="_blank"></a>
	      <i class="fa fa-facebook" aria-hidden="true"></i>
	    </li>
	    <li>
	      <a class="c-block-fill" href="http://www.instagram.com/bigswigtours" target="_blank"></a>
	      <i class="fa fa-instagram" aria-hidden="true"></i>
	    </li>
	    <li>
	      <a class="c-block-fill" href="http://www.yelp.com/biz/big-swig-tours-anchorage" target="_blank"></a>
	      <i class="fa fa-yelp" aria-hidden="true"></i>
	    </li>
	    <li>
	      <a class="c-block-fill" href="http://www.tripadvisor.com/Attraction_Review-g60880-d6776569-Reviews-Big_Swig_Tours-Anchorage_Alaska.html" target="_blank"></a>
	      <i class="fa fa-tripadvisor" aria-hidden="true"></i>
      </li>
    </ul>
  </div>
</div>
<?php wp_footer(); ?>
</div><!-- WRAPPER -->
</body>
</html>





