<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name'); wp_title(); ?></title>

    <? wp_head(); ?>
</head>
<body class="main">

<nav class="menu">
    <div class="menu-tabs">
        <div class="menu-tabs-item main-bg col-md-3 col-sm-6 col-xs-12"><a href="<?php echo get_page_link(10); ?>">Главная</a></div>
        <div class="menu-tabs-item about-us-bg col-md-3 col-sm-6 col-xs-12"><a href="<?php echo get_page_link(7); ?>">О нас</a></div>
        <div class="menu-tabs-item projects-bg col-md-3 col-sm-6 col-xs-12"><a href="<?php echo get_category_link(3); ?>">Проекты</a></div>
        <div class="menu-tabs-item contacts-bg col-md-3 col-sm-6 col-xs-12"><a href="<?php echo get_page_link(4); ?>">Контакты</a></div>
    </div>
    <div class="menu-line">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
            <img src="<? bloginfo('template_url'); ?>/images/logo.png" alt="">
        </a>
        <div class="menu-button closed" id="nav-icon2">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</nav>