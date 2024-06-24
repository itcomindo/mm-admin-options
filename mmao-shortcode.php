<?php

/**
 *
 * Shortcode
 *@package mmao
 */

defined('ABSPATH') || die('No script kiddies please!');


/**
 * Shortcode Nama Perusahaan
 */
function mmao_nama_perusahaan()
{
    $mmao_nama_perusahaan = carbon_get_theme_option('mmao_nama_perusahaan');
    if ($mmao_nama_perusahaan) {
        return $mmao_nama_perusahaan;
    } else {
        return 'Nama Perusahaan Belum Diatur';
    }
}
add_shortcode('mmao_nama_perusahaan', 'mmao_nama_perusahaan');


/**
 * Shortcode Short Description Perusahaan
 */
function mmao_short_description_perusahaan()
{
    $short_description_perusahaan = wpautop(carbon_get_theme_option('mmao_short_description_perusahaan'));
    if ($short_description_perusahaan) {
        return $short_description_perusahaan;
    } else {
        return 'Short Description Perusahaan Belum Diatur';
    }
}
add_shortcode('mmao_short_description_perusahaan', 'mmao_short_description_perusahaan');

/**
 * Alamat Perusahaan
 */
function mmao_alamat_perusahaan()
{
    $alamat_perusahaan = wpautop(carbon_get_theme_option('mmao_alamat_perusahaan'));
    if ($alamat_perusahaan) {
        return $alamat_perusahaan;
    } else {
        return 'Alamat Perusahaan Belum Diatur';
    }
}
add_shortcode('mmao_alamat_perusahaan', 'mmao_alamat_perusahaan');

/**
 * Nomor Telepon Kantor Perusahaan 1
 */
function mmao_nomor_telepon_kantor_perusahaan_1()
{
    $nomor_telepon_kantor_perusahaan_1 = carbon_get_theme_option('mmao_nomor_telepon_kantor_perusahaan_1');
    if ($nomor_telepon_kantor_perusahaan_1) {
        return $nomor_telepon_kantor_perusahaan_1;
    } else {
        return 'Nomor Telepon Kantor Perusahaan 1 Belum Diatur';
    }
}
add_shortcode('mmao_nomor_telepon_kantor_perusahaan_1', 'mmao_nomor_telepon_kantor_perusahaan_1');


/**
 * Nomor Telepon Kantor Perusahaan 1 Link
 */
function mmao_nomor_telepon_kantor_perusahaan_1_link()
{
    $nomor_telepon_kantor_perusahaan_1 = carbon_get_theme_option('mmao_nomor_telepon_kantor_perusahaan_1');
    if ($nomor_telepon_kantor_perusahaan_1) {
        $nomor_telepon_kantor_perusahaan_1 = substr_replace($nomor_telepon_kantor_perusahaan_1, '62', 0, 1);
        return 'tel:+' . str_replace('-', '', $nomor_telepon_kantor_perusahaan_1);
    } else {
        return 'Nomor Telepon Kantor Perusahaan 1 Belum Diatur';
    }
}
add_shortcode('mmao_nomor_telepon_kantor_perusahaan_1_link', 'mmao_nomor_telepon_kantor_perusahaan_1_link');

/**
 * Nomor Telepon Kantor Perusahaan 2
 */
function mmao_nomor_telepon_kantor_perusahaan_2()
{
    $nomor_telepon_kantor_perusahaan_2 = carbon_get_theme_option('mmao_nomor_telepon_kantor_perusahaan_2');
    if ($nomor_telepon_kantor_perusahaan_2) {
        return $nomor_telepon_kantor_perusahaan_2;
    } else {
        return 'Nomor Telepon Kantor Perusahaan 2 Belum Diatur';
    }
}
add_shortcode('mmao_nomor_telepon_kantor_perusahaan_2', 'mmao_nomor_telepon_kantor_perusahaan_2');

/**
 * Nomor Telepon Kantor Perusahaan 2 Link
 */
function mmao_nomor_telepon_kantor_perusahaan_2_link()
{
    $nomor_telepon_kantor_perusahaan_2 = carbon_get_theme_option('mmao_nomor_telepon_kantor_perusahaan_2');
    if ($nomor_telepon_kantor_perusahaan_2) {
        $nomor_telepon_kantor_perusahaan_2 = substr_replace($nomor_telepon_kantor_perusahaan_2, '62', 0, 1);
        return str_replace('-', '', $nomor_telepon_kantor_perusahaan_2);
    } else {
        return 'Nomor Telepon Kantor Perusahaan 2 Belum Diatur';
    }
}
add_shortcode('mmao_nomor_telepon_kantor_perusahaan_2_link', 'mmao_nomor_telepon_kantor_perusahaan_2_link');

/**
 * Nomor Telepon HP Perusahaan 1
 */
function mmao_nomor_hp_perusahaan_1()
{
    $nomor_hp_perusahaan_1 = carbon_get_theme_option('mmao_nomor_hp_perusahaan_1');
    if ($nomor_hp_perusahaan_1) {
        return $nomor_hp_perusahaan_1;
    } else {
        return 'Nomor HP Perusahaan 1 Belum Diatur';
    }
}
add_shortcode('mmao_nomor_hp_perusahaan_1', 'mmao_nomor_hp_perusahaan_1');

/**
 * Nomor Telepon HP Perusahaan 1 Link
 */
