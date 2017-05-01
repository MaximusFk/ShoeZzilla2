<?php
require(__DIR__ . '/../vendor/autoload.php');

$application = json_decode(file_get_contents(__DIR__ . '/../.proto_config.json'), true);

define('DB_DRIVER', $application['DB_DRIVER']);
define('DB_HOST', $application['DB_HOST']);
define('DB_NAME', $application['DB_NAME']);
define('DB_USER', $application['DB_USER']);
define('DB_PASS', $application['DB_PASS']);

defined('YII_DEBUG') or define('YII_DEBUG', $application['YII_DEBUG'] != false);
defined('YII_CLI') or define('YII_CLI', false);
defined('YII_ENV') or define('YII_ENV', $application['YII_ENV']);
defined('YII_MAIL_USE_FILE_TRANSPORT') or define('YII_MAIL_USE_FILE_TRANSPORT', $application['YII_MAIL_USE_FILE_TRANSPORT'] == true);

require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/../scripts/config/web.php');

(new yii\web\Application($config))->run();