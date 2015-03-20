<?php /* Template Name: Contact */ get_header(); ?>

  <main role="main">
    <!-- section -->
    <section>


    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <?php require_once 'includes/hero.php'; ?>

      <!-- article -->
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 center-content-block">
                <h3><?php the_field('contact_first_block_title'); ?></h3>
                <p><?php the_field('contact_first_block_content'); ?></h3>
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 center-content-block">
                <h3><?php the_field('contact_second_block_title'); ?></h3>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <p><?php the_field('contact_second_block_map'); ?></p>
              </div>
              <div class="col-md-6">
                <p><?php the_field('contact_second_block_content'); ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 center-content-block">
                <p><?php the_field('contact_address_block'); ?></p>
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
