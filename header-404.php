<?php
/*
Template Name: header
*/
?>
<!DOCTYPE html>
<html lang="<?php if (pll_current_language() == 'ua') {
    echo "uk-UA";
}
if (pll_current_language() == 'ru') {
    echo "ru-UA";
}
?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>404 Not Found</title>
    <?php wp_head(); ?>

</head>
<body>
<?php $front_id = get_option('page_on_front'); ?>
<div class="wrapper">
    <!-- Header -->
    <header class="header">
        <div class="header__inner">
            <div class="header__logo">
                <?php the_custom_logo(); ?>
                <span class="header__logo-text"><?php the_field ('text_right_logo', $front_id);?></span>
            </div>
            <div class="header__navigation">
                <div class="header__menu-burger">
                    <nav class="menu-burger__body menu-body">
                        <div class="menu-burger__list">
                            <?php if (pll_current_language() == 'ua') {
                                wp_nav_menu(array(
                                    'menu' => 'menu_ua'));
                            }
                            if (pll_current_language() == 'ru') {
                                wp_nav_menu(array(
                                    'menu' => 'menu_ru'));
                            }
                            ?>
                        </div>
                        <div class="menu-burger__actions">
                            <div class="header__actions-phone phone-header phone-header__burger">
                                <span class="phone-header__label">Контакты</span>
                                <div class="phone-header__items">
                                    <div class="phone-header__item">
                                        <div class="phone-header__spoller">
                                            <img src="<?php bloginfo('template_url');?>/assets/img/icons/phone.svg" alt="phone icon" height="20" width="20" />
                                            <div class="phone-header__phone">
                                                <a href="tel:<?php the_field('number_contacts_main-num-link', $front_id); ?>">
                                                    <?php the_field('number_contacts_main-num', $front_id); ?>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="phone-header__l">
                                            <?php
                                            if (have_rows('Creating numbers_contacts', $front_id)):
                                                while (have_rows('Creating numbers_contacts', $front_id)) : the_row(); ?>
                                                    <li>
                                                        <div class="phone-header__phone">
                                                            <a href="tel:<?php the_sub_field ('Phone_contact_number_link-tel', $front_id);?>"><?php the_sub_field ('Phone_contact_number_link', $front_id);?></a>
                                                        </div>
                                                    </li>
                                                <?php endwhile;
                                            else :
                                            endif;
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <ul class="header__lang" data-da=".menu-burger__actions,768,first">
                <?php pll_the_languages(array('show_flags' => 0, 'display_names_as' => 0,'dropdown' => 0, 'post_id' => 2)); ?>
            </ul>
            <div class="header__actions">
                <div class="header__actions-social" data-da=".menu-burger__actions,900">
                    <?php
                    if (have_rows('creation_social_networks')):
                        while (have_rows('creation_social_networks')) : the_row(); ?>
                            <a href="<?php the_sub_field ('Social_networks_link', $front_id);?>">
                                <img src="<?php the_sub_field ('social_media_image', $front_id);?>" alt="social" />
                            </a>
                        <?php endwhile;
                    else :
                    endif;
                    ?>
                </div>
                <div class="header__actions-phone phone-header" data-da=".header__inner,475">
                    <span class="phone-header__label"><?php the_field ('number_contacts_text', $front_id);?></span>
                    <div class="phone-header__items">
                        <div class="phone-header__item">
                            <div class="phone-header__spoller">
                                <img src="<?php the_field ('number_contacts_image', $front_id);?>" alt="phone icon" height="20" width="20" />
                                <div class="phone-header__phone">
                                    <a href="tel:<?php the_field('number_contacts_main-num-link', $front_id); ?>">
                                        <?php the_field('number_contacts_main-num', $front_id); ?>
                                    </a>
                                </div>
                                <button type="button" class="phone-header__arrow">
                                    <img src="<?php bloginfo('template_url');?>/assets/img/icons/drop.svg" alt="expand more" height="15" width="15"
                                         class="phone-header__arrow-img" />
                                </button>
                            </div>
                            <ul class="phone-header__list spoiler-body-lang">
                                <?php
                                if (have_rows('Creating numbers_contacts', $front_id)):
                                    while (have_rows('Creating numbers_contacts', $front_id)) : the_row(); ?>
                                        <li>
                                            <div class="phone-header__phone">
                                                <a href="tel:<?php the_sub_field ('Phone_contact_number_link-tel', $front_id);?>"><?php the_sub_field ('Phone_contact_number_link', $front_id);?></a>
                                            </div>
                                        </li>
                                    <?php endwhile;
                                else :
                                endif;
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <a href="<?php the_field ('link_service_order_button_header', $front_id);?>" class="header__actions-btn primary-btn" data-da=".menu-burger__actions,675">
                    <?php the_field ('Text_service_order_button_header', $front_id);?>
                </a>
                <button type="button" class="menu-burger__icon icon-menu" aria-label="menu-burger">
                    <span></span>
                </button>
            </div>
        </div>
    </header>


    <!-- /Header -->