<?php
// HTTP
define('HTTP_SERVER', 'http://santehych.test/');

// HTTPS
define('HTTPS_SERVER', 'http://santehych.test/');

// DIR
define('DIR_BASE', realpath($_SERVER['DOCUMENT_ROOT']) . '/');
define('DIR_APPLICATION', DIR_BASE . 'catalog/');
define('DIR_SYSTEM', DIR_BASE . 'system/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_IMAGE', DIR_BASE . 'image/');
define('DIR_CACHE', DIR_SYSTEM . 'cache/');
define('DIR_DOWNLOAD', DIR_SYSTEM . 'download/');
define('DIR_UPLOAD', DIR_SYSTEM . 'upload/');
define('DIR_MODIFICATION', DIR_SYSTEM . 'modification/');
define('DIR_LOGS', DIR_SYSTEM . 'logs/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'opencartdb996');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');
