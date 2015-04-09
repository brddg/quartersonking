<?php /* Template Name: About Charleston */ get_header(); ?>

  <main role="main">
    <!-- section -->
    <section>


    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <?php require_once 'includes/hero.php'; ?>

      <!-- article -->
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <?php if (have_rows('about_blocks')): ?>
            <?php while (have_rows('about_blocks')): the_row(); ?>
              <div class="about-block" style="background-image: url(<?php the_sub_field('image'); ?>)">
                <div class="about-block-content">
                  <h3><?php the_sub_field('title'); ?></h3>
                  <a class="cta-button white" href=<?php the_sub_field('link'); ?>>Learn More</a>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>

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
