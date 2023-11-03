<?php
/*
Template Name: header
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Описание" />
    <meta name="keywords" content="Ключевики" />
    <meta name="author" content="Автор" />
    <link rel="stylesheet" href="/assets/css/styles.scss.css" />
    <title>ЄвроБан</title>

    <?php wp_head(); ?>

</head>
<body>
<div class="wrapper">
    <!-- Header -->
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="<?php the_field ('Logo_link');?>">
                <img src="<?php the_field ('header_logo');?>" alt="logo" />
                <span class="header__logo-text"><?php the_field ('text_right_logo');?></span>
            </a>
            <div class="header__navigation">
                <div class="header__menu-burger">
                    <nav class="menu-burger__body menu-body">
                        <ul class="menu-burger__list">

                            <?php

                            // проверяем есть ли в повторителе данные
                            if (have_rows('creating_navigation_header')):

                                // перебираем данные
                                while (have_rows('creating_navigation_header')) : the_row(); ?>

                                    <li class="menu-burger__item">
                                        <a href="<?php the_sub_field ('Navigation_link');?>" class="menu-burger__link"><?php the_sub_field ('Navigation_text');?></a>
                                    </li>
                                <?php endwhile;

                            else :

                            endif;

                            ?>
                        </ul>
                        <div class="menu-burger__actions">
                            <div class="header__actions-phone phone-header phone-header__burger">
                                <span class="phone-header__label">Контакты</span>
                                <div class="phone-header__items">
                                    <div class="phone-header__item">
                                        <div class="phone-header__spoller">
                                            <img src="<?php bloginfo('template_url');?>/assets/img/icons/phone.svg" alt="phone icon" height="20" width="20" />
                                            <div class="phone-header__phone">
                                                <a href="tel:0445365051">(044) 536 50 51</a>
                                            </div>
                                        </div>
                                        <ul class="phone-header__l">
                                            <li>
                                                <div class="phone-header__phone">
                                                    <a href="tel:0445365051">+38 (063) 536 50 51</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="phone-header__phone">
                                                    <a href="tel:0445365051">+38 (063) 536 50 51</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="header__lang" data-da=".menu-burger__actions,768,first">
                <button class="header__lang-button _active-lang" data-lang="ua">UA</button>
                <button class="header__lang-button" data-lang="ru">RU</button>
            </div>
            <div class="header__actions">
                <div class="header__actions-social" data-da=".menu-burger__actions,900">

                    <?php

                    // проверяем есть ли в повторителе данные
                    if (have_rows('creation_social_networks')):

                        // перебираем данные
                        while (have_rows('creation_social_networks')) : the_row(); ?>

                            <a href="<?php the_sub_field ('Social_networks_link');?>">
                                <img src="<?php the_sub_field ('social_media_image');?>" alt="Viber" />
                            </a>
                        <?php endwhile;

                    else :

                    endif;

                    ?>
                </div>
                <div class="header__actions-phone phone-header" data-da=".header__inner,475">
                    <span class="phone-header__label"><?php the_field ('number_contacts_text');?></span>
                    <div class="phone-header__items">
                        <div class="phone-header__item">
                            <div class="phone-header__spoller">
                                <img src="<?php the_field ('number_contacts_image');?>" alt="phone icon" height="20" width="20" />
                                <div class="phone-header__phone">
                                    <a href="tel:0445365051">(044) 536 50 51</a>
                                </div>
                                <button type="button" class="phone-header__arrow">
                                    <img src="<?php bloginfo('template_url');?>/assets/img/icons/drop.svg" alt="expand more" height="15" width="15"
                                         class="phone-header__arrow-img" />
                                </button>
                            </div>
                            <ul class="phone-header__list spoiler-body-lang">

                                <?php

                                // проверяем есть ли в повторителе данные
                                if (have_rows('Creating numbers_contacts')):

                                    // перебираем данные
                                    while (have_rows('Creating numbers_contacts')) : the_row(); ?>

                                        <li>
                                            <div class="phone-header__phone">
                                                <a href="tel:<?php the_sub_field ('Phone_contact_number_link');?>"><?php the_sub_field ('Phone_contact_number_link');?></a>
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
                <a href="<?php the_field ('link_service_order_button_header');?>" class="header__actions-btn primary-btn" data-da=".menu-burger__actions,675">
                    <?php the_field ('Text_service_order_button_header');?>
                </a>
                <button type="button" class="menu-burger__icon icon-menu" aria-label="menu-burger">
                    <span></span>
                </button>
            </div>
        </div>
    </header>


    <!-- /Header -->