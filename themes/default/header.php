<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />

    <title><?php echo site_title(); ?></title>

    <?php
      seo();
      the_header();
    ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <header id="header" class="clearfix">
      <div class="container">
        <div class="site-name">
          <a href="<?php echo site_url(); ?>"><?php echo option( 'site_name' ); ?></a>
        </div>

        <a class="toggle-menu" href="javascript:;"><span class="bar1"></span><span class="bar2"></span><span class="bar3"></span></a>

        <form class="search-form">
          <div class="inner">
            <p><input type="text" name="search" placeholder="Type your keyword here ..." /></p>
            <p><button type="submit"><i class="fa fa-search"></i></button></p>
          </div>
        </form>
      </div>
    </header>

    <?php if ( has_nav_menu( 'primary' ) ) { ?>
      <nav id="menu" class="clearfix">
        <div class="container">
          <?php echo nav_menu( 'primary' ); ?>
        </div>
      </nav>
    <?php } ?>

    <main id="main" class="clearfix">
      <div class="container">
