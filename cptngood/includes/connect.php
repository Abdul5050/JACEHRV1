<?php
ob_start();
session_start();

//set timezone
date_default_timezone_set('Africa/Lagos');

//database credentials
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','alogin');

//application address
define('DIR','http://nairabundle.com/');
define('SITEEMAIL','noreply@nairabundle.com');

try {

	//create PDO connection
	$db1 = new PDO("mysql:host=".DBHOST.";port=3306;dbname=".DBNAME, DBUSER, DBPASS);
	$db1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
	//show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}

//include the user class, pass in the database connection


?>
