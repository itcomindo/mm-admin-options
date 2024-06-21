<?php

/**
 *
 * Mod Options
 * @package mmao
 */

defined('ABSPATH') || die('No script kiddies please!');

use Carbon_Fields\Container;
use Carbon_Fields\Field;

function mmao_options_field()
{
    $main_container = Container::make('theme_options', 'Admin Options')
        ->add_fields(array(
            ...mmao_plugin_options_fields(),
        ));

    Container::make('theme_options', 'Website Data')
        ->set_page_parent($main_container)
        ->add_fields(array(
            ...mmao_website_data_fields(),
        ));
}
add_action('carbon_fields_register_fields', 'mmao_options_field');
