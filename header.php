<!doctype html>
<html>
    <head>
        <?php wp_head(); ?>
    </head>
    <?php
        $awesome_classes = (is_front_page()) ? ['mytheme-class', 'my-class'] : ['no-mytheme-class', 'no-my-class'];
    ?>
    <body <?php body_class($awesome_classes); ?>>
        <?php wp_nav_menu(['theme_location'=>'primary']); ?>