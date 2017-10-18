<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package linesmagazine
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <!--feature area-->
  <section class="feature-area">
    <!--feature image-->
	  <?php if (has_post_thumbnail()) : ?>
      <section
        class="feature-image image-feature"
        style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>');"></section>
    <?php endif; ?>

    <!--title & post meta-->
    <div class="post-info">
      <div class="date-wrapper">
        <time class="date">
          <?php
            $year  = get_the_time('Y');
            $month = get_the_time('m');
            $day   = get_the_time('d');
          ?>
          <span class="month"><a href="<?php echo get_month_link($year, $month); ?>"><?php echo get_the_time('F') ?></a></span>
          <span class="day"><a href="<?php echo get_day_link($year, $month, $day); ?>"><?php echo $day ?></a></span>
          <span class="year"><a href="<?php echo get_year_link($year); ?>"><?php echo $year ?></a></span>
        </time>
      </div>

    </div>
  </section>

  <section id="post-body">
    <div class="container">
      <div class="row">
        <main id="content" class="col">
          <!--content-->
          <h2 class="post-title"><?php the_title() ?></h2>

          <?php
            $category = get_the_category()[0];
            $parent_category = get_category($category->category_parent);
          ?>
          <p class="breadcrumb mb-12">
            <a href="<?php echo esc_url(get_category_link($parent_category->term_id)) ?>" class="post-category">
              <?php echo $parent_category->cat_name ?></a>
            <span class="pr-2 pl-2">&rarr;</span>
            <a href="<?php echo esc_url(get_category_link($category->term_id)) ?>" class="post-category">
              <?php echo $category->cat_name ?></a>
          </p>

<!--      content-body-->
          <article class="post-content border-bottom">
            <?php the_content() ?>
          </article>

<!--      authors-->
          <section class="authors pt-10 pb-4 border-bottom">
            <div class="row justify-content-center">

              <?php
//              if coauthor plugin is activated
                if ( function_exists( 'get_coauthors' ) )
                  // get list of coauthors
                  $authors = get_coauthors();
                else
                  // create array of single author object to avoid duplication
                    // i.e. whether coauthor plugin is activated or not, "$authors" is always available to loop through
                  $authors = [ get_userdata( get_the_author_meta('ID') ) ];
              ?>

              <?php foreach ($authors as $author) :
                $author_id            = $author->ID;
                $author_name          = get_the_author_meta('display_name', $author_id);
                $author_bio           = get_the_author_meta('description', $author_id);
                $author_avatar        = get_wp_user_avatar($author_id, 100);
                $author_archive_link  = get_author_posts_url( $author_id );
                // social link
                $author_facebook      = get_field('user_social_facebook', 'user_' . $author_id);
                $author_instagram     = get_field('user_social_instagram', 'user_' . $author_id);
                $author_twitter       = get_field('user_social_twitter', 'user_' . $author_id);
                $author_email         = get_the_author_meta('user_email', $author_id);
                ?>
                <div class="col-md-6">
                  <div class="author mb-6">
                    <div class="row flex-wrap">
                      <div class="col-sm-4">
                        <a href="<?php echo $author_archive_link; ?>">
                          <div class="image-wrapper image-round author-image"><?php echo $author_avatar ?></div>
                        </a>
                      </div>
                      <div class="col-sm-8">
                        <p class="name text-center">
                          <a href="<?php echo $author_archive_link; ?>"><?php echo $author_name ?></a>
                        </p>
                        <p class="bio"><?php echo $author_bio ?></p>

                        <!--  conditional rendering social links  -->
                        <div class="social-icons">
                          <?php if ( $author_facebook ) : ?>
                            <a href="<?php echo $author_facebook; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                          <?php endif; ?>

                          <?php if ( $author_instagram ) : ?>
                            <a href="<?php echo $author_instagram; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                          <?php endif; ?>

                          <?php if ( $author_twitter ) : ?>
                            <a href="<?php echo $author_twitter; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                          <?php endif; ?>

                          <?php if ($author_email) : ?>
                            <a href="mailto:<?php echo $author_email ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                          <?php endif; ?>
                        </div>

                      </div>
                    </div>
                  </div><!-- author-->
                </div>
              <?php endforeach; ?>

            </div><!--row justify-content-center-->
          </section><!-- authors-->


<!--          recent posts -->


        </main>
      </div><!--      row-->
    </div>
  </section><!--  #post-body-->



</article><!-- #post-<?php the_ID(); ?> -->