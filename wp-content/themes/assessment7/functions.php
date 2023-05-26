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
function check_attempted_login($user, $username, $password) {
    if (get_transient('attempted_login')) {
        $datas = get_transient('attempted_login');

        if ($datas['tried'] >= 3) {
            $until = get_option('_transient_timeout_attempted_login');
            $time = time_to_go($until);

            return new WP_Error('too_many_tried', sprintf(__('<strong>ERROR</strong>: You have reached the authentication limit, please try again after %1$s'), $time));
        }
    }

    return $user;
}

add_filter('authenticate', 'check_attempted_login', 30, 3);

function login_failed($username) {
    if (get_transient('attempted_login')) {
        $datas = get_transient('attempted_login');
        $datas['tried']++;

        if ($datas['tried'] <= 3) {
            set_transient('attempted_login', $datas, 300);
        } else {
            delete_transient('attempted_login');
        }
    } else {
        $datas = array('tried' => 1);
        set_transient('attempted_login', $datas, 300);
    }
}

add_action('wp_login_failed', 'login_failed', 10, 1);

function time_to_go($timestamp) {
    $periods = array(
        "second",
        "minute",
        "hour",
        "day",
        "week",
        "month",
        "year"
    );

    $lengths = array(
        "60",
        "60",
        "24",
        "7",
        "4.35",
        "12"
    );

    $current_timestamp = time();
    $difference = abs($current_timestamp - $timestamp);

    for ($i = 0; $difference >= $lengths[$i] && $i < count($lengths) - 1; $i++) {
        $difference /= $lengths[$i];
    }

    $difference = round($difference);

    if (isset($difference)) {
        if ($difference != 1) {
            $periods[$i] .= "s";
        }
        $output = "$difference $periods[$i]";
        return $output;
    }
}
