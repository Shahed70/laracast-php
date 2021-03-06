<?php

    use App\controllers;
    use App\Core\App;

App::bind('config', require'config.php');


App::bind('database', new QueryBuilder(

    Connection::make(App::get('config')['database'])
));

function view($name, $data = [])
{
        extract($data);
    return require "app/views/{$name}.view.php";
}

function redirect($path) {
    return  header("location: /{$path}");
}
// $app = [];

// $app['config'] = require 'config.php';

// $app['database'] =  new QueryBuilder(

//     Connection::make($app['config']['database'])
// );
