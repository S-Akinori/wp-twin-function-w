<?php

include TEMPLATEPATH . '/functions/generate-upload-image-tag.php';
include TEMPLATEPATH . '/settings/top-settings.php';
include TEMPLATEPATH . '/settings/company-settings.php';
include TEMPLATEPATH . '/settings/custom-post-type.php';

add_theme_support('post-thumbnails');

function mytheme_setup() {
    // ナビゲーションメニューをサポート
    register_nav_menus(array(
        'header' => 'ヘッダーメニュー',
        'footer' => 'フッターメニュー'
    ));
}
add_action('after_setup_theme', 'mytheme_setup');