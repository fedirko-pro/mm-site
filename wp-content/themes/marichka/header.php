<?php
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php 
          if (isset($_SERVER['HTTP_USER_AGENT']) &&
    (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
        header('X-UA-Compatible: IE=edge,chrome=1');
    ?>
    <title><?php wp_title(); ?></title>
    <link rel="shortcut icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.png" />
    <?php wp_head(); ?>
</head>

<body>
    <header class="<?=is_front_page()?'frontpage':'';?>">
        <div class="container">
            <div class="header_logo">
                <a href="<?=home_url();?>" title="Marichka Motors"></a>
            </div>
            <div class="header_menu">
                <?php wp_nav_menu([
                    'theme_location' => 'header',
                    'container' => false,
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'menu_class' => 'menu_list'
                ]);?>
                <div class="languages">
                    <?
                    if ( is_active_sidebar( 'languages' ) ) {
                        dynamic_sidebar( 'languages' );
                    }
                    ?>
                </div>
            </div>
        </div>
    </header>
    <main>
