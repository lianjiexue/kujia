<?php
use Illuminate\Container\Container;
use Illuminate\Database\Capsule\Manager;

$database = [
    'driver'    => 'mysql',
    'host'      => '127.0.0.1',
    'database'  => '*****',
    'username'  => '****',
    'password'  => '****',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
];
$manger = new Manager;

// 创建链接
$manger->addConnection($database);

// 设置全局静态可访问
$manger->setAsGlobal();

// 启动Eloquent
$manger->bootEloquent();