	</div>
	
</section>

<footer class="footer row">
  <div class="row">
		   <!--<div class="small-12 medium-12 large-12 columns">
			<ul class="inline-list">
	<li><a href="/wordpress/home/">Home</a></li>
	<li><a href="/wordpress/updates/">Updates</a></li>
	<li><a href="/wordpress/about/">About</a></li>
	<li><a href="/wordpress/gallery/">Gallery</a></li>
	<li><a href="/wordpress/contact/">Contact</a></li>
	<li><a href="/wordpress/products/">Products</a></li>
	</ul>
</div>   -->
			<div class="large-12 columns">
			<div class="facebook"><?php echo do_shortcode('[custom-facebook-feed]'); ?></div>
			</div>
			<div class="large-12 columns">
							<div id="copyright">
							<p>
	<a href="/wordpress/home/">Home </a>/
	<a href="/wordpress/updates/">Updates </a>/
	<a href="/wordpress/about/">About </a>/
	<a href="/wordpress/gallery/">Gallery </a>/
	<a href="/wordpress/contact/">Contact </a>/
	<a href="/wordpress/products/">Products </a>
	</p>
    <strong><p>&copy; <?php bloginfo('name'); ?> <?php the_time('Y') ?>.</p> <p>Designed by <a href="http://drudesu.github.io">Andrew Moreno</a> in-house.</p></strong> </a> 
    <strong></p></strong>
    </p>
    <p><a href="<?php bloginfo('rss2_url'); ?>">Latest Posts RSS</a></p>
				
	</div><!--/.copyright-->
            </div>
			</div>
			</div>

			<!--footer row end-->
			
  </footer>
<!-- js activate background
  <script type="text/javascript"> 
ChangeIt();
</script>--> 
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/foundation/js/foundation.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/foundation/js/foundation.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/foundation/js/foundation/foundation.offcanvas.js"></script>
    <script>
      $(document).foundation();
    </script></footer>
<a class="exit-off-canvas"></a>

  </div>
</div>
<?php wp_footer(); ?>
</body>
</html>