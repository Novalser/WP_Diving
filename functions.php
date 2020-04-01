<?php

add_filter('show_admin_bar', '__return_false');

define('DIVING_THEME_ROOT', get_template_directory_uri());
define('DIVING_CSS_DIR', DIVING_THEME_ROOT . '/css');
define('DIVING_CSS_DIR_V', DIVING_THEME_ROOT . '/vendor');
define('DIVING_JS_DIR', DIVING_THEME_ROOT . '/js');
define('DIVING_JS_DIR_V', DIVING_THEME_ROOT . '/vendor');
define('DIVING_IMG_DIR', DIVING_THEME_ROOT . '/img');


add_theme_support('post-thumbnails');


// правильный способ подключить стили и скрипты
add_action('wp_enqueue_scripts', 'theme_name_scripts');
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_scripts()
{

  wp_enqueue_style('fonts', DIVING_CSS_DIR  . '/fonts.css');
  wp_enqueue_style('v_icons', DIVING_CSS_DIR_V . '/simple-line-icons/css/simple-line-icons.css');
  wp_enqueue_style('v_bootstrap', DIVING_CSS_DIR_V . '/bootstrap/css/bootstrap.min.css');
  wp_enqueue_style('v_swiper', DIVING_CSS_DIR_V . '/swiper/css/swiper.min.css');
  wp_enqueue_style('v_popup', DIVING_CSS_DIR_V . '/magnific-popup/magnific-popup.css');
  wp_enqueue_style('animate', DIVING_CSS_DIR . '/animate.css');
  wp_enqueue_style('layout.min', DIVING_CSS_DIR  . '/layout.min.css');

  wp_deregister_script('jquery');
  wp_deregister_script('jquery1');
  wp_deregister_script('jquery2');
  wp_deregister_script('jquery3');
  wp_deregister_script('jquery4');
  wp_deregister_script('jquery5');
  wp_deregister_script('jquery6');
  wp_deregister_script('jquery7');
  wp_deregister_script('jquery8');
  wp_deregister_script('jquery9');
  wp_deregister_script('jquery10');
  wp_deregister_script('jquery11');
  wp_deregister_script('jquery12');
  wp_deregister_script('jquery13');
  wp_deregister_script('jquery14');
  wp_deregister_script('jquery15');

  wp_enqueue_script('jquery', DIVING_JS_DIR_V . '/jquery.min.js');
  wp_enqueue_script('jquery1', DIVING_JS_DIR_V . '/jquery-migrate.min.js');
  wp_enqueue_script('jquery2', DIVING_JS_DIR_V . '/bootstrap/js/bootstrap.min.js');


  wp_enqueue_script('jquery8', DIVING_JS_DIR_V . '/jquery.easing.js');
  wp_enqueue_script('jquery9', DIVING_JS_DIR_V . '/jquery.back-to-top.js');
  wp_enqueue_script('jquery10', DIVING_JS_DIR_V . '/jquery.smooth-scroll.js');
  wp_enqueue_script('jquery11', DIVING_JS_DIR_V . '/jquery.wow.min.js');
  wp_enqueue_script('jquery12', DIVING_JS_DIR_V . '/swiper/js/swiper.jquery.min.js');
  wp_enqueue_script('jquery13', DIVING_JS_DIR_V . '/magnific-popup/jquery.magnific-popup.min.js');
  wp_enqueue_script('jquery14', DIVING_JS_DIR_V . '/masonry/jquery.masonry.pkgd.min.js');
  wp_enqueue_script('jquery15', DIVING_JS_DIR_V . '/masonry/imagesloaded.pkgd.min.js');


  wp_enqueue_script('jquery3', DIVING_JS_DIR . '/layout.min.js');
  wp_enqueue_script('jquery4', DIVING_JS_DIR . '/components/wow.min.js');
  wp_enqueue_script('jquery5', DIVING_JS_DIR . '/components/swiper.min.js');
  wp_enqueue_script('jquery6', DIVING_JS_DIR . '/components/maginific-popup.min.js');
  wp_enqueue_script('jquery7', DIVING_JS_DIR . '/components/masonry.min.js');
}




