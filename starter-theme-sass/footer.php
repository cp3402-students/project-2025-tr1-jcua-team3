<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter-theme-sass
 */
?>

<footer id="colophon" class="site-footer">
    <div class="footer-container">
        <!-- Left Column: Logo & Company Info -->
        <div class="footer-left">
            <div class="footer-logo">
                <?php if (has_custom_logo()) { the_custom_logo(); } ?>
            </div>
            
            <div class="footer-info">
                <h4><?php echo esc_html(get_theme_mod('footer_company_name', 'Default Company Name')); ?></h4>
                <p><?php echo esc_html(get_theme_mod('footer_address_line1', 'Default Address Line 1')); ?><br>
                    <?php echo esc_html(get_theme_mod('footer_address_line2', 'Default Address Line 2')); ?></p>
                <p>Phone: <?php echo esc_html(get_theme_mod('footer_phone', '(123) 456-7890')); ?></p>
                <p>Email: <a href="mailto:<?php echo esc_attr(get_theme_mod('footer_email', 'info@company.com')); ?>">
                        <?php echo esc_html(get_theme_mod('footer_email', 'info@company.com')); ?></a></p>
            </div>
        </div>

        <!-- Right Column: Navigation Links -->
        <div class="footer-right">
            <div class="footer-links">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-menu',
                    'container'      => 'nav',
                    'container_class' => 'footer-nav',
                    'menu_class'     => 'footer-menu',
                    'fallback_cb'    => false, // Prevent default menu if no menu is set
                ));
                ?>
            </div>
        </div>
    </div>

    <!-- Bottom Row: Social Media & Copyright -->
    <div class="footer-bottom">
        <div class="footer-copyright">
            <p>&copy; <?php echo date('Y'); ?> <?php echo esc_html(get_theme_mod('footer_company_name', 'Default Company Name')); ?>. All rights reserved.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>