<?php

/**
 *
 * Plugin Options.
 *@package mmao
 */

defined('ABSPATH') || die('No script kiddies please!');

use Carbon_Fields\Container;
use Carbon_Fields\Field;

function mmao_plugin_options_fields()
{
    return (array(
        Field::make('separator', 'mmao_shortcode_sep', 'Options')
            ->set_classes('mmao_sep'),

        Field::make('checkbox', 'mmao_enable_cta_floating', 'Enable CTA Floating')
            ->set_option_value('yes')
            ->set_default_value(false)
            ->set_help_text('Enable CTA Floating di website'),

        //CTA button.
        Field::make('complex', 'mmao_cta', 'Call to Action Button')
            ->set_max(4)
            ->set_layout('tabbed-horizontal')
            ->add_fields(array(
                Field::make('select', 'mmao_cta_type', 'Type')
                    ->set_options(array(
                        'whatsapp' => 'Whatsapp',
                        'telegram' => 'Telegram',
                        'phone' => 'Phone',
                        'email' => 'Email',
                    ))
                    ->set_default_value('whatsapp'),


                //Whatsapp number if type is whatsapp.
                Field::make('text', 'mmao_cta_whatsapp_number', 'Whatsapp Number')
                    ->set_help_text('Masukan nomor whatsapp contoh: 6281234567890')
                    ->set_conditional_logic(array(
                        array(
                            'field' => 'mmao_cta_type',
                            'value' => 'whatsapp',
                        ),
                    )),
                //Whatsapp text if type is whatsapp.
                Field::make('text', 'mmao_cta_whatsapp_text', 'Whatsapp Text')
                    ->set_help_text('Masukan pesan whatsapp')
                    ->set_conditional_logic(array(
                        array(
                            'field' => 'mmao_cta_type',
                            'value' => 'whatsapp',
                        ),
                    )),

                //Telegram usernam if type is telegram.
                Field::make('text', 'mmao_cta_telegram_username', 'Telegram Username')
                    ->set_help_text('Masukan username telegram contoh: budi_haryono tanpa @')
                    ->set_conditional_logic(array(
                        array(
                            'field' => 'mmao_cta_type',
                            'value' => 'telegram',
                        ),
                    )),

                //Phone number if type is phone.
                Field::make('text', 'mmao_cta_phone_number', 'Phone Number')
                    ->set_help_text('Masukan nomor telepon contoh: 6281234567890')
                    ->set_conditional_logic(array(
                        array(
                            'field' => 'mmao_cta_type',
                            'value' => 'phone',
                        ),
                    )),

                //Email if type is email.
                Field::make('text', 'mmao_cta_email', 'Email')
                    ->set_help_text('Masukan email contoh:email#domain.com')
                    ->set_conditional_logic(array(
                        array(
                            'field' => 'mmao_cta_type',
                            'value' => 'email',
                        ),
                    )),



            ))
            ->set_layout('tabbed-horizontal')
            ->set_header_template('
                <% if (mmao_cta_type) { %>
                    <%- mmao_cta_type %>
                <% } else { %>
                    Type
                <% } %>
            '),


        Field::make('separator', 'mmao_fim_options', 'Image Options')
            ->set_classes('mmao-sep'),

        Field::make('checkbox', 'mmao_enable_auto_fim', 'Enable Auto Featured Image')
            ->set_option_value('yes')
            ->set_default_value(true)
            ->set_help_text('Aktifkan auto featured image menggunakan shortcode <code>[mmao_auto_fim]</code>'),

        //Directory Feautured Image if mmao_enable_auto_fim is enabled.
        Field::make('text', 'mmao_fim_directory', 'Directory Featured Image')
            ->set_conditional_logic(array(
                array(
                    'field' => 'mmao_enable_auto_fim',
                    'value' => true,
                ),
            ))
            ->set_help_text('Masukan nama directory untuk featured image, contoh: fim. Note: Folder harus ada di dalam folder uploads dan file image harus .jpg, .png atau .webp.'),

        //Enable shortcode image.
        Field::make('checkbox', 'mmao_enable_shortcode_image', 'Enable Shortcode Image')
            ->set_option_value('yes')
            ->set_default_value(true)
            ->set_help_text('Aktifkan ini untuk menampilkan image didalam post menggunakan shortcode <code>[image]</code>'),

        //Directory shortcode image if mmao_enable_shortcode_image is enabled.
        Field::make('text', 'mmao_shortcode_image_directory', 'Directory Shortcode Image')
            ->set_conditional_logic(array(
                array(
                    'field' => 'mmao_enable_shortcode_image',
                    'value' => true,
                ),
            ))
            ->set_help_text('Masukan nama directory untuk shortcode image, contoh: image. Note: Folder harus ada di dalam folder uploads dan file image harus .jpg, .png atau .webp.'),



    ));
}
