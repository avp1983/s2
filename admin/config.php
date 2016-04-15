<?php
// HTTP
define('HTTP_SERVER', 'http://localhost:8081/admin/');
define('HTTP_CATALOG', 'http://localhost:8081/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost:8081/admin/');
define('HTTPS_CATALOG', 'http://localhost:8081/');

// DIR
define('DIR_BASE', realpath($_SERVER['DOCUMENT_ROOT']) . '/');
define('DIR_APPLICATION', DIR_BASE . 'admin/');
define('DIR_SYSTEM', DIR_BASE . 'system/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_IMAGE', DIR_BASE . 'image/');
define('DIR_CACHE', DIR_SYSTEM . 'cache/');
define('DIR_DOWNLOAD', DIR_SYSTEM . 'download/');
define('DIR_UPLOAD', DIR_SYSTEM . 'upload/');
define('DIR_LOGS', DIR_SYSTEM . 'logs/');
define('DIR_MODIFICATION', DIR_SYSTEM . 'modification/');
define('DIR_CATALOG', DIR_BASE . 'catalog/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'ocartuser996');
define('DB_PASSWORD', '*ZSp[R]9x9BW');
define('DB_DATABASE', 'opencartdb996');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');
