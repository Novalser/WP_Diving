<?php
/*
Template Name:  Шаблон страницы бронирования
Template Post Type: post, page, product
*/
?>

<body>
  <div class="wrapper">
    <?php get_header(); ?>









    <?php get_footer(); ?>



    <style>
      html,
      body {
        height: 100%;
        margin: 0;
      }

      .wrapper {
        min-height: 85%;

        /* Equal to height of footer */
        /* But also accounting for potential margin-bottom of last child */
        margin-bottom: -50px;
      }

      .footer,
      .push {
        height: 50px;
      }
    </style>
    <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

</body>

</html>