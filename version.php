<?php
defined('MOODLE_INTERNAL') || die();

$plugin->component = 'theme_efi_boost';
$plugin->version = 2026052800;
$plugin->requires = 2025042200;        // Moodle 5.0
$plugin->maturity = MATURITY_STABLE;
$plugin->release = '1.0.0';
$plugin->dependencies = [
    'theme_boost' => 2025042200
];