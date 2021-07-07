<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title');?></title>
  
    <?php wp_head();?>	
    <?php wp_footer(); ?>
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/release/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700;900&family=Noto+Serif+JP:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

</head>
<body <?php body_class(); ?>>
    
<main>
    <div class="page__header">
        <div class="page__wrapper">
            <div class="head_nav">
                <div class="head_logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/head_logo.png" alt="">
                </div>
                <a class="head_contact" href="https://haruno-ie.com/contact" target="_blank">
                    <div class="head_contact_item">
                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/header/head_contact.png" alt="">
                        <p>contact</p>
                    </div>
                    
                </a>
            </div>
        </div>
    </div>
    <div class="page__content">