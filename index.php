<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php';

define('REDIS_HOST','localhost:6379');

$db_config = array('hostname' => 'localhost',
                     'username' => 'root',
                     'password' => 'password',
                     'database' => 'AA',
                     'dbdriver' => 'mysqli',
                     'pconnect' => false,
                     'db_debug' => true
                );
\ActiveRecord\ActiveDatabase::addConfig("read", $db_config);
$db = \ActiveRecord\ActiveDatabase::get("read");

$args = array( 'db' => '================' );

$time = strtotime("+1 minutes");

ResqueScheduler::enqueueAt($time, "email", "Tasks\Update\dbTest", $args);

echo '<pre>';
print_r( date('Y-m-d H:i:s') );
echo '</pre>';

die();