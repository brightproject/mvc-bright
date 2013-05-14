<?php
	/**
	 * PHP Basic MVC Framework Part 7 - Router
	 * By John White (@Jontyy)
	 */
	 //Вывод всех ошибок
	// error_reporting(E_ALL);
	define('SITE_PATH',realpath(__DIR__).'/');

	/*Require necessary files.*/
	require_once(SITE_PATH.'application/request.php');
	require_once(SITE_PATH.'application/router.php');
	require_once(SITE_PATH.'application/baseController.php');
	require_once(SITE_PATH.'application/baseModel.php');
	require_once(SITE_PATH.'application/load.php');
	require_once(SITE_PATH.'application/registry.php');
	require_once(SITE_PATH.'controllers/errorController.php');
	try{
		Router::route(new Request);
	}catch(Exception $e){
		$controller = new errorController;
		$controller->error($e->getMessage());
	}
// вводим в адресную строку всякий бред, смотрим что нам показывают
// $parts = new Request;
// echo "<pre>";
// print_r($parts);
// echo "</pre>";
// require(__DIR__.'../goDB/autoload.php');
// \go\DB\autoloadRegister();
// $params = array(
    // 'host'     => 'localhost',
    // 'username' => 'vladex_evdokimov',
    // 'password' => 'vladex_evdokimov',
    // 'dbname'   => 'vladex_evdokimov',
    // 'charset'  => 'utf8',
    // '_debug'   => true,
    // '_prefix'  => '',
    // '_adapter'  => 'mysql',
// );
// $db = go\DB\DB::create($params);