<?php

$home_hero_images = get_field('home_hero_images');
if (empty($home_hero_images)) {
  $home_hero_images = array('home_hero_image' => get_template_directory_uri() . '/img/hero-img-2.jpg');
}

$home_hero_text = get_field('home_hero_text');
if (empty($home_hero_text)) {
  $home_hero_text = get_the_title($post);
}
?>

<div id="home-hero" class="hero" style="background-image: url('<?php echo $home_hero_images[0]['home_hero_image']; ?>');">
  <div class="container">
    <h1><?php echo $home_hero_text; ?></h1>
  </div>
</div>

<script type="text/javascript">
  var home_images = [];
  var first_image = "";
  var set_home_image = function(image) {
    document.getElementById('home-hero').style.backgroundImage = "url('" + image + "')";
  };

  <?php while (have_rows('home_hero_images')): the_row(); ?>
    home_images.push("<?php the_sub_field('home_hero_image'); ?>");
  <?php endwhile; ?>

  jQuery(document).ready(function(){
    var i = 0;
    var images_count = home_images.length - 1;

    if (images_count > 0) {

      setInterval(function(){
        i++;
        if (i > images_count) {
          i = 0;
        }
        jQuery('#home-hero').fadeTo('slow', 0.3, function() {
          jQuery(this).css('background-image', 'url(' + home_images[i] + ')');
        }).fadeTo('slow', 1);
      }, 5000);

    }


  });

</script>
