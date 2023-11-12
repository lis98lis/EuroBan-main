<!-- Footer -->
<?php $front_id = get_option('page_on_front'); ?>
<footer class="footer">
    <div class="footer__container">
        <div class="footer__inner">
            <div class="footer__logo-box">
                <a class="footer__logo" href="#">
                    <img src="<?php the_field('Basement_logo', $front_id); ?>" alt="logo-icon"/>
                </a>
                <div class="footer__copy"><?php the_field('Text_under_footer_logo', $front_id); ?></div>
            </div>

            <div class="footer__services accordion" data-da=".footer__content, 890">
                <div class="accordion__triger accordion-triger">
                    <div class="footer__title footer__title--mob">
                        <?php the_field('Basement_services', $front_id); ?>
                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.25 4.4082L7 9.5L1.75 4.4082" stroke="#464646" stroke-width="2"
                                  stroke-linecap="round"/>
                        </svg>
                    </div>
                </div>

                <div class="footer__box accordion-panel">
                    <div class="footer__links">
                        <?php
                        // проверяем есть ли в повторителе данные
                        if (have_rows('Creating_Footer_Services_one', $front_id)):
                            // перебираем данные
                            while (have_rows('Creating_Footer_Services_one', $front_id)) : the_row(); ?>

                                <a class="footer__link"
                                   href="<?php the_sub_field('link_basement_service_one', $front_id); ?>"><?php the_sub_field('Text_basement_service_one', $front_id); ?></a>
                            <?php endwhile;
                        else :
                        endif;
                        ?>
                    </div>
                    <div class="footer__links">
                        <?php
                        // проверяем есть ли в повторителе данные
                        if (have_rows('Creating_Footer_Services_two', $front_id)):
                            // перебираем данные
                            while (have_rows('Creating_Footer_Services_two', $front_id)) : the_row(); ?>
                                <a class="footer__link"
                                   href="<?php the_sub_field('link_basement_service_two', $front_id); ?>"><?php the_sub_field('Text_basement_service_two', $front_id); ?></a>
                            <?php endwhile;

                        else :

                        endif;

                        ?>
                    </div>
                </div>
            </div>

            <div class="footer__info accordion" data-da=".footer__content, 890">
                <div class="accordion__triger accordion-triger">
                    <div class="footer__title footer__title--mob">
                        <?php the_field('Header_Footer_Information', $front_id); ?>
                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.25 4.4082L7 9.5L1.75 4.4082" stroke="#464646" stroke-width="2"
                                  stroke-linecap="round"/>
                        </svg>
                    </div>
                </div>

                <div class="footer__box accordion-panel">
                    <div class="footer__links">
                        <?php
                        // проверяем есть ли в повторителе данные
                        if (have_rows('Create_column_footer_information_one', $front_id)):
                            // перебираем данные
                            while (have_rows('Create_column_footer_information_one', $front_id)) : the_row(); ?>
                                <a class="footer__link"
                                   href="<?php the_sub_field('link_footer_information_one', $front_id); ?>"><?php the_sub_field('Text_footer_information_one', $front_id); ?></a>
                            <?php endwhile;
                        else :
                        endif;
                        ?>
                    </div>
                    <div class="footer__links">
                        <?php
                        // проверяем есть ли в повторителе данные
                        if (have_rows('Create_column_footer_information_two', $front_id)):
                            // перебираем данные
                            while (have_rows('Create_column_footer_information_two', $front_id)) : the_row(); ?>
                                <a class="footer__link"
                                   href="<?php the_sub_field('link_footer_information_two', $front_id); ?>"><?php the_sub_field('Text_footer_information_two', $front_id); ?></a>
                            <?php endwhile;
                        else :
                        endif;
                        ?>
                    </div>
                </div>
            </div>

            <div class="footer__contacts">
                <div class="footer__title">  <?php the_field('Heading_Footer_Contacts', $front_id); ?></div>
                <div class="footer__contacts-box">

                    <?php
                    // проверяем есть ли в повторителе данные
                    if (have_rows('Creating_Footer_Contacts', $front_id)):
                        // перебираем данные
                        while (have_rows('Creating_Footer_Contacts', $front_id)) : the_row(); ?>
                            <a class="footer__contacts-tel" href="tel:<?php the_sub_field('Basement_phone_number-link',  $front_id); ?>">
                                <img src="<?php the_sub_field('Basement_contact_image', $front_id); ?>" alt="item-image"/>
                                <?php the_sub_field('Basement_phone_number', $front_id); ?>
                            </a>
                        <?php endwhile;
                    else :
                    endif;
                    ?>
                    <a href=" <?php the_field('link_buttons_order_basement_services', $front_id); ?>"
                       class="footer__contacts-btn primary-btn">
                        <?php the_field('text_button_order_services_basement', $front_id); ?>
                    </a>
                </div>
            </div>
        </div>

        <div class="footer__content"></div>
    </div>
    </div>
</footer>
<!-- /Footer -->
</div>


<?php wp_footer(); ?>
<script defer src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper.js"></script>
</body>
</html>