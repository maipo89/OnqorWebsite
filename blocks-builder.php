<?php
// Check value exists.
if (have_rows('sections')) :
	// Loop through rows.
	while (have_rows('sections')) : the_row();

        // Case: Paragraph layout.
        if (get_row_layout() == 'slider_clients') : ?>
            <?php include 'blocks/SliderClients.php'; ?>
        <?php endif;	
        
        // Case: Paragraph layout.
        if (get_row_layout() == 'case_studies') : ?>
            <?php include 'blocks/CaseStudies.php'; ?>
        <?php endif;

        // Case: Paragraph layout.
        if (get_row_layout() == 'banner') : ?>
            <?php include 'blocks/Banner.php'; ?>
        <?php endif;	
        
        // Case: Paragraph layout.
        if (get_row_layout() == 'images_text') : ?>
            <?php include 'blocks/ImagesText.php'; ?>
        <?php endif;

        // Case: Paragraph layout.
        if (get_row_layout() == 'photography') : ?>
            <?php include 'blocks/Photography.php'; ?>
        <?php endif;

        // Case: Paragraph layout.
        if (get_row_layout() == 'hero_case_studies') : ?>
            <?php include 'blocks/HeroCaseStudies.php'; ?>
        <?php endif;

        // Case: Paragraph layout.
        if (get_row_layout() == 'videography') : ?>
            <?php include 'blocks/Videography.php'; ?>
        <?php endif;

        // Case: Paragraph layout.
        if (get_row_layout() == 'image_text_columns') : ?>
            <?php include 'blocks/ImageTextColumns.php'; ?>
        <?php endif;

        // Case: Paragraph layout.
        if (get_row_layout() == 'stats') : ?>
            <?php include 'blocks/Stats.php'; ?>
        <?php endif;

        // Case: Paragraph layout.
        if (get_row_layout() == 'testimonials_projects') : ?>
            <?php include 'blocks/TestimonialsProjects.php'; ?>
        <?php endif;

        // Case: Paragraph layout.
           if (get_row_layout() == 'testimonials') : ?>
            <?php include 'blocks/Testimonials.php'; ?>
        <?php endif;

        // Case: Paragraph layout.
        if (get_row_layout() == 'text_triple_image') : ?>
            <?php include 'blocks/TextTripleImage.php'; ?>
        <?php endif;

        // Case: Paragraph layout.
        if (get_row_layout() == 'related_projects') : ?>
            <?php include 'blocks/RelatedProjects.php'; ?>
        <?php endif;

        // Case: Paragraph layout.
        if (get_row_layout() == 'text') : ?>
            <?php include 'blocks/Text.php'; ?>
        <?php endif;

        // Case: Paragraph layout.
        if (get_row_layout() == 'cta') : ?>
            <?php include 'blocks/Cta.php'; ?>
        <?php endif;

        // Case: Paragraph layout.
        if (get_row_layout() == 'embed') : ?>
            <?php include 'blocks/Embed.php'; ?>
        <?php endif;

        // Case: Paragraph layout.
        if (get_row_layout() == 'hero') : ?>
            <?php include 'blocks/Hero.php'; ?>
        <?php endif;

        // Case: Paragraph layout.
        if (get_row_layout() == 'tabs') : ?>
            <?php include 'blocks/Tabs.php'; ?>
        <?php endif;

         // Case: Paragraph layout.
         if (get_row_layout() == 'dropdown_text') : ?>
            <?php include 'blocks/DropdownText.php'; ?>
        <?php endif;

        // Case: Paragraph layout.
         if (get_row_layout() == 'services') : ?>
            <?php include 'blocks/Services.php'; ?>
        <?php endif;

	// End loop.
	endwhile; 
endif;
?>
