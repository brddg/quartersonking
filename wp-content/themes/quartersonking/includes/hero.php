<?php

if (has_post_thumbnail( $post->ID ) ) {
  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
  $image = $image[0];
}
else {
  $image = get_template_directory_uri() . '/img/hero-img.jpg';
  $text = get_post_meta($post->ID, 'header_text', true);
  if ($text == '') {
    $text = get_the_title($post);
  }
}

?>

<div class="hero" style="background-image: url('<?php echo $image; ?>')">
  <div class="container">
    <h1><?php echo $text ?></h1>
  </div>
</div>
