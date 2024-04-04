<?php

/************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes
add_image_size( 'bones-thumb-600', 600, 150, true );
add_image_size( 'bones-thumb-300', 300, 100, true );
add_image_size( 'tiny', 100 );
add_image_size( 'xsmall', 300 );
add_image_size( 'small', 500 );
add_image_size( 'medium', 900 );
add_image_size( 'large', 1300 );
add_image_size( 'xlarge', 1920 );

/*
to add more sizes, simply copy a line from above
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 100 sized image,
we would use the function:
<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
for the 600 x 150 image:
<?php the_post_thumbnail( 'bones-thumb-600' ); ?>

You can change the names and dimensions to whatever
you like. Enjoy!
*/

add_filter( 'image_size_names_choose', 'bones_custom_image_sizes' );

function bones_custom_image_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'bones-thumb-600' => __('600px by 150px'),
        'bones-thumb-300' => __('300px by 100px'),
    ) );
}

/*
The function above adds the ability to use the dropdown menu to select
the new images sizes you have just created from within the media manager
when you add media to your content blocks. If you add more image sizes,
duplicate one of the lines in the array and name it according to your
new image size.
*/

/************* THEME CUSTOMIZE *********************/

/* 
  A good tutorial for creating your own Sections, Controls and Settings:
  http://code.tutsplus.com/series/a-guide-to-the-wordpress-theme-customizer--wp-33722
  
  Good articles on modifying the default options:
  http://natko.com/changing-default-wordpress-theme-customization-api-sections/
  http://code.tutsplus.com/tutorials/digging-into-the-theme-customizer-components--wp-27162
  
  To do:
  - Create a js for the postmessage transport method
  - Create some sanitize functions to sanitize inputs
  - Create some boilerplate Sections, Controls and Settings
*/


/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function bones_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __( 'Sidebar 1', 'bonestheme' ),
		'description' => __( 'The first (primary) sidebar.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

} // don't remove this bracket!


/************* COMMENT LAYOUT *********************/

// Comment Layout
function bones_comments( $comment, $args, $depth ) {
   $GLOBALS['comment'] = $comment; ?>
  <div id="comment-<?php comment_ID(); ?>" <?php comment_class('cf'); ?>>
    <article  class="cf">
      <header class="comment-author vcard">
        <?php
        /*
          this is the new responsive optimized comment image. It used the new HTML5 data-attribute to display comment gravatars on larger screens only. What this means is that on larger posts, mobile sites don't have a ton of requests for comment images. This makes load time incredibly fast! If you'd like to change it back, just replace it with the regular wordpress gravatar call:
          echo get_avatar($comment,$size='32',$default='<path_to_url>' );
        */
        ?>
        <?php // custom gravatar call ?>
        <?php
          // create variable
          $bgauthemail = get_comment_author_email();
        ?>
        <img data-gravatar="http://www.gravatar.com/avatar/<?php echo md5( $bgauthemail ); ?>?s=40" class="load-gravatar avatar avatar-48 photo" height="40" width="40" src="<?php echo get_template_directory_uri(); ?>/library/images/nothing.gif" />
        <?php // end custom gravatar call ?>
        <?php printf(__( '<cite class="fn">%1$s</cite> %2$s', 'bonestheme' ), get_comment_author_link(), edit_comment_link(__( '(Edit)', 'bonestheme' ),'  ','') ) ?>
        <time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time(__( 'F jS, Y', 'bonestheme' )); ?> </a></time>

      </header>
      <?php if ($comment->comment_approved == '0') : ?>
        <div class="alert alert-info">
          <p><?php _e( 'Your comment is awaiting moderation.', 'bonestheme' ) ?></p>
        </div>
      <?php endif; ?>
      <section class="comment_content cf">
        <?php comment_text() ?>
      </section>
      <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
    </article>
  <?php // </li> is added by WordPress automatically ?>
<?php
} // don't remove this bracket!


