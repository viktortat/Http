<?php namespace JoshHornby\Http;

use Illuminate\Support\Facades\Facade;

class Http extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'http';
    }

}
