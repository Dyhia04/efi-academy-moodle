<?php
defined('MOODLE_INTERNAL') || die();

$THEME->name = 'efi_boost';
$THEME->parents = ['boost'];
$THEME->sheets = [];
$THEME->editor_sheets = [];
$THEME->usefallback = true;
$THEME->scss = function($theme) {
    return theme_efi_boost_get_main_scss_content($theme);
};
$THEME->prescsscallback = 'theme_efi_boost_get_pre_scss';
$THEME->extrascsscallback = 'theme_efi_boost_get_extra_scss';
$THEME->precompiledcsscallback = 'theme_efi_boost_get_precompiled_css';
$THEME->yuicssmodules = [];
$THEME->rendererfactory = 'theme_overridden_renderer_factory';
$THEME->requiredblocks = '';