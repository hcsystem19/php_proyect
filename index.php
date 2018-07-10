<?php
	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', realpath(dirname(__FILE__)) . DS);
	define('URL', "http://192.168.1.94/public_html/Proyecto03/");


	require_once "Config/Autoload.php";
	Config\Autoload::run();
	require_once "Views/template.php";
	Config\Enrutador::run(new Config\Request());

?>