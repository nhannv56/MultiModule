<?php
use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\Router;
$di = new FactoryDefault ();

// specify routes for modules

$di->set ( 'router', function () {
	$router = new Router ();
	
	$router->setDefaultModule ( 'backend' );
	$router->add ( '/index', array (
			'module' => 'backend',
			'controller' => 'index',
			'action' => 'index'
	) );
	$router->add("/lecturer", array(
			'module' => 'backend',
			'controller' => 'index',
			'action' => 1,
	));
	
	$router->add ( '/login', array (
			'module' => 'backend',
			'controller' => 'login',
			'action' => 'index' 
	) );
	$router->add ( "/admin/products/:action", array (
			'module' => 'backend',
			'controller' => 'products',
			'action' => 1 
	) );
	$router->add ( "/products/:action", array (
			'controller' => 'products',
			'action' => 1 
	) );
	return $router;
} );