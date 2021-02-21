<?php 
// Общие настройки
define('DEBUG_MODE', true);

if(DEBUG_MODE === true) {
	ini_set('display_errors',1);
	error_reporting(E_ALL);
} 

// Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Autoload.php');
require_once(ROOT.'/config/settings.php'); 

$pdo = Connection::connect(); 

////////////////////////////////////////////////////////////

$id_user = (int) $_GET['id_user'] ?? null;
$data = Articles::getArticlesUser($id_user);  
echo json_encode($data);
exit();   
?>