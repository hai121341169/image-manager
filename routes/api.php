<?php
/**
 * Created by PhpStorm.
 * User: hailer
 * Date: 2018/12/14
 * Time: 16:48
 */
$router->group(['namespace' => 'Backend', 'middleware' => 'auth'], function ($router) {
    $router->get('/', function () use ($router) {
        dd($router);
    });
    $router->get('order', ['uses' => 'OrderController@index']);
});