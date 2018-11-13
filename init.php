<?php
require_once "vendor/autoload.php";

// Setup Doctrine
$configuration = Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration(
    $paths = [__DIR__ . '/app/entities'],
    $isDevMode = true
    );

// Setup connection parameters
$connection_parameters = [
    'dbname' => 'mgp',
    'user' => 'mgp',
    'password' => '#gue55P@55#',
    'host' => '20.30.40.189',
    'driver' => 'pdo_pgsql'
];

// Get the entity manager
$em = Doctrine\ORM\EntityManager::create($connection_parameters, $configuration);