add_action('init', function () {

  add_theme_support('post-thumbnails');





  // Регистрация постов


  register_post_type('Logo', array(
    'labels'             => array(
      'name'               => 'Логотип', // Основное название типа записи
      'singular_name'      => 'Пункт меню', // отдельное название записи типа Book
      'add_new'            => 'Добавить пункт',
      'add_new_item'       => 'Добавить новый пункт',
      'edit_item'          => 'Редактировать пункт',
      'new_item'           => 'Новый пункт',
      'view_item'          => 'Посмотреть пункт',
      'search_items'       => 'Найти пункт',
      'not_found'          =>  'Пунктов меню не найдено',
      'not_found_in_trash' => 'В корзине пунктов меню не найдено',

      'menu_name'          => 'Логотип'

    ),
    'public'             => false,
    'show_ui'            => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'menu_icon'          => 'https://img.icons8.com/metro/26/000000/book.png',
    'supports'           => array('title', 'thumbnail')
  ));





  register_post_type('mainMenu', array(
    'labels'             => array(
      'name'               => 'Меню', // Основное название типа записи
      'singular_name'      => 'Пункт меню', // отдельное название записи типа Book
      'add_new'            => 'Добавить пункт',
      'add_new_item'       => 'Добавить новый пункт',
      'edit_item'          => 'Редактировать пункт',
      'new_item'           => 'Новый пункт',
      'view_item'          => 'Посмотреть пункт',
      'search_items'       => 'Найти пункт',
      'not_found'          =>  'Пунктов меню не найдено',
      'not_found_in_trash' => 'В корзине пунктов меню не найдено',

      'menu_name'          => 'Меню'

    ),
    'public'             => false,
    'show_ui'            => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'menu_icon'          => 'https://img.icons8.com/metro/26/000000/book.png',
    'supports'           => array('title', 'editor')
  ));



  register_post_type('mainText', array(
    'labels'             => array(
      'name'               => 'Текст', // Основное название типа записи
      'singular_name'      => 'Пункт меню', // отдельное название записи типа Book
      'add_new'            => 'Добавить пункт',
      'add_new_item'       => 'Добавить новый пункт',
      'edit_item'          => 'Редактировать пункт',
      'new_item'           => 'Новый пункт',
      'view_item'          => 'Посмотреть пункт',
      'search_items'       => 'Найти пункт',
      'not_found'          =>  'Пунктов меню не найдено',
      'not_found_in_trash' => 'В корзине пунктов меню не найдено',

      'menu_name'          => 'Главный текст'

    ),
    'public'             => false,
    'show_ui'            => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'menu_icon'          => 'https://img.icons8.com/metro/26/000000/book.png',
    'supports'           => array('title', 'editor')
  ));










  register_post_type('review', array(
    'labels'             => array(
      'name'               => 'Отзывы', // Основное название типа записи
      'singular_name'      => 'Отзыв', // отдельное название записи типа Book
      'add_new'            => 'Добавить новый',
      'add_new_item'       => 'Добавить новый отзыв',
      'edit_item'          => 'Редактировать отзыв',
      'new_item'           => 'Новая отзыв',
      'view_item'          => 'Посмотреть отзыв',
      'search_items'       => 'Найти отзыв',
      'not_found'          =>  'Отзывов не найдено',
      'not_found_in_trash' => 'В корзине отзывов не найдено',

      'menu_name'          => 'Отзывы'

    ),
    'public'             => false,
    'show_ui'            => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'menu_icon'          => 'https://img.icons8.com/metro/26/000000/book.png',
    'supports'           => array('title', 'editor')
  ));


  register_post_type('Pricing', array(
    'labels'             => array(
      'name'               => 'House Rental', // Основное название типа записи
      'singular_name'      => 'Pricing', // отдельное название записи типа Book
      'add_new'            => 'Добавить новый',
      'add_new_item'       => 'Добавить новый Pricing',
      'edit_item'          => 'Редактировать Pricing',
      'new_item'           => 'Новый Pricing',
      'view_item'          => 'Посмотреть Pricing',
      'search_items'       => 'Найти Pricing',
      'not_found'          =>  'Pricing не найдено',
      'not_found_in_trash' => 'В корзине Pricing не найдено',

      'menu_name'          => 'House Rental'

    ),
    'public'             => false,
    'show_ui'            => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'menu_icon'          => 'https://img.icons8.com/metro/26/000000/book.png',
    'supports'           => array('title', 'thumbnail')
  ));
});



function mainMenu()
{

  $args =  array(
    'orderby'     => 'date',
    'order'       => 'ASC',
    'post_type'   => 'mainMenu',
    'numberposts' => 6,
  );

  return get_posts($args);
}



function logo()
{

  $args =  array(
    'orderby'     => 'date',
    'order'       => 'ASC',
    'post_type'   => 'Logo',
    'numberposts' => 2,
  );

  $logos = [];

  foreach (get_posts($args) as $post) {
    $logos = get_fields($post->ID);
    $logos['img'] =  get_the_post_thumbnail_url($post->ID, 'thumbnail');
    //$logos[] = $logos;
  }

  return $logos['img'];
}









function getReview()
{

  $args =  array(
    'orderby'     => 'date',
    'order'       => 'ASC',
    'post_type'   => 'review',
  );

  return get_posts($args);
}




//var_dump(logo());
