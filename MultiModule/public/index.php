<?php
error_reporting ( E_ALL );

define ( 'APP_PATH', realpath ( '..' ) );

try {
	
	/**
	 * Read the configuration
	 */
	$config = include APP_PATH . "/app/config/config.php";
	
	/**
	 * Read auto-loader
	 */
	include APP_PATH . "/app/config/loader.php";
	
	/**
	 * Read services
	 */
		include APP_PATH . "/app/config/services.php";

	include APP_PATH . "/app/bootstrap.php";
	/**
	 * Handle the request
	 */
	$application = new \Phalcon\Mvc\Application ( $di );
	/**
	 * register multi module
	 */
	$application->registerModules ( array (
			'lecturers' => array (
					'className' => 'Multiple\Lecturers\Module',
					'path' => '../app/lecturers/Module.php' 
			),
			'backend' => array (
					'className' => 'Multiple\Backend\Module',
					'path' => '../app/backend/Module.php' 
			) 
	) );
	$application->setDI($di);
	echo $application->handle ()->getContent ();
} catch ( \Exception $e ) {
	echo $e->getMessage ();
}
