<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title><?php bloginfo('title');?></title>
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="<?php echo get_site_url(); ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/release/image/og-image.png">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="" />
    <meta property="fb:app_id" content="">

    <?php wp_head();?>
    <?php wp_footer(); ?>

    <!-- APPLY TOUCH ICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/release/image/apple-touch-icon.png"/>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/jpg" href="<?php echo get_template_directory_uri(); ?>/release/image/favicon.ico" />

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/release/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700;900&family=Noto+Serif+JP:wght@500&display=swap"
        rel="stylesheet">

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

</head>

<body <?php body_class(); ?>>
    
<main>
    <div class="page__header">
        <div class="page__wrapper">
            <div class="head_nav">
                <div class="head_logo">
                    <a href="<?php echo get_site_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/head_logo.png" alt="">
                    </a>
                </div>
                <a class="head_contact" href="https://haruno-ie.com/contact" target="_blank">
                    <div class="head_contact_item">
                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/head_contact.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/head_contact_pink.png" alt="">
                        <p>contact</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="page__content">
