<?php get_header(); ?>

<div id="content" class="single single-case-studies">
    <?php while ( have_posts() ) : the_post(); ?>
		<?php include('blocks-builder.php'); ?>
    <?php include('blocks/RelatedProjects.php'); ?>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>
