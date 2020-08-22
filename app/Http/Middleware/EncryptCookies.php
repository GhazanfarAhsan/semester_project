<?php

namespace App\Http\Middleware;


use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Closure;

class EncryptCookies extends Middleware
{
    /**
     * The names of the cookies that should not be encrypted.
     *
     * @var array
     */
    protected $except = [
        //
        'SI_CartID',
    ];



}
