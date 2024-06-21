<?php

/**
 *
 * Plugin Name: MM Admin Options
 * Description: This plugin is for admin options
 * Version: 1.0
 * Author: Budi Haryono
 * Author URI: https://budiharyono.id
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: mmao
 * Plugin URI: https://budiharyono.id
 */


/**
 * MasmonsThemeFunction
 *
 * @param array $html_tags_allowed Array of allowed HTML tags.
 */
function mmao($html_tags_allowed = array())
{
    if (!is_array($html_tags_allowed)) {
        return array(); // Kembalikan array kosong jika input tidak valid.
    }
    $pass = array();

    // Definisikan atribut untuk SVG.
    $svg_args = array(
        'class'             => true,
        'aria-hidden'       => true,
        'aria-labelledby'   => true,
        'role'              => true,
        'xmlns'             => true,
        'width'             => true,
        'height'            => true,
        'viewBox'           => true,
        'version'           => true,
        'xmlns:xlink'       => true,
        'x'                 => true,
        'y'                 => true,
        'enable-background' => true,
        'xml:space'         => true,
        'metadata'          => true,
        'style'             => true,
        'viewbox'           => true,
        'path'              => true,
        'fill'              => true,
        'fill-rule'         => true,
        'clip-rule'         => true,
        'd'                 => true,
    );

    foreach ($html_tags_allowed as $tag) {
        $attributes = array(
            'class' => array(),
            'id'    => array(), // Tambahkan atribut id.
        );

        // Tambahkan atribut tambahan untuk tag spesifik.
        if ('img' === $tag) {
            $attributes['src']    = array();
            $attributes['alt']    = array();
            $attributes['title']  = array();
            $attributes['width']  = array();
            $attributes['height'] = array();
        }

        if ('a' === $tag) {
            $attributes['href']   = array();
            $attributes['target'] = array();
            $attributes['rel']    = array();
            $attributes['style']  = array();
            $attributes['class']  = array();
        }

        // Jika tag adalah SVG, gunakan atribut yang telah didefinisikan dalam $svg_args.
        if ('svg' === $tag) {
            $attributes = $svg_args;
        }

        // iframe.
        if ('iframe' === $tag) {
            $attributes['src']             = true;
            $attributes['width']           = true;
            $attributes['height']          = true;
            $attributes['frameborder']     = true;
            $attributes['allowfullscreen'] = true;
        }

        // Jika tag adalah div, tambahkan atribut data-xxxx dengan validasi nilai hex.
        if ('div' === $tag) {
            $attributes = array_merge(
                $attributes,
                array(
                    '/^data-[a-zA-Z0-9\-]*$/' => array(
                        'pattern' => '/^#[a-fA-F0-9]{6}$/',
                    ),
                )
            );
        }

        $pass[$tag] = $attributes;
    }

    // Tambahkan elemen lain yang diperlukan untuk SVG.
    $pass['g']     = array('fill' => true);
    $pass['title'] = array('title' => true);
    $pass['path']  = array(
        'd'    => true,
        'fill' => true,
    );

    return $pass;
}



defined('ABSPATH') || die('No script kiddies please!');

// Define Plugin Path.
define('MMAO_PATH', plugin_dir_path(__FILE__));

// Define Plugin URL.
define('MMAO_URL', plugin_dir_url(__FILE__));

/**
 * Check CF Loaded
 */
function mmao_cf()
{
    if (!class_exists('\Carbon_Fields\Carbon_Fields')) {
        require_once plugin_dir_path(__FILE__) . 'vendor/autoload.php';
        \Carbon_Fields\Carbon_Fields::boot();
    }
}

/**
 * MCS CF Loaded
 */
function mmao_cf_loader()
{
    if (!function_exists('carbon_fields_boot_plugin')) {
        mmao_cf();
    }
}
add_action('plugins_loaded', 'mmao_cf_loader');


require_once MMAO_PATH . 'mmao-options.php';
require_once MMAO_PATH . 'mmao-plugin-options.php';
require_once MMAO_PATH . 'mmao-website-data.php';
require_once MMAO_PATH . 'mmao-shortcode.php';
require_once MMAO_PATH . 'mmao-cta.php';
