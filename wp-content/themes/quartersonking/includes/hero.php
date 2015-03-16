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
