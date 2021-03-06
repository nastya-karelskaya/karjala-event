<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package karjala-event
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <?php get_template_part('template-parts/loader'); ?>

  <div class="mkdf-wrapper">
    <div class="mkdf-wrapper-inner">

    <header class="mkdf-mobile-header">
      <div class="mkdf-mobile-header-inner">
        <div class="mkdf-mobile-header-holder">
          <div class="mkdf-grid">
            <div class="mkdf-vertical-align-containers">
              <div class="mkdf-position-left">
                <div class="mkdf-position-left-inner">
                  <div class="mkdf-mobile-logo-wrapper">

                  <?php 

                  $svg_logo = get_option('karjala_event_svg_logo_field');

                  if( $svg_logo ): 

                  ?>

                  <a href="https://karjalaevent.anastasia-pavlova.com/wp/" class="custom-logo-link" rel="home">
                    <img src="<?php echo $svg_logo; ?> " class="custom-logo" alt="Karjala Event">
                  </a>


                  <?php

                  else:

                    the_custom_logo(); 

                  endif;

                  ?>
                  </div>
                </div>
              </div>
              <div class="mkdf-position-right">
                <div class="mkdf-position-right-inner">
                  <div class="mkdf-mobile-menu-opener mkdf-mobile-menu-opener-predefined">
                    <a href="#">
                      <h5 class="mkdf-mobile-menu-text">Меню</h5>
                      <span class="mkdf-mobile-menu-icon">
                        <span class="mkdf-hm-lines"><span class="mkdf-hm-line mkdf-line-1"></span><span
                            class="mkdf-hm-line mkdf-line-2"></span><span
                            class="mkdf-hm-line mkdf-line-3"></span></span> </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <nav class="mkdf-mobile-nav">
          <!-- <div class="mkdf-grid">
            
          </div> -->
          <?php
            wp_nav_menu(
              array(
                'theme_location' => 'menu-mobile',
                'menu' => '',
                'container'       => 'div', 
                'container_class' => 'mkdf-grid', 
                //'menu_class'      => 'clearfix',  
                //'menu_id'        => 'menu-standard-1',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>', //'<ul id="%1$s" class="%2$s">%3$s</ul>',
                //'link_before' => '<div class="menu-svg__left"></div>',
                //'link_after' => '<div class="menu-svg__right"></div>',
                'echo'            => true,
                'depth'           => 0,
                //'walker'          => '',
              )
            );
          ?>
        </nav>
      </div>
    </header>

      <div class="mkdf-content header-main">
        <div class="mkdf-content-inner">
          <div class="mkdf-full-width">
            <div class="mkdf-full-width-inner main-page__full-width-inner">
              <div class="mkdf-grid-row">
                <div class="mkdf-page-content-holder mkdf-grid-col-12">


                  <div class="vc_row wpb_row vc_row-fluid vc_row-has-fill main-page__row">


                    <!-- left-side -->
                    <div
                      class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-5 vc_col-md-12 main-page__column__left-side">
                      <div class="vc_column-inner">
                        <div class="wpb_wrapper">

                          <!-- header -->
                          <header class="vc_row wpb_row vc_inner vc_row-fluid main-page__header">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                              <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                  <div class="mkdf-elements-holder mkdf-one-column mkdf-responsive-mode-768 ">
                                    <div class="mkdf-eh-item mkdf-horizontal-alignment-center ">
                                      <div class="mkdf-eh-item-inner">
                                        <div
                                          class="mkdf-eh-item-content_wrapper mkdf-eh-custom-6734 main-page__block-pd">


                                          <div class="wpb_text_column wpb_content_element vc_custom_1570712658299">
                                            <div class="wpb_wrapper">

                                              <div class="mkdf-position-left">
                                                <div class="main-page__header-row">
                                                  <div class="main-page__header-logo">
                                                  <?php 

                                                  $svg_logo = get_option('karjala_event_svg_logo_field');

                                                  if( $svg_logo ): 

                                                  ?>

                                                  <a href="https://karjalaevent.anastasia-pavlova.com/wp/" class="custom-logo-link" rel="home">
                                                    <img src="<?php echo $svg_logo; ?> " class="custom-logo" alt="Karjala Event">
                                                  </a>


                                                  <?php

                                                  else:

                                                    the_custom_logo(); 

                                                  endif;

                                                  ?>

                                                  </div>

                                                  <?php 
                                                    $phone = get_option('karjala_event_phone_field');

                                                    if( $phone ):
                                                    
                                                    ?>

                                                  <div class="main-page__header-phone">
                                                    <a class="mkdf-icon-widget-holder green-hover"
                                                      href="tel:<?php echo str_replace(" ", "", $phone); ?>">
                                                      <span class="mkdf-icon-element ion-android-call">
                                                      </span>
                                                      <span class="mkdf-icon-text">
                                                        <?php echo $phone; ?>
                                                      </span>
                                                    </a>
                                                  </div>

                                                  <?php 
                                                      endif;

                                                    ?>


                                                  <div class="main-page__header-search">
                                                    <div class="mkdf-search-opener-holder">

                                                    <?php get_search_form(); ?>

                                                   
                                                    </div>
                                                  </div>
                                                </div>

                                                <div class="main-page__header-row">

                                                  <?php
                                                      wp_nav_menu(
                                                        array(
                                                          'theme_location' => 'menu-main-top',
                                                          'menu' => '',
                                                          'container'       => 'nav', 
                                                          'container_class' => 'mkdf-main-menu mkdf-drop-down mkdf-default-nav', 
                                                          'link_before' => '<div class="menu-svg__left"></div>',
																				                  'link_after' => '<div class="menu-svg__right"></div>',
                                                          //'container_id'    => 'container-id',
                                                          'menu_class'      => 'mkdf-main-menu mkdf-drop-down mkdf-default-nav', 
                                                          //'menu_class'      => 'menu', 
                                                          'menu_id'        => 'primary-menu',
                                                          'items_wrap'      => '<ul class="main-page__header-menu">%3$s</ul>', //'<ul id="%1$s" class="%2$s">%3$s</ul>',
                                                          'echo'            => true,
                                                          'depth'           => 0,
                                                          //'walker'          => '',
                                                        )
                                                      );
                                                    ?>

                                                </div>

                                              </div>


                                            </div>
                                          </div>

                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                </div>
                              </div>
                            </div>
                          </header>
                          <!-- ./header -->





                          <?php wp_body_open(); ?>