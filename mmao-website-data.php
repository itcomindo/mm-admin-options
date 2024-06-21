<?php

/**
 *
 * Admin Data
 *@package mmao
 */

defined('ABSPATH') || die('No script kiddies please!');

use Carbon_Fields\Container;
use Carbon_Fields\Field;

function mmao_website_data_fields()
{

    return (array(
        //Nama Perusahaan.
        Field::make('text', 'mmao_nama_perusahaan', 'Nama Perusahaan')
            ->set_help_text('Masukan nama Perusahaan misal, PT. Budi Haryono Indonesia, gunakan shortcode <code>[mmao_nama_perusahaan]</code> untuk menampilkan di frontend'),

        //Short Description.
        Field::make('rich_text', 'mmao_short_description_perusahaan', 'Short Description Perusahaan')
            ->set_help_text('Masukan deskripsi singkat Perusahaan misal, Perusahaan yang bergerak di bidang IT. gunakan shortcode <code>[mmao_short_description_perusahaan]</code> untuk menampilkan di frontend'),

        //Alamat Perusahaan.
        Field::make('rich_text', 'mmao_alamat_perusahaan', 'Alamat Perusahaan')
            ->set_help_text('Masukan alamat Perusahaan misal, Jl. Raya Jakarta No. 1. gunakan shortcode <code>[mmao_alamat_perusahaan]</code> untuk menampilkan di frontend'),

        //Nomor Telepon Kantor Perusahaan 1.
        Field::make('text', 'mmao_nomor_telepon_kantor_perusahaan_1', 'Nomor Telepon Kantor Perusahaan 1')
            ->set_help_text('Masukan nomor telepon kantor Perusahaan misal, 021-390-1111. gunakan shortcode <code>[mmao_nomor_telepon_kantor_perusahaan_1]</code> untuk menampilkan di frontend dan gunakan shortcode <code>[mmao_nomor_telepon_kantor_perusahaan_1_link]</code> untuk memasukan nomor telepon ke dalam button atau href link outputnya akan menjadi 628123901111'),

        //Nomor Telepon Kantor Perusahaan 2.
        Field::make('text', 'mmao_nomor_telepon_kantor_perusahaan_2', 'Nomor Telepon Kantor Perusahaan 2')
            ->set_help_text('Masukan nomor telepon kantor Perusahaan misal, 021-390-2222. gunakan shortcode <code>[mmao_nomor_telepon_kantor_perusahaan_2]</code> untuk menampilkan di frontend dan gunakan shortcode <code>[mmao_nomor_telepon_kantor_perusahaan_2_link]</code> untuk memasukan nomor telepon ke dalam button atau href link outputnya akan menjadi 628123902222'),


        //Nomor Telepon HP Perusahaan 1.
        Field::make('text', 'mmao_nomor_hp_perusahaan_1', 'Nomor HP Perusahaan 1')
            ->set_help_text('Masukan nomor HP Perusahaan misal, 0812-3456-1111, gunakan shortcode <code>[mmao_nomor_hp_perusahaan_1]</code> untuk menampilkan di frontend dan gunakan shortcode <code>[mmao_nomor_hp_perusahaan_1_link]</code> untuk memasukan nomor HP ke dalam button atau href link outputnya akan menjadi 6281234561111.'),

        //Nomor Telepon HP Perusahaan 2.
        Field::make('text', 'mmao_nomor_hp_perusahaan_2', 'Nomor HP Perusahaan 2')
            ->set_help_text('Masukan nomor HP Perusahaan misal, 0812-3456-2222. gunakan shortcode <code>[mmao_nomor_hp_perusahaan_2]</code> untuk menampilkan di frontend dan gunakan shortcode <code>[mmao_nomor_hp_perusahaan_2_link]</code> untuk memasukan nomor HP ke dalam button atau href link outputnya akan menjadi 6281234562222.'),

        //Email Perusahaan 1.
        Field::make('text', 'mmao_email_perusahaan_1', 'Email Perusahaan 1')
            ->set_help_text('Masukan email Perusahaan misal, boss@domain.com. gunakan shortcode <code>[mmao_email_perusahaan_1]</code> untuk menampilkan di frontend'),

        //Email Perusahaan 2.
        Field::make('text', 'mmao_email_perusahaan_2', 'Email Perusahaan 2')
            ->set_help_text('Masukan email Perusahaan misal, sales@domain.com. gunakan shortcode <code>[mmao_email_perusahaan_2]</code> untuk menampilkan di frontend'),

        //Website Perusahaan.
        Field::make('text', 'mmao_website_perusahaan', 'Website Perusahaan')
            ->set_help_text('Masukan website Perusahaan misal, https://budiharyono.id. gunakan shortcode <code>[mmao_website_perusahaan]</code> untuk menampilkan di frontend'),




    ));
}
