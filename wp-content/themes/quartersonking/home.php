<?php /* Template Name: Home */ get_header(); ?>

  <main role="main">
    <!-- section -->
    <section>


    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <?php require_once 'includes/hero.php'; ?>

      <!-- article -->
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <div class="container">
            <div class="row">
              <div class="col-md-4"><img src="<?php the_field('home_image_1'); ?>" /></div>
              <div class="col-md-4"><img src="<?php the_field('home_image_2'); ?>" /></div>
              <div class="col-md-4"><img src="<?php the_field('home_image_3'); ?>" /></div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 center-content-block">
                <h2><?php the_field('home_first_block_title'); ?></h2>
                <p><?php the_field('home_first_block_content'); ?></p>
              </div>
            </div>
          </div>


          <div class="content-block beige">
            <div class="container">
              <div class="row">
                <div class="col-md-6"><img src="<?php the_field('home_second_block_image'); ?>" /></div>
                <div class="col-md-6">
                  <div class="inner-block">
                    <h2><?php the_field('home_second_block_title'); ?></h2>
                    <p><?php the_field('home_second_block_content'); ?></p>
                    <a href="<?php the_field('home_second_block_link'); ?>" class="cta-button"><?php the_field('home_second_block_action'); ?></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="content-block black">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="inner-block">
                    <h2><?php the_field('home_third_block_title'); ?></h2>
                    <p><?php the_field('home_third_block_content'); ?></p>
                    <a href="<?php the_field('home_third_block_link'); ?>" class="cta-button"><?php the_field('home_third_block_action'); ?></a>
                  </div>
                </div>
                <div class="col-md-6"><img src="<?php the_field('home_third_block_image'); ?>" /></div>
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 center-content-block">
                <h2><?php the_field('home_fourth_block_title'); ?><h2>
                <p><?php the_field('home_fourth_block_content'); ?></p>
              </div>
            </div>
          </div>

          <?php the_content(); ?>

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
