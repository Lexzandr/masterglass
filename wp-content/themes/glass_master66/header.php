<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-2 col-sm-2 hidden-xs">
                    <a href="/" class="logo">
                        <img src="<?= get_template_directory_uri();?>/img/logo.png" alt="logo">
                    </a>
                </div>

                <div class="col-lg-9 col-md-10 col-sm-10">
                    <div class="hamburger-menu visible-xs">
                        <div class="bar"></div>
                    </div>
                    <div class="header__phone"><a href="callto:+73433610737">+7 (343) 361-07-37</a></div>

                    <div class="header__social hidden-xs">
                        <a href="https://www.instagra­m.com/glass_master66/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="https://vk.com/id416164120" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>
                        <a href="https://ok.ru/profile/577323994063" target="_blank"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a>
                        <a href="https://www.facebook.com/glassmaster66?ref=bookmarks" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://ru.pinterest.com/vereshaginv85/boards/" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                        <a href="https://www.youtube.com/channel/UC7bbnRgkY2jhXlwWDR8nX_Q" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                    </div>
                    <nav class="top_menu">
                        <? wp_nav_menu(); ?>
                    </nav>
                </div>
            </div>
        </div>

    </header>