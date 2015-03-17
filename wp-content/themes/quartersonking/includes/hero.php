<?php

if (has_post_thumbnail( $post->ID ) ) {
  $header_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
  $header_image = $header_image[0];
}
else {
  $header_image = get_template_directory_uri() . '/img/hero-img.jpg';
}

$header_text = get_post_meta($post->ID, 'header_text', true);
if (empty($header_text)) {
  $header_text = get_the_title($post);
}
?>

<div class="hero" style="background-image: url('<?php echo $header_image; ?>')">
  <div class="container">
    <h1><?php echo $header_text ?></h1>
  </div>
</div>
