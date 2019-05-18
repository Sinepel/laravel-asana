<?php

if (!function_exists('asana')) {
    /**
     * Get the asana instance.
     *
     * @return \Sinepel\LaravelAsana\Asana
     */
    function asana()
    {
        return app('sinepel.asana');
    }
}