<?php
/*
Template Name: home
*/
?>

<?php get_header() ?>

<main>
    <!-- Intro -->
    <section class="intro">
        <video class="intro__video" src="<?php the_field('main_block-video'); ?>" muted autoplay loop
               playsinline></video>
        <div class="intro__container">
            <div class="intro__left-block">
                <p class="intro__title"><?php the_field('title_main_block_video'); ?>
                </p>
                <p class="intro__subtitle"><?php the_field('Text_after_title_main'); ?></p>
                <div class="intro__row">
                    <a href="<?php the_field('Link_button_left'); ?>"
                       class="intro__btn primary-btn"><?php the_field('Text_button_order_services'); ?></a>
                    <a class="intro__btn btn-tel"
                       href="tel:<?php the_field('Button_link_phone_number'); ?>"><?php the_field('Text_button_right_phone'); ?></a>
                </div>
            </div>
            <div class="intro__right-block" data-da=".intro__bottom, 860">
                <div class="intro__row">

                    <?php
                    if (have_rows('Creating_small_info')):
                        while (have_rows('Creating_small_info')) : the_row(); ?>

                            <div class="intro__about-us about-us-intro">
                                <div class="about-us-intro__title">
                                    <img src="<?php the_sub_field('Creating_small_info_img'); ?>" alt="win">
                                    <span><?php the_sub_field('Creating_small_info_title'); ?></span>
                                </div>
                                <p class="about-us-intro__subtitle"><?php the_sub_field('Creating_small_info_text'); ?></p>
                            </div>
                        <?php endwhile;
                    else :
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- intro__right-block (mobile) -->
    <div class="intro__bottom"></div>
    <!-- /Intro -->

    <!-- Services -->
    <section class="services">
        <div class="services__container">
            <p class="services__title"><?php the_field('title_block_services'); ?></p>
            <div class="services__items">

                <?php

                // проверяем есть ли в повторителе данные
                if (have_rows('Creating_service')):

                    // перебираем данные
                    while (have_rows('Creating_service')) : the_row(); ?>

                        <div class="services__item">
                            <div class="services__item-img">
                                <img src="<?php the_sub_field('Service_image'); ?>" alt="service-image"/>
                            </div>
                            <div class="services__item-title"><?php the_sub_field('subtitle_block_services'); ?></div>
                            <p class="services__item-text">
                                <?php the_sub_field('text_service'); ?>
                            </p>
                            <div class="services__item-box">
                                <a href="<?php the_sub_field('Services_button_link'); ?>"
                                   class="services__item-btn primary-btn"><?php the_sub_field('Services_button_text'); ?></a>
                                <a class="services__item-more"
                                   href="<?php the_sub_field('link_button_details'); ?>"><?php the_sub_field('Text_button_details'); ?></a>
                            </div>
                        </div>
                    <?php endwhile;

                else :

                endif;

                ?>
            </div>
        </div>
    </section>
    <!-- /Services -->

    <!-- rent -->
    <section class="rent">
        <style>
            .rent {
                background-size: cover;
                background: url(<?php bloginfo('template_url');?>/assets/img/rent/bg.png;) top center no-repeat;
            }
        </style>
        <div class="rent__bg-mob">
            <img src="<?php the_field('Background_image_mobile_version'); ?>" alt="bg-image"/>
        </div>
        <div class="rent__container">
            <div class="rent__box">
                <p class="rent__title"><?php the_field('Lease_Title'); ?></p>
                <p class="rent__text">
                    <?php the_field('Rental_equipment_text'); ?>
                </p>
            </div>
            <div class="rent__slider swiper">
                <div class="rent__items swiper-wrapper">
                    <?php
                    // проверяем есть ли в повторителе данные
                    if (have_rows('Creation_equipment')):
                        // перебираем данные
                        while (have_rows('Creation_equipment')) : the_row(); ?>

                            <div class="rent__item swiper-slide">
                                <div class="rent__item-img">
                                    <img src="<?php the_sub_field('img_equipment'); ?>" alt="sldier-image"/>
                                </div>
                                <div class="rent__item-info">
                                    <p class="rent__item-title"><?php the_sub_field('title_equipment'); ?></p>
                                    <span class="rent__item-subtitle"><?php the_sub_field('subtitle_equipment'); ?></span>
                                    <p class="rent__item-text">
                                        <?php the_sub_field('Description_technique'); ?>
                                    </p>

                                    <div class="rent__item-box">
                                        <a href="<?php the_sub_field('technique_link_button'); ?>"
                                           class="rent__item-btn"><?php the_sub_field('technique_text_button'); ?></a>
                                        <a class="rent__item-link"
                                           href="<?php the_sub_field('technique_link_button_details'); ?>"><?php the_sub_field('technique_text_button_details'); ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;
                    else :
                    endif;
                    ?>
                </div>
                <!-- slider-pagination -->
                <div class="rent__pagination swiper-pagination"></div>
            </div>

            <a class="rent__show-all"
               href="<?php the_field('link_text_view_equipment'); ?>"><?php the_field('Button_text_view_equipment'); ?></a>
        </div>
    </section>
    <!-- /rent -->

    <!-- steps -->
    <section class="steps">
        <div class="steps__container">
            <!-- Swiper -->
            <div class="steps__swiper steps-swiper swiper-steps">
                <div class="steps-swiper__title title">
                    <p><?php the_field('Title_how_work'); ?></p>
                    <div class="steps-swiper__nav">
                        <div class="steps-swiper__prev">
                            <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <line x1="21" y1="10" x2="2" y2="10" stroke="#464646" stroke-width="2"/>
                                <path d="M12 0.999999L2 10L12 19" stroke="#464646" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="steps-swiper__next">
                            <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <line x1="21" y1="10" x2="2" y2="10" stroke="#464646" stroke-width="2"/>
                                <path d="M12 0.999999L2 10L12 19" stroke="#464646" stroke-width="2"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="swiper-wrapper">
                    <?php
                    if (have_rows('Creating_stage_work')):
                        while (have_rows('Creating_stage_work')) : the_row(); ?>
                            <div class=" steps__item steps-item swiper-slide">
                                <div class="steps-item__img">
                                    <img src="<?php the_sub_field('image_work'); ?>" alt="step 1">
                                    <p class="steps-item__num">
                                        <?php the_sub_field('Work_stage'); ?>
                                    </p>
                                </div>
                                <p class="steps-item__title">
                                    <?php the_sub_field('Work_stage_text'); ?>
                                </p>
                            </div>
                        <?php endwhile;
                    else :
                    endif;
                    ?>
                </div>
                <div class="swiper-pagination"></div>

                <!-- /Swiper -->
            </div>
    </section>
    <!-- /steps -->

    <!-- info -->
    <section class="info">
        <div class="info__container">
            <div class="info__top info-top">
                <img class="info__bg" src="<?php the_field('Background_image_company'); ?>" alt="bg"/>

                <div class="info-top__left">
                    <p class="info-top__title"><?php the_field('Company_title_numbers'); ?></p>
                    <p class="info-top__subtitle">
                        <?php the_field('Company_subtitle_numbers'); ?>
                    </p>
                    <p class="info-top__text">
                        <?php the_field('Company_text_numbers'); ?>
                    </p>
                    <a href="<?php the_field('invite_tender_link'); ?>" class="info-top__btn"
                       data-da=".info-top,620"><?php the_field('invite_tender_text'); ?></a>
                </div>

                <div class="info-top__right">
                    <?php
                    if (have_rows('Create_little_information')):
                        while (have_rows('Create_little_information')) : the_row(); ?>

                            <div class="info-top__rating info-top-rating">
                                <p class="info-top-rating__title"><?php the_sub_field('title_little information'); ?></p>
                                <p class="info-top-rating__text">
                                    <?php the_sub_field('text_little information'); ?>
                                </p>
                            </div>
                        <?php endwhile;
                    else :
                    endif;
                    ?>
                </div>
            </div>
            <div class="info__bottom info-bottom">
                <p class="info-bottom__title">
                    <?php the_field('map-form-title');?>
                </p>
                <p class="info-bottom__subtitle">
                    <?php the_field('map-form-subtitle');?>
                </p>
                <?php echo do_shortcode('[contact-form-7 id="33f8597" title="Наша компания в цифрах"]') ?>
                <div class="map-form__politic">
                    <p><?php the_field('map-form-text');?> <a href="<?php the_field('map-form-link');?>"><?php the_field('map-form-link-text');?></a>
                    </p>

                </div>
            </div>

            <div class="info__map info-map">
                <picture>
                    <source srcset="<?php the_field('Background_image_mobile_version_company'); ?>"
                            media="(max-width:620px)"/>
                    <img class="info-map__map" src="<?php the_field('image_background_map'); ?>" alt="map"/>
                </picture>
            </div>

        </div>
    </section>
    <!-- /info -->

    <!-- advantages -->
    <section class="advantages">
        <div class="advantages__container">
            <p class="advantages__title"><?php the_field('title_other_companies'); ?></p>
            <div class="advantages__items">

                <?php

                // проверяем есть ли в повторителе данные
                if (have_rows('Creating_Benefit_Points')):

                    // перебираем данные
                    while (have_rows('Creating_Benefit_Points')) : the_row(); ?>

                        <div class="advantages__item">
                            <div class="advantages__item-box">
                                <p class="advantages__item-title"><?php the_sub_field('Heading_Benefits'); ?></p>
                                <a href="<?php the_sub_field('link_buttons_benefits'); ?>"
                                   class="advantages__item-btn primary-btn"><?php the_sub_field('text_buttons_benefits'); ?></a>
                            </div>

                            <div class="advantages__item-img">
                                <picture>
                                    <!-- Первая картинка для больших экранов -->
                                    <source srcset="<?php the_sub_field('Benefits_img'); ?>"
                                            media="(min-width: 550px)"/>
                                    <!-- Вторая картинка для мобильных устройств -->
                                    <img src="<?php the_sub_field('Benefits_img'); ?>" alt="item-image"/>
                                </picture>
                            </div>
                            <p class="advantages__item-text">
                                <?php the_sub_field('Benefits_text'); ?>
                            </p>
                        </div>
                    <?php endwhile;

                else :

                endif;

                ?>
            </div>
            <button class="advantages__btn primary-btn">Заказать услуги</button>
        </div>
    </section>
    <!-- /advantages -->

    <!-- clients -->
    <section class="clients">
        <div class="client__container">
            <div class="clients__title">
                <p><?php the_field('Clients_title'); ?></p>
                <div class="steps-swiper__nav">
                    <div class="steps-swiper__prev">
                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="21" y1="10" x2="2" y2="10" stroke="#464646" stroke-width="2"/>
                            <path d="M12 0.999999L2 10L12 19" stroke="#464646" stroke-width="2"/>
                        </svg>
                    </div>
                    <div class="steps-swiper__next">
                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="21" y1="10" x2="2" y2="10" stroke="#464646" stroke-width="2"/>
                            <path d="M12 0.999999L2 10L12 19" stroke="#464646" stroke-width="2"/>
                        </svg>
                    </div>
                </div>
            </div>

        </div>
        <!-- Slider main container -->
        <div class="clients__slider swiper">
            <!-- Additional required wrapper -->
            <div class="clients__items swiper-wrapper">
                <?php
                if (have_rows('Clients_logo_creation')):
                    while (have_rows('Clients_logo_creation')) : the_row(); ?>

                        <div class="clients__item swiper-slide">
                            <img class="clients__item-img" src="<?php the_sub_field('img_logo_creation'); ?>"
                                 alt="partner-icon"/>
                        </div>
                    <?php endwhile;
                else :
                endif;
                ?>
            </div>

        </div>
    </section>
    <!-- /clients -->

    <!-- order -->
    <section class="order">
        <div class="order__swipers order-swipers">
            <!-- Основной -->
            <div class="order-swipers__main main-swiper swiper">
                <div class="swiper-wrapper">

                    <?php
                    if (have_rows('creating_large_slider')):
                        while (have_rows('creating_large_slider')) : the_row(); ?>
                            <div class="swiper-slide">
                                <picture>
                                    <img src="<?php the_sub_field('creating_large_slider_image'); ?>" alt="Slide 1"
                                         media="max-width:768px">
                                </picture>
                                <div class="order-swipers__about about-repair">
                                    <p class="about-repair__title"><?php the_sub_field('Slider_title_repair'); ?></p>
                                    <div class="about-repair__text">
                                        <p>
                                            <?php the_sub_field('repair_Slider_text_repair'); ?>
                                        </p>
                                    </div>
                                    <div class="about-repair__info">
                                        <?php
                                        if (have_rows('Creating_little_information_slider')):
                                            while (have_rows('Creating_little_information_slider')) : the_row(); ?>
                                                <div class="about-repair__info-item">
                                                    <span class="about-repair__info-area"><?php the_sub_field('Small_information_header_slider'); ?></span>
                                                    <span><?php the_sub_field('Small_information_text_slider'); ?></span>
                                                </div>
                                            <?php endwhile;
                                        else :
                                        endif;
                                        ?>
                                    </div>
                                    <a href=" <?php the_sub_field('Slider_button_link'); ?>"
                                       class="about-repair__btn"> <?php the_sub_field('Slider_button_text'); ?></a>
                                </div>
                            </div>
                        <?php endwhile;
                    else :
                    endif;
                    ?>
                </div>
                <div class="main-swiper__button-prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20" fill="none">
                        <path d="M12.1377 17.875L4.5 10L12.1377 2.125" stroke="white" stroke-width="4"
                              stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="main-swiper__button-next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20" fill="none">
                        <path d="M5.86231 17.875L13.5 10L5.8623 2.125" stroke="white" stroke-width="4"
                              stroke-linecap="round"/>
                    </svg>
                </div>
            </div>
            <!-- Миниатюрный слайдер (thumbs) -->
            <div class="order-swipers__container">
                <div class="order-swipers__thumbs thumbs-swiper">
                    <div class="swiper-wrapper">

                        <?php

                        // проверяем есть ли в повторителе данные
                        if (have_rows('creating_small_pictures_slider')):

                            // перебираем данные
                            while (have_rows('creating_small_pictures_slider')) : the_row(); ?>

                                <div class="swiper-slide"><img src="<?php the_sub_field('image_small_slider'); ?>"
                                                               alt="Thumbnail 1"></div>
                            <?php endwhile;

                        else :

                        endif;

                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="order__form order-form">
            <div class="order-form__container">

                <p class="order-form__title"><?php the_field('Heading_Overhaul'); ?></p>

                <div class="order-form__text">
                    <p><?php the_field('Heading_Overhaul_subtitle'); ?></p>
                </div>

                <div class="order-form__contacts form-contacts" name="order-form" id="orderForm">
                    <?php echo do_shortcode('[contact-form-7 id="f3a4a5f" title="Контактная форма 1"]') ?>
                </div>
            </div>
        </div>
    </section>
    <!-- /order -->

    <!-- blog -->
    <section class="blog">
        <div class="blog__container">
            <div class="blog__inner">
                <a class="blog__article" href="<?php the_field('Link_by_picture'); ?>">
                    <img class="blog__article-img" src="<?php the_field('Company_Blog_Header_img'); ?>"/>
                    <div class="blog__article-content">
                        <span class="blog__article-date"><?php the_field('Company_Header_img_text'); ?></span>
                        <p class="blog__article-title"><?php the_field('Company_Header_img_title'); ?></p>
                    </div>
                </a>
                <div class="blog__company">
                    <p class="blog__company-title">
                        <?php the_field('Company_Blog_Header'); ?>
                    </p>
                    <div class="blog__company-content">
                        <?php
                        // проверяем есть ли в повторителе данные
                        if (have_rows('Creating_note')):
                            // перебираем данные
                            while (have_rows('Creating_note')) : the_row(); ?>
                                <div class="blog__company-item">
                                        <span class="blog__company-date">
                                            <?php the_sub_field('Creating_note_date'); ?>
                                        </span>
                                    <a class="blog__company-link" href="<?php the_sub_field('Button_link_note'); ?>">
                                        <?php the_sub_field('Button_text_note'); ?>
                                    </a>
                                </div>
                            <?php endwhile;
                        else :
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /blog -->

    <!-- seo -->
    <section class="seo">
        <div class="seo__container">
            <div class="seo__title"><?php the_field('title_СЕО'); ?></div>
            <div class="seo__content">
                <div class="seo__text-container expanded">
                    <?php
                    if (have_rows('Creating_text_blocks')):
                        while (have_rows('Creating_text_blocks')) : the_row(); ?>
                            <div class="seo__text">
                                <?php the_sub_field('CEO_block_text'); ?>
                            </div>
                        <?php endwhile;
                    else :
                    endif;
                    ?>
                </div>
                <button class="seo__show-more">Показать все</button>
            </div>

        </div>

    </section>

    <!-- /seo -->
</main>
<?php get_footer(); ?>
