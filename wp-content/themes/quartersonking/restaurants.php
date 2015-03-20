<?php /* Template Name: Restaurants */ get_header(); ?>

  <main role="main">
    <!-- section -->
    <section>


    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <?php
        // require_once 'includes/hero.php';
        echo do_shortcode('[put_wpgm id=1]');
        ?>

      <!-- article -->
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 center-content-block">
                <?php the_content(); ?>
              </div>
            </div>
          </div>

          <br class="clear">

          <?php edit_post_link(); ?>

        </div>

      </article>
      <!-- /article -->

    <?php endwhile; ?>

    <?php else: ?>

      <!-- article -->
      <article>

        <div class="container">
          <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
        </div>

      </article>
      <!-- /article -->

    <?php endif; ?>

    </section>
    <!-- /section -->
  </main>

<?php get_footer(); ?>
