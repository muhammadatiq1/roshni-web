<?php

use App\Models\SiteContent;
use Illuminate\Support\Facades\Cache;

if (!function_exists('site_content')) {
    /**
     * Get the dynamic site content for a given key.
     *
     * @param string $key
     * @param string $default
     * @return string
     */
    function site_content($key, $default = '')
    {
        // Cache the content indefinitely until an admin updates it
        return Cache::rememberForever('site_content_' . $key, function () use ($key, $default) {
            $content = SiteContent::where('key', $key)->first();
            return $content ? $content->content : $default;
        });
    }
}
