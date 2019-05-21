<?php error_reporting(0);
      ob_start(); 
      session_start();



//set timezone
date_default_timezone_set('america/california');

//database credentials
define('DBHOST','localhost');
define('DBUSER','jacehrco_db');
define('DBPASS','6.6cz1ex9I~j');
define('DBNAME','jacehrco_db');



//application address
define('DIR','htts://www.jacehr.com/');
define('WEB_ROOT','https://www.jacehr.com/');
define('SITEEMAIL','info@jacehr.com');

try {

	//create PDO connection
	$db = new PDO("mysql:host=".DBHOST.";port=3306;dbname=".DBNAME, DBUSER, DBPASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
	//show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}




include('functions.php');
require_once "classes/class.paginator.php";
require_once "db.php";
//include the user class, pass in the database connection


?>
