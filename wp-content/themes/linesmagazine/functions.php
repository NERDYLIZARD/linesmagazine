<?php
/**
 * linesmagazine functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package linesmagazine
 */

if ( ! function_exists( 'linesmagazine_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function linesmagazine_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on linesmagazine, use a find and replace
		 * to change 'linesmagazine' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'linesmagazine', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary-menu' => esc_html__( 'Primary Menu', 'linesmagazine' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'linesmagazine_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'linesmagazine_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function linesmagazine_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'linesmagazine_content_width', 640 );
}
add_action( 'after_setup_theme', 'linesmagazine_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function linesmagazine_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'linesmagazine' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'linesmagazine' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'linesmagazine_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function linesmagazine_scripts() {
	wp_enqueue_script( 'linesmagazine-jquery', get_template_directory_uri() . '/node_modules/jquery/dist/jquery.min.js');
	wp_enqueue_script( 'linesmagazine-owl-carousel', get_template_directory_uri() . '/node_modules/owl.carousel/dist/owl.carousel.min.js', ['linesmagazine-jquery'], time(), true );
	wp_enqueue_script( 'linesmagazine-main-js', get_template_directory_uri() . '/assets/js/scripts.js', ['linesmagazine-jquery', 'linesmagazine-owl-carousel'], time(), true );

	wp_enqueue_script( 'linesmagazine-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'linesmagazine-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'linesmagazine_scripts' );


// stylesheets
function linesmagazine_styles() {
	wp_enqueue_style( 'linesmagazine-owl-theme-default', get_template_directory_uri() . '/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css');
	wp_enqueue_style( 'linesmagazine-owl-carousel', get_template_directory_uri() . '/node_modules/owl.carousel/dist/assets/owl.carousel.min.css', [ 'linesmagazine-owl-theme-default' ] );
	wp_enqueue_style( 'linesmagazine-bootstrap-reboot', get_template_directory_uri() . '/assets/css/bootstrap-reboot.min.css', []);
	wp_enqueue_style( 'linesmagazine-bootstrap-grid', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css', []);
	wp_enqueue_style( 'linesmagazine-main-css', get_template_directory_uri() . '/assets/css/style', [ 'linesmagazine-owl-carousel', 'linesmagazine-bootstrap-grid', 'linesmagazine-bootstrap-reboot' ], time(), all);

	wp_enqueue_style( 'linesmagazine-google-fonts', 'https://fonts.googleapis.com/css?family=Encode+Sans+Condensed:100,300,400,600', [ 'linesmagazine-main-css' ], time(), all );
	wp_enqueue_style( 'linesmagazine-font-awesome', get_template_directory_uri() . '/assets/css/font-awesome/css/font-awesome.min.css', [ 'linesmagazine-main-css' ], time(), all);
}
add_action( 'wp_enqueue_scripts', 'linesmagazine_styles' );


// filter for subcategory template
function linesmagazine_subcategory_template( $template ) {
	$category = get_queried_object();
	if( 0 < $category->category_parent )
		$template = locate_template( 'subcategory.php' );
	return $template;
}
add_filter( 'category_template', 'linesmagazine_subcategory_template' );


// custom excerpt length
function linesmagazine_custom_excerpt_length( $length ) {
	return 5;
}
add_filter( 'excerpt_length', 'linesmagazine_custom_excerpt_length', 999 );


// remove "category: " from archive category
add_filter( 'get_the_archive_title', function ($title) {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	}
	return $title;
});



add_action('set_object_terms', 'linesmagazine_update_category_modified', 10, 6);

// utilization of sorting subcategory by their latest post
function linesmagazine_update_category_modified($object_id, $term_ids, $tt_ids, $taxonomy, $append, $old_tt_ids)
{
	if($taxonomy == 'category') {
		global $wpdb;

//		echo '<pre>';
//		var_export($old_tt_ids);
//		var_export($tt_ids);
//		var_export($term_ids);
//		exit;

		// check if different category has been assigned to post
			// or just modification of post without touching category
				// if the latter, then do nothing
		if ($old_tt_ids[0] == $tt_ids[0])
			return;

		// update modification time of category
		$table_name = $wpdb->prefix . 'terms';

		$wpdb->query(
			$wpdb->prepare("
				UPDATE $table_name
				SET term_modified_by_assigning_post = CURRENT_TIMESTAMP
				WHERE term_id = %d
			", $term_ids[0])
		);
	}
}


// append the_content
  // so that related posts plugin is below the authors section
add_filter( "the_content", "linesmagazine_append_authors_to_the_content" );
function linesmagazine_append_authors_to_the_content($content)
{
	if (is_single()) :
		$content .= '
    <section class="authors pt-10 pb-4 border-top border-bottom">
      <div class="row justify-content-center">';

//            if coauthor plugin is activated
        if ( function_exists( 'get_coauthors' ) )
          // get list of coauthors
          $authors = get_coauthors();
        else
          // create array of single author object to avoid duplication
          // i.e. whether coauthor plugin is activated or not, "$authors" is always available to loop through
          $authors = [ get_userdata( get_the_author_meta('ID') ) ];

        foreach ($authors as $author) :
          $author_id           = $author->ID;
          $author_name         = get_the_author_meta( 'display_name', $author_id );
          $author_bio          = get_the_author_meta( 'description', $author_id );
          $author_avatar       = get_wp_user_avatar( $author_id, 100 );
          $author_archive_link = get_author_posts_url( $author_id );
          // social link
          $author_facebook  = get_field( 'user_social_facebook', 'user_' . $author_id );
          $author_instagram = get_field( 'user_social_instagram', 'user_' . $author_id );
          $author_twitter   = get_field( 'user_social_twitter', 'user_' . $author_id );
          $author_email     = get_the_author_meta( 'user_email', $author_id );

          $content .= '
        <div class="col-md-6">
          <div class="author mb-6">
            <div class="row flex-wrap">
              <div class="col-sm-4">
                <a href="' . $author_archive_link . '">
                  <div class="image-wrapper image-round author-image"><' . $author_avatar . '</div>
                </a>
              </div>
              <div class="col-sm-8">
                <p class="name text-center">
                  <a href="' . $author_archive_link . '">' . $author_name . '</a>
                </p>
                <p class="bio">' . $author_bio . '</p>
  
                <!--  conditional rendering social links  -->
                <div class="social-icons">';
                if ( $author_facebook )
                  $content .= '<a href="' . $author_facebook . '"><i class="fa fa-facebook" aria-hidden="true"></i></a>';

                if ( $author_instagram )
                  $content .= '<a href="' . $author_instagram . '"><i class="fa fa-instagram" aria-hidden="true"></i></a>';

                if ( $author_twitter )
                  $content .= '<a href="' . $author_twitter . '"><i class="fa fa-twitter" aria-hidden="true"></i></a>';

                if ( $author_email )
                  $content .= '<a href="mailto:' . $author_email . '"><i class="fa fa-envelope" aria-hidden="true"></i></a>';

                $content .= '
                </div>
  
              </div>
            </div>
          </div><!-- author-->
        </div>';

      endforeach; // endforeach

      $content .= '
      </div><!--row justify-content-center-->
    </section><!-- authors-->';

    endif; // endif single
	return $content;
}


// thumbnail size for related post plugin
function lines_magazine_modify_rp4wp_thumbnail_size( $thumb_size ) {
	return 'medium';
}
add_filter( 'rp4wp_thumbnail_size', 'lines_magazine_modify_rp4wp_thumbnail_size' );


/**
 * Top level category checkbox
 */
add_action( 'admin_footer-post.php',     'linesmagazine_disable_top_categories_checkboxes' );
add_action( 'admin_footer-post-new.php', 'linesmagazine_disable_top_categories_checkboxes' );
/**
 * Disable parent checkboxes in Post Editor.
 */
function linesmagazine_disable_top_categories_checkboxes()
{
	global $post_type;

	if ( 'post' != $post_type )
		return;
	?>
	<script type="text/javascript">
    jQuery( "#category-all ul.children" ).each( function() {
      jQuery(this).closest( "ul" ).parent().children().children( "input" ).attr( 'disabled', 'disabled' );
    });
	</script>
	<?php
}

add_filter( 'wp_terms_checklist_args', 'linesmagazine_disallowed_checked_ontop' );
/**
 * Remove horrid feature that places checked categories on top.
 */
function linesmagazine_disallowed_checked_ontop( $args ) {
	$args['checked_ontop'] = false;
	return $args;
}


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
