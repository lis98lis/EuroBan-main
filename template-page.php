<?php
/*
Template Name: template
*/
?>

<?php get_header(); ?>
    <main class="page__main">
        <div class="page__container-page">
            <div class="page__block">
                <div class="page__breadcrumbs">
                    <?php
                    if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                    }
                    ?>
                </div>
                <h1 class="page__title--h1">
                    <?php the_field('title_template'); ?>
                </h1>
            </div>
        </div>


        <?php
        if (have_rows('flex-content')):
            while (have_rows('flex-content')) : the_row();
                if (get_row_layout() == 'flex-content-title'):?>
                    <div class="page__container-page">
                        <div class="page__block">
                            <div class="page__title--h1"><?php the_sub_field('title_block_two_template'); ?></div>
                        </div>
                    </div>
                <?php
                elseif (get_row_layout() == 'flex-title-text'):?>
                    <div class="page__container-page">
                        <div class="page__block">
                            <div class="page__title--h2">
                                <?php the_sub_field('subtitle_block_two_template'); ?>
                            </div>
                            <div class="page__description">
                                <?php the_sub_field('repeat_block_two_template'); ?>
                            </div>
                        </div>
                    </div>
                <?php
                elseif (get_row_layout() == 'flex-img-text-btn'):?>
                    <div class="hero-template">
                        <img
                                src="<?php the_sub_field('img_block_one_template'); ?>" class="hero-template__img"
                                alt="about img"
                        />
                        <div class="hero-template__container hero-template__body">
                            <h4 class="hero-template__title"><?php the_sub_field('title_block_one_template'); ?></h4>
                            <p class="hero-template__description">
                                <?php the_sub_field('text_block_one_template'); ?>
                            </p>
                            <a href="<?php the_sub_field('link_block_one_template'); ?>"
                               class="primary-btn template_button"><?php the_sub_field('button_block_one_template'); ?></a>
                        </div>
                    </div>
                <?php
                elseif (get_row_layout() == 'flex-columns-text'):?>
                    <div class="page__container-page">
                        <div class="page__columns">
                            <h5 class="page__title--h5">
                                <?php the_sub_field('title_block_five_template'); ?>
                            </h5>
                            <div class="page__columns-inner">
                                <?php
                                // проверяем есть ли в повторителе данные
                                if (have_rows('repeat_creating_columns_five_blocks_template')):
                                    // перебираем данные
                                    while (have_rows('repeat_creating_columns_five_blocks_template')) : the_row(); ?>

                                        <div class="page__columns-item">
                                            <p class="page__description--bold">
                                                <?php the_sub_field('subtitle_block_five_template'); ?>
                                            </p>
                                            <div class="page__description">
                                                <?php the_sub_field('text_block_five_template'); ?>
                                            </div>
                                        </div>

                                    <?php endwhile;
                                else :
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                <?php
                elseif (get_row_layout() == 'flex-tablet'):?>
                    <div class="page__container-page">
                        <div class="page__tables">
                            <h4 class="page__title--h4">
                                <?php the_sub_field('table_title'); ?>
                            </h4>
                            <table class="page__table">
                                <tbody>
                                <?php
                                // проверяем есть ли в повторителе данные
                                if (have_rows('tablet-row')):
                                    // перебираем данные
                                    while (have_rows('tablet-row')) : the_row(); ?>
                                        <tr>
                                            <?php
                                            // проверяем есть ли в повторителе данные
                                            if (have_rows('tablet-item')):
                                                // перебираем данные
                                                while (have_rows('tablet-item')) : the_row(); ?>
                                                    <td><?php the_sub_field('tablet-item-text'); ?></td>
                                                <?php endwhile;
                                            else :
                                            endif;
                                            ?>
                                        </tr>

                                    <?php endwhile;
                                else :
                                endif;
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php
                elseif (get_row_layout() == 'flex-divider'):?>
                    <div class="page__container-page">
                        <div class="page__divider">
                            <h5 class="page__title--h5">
                                <?php the_sub_field('title_seven_block_template'); ?>
                            </h5>
                        </div>
                    </div>
                <?php
                elseif (get_row_layout() == 'flex-comment'):?>
                    <div class="page__container-page">
                        <div class="page__comment">
                            <h4 class="page__title--h4"><?php the_sub_field('title_comment_block_template'); ?></h4>
                            <div class="page__comment-item">
                                <div class="page__comment-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none">
                                        <path d="M11.1 5.22681H1.5V14.8268H6.3V19.6268H11.1V5.22681Z" stroke="#ADB868"
                                              stroke-width="2"/>
                                        <path d="M22.5 5.22681H12.9V14.8268H17.7V19.6268H22.5V5.22681Z" stroke="#ADB868"
                                              stroke-width="2"/>
                                    </svg>
                                </div>
                                <p class="page__comment-content">
                                    <?php the_sub_field('comment_template'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php
                elseif (get_row_layout() == 'flex-lists'):?>
                    <div class="page__container-page">
                        <div class="page__lists">
                            <?php
                            // проверяем есть ли в повторителе данные
                            if (have_rows('Creating_block_for_bulleted_list')):
                                // перебираем данные
                                while (have_rows('Creating_block_for_bulleted_list')) : the_row(); ?>
                                    <div class="page__lists-marked">
                                        <h4 class="page__title--h4"><?php the_sub_field('title_nine_block_mark'); ?></h4>
                                        <ul class="page__lists-marked-list">
                                            <?php
                                            // проверяем есть ли в повторителе данные
                                            if (have_rows('repeater_marked_template')):
                                                // перебираем данные
                                                while (have_rows('repeater_marked_template')) : the_row(); ?>
                                                    <li class="page__lists-marked-item">
                                                        <div class="page__lists-marked-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                 height="16"
                                                                 viewBox="0 0 16 16" fill="none">
                                                                <path d="M15 3.71094L5.66667 12.289L1 7.99997"
                                                                      stroke="#1E434C"
                                                                      stroke-width="2" stroke-linecap="round"/>
                                                            </svg>
                                                        </div>
                                                        <div class="page__lists-marked-item-top">
                                                            <div class="page__lists-marked-content">
                                                                <?php the_sub_field('subtitle_nine_block_mark'); ?>
                                                            </div>
                                                            <p class="page__description">
                                                                <?php the_sub_field('text_nine_block_mark'); ?>
                                                            </p>
                                                        </div>
                                                    </li>
                                                <?php endwhile;
                                            else :
                                            endif;
                                            ?>
                                        </ul>
                                    </div>

                                <?php endwhile;
                            else :
                            endif;
                            ?>
                            <?php

                            // проверяем есть ли в повторителе данные
                            if (have_rows('Creating_block_for_numbered_list')):

                                // перебираем данные
                                while (have_rows('Creating_block_for_numbered_list')) : the_row(); ?>
                                    <div class="page__lists-numbered">
                                        <h4 class="page__title--h4"><?php the_sub_field('title_nine_block_numbering'); ?></h4>
                                        <ul class="page__lists-numbered-list">
                                            <?php
                                            // проверяем есть ли в повторителе данные
                                            if (have_rows('repeater_numbering_template')):

                                                // перебираем данные
                                                while (have_rows('repeater_numbering_template')) : the_row(); ?>

                                                    <li class="page__lists-numbered-item">
                                                        <div class="page__list-numbered-content">
                                                            <?php the_sub_field('subtitle_nine_block_numbering'); ?>
                                                        </div>
                                                        <p class="page__description">
                                                            <?php the_sub_field('text_nine_block_numbering'); ?>
                                                        </p>
                                                    </li>


                                                <?php endwhile;
                                            else :
                                            endif;
                                            ?>
                                        </ul>
                                    </div>

                                <?php endwhile;

                            else :

                            endif;

                            ?>


                        </div>
                    </div>
                <?php
                elseif (get_row_layout() == 'flex-steps'):?>
                    <div class="page__container-page">
                        <div class="page__steps">
                            <h4 class="page__title--h4">
                                <?php the_sub_field('title_ten_block_template'); ?>
                            </h4>
                            <div class="steps__body-page">
                                <?php

                                // проверяем есть ли в повторителе данные
                                if (have_rows('repeater_ten_block_template')):

                                    // перебираем данные
                                    while (have_rows('repeater_ten_block_template')) : the_row(); ?>

                                        <div class="steps__item-page item-steps__page">
                                            <div class="item-steps__top">
                                                <img
                                                        src="<?php the_sub_field('img_ten_block_template'); ?>"
                                                        class="item-steps__img"
                                                        alt="step preview"
                                                />
                                                <span class="item-steps__step"><?php the_sub_field('span_ten_block_template'); ?></span>
                                            </div>
                                            <p class="item-steps__content item-steps__content--black">
                                                <?php the_sub_field('text_ten_block_template'); ?>
                                            </p>
                                        </div>
                                    <?php endwhile;
                                else :
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                <?php
                elseif (get_row_layout() == 'flex-img-right-text'):?>
                    <div class="page__container-page">
                        <div class="page__info">
                            <h4 class="page__title--h4"><?php the_sub_field('title_twelfth_block_template'); ?></h4>
                            <div class="page__info-inner page__info-inner--reverse">
                                <div class="page__info-img">
                                    <img src="<?php the_sub_field('img_twelfth_block_template'); ?>" alt="img"/>
                                </div>
                                <div class="page__info-content">
                                    <h4 class="page__title--h4"><?php the_sub_field('subtitle_twelfth_block_template'); ?></h4>
                                    <?php

                                    // проверяем есть ли в повторителе данные
                                    if (have_rows('repeater_twelfth_block_template')):

                                        // перебираем данные
                                        while (have_rows('repeater_twelfth_block_template')) : the_row(); ?>
                                            <div class="page__info-descr">
                                                <p class="page__description--bold">
                                                    <?php the_sub_field('subtitle_twelfth_block_template_dedicated'); ?>
                                                </p>
                                                <p class="page__description">
                                                    <?php the_sub_field('text_twelfth_block_template'); ?>
                                                </p>
                                            </div>
                                        <?php endwhile;
                                    else :
                                    endif;
                                    ?>
                                    <ul class="page__lists-marked-list">
                                        <?php
                                        // проверяем есть ли в повторителе данные
                                        if (have_rows('repeater_twelfth_block_template_mark')):

                                            // перебираем данные
                                            while (have_rows('repeater_twelfth_block_template_mark')) : the_row(); ?>

                                                <li class="page__lists-marked-item">
                                                    <div class="page__lists-marked-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                             height="16"
                                                             viewBox="0 0 16 16" fill="none">
                                                            <path d="M15 3.71094L5.66667 12.289L1 7.99997"
                                                                  stroke="#1E434C"
                                                                  stroke-width="2" stroke-linecap="round"/>
                                                        </svg>
                                                    </div>
                                                    <div class="page__lists-marked-item-top">
                                                        <div class="page__lists-marked-content">
                                                            <?php the_sub_field('subtitle_twelfth_block_template_mark'); ?>
                                                        </div>
                                                        <p class="page__description">
                                                            <?php the_sub_field('text_twelfth_block_template_mark'); ?>
                                                        </p>
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
                <?php
                elseif (get_row_layout() == 'flex-img-left-text'):?>
                    <div class="page__container-page">
                        <div class="page__info">
                            <h4 class="page__title--h4"><?php the_sub_field('title_eleventh_block_template'); ?></h4>
                            <div class="page__info-inner">
                                <div class="page__info-img">
                                    <img src="<?php the_sub_field('img_eleventh_block_template'); ?>" alt=img/>
                                </div>
                                <div class="page__info-content">
                                    <h4 class="page__title--h4"><?php the_sub_field('subtitle_eleventh_block_template'); ?></h4>
                                    <?php

                                    // проверяем есть ли в повторителе данные
                                    if (have_rows('repeater_eleventh_block_template')):

                                        // перебираем данные
                                        while (have_rows('repeater_eleventh_block_template')) : the_row(); ?>
                                            <div class="page__info-descr">
                                                <p class="page__description--bold">
                                                    <?php the_sub_field('subtitle_eleventh_block_template_dedicated'); ?>
                                                </p>
                                                <p class="page__description">
                                                    <?php the_sub_field('text_eleventh_block_template'); ?>
                                                </p>
                                            </div>
                                        <?php endwhile;
                                    else :
                                    endif;
                                    ?>
                                    <ul class="page__lists-marked-list">
                                        <?php
                                        // проверяем есть ли в повторителе данные
                                        if (have_rows('repeater_eleventh_block_template_mark')):
                                            // перебираем данные
                                            while (have_rows('repeater_eleventh_block_template_mark')) : the_row(); ?>

                                                <li class="page__lists-marked-item">
                                                    <div class="page__lists-marked-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                             height="16"
                                                             viewBox="0 0 16 16" fill="none">
                                                            <path d="M15 3.71094L5.66667 12.289L1 7.99997"
                                                                  stroke="#1E434C"
                                                                  stroke-width="2" stroke-linecap="round"/>
                                                        </svg>
                                                    </div>
                                                    <div class="page__lists-marked-item-top">
                                                        <div class="page__lists-marked-content">
                                                            <?php the_sub_field('subtitle_eleventh_block_template_mark'); ?>
                                                        </div>
                                                        <p class="page__description">
                                                            <?php the_sub_field('text_eleventh_block_template_mark'); ?>
                                                        </p>
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
                <?php
                elseif (get_row_layout() == 'flex-wide-img'):?>
                    <div class="page__container-page">
                        <div class="page__wide-img">
                            <h4 class="page__title--h4"><?php the_sub_field('title_thirteenth_block_template'); ?></h4>
                            <img src="<?php the_sub_field('img_thirteenth_block_template'); ?>" alt="img"/>
                        </div>
                    </div>
                <?php
                elseif (get_row_layout() == 'flex-img-two'):?>
                    <div class="page__container-page">
                        <div class="page__two-img">
                            <h4 class="page__title--h4"><?php the_sub_field('title_fourteenth_block_template'); ?></h4>
                            <div class="page__two-inner">
                                <img src="<?php the_sub_field('left_img_block_fourteenth'); ?>" alt="img"/>
                                <img src="<?php the_sub_field('right_img_block_fourteenth'); ?>" alt="img"/>
                            </div>
                        </div>
                    </div>
                <?php
                elseif (get_row_layout() == 'flex-slider'):?>
                    <div class="page__container-page">
                        <div class="page__slider">
                            <h4 class="page__title--h4"><?php the_sub_field('title_fifteenth_block_template'); ?></h4>
                            <div class="page__slider-swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <?php
                                    // проверяем есть ли в повторителе данные
                                    if (have_rows('creating_slide')):
                                        // перебираем данные
                                        while (have_rows('creating_slide')) : the_row(); ?>
                                            <div class="swiper-slide">
                                                <div class="page__slider-image">
                                                    <img src=" <?php the_sub_field('img_slide'); ?>" alt="img"/>
                                                </div>
                                                <p class="page__description">
                                                    <?php the_sub_field('text_slide'); ?>
                                                </p>
                                            </div>
                                        <?php endwhile;
                                    else :
                                    endif;
                                    ?>

                                </div>
                                <div class="swiper-button-next">
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.33431 15.104L15.001 8.41041M8.33432 1.71682L15.001 8.41041M15.001 8.41041L1.00098 8.41041"
                                              stroke="#222222" stroke-width="2" stroke-linecap="square"/>
                                    </svg>
                                </div>
                                <div class="swiper-button-prev">
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.66569 15.104L1.99902 8.41041M8.66568 1.71682L1.99902 8.41041M1.99902 8.41041L15.999 8.41041"
                                              stroke="#222222" stroke-width="2" stroke-linecap="square"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                elseif (get_row_layout() == 'flex-sosial'):?>
                    <div class="page__container-page">
                        <div class="page__share">
                            <h4 class="page__title--h4"> <?php the_sub_field('title_sixteenth_block_template'); ?></h4>
                            <div class="page__share-inner">
                                <?php
                                // проверяем есть ли в повторителе данные
                                if (have_rows('Creation_social_networks_template')):
                                    // перебираем данные
                                    while (have_rows('Creation_social_networks_template')) : the_row(); ?>
                                        <a href="  <?php the_sub_field('Social_link_networks_template'); ?>"
                                           class="page__share-item">
                                            <div class="page__share-item-icon">
                                                <img src="<?php the_sub_field('Social_image_networks_template'); ?>"
                                                     alt="icon"/>
                                            </div>
                                            <div class="page__share-item-title">  <?php the_sub_field('Name_social_networks_template'); ?></div>
                                        </a>
                                    <?php endwhile;
                                else :
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                <?php
                elseif (get_row_layout() == 'flex-summary'):?>
                    <div class="page__container-page">
                        <div class="page__questions">
                            <h4 class="page__title--h4"><?php the_sub_field('title_seventeenth_block_template'); ?></h4>
                            <div class="question-block__inner">
                                <div class="question-block__spollers">
                                    <?php
                                    // проверяем есть ли в повторителе данные
                                    if (have_rows('Creating_question_and_answer')):

                                        // перебираем данные
                                        while (have_rows('Creating_question_and_answer')) : the_row(); ?>
                                            <div class="question-block__item question-block__item--transparent">
                                                <div class="question-block__question">
                                                    <?php the_sub_field('Last_block_question'); ?>
                                                    <img
                                                            src="<?php echo get_template_directory_uri() ?>/assets/img/icons/drop-gray.svg"
                                                            alt="chevron bottom"
                                                    />
                                                </div>
                                                <div class="question-block__body">
                                                    <?php the_sub_field('Last_block_response'); ?>
                                                </div>
                                            </div>

                                        <?php endwhile;
                                    else :
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                elseif (get_row_layout() == 'flex-seo'):?>
                    <div class="seo">
                        <div class="seo__container">
                            <div class="seo__title"><?php the_sub_field('title_seo-template'); ?></div>
                            <div class="seo__content">
                                <div class="seo__text-container expanded">
                                    <?php
                                    if (have_rows('Creating_text_blocks-template')):
                                        while (have_rows('Creating_text_blocks-template')) : the_row(); ?>
                                            <div class="seo__text">
                                                <?php the_sub_field('CEO_block_text-template'); ?>
                                            </div>
                                        <?php endwhile;
                                    else :
                                    endif;
                                    ?>
                                </div>
                                <button class="seo__show-more">Показать все</button>
                            </div>
                        </div>
                    </div>
                <?php
                endif;
            endwhile;
        else :

            // макетов не найдено

        endif;

        ?>


        </div>
    </main>
<?php get_footer('something'); ?>