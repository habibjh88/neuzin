<?php
/**
 * @author  RadiusTheme
 * @since   1.0
 * @version 1.0
 */

add_action('tgmpa_register', 'neuzin_register_required_plugins');
function neuzin_register_required_plugins()
{
    $plugins = array(
        // Bundled
        array(
            'name'         => 'Neuzin Core',
            'slug'         => 'neuzin-core',
            'source'       => 'neuzin-core.zip',
            'required'     =>  true,
            'external_url' => 'http://radiustheme.com',
            'version'      => '2.0.0'
        ),
        array(
            'name'         => 'RT Framework',
            'slug'         => 'rt-framework',
            'source'       => 'rt-framework.zip',
            'required'     =>  true,
            'external_url' => 'http://radiustheme.com',
            'version'      => '2.0'
        ),
        array(
            'name'         => 'RT Demo Importer',
            'slug'         => 'rt-demo-importer',
            'source'       => 'rt-demo-importer.zip',
            'required'     =>  true,
            'external_url' => 'http://radiustheme.com',
            'version'      => '6.0.1'
        ),
        array(
            'name'         => 'Slider Revolution',
            'slug'         => 'revslider',
            'source'       => 'revslider.zip',
            'required'     => false,
            'external_url' => 'https://revolution.themepunch.com',
            'version'      => '6.6.11'
        ),
        // Repository
        array(
                'name'     => 'Breadcrumb NavXT',
                'slug'     => 'breadcrumb-navxt',
                'required' => true,
            ),
        array(
            'name'     => 'Elementor Page Builder',
            'slug'     => 'elementor',
            'required' => true,
        ),
        array(
            'name'     => 'Redux Framework',
            'slug'     => 'redux-framework',
            'required' => true,
        ),
        array(
            'name'     => 'WooCommerce',
            'slug'     => 'woocommerce',
            'required' => false,
        ),
        array(
            'name'     => 'YITH WooCommerce Compare',
            'slug'     => 'yith-woocommerce-compare',
            'required' => false,
        ),
        array(
            'name'     => 'YITH WooCommerce Wishlist',
            'slug'     => 'yith-woocommerce-wishlist',
            'required' => false,
        ),
        array(
            'name'     => 'Contact Form 7',
            'slug'     => 'contact-form-7',
            'required' => false,
        ),
        array(
            'name'     => 'MailChimp for WordPress',
            'slug'     => 'mailchimp-for-wp',
            'required' => false,
        ),
    );

    $config = array(
        'id'           => 'neuzin',                     // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => NEUZIN_INC_DIR . 'plugins/',           // Default absolute path to bundled plugins.
        'menu'         => 'neuzin-install-plugins',     // Menu slug.
        'has_notices'  => true,                         // Show admin notices or not.
        'dismissable'  => true,                         // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                           // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                        // Automatically activate plugins after installation or not.
        'message'      => '',                           // Message to output right before the plugins table.
    );

    tgmpa($plugins, $config);
}
