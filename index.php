<?php

spl_autoload_register(function($class) {
	$directory_list = include $_SERVER['DOCUMENT_ROOT'] . '/autoload_paths.php';
	foreach($directory_list as $path){
		if(file_exists($_SERVER['DOCUMENT_ROOT'] . $path . $class . '.php')){
			include $_SERVER['DOCUMENT_ROOT'] . $path . $class . '.php';
		}
	}
});
