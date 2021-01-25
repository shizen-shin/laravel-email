<?php

if (! function_exists('greeting')) {
    /**
     * s3のurlをcloudfrontのurlに変換する
     *
     * @param  string  $name
     * @return string
     */
    function greeting(string $name)
    {
        return "hello ".$name."!!!";
    }
}