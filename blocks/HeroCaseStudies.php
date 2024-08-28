<?php 
$basic = get_sub_field('hero_case_studies'); 
if( have_rows('hero_case_studies') ): ?>
    <?php while( have_rows('hero_case_studies') ): the_row(); 
        $selected_value = get_sub_field('options');
        $title = $basic['title'];
        $subtitle = $basic['subtitle'];
        $subtext = $basic['subtext'];
        $cta = $basic['cta'];
        $ctalink = $basic['cta_link']['url']
    ?>
        <!-- hero section -->
	   <!-- background -->
       <?php if (class_exists('MultiPostThumbnails')) : 
        $image_id = MultiPostThumbnails::get_post_thumbnail_id('case-studies', 'cover-image', get_the_ID());
        $image_url = wp_get_attachment_image_url($image_id, 'xlarge'); // You can specify a size instead of 'full'
        if ($image_url) : ?>
                <div style="background-image: url('<?php echo esc_url($image_url); ?>')" class="hero-case-studies">
            <?php endif; 
        endif; ?>
            <div class="container aic fdc title">
            <!-- title -->
                    
                <h1><?php the_title(); ?> <br><span>Case Study</span></h1>
                <?php the_excerpt(); ?>
            </div>
            <div class="container">
                <!-- list -->
                <h2><?php echo $title ?></h2>
                <ul class="hero-case-studies__list">
                    <?php if( have_rows('list') ): ?>
                        <?php while( have_rows('list') ): the_row(); ?>
                            <li class="body2"><?php echo the_sub_field('item') ?></li>
                        <?php endwhile; ?> 
                    <?php endif; ?> 
                </ul>
            </div>

            <div class="hero-case-studies__divider">
                <div class="divider"></div>
                <div class="hero-case-studies__media">
                    <!-- image stats -->
                    <?php include('HeroCaseStudies/_ImageStats.php'); ?>
                    <!-- images double -->
                    <?php include('HeroCaseStudies/_ImageDouble.php'); ?>
                    <!-- image large -->
                    <?php include('HeroCaseStudies/_ImageLarge.php'); ?>
                    <!-- image small -->
                    <?php include('HeroCaseStudies/_ImageSmall.php'); ?>
                    <!-- image triple -->
                    <?php include('HeroCaseStudies/_ImageTriple.php'); ?>
                    <!-- image video -->
                    <?php include('HeroCaseStudies/_ImageVideo.php'); ?>
                    <!-- video -->
                    <?php include('HeroCaseStudies/_Video.php'); ?>

                    <!-- subtext -->
                    <div class="hero-case-studies__subtext 
                    <?php if ($selected_value == 'image_stats'): ?> svg-shift <?php endif; ?> 
                    ">
               
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="413" height="138" viewBox="0 0 413 138" fill="none">
                                <path d="M3 0L2.99999 135L413 135" stroke="black" stroke-width="5" stroke-dasharray="50 50"/>
                        </svg> -->
                        <div>
                            <h4 class="subtitle1"><?php echo $subtitle ?></h4>
                            <div class="wizywig">
                                <?php echo $subtext ?>
                            </div>
                            <a href="<?php echo $ctalink ?>"><button class="btn-primary"><?php echo $cta ?></button></a>
                        </div>
                    </div>
                </div>
            </div>  
        </div>  
    <?php endwhile; ?> 
<?php endif; ?> 
