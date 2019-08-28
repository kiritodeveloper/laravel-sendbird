<?php
namespace ThinksterMinds\SendBird\Facades;
use Illuminate\Support\Facades\Facade;
class SendBird extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'sendbird';
    }
}