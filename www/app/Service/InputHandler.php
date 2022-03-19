<?php

namespace App\Service;

class InputHandler
{
    /**
     * Get the value of a specific key of the GET super-global, or a
     * default value if the variable is not set / is NULL.
     */
    public static function get(string $key, string $default = '')
    {
        return($_GET[$key] ?? $default);
    }

    /**
     * Post the value of a specific key of the POST super-global, or a
     * default value if the variable is not set / is NULL.
     */
    public static function post(?string $key, string $default = '')
    {
        return($_POST[$key] ?? $default);
    }
}
