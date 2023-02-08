<?php

use App\Models\CategoryModel;
use App\Router;

require_once __DIR__ . "/../vendor/autoload.php";

// $cate = new CategoryModel;
// var_dump($cate->all());

// $cate->insert(
//     [
//         'cate_name' => 'Xiaomi',
//         'slug' => 'xiaomi',
//         'desc' => 'Điện thoại xiaomi'
//     ]
// );
// $data = ['cate_name' => 'Huawue'];
// $result = CategoryModel::findOne(190)->update($data);
// var_dump($result);
// $result = $cate->where('cate_name', '=', 'Samsung')
//     ->orWhere('desc', '=', 'skirt');

// var_dump($result->get());

$router = new Router;

Router::get('/', function () {
    echo "HOME PAGE";
});
Router::get('/contact', function () {
    echo "CONTACT PAGE";
});

$router->resolve();
