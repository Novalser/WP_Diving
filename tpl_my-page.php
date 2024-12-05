<?php
/*
Template Name:  Шаблон страниц блога нашего
Template Post Type: post, page, product
*/
?>

<body>
  <div class="wrapper">
    <?php get_header(); ?>




    <main role="main" class="container">
      <div class="row more padding_top">


        <div class="row">
          <!-- Latest Products -->

          <?php

          $post = get_pages();

          $current_page = (get_query_var('pagename')) ? get_query_var('pagename') : 1;


          foreach (get_pages() as $page) {

            if ($page->post_name == $current_page) {

              $img = get_the_post_thumbnail_url($page->ID, 'full', true); ?>

              <div class="role_main">

                <div class="starter-template">
                  <h1> <?php echo $page->post_title; ?> </h1>
                </div>

                <div class="margin-b-20">
                  <img class="img-responsive wow fadeIn" src="<?php echo $img; ?>" alt="Latest Products Image" data-wow-duration=".3" data-wow-delay=".1s">
                </div>

                <p class="lead"><?php echo $page->post_content; ?></p>
              </div>




          <?php  }
          }  ?>





          <!--// end row -->
        </div>






    </main><!-- /.container -->



  </div><!-- /.row -->

  </main><!-- /.container -->



















  <div class="push"></div>
  </div>


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