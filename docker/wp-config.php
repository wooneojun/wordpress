<?php
define('DB_NAME', getenv('WORDPRESS_DB_NAME'));
define('DB_USER', getenv('WORDPRESS_DB_USER'));
define('DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD'));
define('DB_HOST', getenv('WORDPRESS_DB_HOST'));
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// 보안 키 자동 생성 (배포 시마다 갱신)
$security_keys = json_decode(getenv('WORDPRESS_SECURITY_KEYS'), true);
define('AUTH_KEY',         $security_keys['AUTH_KEY']);
define('SECURE_AUTH_KEY',  $security_keys['SECURE_AUTH_KEY']);
define('LOGGED_IN_KEY',    $security_keys['LOGGED_IN_KEY']);
define('NONCE_KEY',        $security_keys['NONCE_KEY']);
define('AUTH_SALT',        $security_keys['AUTH_SALT']);
define('SECURE_AUTH_SALT', $security_keys['SECURE_AUTH_SALT']);
define('LOGGED_IN_SALT',   $security_keys['LOGGED_IN_SALT']);
define('NONCE_SALT',       $security_keys['NONCE_SALT']);

$table_prefix = 'wp_';

// 개발 모드 설정
define('WP_DEBUG', false);
define('WP_ENVIRONMENT_TYPE', getenv('WORDPRESS_ENVIRONMENT'));

// AWS S3 미디어 스토리지 설정
define('AS3CF_SETTINGS', serialize(array(
    'provider' => 'aws',
    'access-key-id' => getenv('AWS_ACCESS_KEY_ID'),
    'secret-access-key' => getenv('AWS_SECRET_ACCESS_KEY'),
    'bucket' => getenv('S3_BUCKET_NAME'),
    'region' => getenv('AWS_REGION'),
)));

// 절대 경로
if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');