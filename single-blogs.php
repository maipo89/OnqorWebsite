<?php get_header(); ?>

<div id="content" class="single single-blogs">
    <?php while ( have_posts() ) : the_post(); ?>
    	<!-- hero -->
		<?php if ( has_post_thumbnail() ) : ?>
			<div style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>')" class="single-blogs__hero">
		<?php endif; ?>
        	<div class="container center">
            	<!-- title -->
				<h1><?php the_title(); ?></h1>
          		<p class="body1 author"><?php the_author(); ?></p>
				<p class="date"><?php the_date(); ?></p>
        	</div>
      	</div>

	  	<!-- back to archive -->
		<div class="single-blogs__back">
			<div class="container">
				<a href="<?php echo home_url(); ?>/blogs">
					<svg xmlns="http://www.w3.org/2000/svg" width="19" height="13" viewBox="0 0 19 13" fill="none">
						<path d="M18 6.5L1 6.5M1 6.5L6.55769 12M1 6.5L6.55769 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
					Back to Blogs
				</a>
			</div>
		</div>

		<!-- content -->
		<?php include('blocks-builder.php'); ?>
		<?php include('blocks/RelatedBlogs.php'); ?>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?> 