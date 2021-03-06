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

      <aside class="mkdf-vertical-menu-area mkdf-vertical-alignment-center">
        <div class="mkdf-vertical-menu-area-inner">
          <div class="mkdf-vertical-area-background"></div>
          <div class="mkdf-logo-wrapper">
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
          <div class="mkdf-vertical-menu-outer">
            <?php
              wp_nav_menu(
                array(
                  'theme_location' => 'menu-aside',
                  'menu' => '',
                  'container'       => 'nav', 
                  'container_class' => 'mkdf-vertical-menu mkdf-vertical-dropdown-below', 
                  'link_before' => '<div class="menu-svg__left"></div>',
                  'link_after' => '<div class="menu-svg__right"></div>',
                  //'container_id'    => 'container-id',
                  'menu_class'      => '', 
                  //'menu_class'      => 'menu', 
                  'menu_id'        => 'menu-vertical',
                  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>', //'<ul id="%1$s" class="%2$s">%3$s</ul>',
                  'echo'            => true,
                  'depth'           => 0,
                  //'walker'          => '',
                )
              );
            ?>
          </div>
          <div class="mkdf-vertical-area-widget-holder">
            <div class="widget mkdf-social-icons-group-widget text-align-center aside-search">
              <?php get_search_form();?>
            </div>
            <div class="widget mkdf-social-icons-group-widget text-align-center aside-contacts">

              <?php 
                $vk = get_option('karjala_event_vk_field');

                $instagram = get_option('karjala_event_instagram_field');

                $karjala_event_social_3_field = get_option('karjala_event_social_3_field');
                $karjala_event_social_3_icon = get_option('karjala_event_social_3_icon');

                $karjala_event_social_4_field = get_option('karjala_event_social_4_field');
                $karjala_event_social_4_icon = get_option('karjala_event_social_4_icon');

                $karjala_event_social_5_field = get_option('karjala_event_social_5_field');
                $karjala_event_social_5_icon = get_option('karjala_event_social_5_icon');

                $karjala_event_social_6_field = get_option('karjala_event_social_6_field');
                $karjala_event_social_6_icon = get_option('karjala_event_social_6_icon');

              ?>
              <div class="widget mkdf-social-icons-group-widget mkdf-light-skin">
                <?php 
                  if( $vk ):
                ?>
                <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover aside-contacts__item"
                  href="<?php echo $vk;?>" target="_blank">
                  <span class="mkdf-social-icon-widget ion-social-instagram"></span>
                </a>
                <?php 
                  endif;
                  if( $instagram ):
                ?>
                <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover aside-contacts__item"
                  href="<?php echo $instagram;?>" target="_blank">
                  <span class="mkdf-social-icon-widget ion-social-twitter"></span>
                </a>
                <?php 
                  endif;
                  if( $karjala_event_social_3_field && $karjala_event_social_3_icon ):
                ?>

                <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover aside-contacts__item"
                  href="<?php echo $karjala_event_social_3_field;?>" target="_blank">
                  <img class="mkdf-social-icon-widget  aside-contacts__item-icon" src="<?php echo $karjala_event_social_3_icon;?>" alt="<?php echo $karjala_event_social_3_field;?>">
                </a>

                <?php 
                  endif;
                  if( $karjala_event_social_4_field && $karjala_event_social_4_icon ):
                ?>

                <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover aside-contacts__item"
                  href="<?php echo $karjala_event_social_4_field;?>" target="_blank">
                  <img class="mkdf-social-icon-widget  aside-contacts__item-icon" src="<?php echo $karjala_event_social_4_icon;?>" alt="<?php echo $karjala_event_social_4_field;?>">
                </a>
                <?php 
                  endif;
                  if( $karjala_event_social_5_field && $karjala_event_social_5_icon ):
                ?>
                <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover aside-contacts__item"
                  href="<?php echo $karjala_event_social_5_field;?>" target="_blank">
                  <img class="mkdf-social-icon-widget  aside-contacts__item-icon" src="<?php echo $karjala_event_social_5_icon;?>" alt="<?php echo $karjala_event_social_5_field;?>">
                </a>
                <?php 
                  endif;
                  if( $karjala_event_social_6_field && $karjala_event_social_6_icon ):
                ?>
                <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover aside-contacts__item"
                  href="<?php echo $karjala_event_social_6_field;?>" target="_blank">
                  <img class="mkdf-social-icon-widget  aside-contacts__item-icon" src="<?php echo $karjala_event_social_6_icon;?>" alt="<?php echo $karjala_event_social_6_field;?>">
                </a>
                <?php 
                  endif;
                  
                ?>
                
              </div>

            </div>
          </div>
        </div>
      </aside>

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

      <?php wp_body_open(); ?>