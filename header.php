<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<!-- BEGIN HEAD -->

<head>
    <meta charset="<?php bloginfo('charset') ?>" />
    <title><?php the_title(); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />




    <!-- Favicon -->

    <link href="<?= bloginfo('template_directory'); ?>/favicon.ico" rel="shortcut icon" type="" />
    <?php wp_head(); ?>
</head>
<!-- END HEAD -->

<!-- BODY -->

<body id="body" data-spy="scroll" data-target=".header">

    <!--========== HEADER ==========-->
    <header class="header navbar-fixed-top">
        <!-- Navbar -->
        <nav class="navbar" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="menu-container js_nav-item">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="toggle-icon"></span>
                    </button>

                    <!-- Logo -->
                    <div class="logo">
                        <a class="logo-wrap" href="#body">
                            <p></p>

                            <img class="logo-img logo-img-main" src="<?php echo logo();  ?>" width="20" height="30" alt="">
                            <img class="logo-img logo-img-active" src="<?php echo logo();  ?>" width="189" height="255" alt="">

                        </a>
                    </div>
                    <!-- End Logo -->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-collapse">
                    <div class="menu-container">



                        <ul class="nav navbar-nav navbar-nav-right">
                            <?php foreach (mainMenu() as $post) :

                                if (!is_front_page()) {

                            ?> <li class="js_nav-item nav-item">
                                        <a class="nav-item-child nav-item-hover" href="http://daiving/<?php echo $post->post_content; ?>"> <?php echo $post->post_title; ?></a>
                                    </li>
                                <?php } else { ?>
                                    <li class="js_nav-item nav-item">
                                        <a class="nav-item-child nav-item-hover" href="<?php echo $post->post_content; ?>"> <?php echo $post->post_title; ?></a>
                                    </li>
                                <?php } ?>
                            <?php endforeach; ?>
                        </ul>

                    </div>
                </div>
                <!-- End Navbar Collapse -->
            </div>
        </nav>
        <!-- Navbar -->
    </header>
    <!--========== END HEADER ==========-->