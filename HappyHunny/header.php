<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
    
<body <?php body_class(); ?>>
    
    <div class="notification">
    Get 20% off as a welcoming gift <img src="<?php echo get_template_directory_uri(); ?>/assets/images/promo-bar-arrow.png" >
                     
    </div>
	<header class="site-header">
		<div class="container">
            
            
			<nav class="site-navigation">
                
                <div class="search">
                   <a class="search-button" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-search.png" ></a> 
                        <div class="product-search col">
                        <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Products', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>">
                            <button type="submit" class="search-submit"><?php echo esc_attr_x( 'Search', 'submit button' ) ?></button>
                        </form>
                        </div>
                </div>

                <div class="center-col col">
                    <div class="site-branding">
                     <?php if ( has_custom_logo() ) : ?>
					<div class="site-logo"><?php the_custom_logo(); ?></div>
				    <?php else : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				    <?php endif; ?>
                
                    </div><!-- .site-branding -->
                
                <nav class="primary-menu">
                    <?php
                   wp_nav_menu( array(
                       'theme_location' => 'primary-menu',
                       'menu_class' => 'menu',
                       'container' => false,
                    ) );
                    ?>
                </nav>
                </div>
                
                <div class="Wc-menu col">
                    
                 <div class="woo-menu">
                
                <a href="#" class="woo-profile">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-account.png" >
                    </a>
                    <a href="#" class="woo-wishlist">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-favourites.png" >
                    </a>
                     <a href="#" class="woo-cart">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-bag.png" >
                    </a>
                
			</div>
                    
                </div>

                
			</nav><!-- .site-navigation -->
            
		</div><!-- .container -->
        
	</header><!-- .site-header -->
    
    
	<main class="site-main">
        
        <div class="container">
    
            <div class="header-bee">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-beetrail.png" >
            </div>
        </div>