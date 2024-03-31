<?php 
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','baklawpo_user');
define('DB_PASS','PiHO,&V]r^kP');
define('DB_NAME','baklawpo_db');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
