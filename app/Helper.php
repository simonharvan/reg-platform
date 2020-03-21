<?php

if (!function_exists('makeReplacements')) {
    /**
     * Make the place-holder replacements on a text.
     *
     * @param  string  $text
     * @param  array   $replace
     * @return string
     */
    function makeReplacements($text, array $replace)
    {

        foreach ($replace as $key => $value)
        {
            $text = str_replace(':'.$key, $value, $text);
        }

        return $text;
    }
}
if (!function_exists('formatDate')) {
    /**
     * Format 0000-00-00 00:00:00 -> 00. 00. 0000
     *
     * @param string $text
     * @return string
     */
    function formatDate($date)
    {
        return date("d. m. Y", strtotime($date));
    }
}