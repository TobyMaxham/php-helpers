<?php

if (!function_exists('collect')) {

    /**
     * @param $value
     * @return \TobyMaxham\Helper\Collection
     */
    function collect($value)
    {
        return new \TobyMaxham\Helper\Collection($value);
    }
}
