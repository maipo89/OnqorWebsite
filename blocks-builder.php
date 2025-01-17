<?php
// Check value exists.
$counters = 1; // Initialize the counter before the loop
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
        <?php $counters++; endif;

        // Case: Paragraph layout.
        if (get_row_layout() == 'photography') : ?>
            <?php include 'blocks/Photography.php'; ?>
        <?php endif;

        // Case: Paragraph layout.
        if (get_row_layout() == 'hero_case_studies') : ?>
            <?php include 'blocks/HeroCaseStudies.php'; ?>
        <?php endif;

        // Case: Paragraph layout.
        if (get_row_layout() == 'video_gallery') : ?>
            <?php include 'blocks/VideoGallery.php'; ?>
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
        if (get_row_layout() == 'text') : ?>
            <?php include 'blocks/Text.php'; ?>
        <?php $counters++; endif;

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

        // Case: Paragraph layout.
        if (get_row_layout() == 'contact_form') : ?>
            <?php include 'blocks/ContactForm.php'; ?>
        <?php endif;

         // Case: Paragraph layout.
         if (get_row_layout() == 'other_services') : ?>
            <?php include 'blocks/OtherServices.php'; ?>
        <?php endif;

        if (get_row_layout() == 'related_casestudies') : ?>
            <?php include 'blocks/RelatedProjects.php'; ?>
        <?php endif;

        // Case: Paragraph layout.
        if (get_row_layout() == 'list') : ?>
            <?php include 'blocks/List.php'; ?>
        <?php endif; 

        // Case: CLients.
        if (get_row_layout() == 'clients') : ?>
            <?php include 'blocks/Clients.php'; ?>
        <?php endif; 

        // Case: CLients.
        if (get_row_layout() == 'portfolio') : ?>
            <?php include 'blocks/Portfolio.php'; ?>
        <?php endif; 

        // Case: CLients.
        if (get_row_layout() == 'cards') : ?>
            <?php include 'blocks/Cards.php'; ?>
        <?php endif; 

        // Case: CLients.
        if (get_row_layout() == 'icons') : ?>
            <?php include 'blocks/Icons.php'; ?>
        <?php endif; 

        // Case: Sitemap.
        if (get_row_layout() == 'sitemap') : ?>
            <?php include 'blocks/Sitemap.php'; ?>
        <?php endif; 

	// End loop.
	endwhile; 
endif;
?>
