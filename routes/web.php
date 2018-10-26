<?php

$router->get('/', [
    'uses' => 'VueController@index'
]);

$router->group(['prefix' => 'api/v1'], function () use ($router)
{
    $router->get('posts',  [
        'uses' => 'BlogController@showAllPosts'
    ]);

    $router->get('posts/{id}', [
        'uses' => 'BlogController@showOnePost'
    ]);

    $router->post('posts', [
        'uses' => 'BlogController@create'
    ]);

    $router->delete('posts/{id}', [
        'uses' => 'BlogController@delete'
    ]);

    $router->put('posts/{id}', [
        'uses' => 'BlogController@update'
    ]);
});