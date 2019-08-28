<?php
if (!function_exists('sendbird')) {
    function sendbird()
    {
        return app(\ThinksterMinds\SendBird\Macros\SendBirdMacro::class);
    }
}
if (!function_exists('rameez')) {
    function rameez()
    {
        return 'rameez from helpers';
    }
}
