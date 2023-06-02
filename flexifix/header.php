<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head(); ?>
</head>

<body>

    <header class="flexifix-header">
        <div class="container">
            <!-- <h1 class="flexifix-logo">
        <a href="#"><strong>Flexi</strong>Fix</a>
      </h1> -->
            <!-- <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i> -->
            <div class="flexifix_header_menu">

                <nav class="main-menu align-center flex">
                    <!-- <ul>
              <li><a href="#">Repair</a></li>
              <li><a href="#">Rent</a></li>
              <li><a href="#">Bicycles</a></li>
              <li><a href="#">Components</a></li>
              <li><a href="#">Blog</a></li>
            </ul> -->
                    <?php the_custom_logo(); ?>
                    <?php
          wp_nav_menu(array(
            'theme_location' => 'headerMenu',
            'depth' => 2,

          ));

          ?>
                    <!-- Use in conjunction with https://gist.github.com/woogists/c0a86397015b88f4ca722782a724ff6c -->

                    <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>"
                        title="<?php _e('View your shopping cart'); ?>"><?php echo sprintf(_n('%d item', '%d items', WC()->cart->get_cart_contents_count()), WC()->cart->get_cart_contents_count()); ?>
                        – <?php echo WC()->cart->get_cart_total(); ?></a>
                    <?php the_custom_logo(); ?>
                </nav>
                <main>



                </main>
            </div>
        </div>
    </header>