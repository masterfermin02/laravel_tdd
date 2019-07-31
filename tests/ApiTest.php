<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 5/7/2018
 * Time: 11:46 AM
 */

namespace Tests;


abstract class ApiTest extends TestCase
{
    protected $header = [
        'Content-Type' => 'application/x-www-form-urlencoded',
        'X-Requested-With' => 'XMLHttpRequest',
        'HTTP_X-Requested-With' => 'XMLHttpRequest'
    ];


}