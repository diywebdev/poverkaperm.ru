<?php
function wp_starter_scripts()
{
  // wp_enqueue_style( $handle, $src = false, $deps = array(), $ver = false, $media = 'all' )
  wp_enqueue_style('swiper-styles', get_template_directory_uri() . '/assets/libs/swiperjs/swiper-bundle.min.css', array());
  wp_enqueue_style('glightbox-styles', get_template_directory_uri() . '/assets/libs/glightbox/glightbox.min.css', array());
  wp_enqueue_style('aos-styles', get_template_directory_uri() . '/assets/libs/aos/aos.css', array());
  wp_enqueue_style('my-styles', get_template_directory_uri() . '/css/index.css?' . time(), array()); // Подключаем свои стили

  // wp_enqueue_script( $handle, $src = false, $deps = array(), $ver = false, $in_footer = false )
  wp_enqueue_script('swiper-scripts', get_template_directory_uri() . '/assets/libs/swiperjs/swiper-bundle.min.js', array(), null, true);
  wp_enqueue_script('glightbox-scripts', get_template_directory_uri() . '/assets/libs/glightbox/glightbox.min.js', array(), null, true);
  wp_enqueue_script('aos-scripts', get_template_directory_uri() . '/assets/libs/aos/aos.js', array(), null, true);
  wp_enqueue_script('purecounter-scripts', get_template_directory_uri() . '/assets/libs/purecounter.js', array(), null, true);
  wp_enqueue_script('sliders-scripts', get_template_directory_uri() . '/js/modules/sliders.js', array(), null, true);
  wp_enqueue_script('modals-scripts', get_template_directory_uri() . '/js/modules/modals.js', array(), null, true);
  wp_enqueue_script('my-scripts', get_template_directory_uri() . '/js/index.js?' . time(), array(), null, true); // Подключаем свои скрипты

  //wp_enqueue_script('contact-form', get_template_directory_uri() . '/js/contact-form.js', array()); // Подключаем обработчик формы
  wp_localize_script('contact-form', 'contactFormData', array(
    'ajaxUrl' => admin_url('admin-post.php') // Локализация скрипта для передачи ajaxUrl
  ));
}
add_action('wp_enqueue_scripts', 'wp_starter_scripts');
