<?php

declare(strict_types=1);

define('YII_ENV', 'tests');

$root = dirname(__DIR__, 2);
$autoload = $root . '/vendor/autoload.php';
$yii2 = $root . '/vendor/yiisoft/yii2/Yii.php';

if (!is_file($autoload)) {
    die('You need to set up the project dependencies using Composer');
}

if (!is_file($yii2)) {
    die('You need to set up yii2 using composer');
}

require_once $autoload;
require_once $yii2;
