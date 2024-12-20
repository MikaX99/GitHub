<?php

// app/Helpers/info_helper.php
use CodeIgniter\CodeIgniter;

/**
 * Returns CodeIgniter's version.
 */
function lang_landing($lang): array
{
    $data['set_lang'] = $lang;

    //Array Language
    //Custom Mochamad Ferdy Darikehidupan
    //ID = Indonesia
    //EN = Inggris
    $language = ([
        'header_whatsapp_contact_us' => [
            'id' => 'Hubungi Kami',
            'en' => 'Contact Us'
        ],
        'header_theme_mode' => [
            'id' => 'Mode Tema',
            'en' => 'Theme Mode'
        ],
        'header_theme_mode_name_terang' => [
            'id' => 'Terang',
            'en' => 'Light'
        ],
        'header_theme_mode_name_gelap' => [
            'id' => 'Gelap',
            'en' => 'Dark'
        ],
        'header_nav_services' => [
            'id' => 'Layanan',
            'en' => 'Services'
        ],
        'header_nav_services' => [
            'id' => 'Layanan',
            'en' => 'Services'
        ],
        'header_nav_benefit' => [
            'id' => 'Benefit',
            'en' => 'Benefit'
        ],
        'header_nav_client' => [
            'id' => 'Klien',
            'en' => 'Client'
        ],
        'hero_slogan' => [
            'id' => 'Membangun Masa Depan Digital Anda <br/> Jaringan, Perangkat & Aplikasi',
            'en' => 'Building Your Digital Future <br/> Networks, Devices & Applications'
        ],
        'hero_slogan_secondary' => [
            'id' => 'Konsultan IT Era Digital Satu Solusi untuk Dukungan Kebutuhan Teknologi',
            'en' => 'Digital Era IT Consultant One Solution for <br/> Supporting Technology Needs'
        ],
        'service' => [
            'id' => 'Layanan',
            'en' => 'Services'
        ],
        'our_service' => [
            'id' => 'Layanan Kami',
            'en' => 'Our Services'
        ],
        'our_service_network' => [
            'id' => 'Jaringan',
            'en' => 'Network'
        ],
        'our_service_infrastructure' => [
            'id' => 'Infrastruktur',
            'en' => 'Infrastructure'
        ],
        'our_service_build_website' => [
            'id' => 'Website Aplikasi',
            'en' => 'Web Application'
        ],
        'our_service_it_disaster' => [
            'id' => 'Pemulihan Bencana Teknologi',
            'en' => 'IT Disaster Recovery'
        ],
        'our_service_network_desc' => [
            'id' => 'Menyediakan koneksi internet yang cepat, stabil, dan aman untuk memungkinkan akses online yang lancar dan efisien bagi organisasi atau individu.',
            'en' => 'Provides fast, stable and secure internet connections to enable smooth and efficient online access for organizations or individuals.'
        ],
        'our_service_infrastructure_desc' => [
            'id' => 'Mencakup perencanaan, pembangunan, dan pemeliharaan elemen teknologi yang mendasar untuk mendukung operasi bisnis, seperti jaringan, server, penyimpanan data, dan layanan cloud.',
            'en' => 'Includes planning, building, and maintaining fundamental technology elements to support business operations, such as networks, servers, data storage, and cloud services.'
        ],
        'our_service_build_website_desc' => [
            'id' => 'Pembuatan website kami mencakup desain, pengkodean, pengujian, dan peluncuran solusi perangkat lunak yang disesuaikan dengan kebutuhan Anda (Full Custom).',
            'en' => 'Our website creation includes design, coding, testing, and launching a software solution tailored to your needs (Full Custom).'
        ],
        'our_service_it_disaster_desc' => [
            'id' => 'Mencakup berbagai tindakan dan teknologi untuk mendukung pemulihan cepat dan efisien. Rencana ini biasanya mencakup penilaian risiko, identifikasi aset kritis, dan strategi cadangan serta pemulihan data.',
            'en' => 'Includes a range of measures and technologies to support rapid and efficient recovery. This plan typically includes a risk assessment, identification of critical assets, and data backup and recovery strategies.'
        ],
        'our_client' => [
            'id' => 'Klien Kami',
            'en' => 'Our Client'
        ],
        'our_client_testimonials' => [
            'id' => 'Testimoni Klien Kami',
            'en' => 'Our Client Testimonials'
        ],
        'language_mode' => [
            'id' => 'Bahasa',
            'en' => 'Language'
        ]
    ]);

    $data['lang'] = $language;

    return $data;
}
