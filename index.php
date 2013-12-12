<?php

require_once __DIR__ . '/protected/vendor/autoload.php';

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);

Yii::createWebApplication(__DIR__ . '/protected/config/main.php')->run();
