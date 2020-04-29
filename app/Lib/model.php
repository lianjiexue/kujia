<?php
namespace App\Lib;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
$isDevMode = true;
$entityPath = APP_PATH.'Entity';
$config = Setup::createAnnotationMetadataConfiguration(array($entityPath), $isDevMode);
$conn = array(
    'driver'   => 'pdo_mysql',
    'user'     =>  '****',
    'password' => '****',
    'dbname'   =>  'test'
);
global $entityManager;
$entityManager = EntityManager::create($conn, $config);