<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rathi
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>
<?php if (!is_search()) { $shopclass = "woocommerce-shopt";  }?>
<body <?php body_class($shopclass); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'rathi'); ?></a>

        <header>
            <div class="header-main-sec">
                <div class="container">
                    <div class="site-header">
                        <nav class="navigation">
                            <span class="navTrigger">
                                <i></i>
                                <i></i>
                                <i></i>
                            </span>
                            <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'menu1',
                                    'container' => false,
                                    'menu_class' => 'menu-list menu1',
                                ));
                            ?>

                            <div class="site-logo">
                                <a href="https://project-in-progress.com/rathi/">
                                    <!-- <img src="<?php echo get_template_directory_uri() . '/assets/images/desktop-logo.png'; ?>"
                                        alt="kambi-logo-main"></a> -->
                                        <?php
if (function_exists('the_custom_logo')) {
    the_custom_logo();
}
?>

                            </div>


                            <div class="cart-icon-sec">
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'menu2',
                                    'container' => false,
                                    'menu_class' => 'menu-list menu2',
                                ));
                                ?>
                                <ul class="cart-icon-list">
                                    <li class="cart-icon-item">
                                        <?php echo do_shortcode('[fibosearch]'); ?>
                                    </li>
                                    <li class="cart-icon-item">
                                        <a href="<?php echo esc_url( home_url( '/my-account' ) ); ?>"><img
                                                src="<?php echo get_template_directory_uri() . '/assets/images/user.png'; ?>"
                                                alt="User Icon"></a>
                                    </li>
                                    <li class="cart-icon-item">
                                        <a href="<?php echo esc_url(home_url('/wishlist/')); ?>"><img
                                                src="<?php echo get_template_directory_uri() . '/assets/images/like.png'; ?>"
                                                alt="Wishlist Icon"></a>
                                    </li>
                                    <li class="quote-icon ">
                                    <a href="<?php echo esc_url( home_url( '/add-to-quote-product-list/' ) ); ?>"><img
                                                src="<?php echo get_template_directory_uri() . '/assets/images/quote.png'; ?>"
                                                alt="User Icon"></a>
                                    </li>
                                    <li class="cart-icon-item">
                                        <?php echo do_shortcode('[xoo_wsc_cart]');?>
                                    </li>
                                   
                                </ul>

                            </div>
                        </nav>
                        <!-- Mobile Menu -->
                    </div>
                    <div class="mobile-menu">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'mobile_menu',
                            'container' => false,
                            'menu_class' => 'mobile-menu-list',
                        ));
                        ?>
                        <div class="footer-main header-shortcode-copy">
                            <div class="contact-details">
                                <?php dynamic_sidebar('footer-3'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>