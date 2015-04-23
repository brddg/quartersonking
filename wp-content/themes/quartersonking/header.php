<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
    <link href="//cloud.webtype.com/css/6b0dbb3a-7a16-4f5c-9ef8-721f77130d68.css" rel="stylesheet" type="text/css" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>

    <!-- wrapper -->
    <div class="wrapper">

      <div id="book-now">
        <div class="container">
          <div class="row">

            <div class="col-sm-3 hidden-xs">
              <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                  <input type='text' class="form-control" />
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                  </span>
                </div>
              </div>
            </div>

            <div class="col-sm-3 hidden-xs">
              <div class="form-group">
                <div class='input-group date' id='datetimepicker2'>
                  <input type='text' class="form-control" />
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                  </span>
                </div>
              </div>
            </div>

            <div class="col-sm-3 hidden-xs">
              <div class="form-group">
                <div class='input-group' id='guestpicker'>
                  <select class="selectpicker">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-sm-3">
              <a id="book-button" href="https://gc.synxis.com/rez.aspx?Hotel=64625&amp;Chain=17744" class="cta-button">Book Now</a>
            </div>

          </div>
        </div>
      </div>

      <!-- header -->
      <header class="header clear" role="banner">

        <div id="header-inset">
          <!-- logo -->
          <div class="logo">
            <a href="<?php echo home_url(); ?>">
              <i class="icon-icon"></i>
              <h1 class="small" id="wordmark">The Quarters on King</h1>
            </a>
          </div>
          <!-- /logo -->

          <!-- nav -->
          <nav class="nav" role="navigation">
            <?php html5blank_nav(); ?>
          </nav>
          <!-- /nav -->
        </div>

      </header>
      <!-- /header -->
