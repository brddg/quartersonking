<?php get_header(); ?>

  <main role="main">
    <!-- section -->
    <section>


    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <?php if (has_post_thumbnail( $post->ID ) ): ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
              $image = $image[0]; ?>
      <?php else :
        $image = get_template_directory_uri() . '/img/hero-img.jpg'; ?>
      <?php endif; ?>

      <div class="hero" style="background-image: url('<?php echo $image; ?>')">
        <div class="container">
          <h1><?php echo get_post_meta(get_the_ID(), 'header_text', true); ?></h1>
        </div>
      </div>

      <!-- article -->
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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
