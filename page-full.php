<?php
/*
Template Name: Full Width
*/
get_header(); ?>

	<div class="small-12 large-12 columns" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			 <div class="row dark">
          <div class="small-8 medium-8 large-12 columns">
<h2>Last 3 posts</h2>
		<hr />
<?php $the_query = new WP_Query( 'showposts=3' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
<?php the_content(__('(more…)')); ?>
<?php endwhile;?>



</div><!--span end-->
</div><!--row post end-->
<div class="row">
          <div class="small-8 medium-8 large-12 columns">
<h2>New Product</h2>
		<hr />

	        		       <ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-6">
						  											     <li><a href="#"><img class="th" src="http://img3.wikia.nocookie.net/__cb20120419081451/cardfight/images/3/3a/VGD_ENG_TD05b.png"></img></a></li>
						   						   <li><a href="#"><img class="th" src="http://img1.wikia.nocookie.net/__cb20120419081507/cardfight/images/4/4e/VGD_ENG_TD06b.png"></img></a></li>
						   						   <li><a href="#"><img class="th" src="http://img1.wikia.nocookie.net/__cb20120419081507/cardfight/images/4/4e/VGD_ENG_TD06b.png"></img></a></li>
											   <li><a href="#"><img class="th" src="http://img3.wikia.nocookie.net/__cb20120419081451/cardfight/images/3/3a/VGD_ENG_TD05b.png"></img></a></li>
	                                           						   						   <li><a href="#"><img class="th" src="http://img1.wikia.nocookie.net/__cb20120419081507/cardfight/images/4/4e/VGD_ENG_TD06b.png"></img></a></li>
											   <li><a href="#"><img class="th" src="http://img3.wikia.nocookie.net/__cb20120419081451/cardfight/images/3/3a/VGD_ENG_TD05b.png"></img></a></li>
											   						   						   <li><a href="#"><img class="th" src="http://img1.wikia.nocookie.net/__cb20120419081507/cardfight/images/4/4e/VGD_ENG_TD06b.png"></img></a></li>
											   <li><a href="#"><img class="th" src="http://img3.wikia.nocookie.net/__cb20120419081451/cardfight/images/3/3a/VGD_ENG_TD05b.png"></img></a></li>
											   											   						   						   <li><a href="#"><img class="th" src="http://img1.wikia.nocookie.net/__cb20120419081507/cardfight/images/4/4e/VGD_ENG_TD06b.png"></img></a></li>
											   <li><a href="#"><img class="th" src="http://img3.wikia.nocookie.net/__cb20120419081451/cardfight/images/3/3a/VGD_ENG_TD05b.png"></img></a></li>
	   						   						   <li><a href="#"><img class="th" src="http://img1.wikia.nocookie.net/__cb20120419081507/cardfight/images/4/4e/VGD_ENG_TD06b.png"></img></a></li>
											   <li><a href="#"><img class="th" src="http://img3.wikia.nocookie.net/__cb20120419081451/cardfight/images/3/3a/VGD_ENG_TD05b.png"></img></a></li>
											   						   </ul>
																	 

</div><!--Product row end-->
</div><!--product column end-->
		</article>
	<?php endwhile; // End the loop ?>

	</div>
		
<?php get_footer(); ?>