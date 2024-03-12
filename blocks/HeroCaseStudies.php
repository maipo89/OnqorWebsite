<?php 
$basic = get_sub_field('hero_case_studies'); 
if( have_rows('hero_case_studies') ): ?>
    <?php while( have_rows('hero_case_studies') ): the_row(); 
        $selected_value = get_sub_field('options');
    ?>
        <!-- hero section -->
	   <!-- background -->
       <?php if ( has_post_thumbnail() ) : ?>
        <div style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>')" class="hero-case-studies">
        <?php endif; ?>
            <div class="container aic fdc title">
            <!-- title -->
                <h1><?php the_title(); ?> <span>Case Study</span></h1>
                <?php the_excerpt(); ?>
            </div>
            <div class="container">
                <!-- list -->
                <h2><?php echo $basic['title'] ?></h2>
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="413" height="138" viewBox="0 0 413 138" fill="none">
                                <path d="M3 0L2.99999 135L413 135" stroke="black" stroke-width="5" stroke-dasharray="50 50"/>
                        </svg>
                        <div>
                            <h4 class="subtitle1"><?php echo $basic['subtitle'] ?>The Challenge</h4>
                            <?php echo $basic['subtext'] ?>
                            <p>
                            As a relatively new brand, L’ACTIF’s main challenge was brand awareness. The client needed to build a presence on social media, firmly establishing the brand in the athleisure space. After launching in Saudi Arabia, the client was looking to expand L’ACTIF’s audience, penetrating the UK market and engaging with UK consumers.
                            </p>
                            <a><button class="btn-primary"><?php echo $basic['cta'] ?>Get in touch</button></a>
                        </div>
                    </div>
                </div>
            </div>  
        </div>  
    <?php endwhile; ?> 
<?php endif; ?> 
