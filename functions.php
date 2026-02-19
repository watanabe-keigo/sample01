<?php

// メンテナンスモード
function theme_maintenance_mode() {
    if (!current_user_can('edit_themes')) {
        wp_die('メンテナンス中です。しばらくお待ちください。','メンテナンス中');
    }
}
add_action('template_redirect', 'theme_maintenance_mode');

// お知らせ：月別一覧
add_action('init', function () {
    add_rewrite_rule(
        '^information/([0-9]{4})/([0-9]{2})/?$',
        'index.php?post_type=information&year=$matches[1]&monthnum=$matches[2]',
        'top'
    );
});