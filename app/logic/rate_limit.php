<?php

function rate_limit_once_every($key, $cooldown = 10) {
    $ip = $_SERVER['REMOTE_ADDR'];
    $hash = md5($ip . $key);
    $file = sys_get_temp_dir() . "/rl_$hash";

    $now = time();

    if (file_exists($file)) {
        $last = (int) file_get_contents($file);

        // If last request is too recent → block
        if ($now - $last < $cooldown) {
            http_response_code(429);
            echo "Too many requests. Please wait a few seconds.";
            exit;
        }
    }

    // Update timestamp
    file_put_contents($file, $now);
}
