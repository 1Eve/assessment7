<?php

function assess_theme_styles() {
    wp_register_style('bootstrapcss', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', [], '5.2.3', 'all');

    wp_enqueue_style('bootstrapcss');

    wp_register_script('jsbootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js', [], '5.2.3', false);
    wp_enqueue_script ('jsbootstrap');

    wp_enqueue_style('customcss',  get_template_directory_uri().'/custom/custom.css', [], '1.0.0', 'all');

}

add_action('wp_enqueue_scripts', 'assess_theme_styles');

//ADD HEADER AND FOOTER

add_theme_support('menus');
register_nav_menu('primary', 'Primary Header');
register_nav_menu('secondary', 'Footer Navigation');

//limit login attempts
add_filter('authenticate', 'check_attempted_login', 30, 3);
add_action('wp_login_failed', 'login_failed', 10, 1);

function check_attempted_login($user, $username, $password) {
    $attemptData = get_attempt_data();

    if ($attemptData['tried'] >= 5) {
        $time = calculate_time_remaining($attemptData['start_time'], 180);
        return new WP_Error('too_many_tried', sprintf(__('<strong>ERROR</strong>: You have reached the authentication limit. Please try again after %1$s.'), $time));
    }

    return $user;
}

function login_failed($username) {
    $attemptData = get_attempt_data();

    if ($attemptData['tried'] >= 5) {
        $attemptData['start_time'] = time();
        $attemptData['tried'] = 1;
    } else {
        $attemptData['tried']++;
    }

    update_attempt_data($attemptData);
}

function calculate_time_remaining($startTime, $expiration) {
    $remainingTime = $startTime + $expiration - time();

    if ($remainingTime < 60) {
        return $remainingTime . ' seconds';
    } else {
        $minutes = floor($remainingTime / 60);
        return $minutes . ' minute' . ($minutes > 1 ? 's' : '');
    }
}

function get_attempt_data() {
    $attemptData = get_transient('attempted_login');
    return ($attemptData !== false) ? $attemptData : array('tried' => 0, 'start_time' => 0);
}

function update_attempt_data($attemptData) {
    set_transient('attempted_login', $attemptData, 180);
}
