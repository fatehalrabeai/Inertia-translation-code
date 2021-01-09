<?php

if (!function_exists('DummyFunction')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function translations($json)
    {
        if(!file_exists($json)) {
            return [];
        }
        return json_decode(file_get_contents($json), true);
    }
}
