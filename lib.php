<?php
defined('MOODLE_INTERNAL') || die();

/**
 * Charge le SCSS principal du thème parent Boost.
 */
function theme_efi_boost_get_main_scss_content($theme) {
    global $CFG;
    $scss = '';

    // Charge le preset par défaut de Boost
    $filename = !empty($theme->settings->preset) ? $theme->settings->preset : 'default.scss';
    $presetfile = null;

    // Cherche le fichier preset dans Boost
    $fs = get_file_storage();
    $context = context_system::instance();
    $files = $fs->get_area_files($context->id, 'theme_boost', 'preset', 0, 'itemid, filepath, filename', false);
    foreach ($files as $file) {
        if ($file->get_filename() == $filename) {
            $presetfile = $file;
            break;
        }
    }

    // Si pas trouvé, charge le preset par défaut depuis le disque
    if (!$presetfile) {
        $presetpath = $CFG->dirroot . '/theme/boost/scss/preset/' . $filename;
        if (file_exists($presetpath)) {
            $scss .= file_get_contents($presetpath);
        } else {
            // Fallback sur default.scss
            $scss .= file_get_contents($CFG->dirroot . '/theme/boost/scss/preset/default.scss');
        }
    } else {
        $scss .= $presetfile->get_content();
    }

    return $scss;
}

/**
 * Variables SCSS injectées AVANT la compilation (couleurs, typo).
 */
function theme_efi_boost_get_pre_scss($theme) {
    $prescss = '
        $primary:       #1B2A4A;
        $secondary:     #F39C12;
        $success:       #27AE60;
        $info:          #3498DB;
        $warning:       #F39C12;
        $danger:        #E74C3C;
        $body-bg:       #F5F7FA;
        $navbar-bg:     #1B2A4A;
        $drawer-bg:     #FFFFFF;
        $font-family-sans-serif: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    ';
    return $prescss;
}

/**
 * CSS additionnel injecté APRÈS la compilation (nos customisations).
 */
function theme_efi_boost_get_extra_scss($theme) {
    $extrascss = '';
    $customfile = __DIR__ . '/scss/custom.scss';
    if (file_exists($customfile)) {
        $extrascss .= file_get_contents($customfile);
    }
    return $extrascss;
}

/**
 * Retourne le CSS précompilé de Boost comme fallback.
 */
function theme_efi_boost_get_precompiled_css() {
    global $CFG;
    $cssfile = $CFG->dirroot . '/theme/boost/style/moodle.css';
    if (file_exists($cssfile)) {
        return file_get_contents($cssfile);
    }
    return '';
}