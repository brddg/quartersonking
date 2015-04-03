<?php /* Template Name: Accommodations */ get_header(); ?>

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
                <h2><?php echo get_field('accommodations_first_block_title'); ?>
                <p><?php echo get_field('accommodations_first_block_content'); ?></p>
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <?php $room_blocks = get_field('room_block'); ?>
              <?php if ($room_blocks): ?>
                <?php for ($i = 0; $i < count($room_blocks); $i++): ?>
                  <div class="col-md-6">
                    <div class="room" style="background-image: url(<?php echo $room_blocks[$i]["image"] ?>)">
                      <div class="room-content">
                        <h2><?php echo $room_blocks[$i]["title"] ?></h2>
                        <a href="#" class="cta-button white" data-toggle="modal" data-target="#roomModal<?php echo $i; ?>">View Details</a>
                      </div>
                    </div>
                  </div>
                  <div class="modal fade" id="roomModal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h3 class="modal-title" id="myModalLabel"><?php echo $room_blocks[$i]["title"]; ?></h3>
                        </div>
                        <div class="modal-body">
                          <?php $more_images = $room_blocks[$i]["more_images"]; ?>
                          <?php if ($more_images): ?>


                            <div id="carousel-<?php echo $i; ?>" class="carousel slide" data-ride="carousel">
                              <!-- Indicators -->
                              <ol class="carousel-indicators">
                                <?php for ($ind = 0; $ind < count($more_images); $ind++): ?>
                                  <li data-target="#carousel-example-generic" data-slide-to="<?php echo $ind; ?>" class="<?php if ($ind == 0) echo "active"; ?>"></li>
                                <?php endfor; ?>
                              </ol>

                              <!-- Wrapper for slides -->
                              <div class="carousel-inner" role="listbox">
                                <?php for ($j = 0; $j < count($more_images); $j++): ?>
                                  <div class="item <?php if ($j == 0) echo "active"; ?>">
                                    <img src="<?php echo $more_images[$j]["image"]; ?>" />
                                  </div>
                                <?php endfor; ?>
                              </div>

                              <!-- Controls -->
                              <a class="left carousel-control" href="#carousel-<?php echo $i; ?>" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="right carousel-control" href="#carousel-<?php echo $i; ?>" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div>


                          <?php endif; ?>

                          <div class="inner-modal-body">
                            <p><?php echo $room_blocks[$i]["content"]; ?></p>
                          </div>

<!--
                          <div class="room-button">
                            <a href="<?php echo $room_blocks[$i]["link"]; ?>" class="cta-button">Book Now</a>
                          </div>
-->

                        </div>
                      </div>
                    </div>
                  </div>
                <?php endfor; ?>
              <?php endif; ?>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 center-content-block">
                <h2><?php echo get_field('accommodations_second_block_title'); ?>
                <p><?php echo get_field('accommodations_second_block_content'); ?></p>
              </div>
            </div>
          </div>

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
