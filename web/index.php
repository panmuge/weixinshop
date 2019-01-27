<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/web.php';
//添加版本管理文件
if(file_exists(__DIR__."/../runtime/version/releace_version")){
    defined('RELEACE_VERSION') or define('RELEACE_VERSION',trim(file_get_contents(__DIR__.'/../runtime/version/releace_version')));
}else{
    defined('RELEACE_VERSION') or define('RELEACE_VERSION',time());
}

(new yii\web\Application($config))->run();
