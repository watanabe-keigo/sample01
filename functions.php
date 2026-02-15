<?php

function theme_maintenance_mode() {
    if (!current_user_can('edit_themes')) {
        wp_die('メンテナンス中です。しばらくお待ちください。','メンテナンス中');
    }
}
add_action('template_redirect', 'theme_maintenance_mode');
