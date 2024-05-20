<?php $basic= get_sub_field('case_studies'); 
   if( have_rows('case_studies') ): ?>
      <?php while( have_rows('case_studies') ): the_row(); 

?>
    <div class="case-studies ">
        <div class="container">
            <?php if( have_rows('showcase') ): ?>
                <?php while( have_rows('showcase') ): the_row(); 
                    $case = get_sub_field('client');
                    $case_study = $case[0];
                    $title = $case_study->post_title;
                    $excerpt = $case_study->post_excerpt;
                    $case_study_link = get_permalink($case_study->ID);
                    $cover_image_id = MultiPostThumbnails::get_post_thumbnail_id('case-studies', 'cover-image', $case_study->ID);
                    $cover_image_url = wp_get_attachment_image_src($cover_image_id, 'large')[0];
                ?>
                    <div class="case-studies__item <?php if( get_sub_field('stats_left') ) { ?> stats-left <?php  } ?>"
                         style="background-image: url('<?php echo $cover_image_url; ?>');"
                    >
                        <!-- links -->
                        <div class="case-studies__item__links anim-fadein">
                            <?php if( have_rows('links') ): ?>
                                <?php while( have_rows('links') ): the_row(); 
                                    $button_text = get_sub_field('btn_text');
                                    $button_link = get_sub_field('btn_link'); 
                                ?>
                                    <a href="<?php echo the_sub_field('btn_link')[url]; ?>">
                                        <button class="btn-secondary">
                                            <?php echo the_sub_field('btn_text') ?>
                                        </button>
                                    </a>
                                <?php endwhile; ?> 
                            <?php endif; ?> 
                        </div>

                        <!-- case study relation title here -->
                        <div class="case-studies__item__text anim-fadein">
                            <h2><?php echo $title; ?></h2>
                            <p><?php echo $excerpt; ?></p>
                            <a href="<?php echo $case_study_link; ?>"><button class="btn-secondary">View Case Study</button></a>
                        </div>
    
                        <!-- stats -->
                        <div class="case-studies__item__stats">
                            <?php if (have_rows('stats')) : ?>
                                <?php while (have_rows('stats')) : the_row(); 
                                        $end_value = get_sub_field('stat');
                                        $counter_index = 0;
                                ?>
                                    <div class="anim-horizontal">
                                        <h3 class="anim-counter" data-end="<?php echo $end_value; ?>" >0%</h3>
                                        <p class="body1"><?php the_sub_field('title') ?></p>
                                    </div>
                                    <?php $counter_index++; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>

                    </div>
                <?php endwhile; ?> 
            <?php endif; ?> 
        </div>  
    </div>  

<?php endwhile; ?> 
<?php endif; ?> 