function mmao_nomor_hp_perusahaan_1_link()
{
    $nomor_hp_perusahaan_1 = carbon_get_theme_option('mmao_nomor_hp_perusahaan_1');
    if ($nomor_hp_perusahaan_1) {
        $nomor_hp_perusahaan_1 = substr_replace($nomor_hp_perusahaan_1, '62', 0, 1);
        return str_replace('-', '', $nomor_hp_perusahaan_1);
    } else {
        return 'Nomor HP Perusahaan 1 Belum Diatur';
    }
}
add_shortcode('mmao_nomor_hp_perusahaan_1_link', 'mmao_nomor_hp_perusahaan_1_link');


/**
 * Nomor Telepon HP Perusahaan 2
 */
function mmao_nomor_hp_perusahaan_2()
{
    $nomor_hp_perusahaan_2 = carbon_get_theme_option('mmao_nomor_hp_perusahaan_2');
    if ($nomor_hp_perusahaan_2) {
        return $nomor_hp_perusahaan_2;
    } else {
        return 'Nomor HP Perusahaan 2 Belum Diatur';
    }
}
add_shortcode('mmao_nomor_hp_perusahaan_2', 'mmao_nomor_hp_perusahaan_2');

/**
 * Nomor Telepon HP Perusahaan 2 Link
 */
function mmao_nomor_hp_perusahaan_2_link()
{
    $nomor_hp_perusahaan_2 = carbon_get_theme_option('mmao_nomor_hp_perusahaan_2');
    if ($nomor_hp_perusahaan_2) {
        $nomor_hp_perusahaan_2 = substr_replace($nomor_hp_perusahaan_2, '62', 0, 1);
        return str_replace('-', '', $nomor_hp_perusahaan_2);
    } else {
        return 'Nomor HP Perusahaan 2 Belum Diatur';
    }
}
add_shortcode('mmao_nomor_hp_perusahaan_2_link', 'mmao_nomor_hp_perusahaan_2_link');


/**
 * Email Perusahaan 1
 */
function mmao_email_perusahaan_1()
{
    $email_perusahaan_1 = carbon_get_theme_option('mmao_email_perusahaan_1');
    if ($email_perusahaan_1) {
        return $email_perusahaan_1;
    } else {
        return 'Email Perusahaan 1 Belum Diatur';
    }
}
add_shortcode('mmao_email_perusahaan_1', 'mmao_email_perusahaan_1');

/**
 * Email Perusahaan 2
 */
function mmao_email_perusahaan_2()
{
    $email_perusahaan_2 = carbon_get_theme_option('mmao_email_perusahaan_2');
    if ($email_perusahaan_2) {
        return $email_perusahaan_2;
    } else {
        return 'Email Perusahaan 2 Belum Diatur';
    }
}
add_shortcode('mmao_email_perusahaan_2', 'mmao_email_perusahaan_2');

/**
 * Website Perusahaan
 */
function mmao_website_perusahaan()
{
    $website_perusahaan = carbon_get_theme_option('mmao_website_perusahaan');
    if ($website_perusahaan) {
        return $website_perusahaan;
    } else {
        return 'Website Perusahaan Belum Diatur';
    }
}
add_shortcode('mmao_website_perusahaan', 'mmao_website_perusahaan');



/**
 * Get Auto Featured Image
 */

function mmao_auto_featured_image()
{
    $mmao_enable_auto_fim = carbon_get_theme_option('mmao_enable_auto_fim');

    if ($mmao_enable_auto_fim) {
        $upload_dir = wp_upload_dir();
        $dirname   = carbon_get_theme_option('mmao_fim_directory');
        $doc_path  = $upload_dir['basedir'] . '/' . $dirname;
        $doc_url   = $upload_dir['baseurl'] . '/' . $dirname;

        $files = glob($doc_path . '/*.{jpg,png,webp}', GLOB_BRACE);

        if ($files) {
            $random_file = $files[array_rand($files)];
            $file_name   = basename($random_file);
            return $doc_url . '/' . $file_name;
        }
    }
}


/**
 * Get Auto Featured Image
 */
function mmao_image_shorcode()
{
    $mmao_image_shortcode = carbon_get_theme_option('mmao_enable_shortcode_image');

    if ($mmao_image_shortcode) {
        $upload_dir = wp_upload_dir();


        $service = get_field('service');
        if ('Mesin Cuci' === $service) {
            $dirname = 'mesin-cuci';
        } elseif ('Kompor' === $service) {
            $dirname = 'kompor';
        } else {
            $dirname   = carbon_get_theme_option('mmao_shortcode_image_directory');
            $dirname = $dirname;
        }



        $doc_path  = $upload_dir['basedir'] . '/' . $dirname;
        $doc_url   = $upload_dir['baseurl'] . '/' . $dirname;

        $files = glob($doc_path . '/*.{jpg,png,webp}', GLOB_BRACE);

        if ($files) {
            $random_file = $files[array_rand($files)];
            $file_name   = basename($random_file);
            $image = $doc_url . '/' . $file_name;

            // Array alternatif alt dan title
            $title_options = array(
                get_the_title(),
                'photo',
                'gambar',
                'screenshot',
                'photo ' . get_the_title(),
                'gambar ' . get_the_title()
            );

            // Pilih alt dan title secara acak
            $random_title_alt = $title_options[array_rand($title_options)];

            $image_html = '<img class="mmao-find-this mmao-auto-image" src="' . $image . '" title="' . $random_title_alt . '" alt="' . $random_title_alt . '" decoding="async">';
            return $image_html;
        }
    }

    return '';
}
add_shortcode('image', 'mmao_image_shorcode');