// Load the theme stylesheets
function theme_styles()  
{ 
  // Load all of the styles that need to appear on all pages
  wp_enqueue_style( 'main', get_template_directory_uri() . '/dist/styles/all.min.min.css' );
  wp_enqueue_script( 'main', get_template_directory_uri() . '/dist/scripts/all.min.min.js', true );
  // Localize script for AJAX
  wp_localize_script('main', 'myAjax', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'theme_styles');



// Function to create a custom post type for Case Studies
function create_custom_post_type_case_studies() {
    $labels = array(
        'name' => _x('Case Studies', 'Post Type General Name', 'text_domain'),
        'singular_name' => _x('Case Study', 'Post Type Singular Name', 'text_domain'),
        'menu_name' => __('Case Studies', 'text_domain'),
        'parent_item_colon' => __('Parent Case Study', 'text_domain'),
        'all_items' => __('All Case Studies', 'text_domain'),
        'view_item' => __('View Case Study', 'text_domain'),
        'add_new_item' => __('Add New Case Study', 'text_domain'),
        'add_new' => __('Add New', 'text_domain'),
        'edit_item' => __('Edit Case Study', 'text_domain'),
        'update_item' => __('Update Case Study', 'text_domain'),
        'search_items' => __('Search Case Studies', 'text_domain'),
        'not_found' => __('Not Found', 'text_domain'),
        'not_found_in_trash' => __('Not found in Trash', 'text_domain'),
    );

    $args = array(
        'label' => __('Case Studies', 'text_domain'),
        'description' => __('Case studies and their details', 'text_domain'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
        'taxonomies' => array('department', 'post_tag'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('case-studies', $args);
  }
  // Function to create a custom post type for Blogs
  function create_custom_post_type_blogs() {
      $labels = array(
        'name' => _x('Blogs', 'Post Type General Name', 'text_domain'),
        'singular_name' => _x('Blog', 'Post Type Singular Name', 'text_domain'),
        'menu_name' => __('Blogs', 'text_domain'),
        'parent_item_colon' => __('Parent Blog', 'text_domain'),
        'all_items' => __('All Blogs', 'text_domain'),
        'view_item' => __('View Blog', 'text_domain'),
        'add_new_item' => __('Add New Blog', 'text_domain'),
        'add_new' => __('Add New', 'text_domain'),
        'edit_item' => __('Edit Blog', 'text_domain'),
        'update_item' => __('Update Blog', 'text_domain'),
        'search_items' => __('Search Blogs', 'text_domain'),
        'not_found' => __('Not Found', 'text_domain'),
        'not_found_in_trash' => __('Not found in Trash', 'text_domain'),
    );
    
    $args = array(
        'label' => __('Blogs', 'text_domain'),
        'description' => __('Blog posts and their details', 'text_domain'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
        'taxonomies' => array('category', 'post_tag'), // assuming you want to use standard categories and tags
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('blogs', $args);
}

// Hook into the 'init' action
add_action('init', 'create_custom_post_type_case_studies');
add_action('init', 'create_custom_post_type_blogs');

// custom taxonomy
function theme_slug_register_taxonomy() {
  register_taxonomy(
      'study_category',  // Taxonomy name
      'case-studies',    // Post type
      array(
          'label'        => __('Study Categories', 'theme-slug'),
          'rewrite'      => array('slug' => 'study-category'),
          'hierarchical' => true,
      )
  );
}
add_action('init', 'theme_slug_register_taxonomy');

// case studies filter 
function filter_case_studies() {
  $categorySlug = $_POST['category'];
  
  $args = array(
      'post_type' => 'case-studies',
      'posts_per_page' => -1, // Adjust as necessary
  );

  // If the category is not 'all', filter by the selected category
  if ($categorySlug !== 'all') {
      $args['tax_query'] = array(
          array(
              'taxonomy' => 'study_category',
              'field'    => 'slug',
              'terms'    => $categorySlug,
          ),
      );
  }

  $query = new WP_Query($args);

  if($query->have_posts()) : 
      while($query->have_posts()): $query->the_post();
          // Output your custom post HTML structure
          ?>
          <article class="article" id="post-<?php the_ID(); ?>">
              <a href="<?php the_permalink(); ?>">
              <div >
					        <?php if (has_post_thumbnail()) : ?>
						          <div class="article__img">
						            <?php the_post_thumbnail(); ?>
                            <div class="article__img__hover">
                                <h3 class="subtitle1"><?php the_title(); ?></h3>
                                 <button class="btn-secondary">View Project</button>
                            </div>
                        </div>
						        <?php endif; ?>
						      <h3 class="subtitle2"><?php the_title(); ?></h3>
				        </div>
              </a>
          </article>
          <?php
      endwhile;
  endif;

  wp_reset_postdata();
  die();
}

add_action('wp_ajax_filter_case_studies', 'filter_case_studies');
add_action('wp_ajax_nopriv_filter_case_studies', 'filter_case_studies');

// filter blogs 
function filter_blogs() {
  $categorySlug = $_POST['category'];

  $args = array(
      'post_type' => 'blogs', // Adjusted to target 'blogs' custom post type
      'posts_per_page' => -1, // You can adjust this as necessary
  );

  // Check if a specific category is selected and it's not 'all'
  if ($categorySlug !== 'all') {
      $args['tax_query'] = array(
          array(
              'taxonomy' => 'category', // Ensure this is the correct taxonomy for your CPT
              'field'    => 'slug',
              'terms'    => $categorySlug,
          ),
      );
  }

  $query = new WP_Query($args);

  if($query->have_posts()) : 
      while($query->have_posts()): $query->the_post();
          ?>
 	          <article class="article id="post-<?php the_ID(); ?>">
                <a href="<?php the_permalink(); ?>">
										<div >
											<?php if (has_post_thumbnail()) : ?>
												<div class="article__img">
													<?php the_post_thumbnail(); ?>
													<div class="article__img__hover">
														<h3 class="subtitle1"><?php the_title(); ?></h3>
														<button class="btn-secondary">View Blog</button>
													</div>
												</div>
											<?php endif; ?>
											<h3 class="subtitle2"><?php the_title(); ?></h3>
										</div>
									</a>
							</article>
          <?php
      endwhile;
  else:
      // Optionally, echo a message if no posts were found
      echo '<p>No blogs found in this category.</p>';
  endif;

  wp_reset_postdata();
  die();
}

add_action('wp_ajax_filter_blogs', 'filter_blogs');
add_action('wp_ajax_nopriv_filter_blogs', 'filter_blogs');



// menu support
add_theme_support( 'menus' );

// logo support
function theme_slug_setup() {
  add_theme_support('custom-logo', array(
      'height'      => 30,
      'width'       => 170,
      'flex-height' => true,
      'flex-width'  => true,
      'header-text' => array('site-title', 'site-description'),
  ));
}
add_action('after_setup_theme', 'theme_slug_setup');

// Hook the custom taxonomy registration function to the 'init' action
add_action('init', 'my_custom_taxonomy_department', 0);

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(); 
}

// Multiple thumbnails for case studies
if (class_exists('MultiPostThumbnails')) {
    new MultiPostThumbnails(
        array(
            'label' => 'Secondary Image',
            'id' => 'secondary-image',
            'post_type' => 'case-studies'
        )
    );

    new MultiPostThumbnails(
        array(
            'label' => 'Cover Image',
            'id' => 'cover-image',
            'post_type' => 'case-studies'
        )
    );
}


/* DON'T DELETE THIS CLOSING TAG */ ?>
