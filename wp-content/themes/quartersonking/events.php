<?php /* Template Name: Events */ get_header(); ?>

  <main role="main">
    <!-- section -->
    <section>


    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <?php require_once 'includes/hero.php'; ?>

      <!-- article -->
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <div class="container">
            <?php if (have_rows('events')): ?>
              <?php while (have_rows('events')): the_row(); ?>
                <div class="row">
                  <div class="col-md-6 col-md-offset-3">
                    <div class="event-head" style="background: url(<?php the_sub_field('image'); ?>)">
                      <h3><?php the_sub_field('title'); ?></h3>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <p><?php the_sub_field('content'); ?></p>
                  </div>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
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
