<?php

namespace Multiple\Backend;

use Phalcon\Loader;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Dispatcher;
use Phalcon\DiInterface;
use Phalcon\Db\Adapter\Pdo\Mysql as Database;

class Module
{

	public function registerAutoloaders()
	{

		$loader = new Loader();

		$loader->registerNamespaces(array(
			'Multiple\Backend\Controllers' => '../app/backend/controllers/',
			'Multiple\Backend\Models'      => '../app/backend/models/',
			'Multiple\Backend\Plugins'     => '../app/backend/plugins/',
		));

		$loader->register();
	}

	/**
	 * Register the services here to make them general or register in the ModuleDefinition to make them module-specific
	 */
	public function registerServices(DiInterface $di)
	{

		//Registering a dispatcher
		$di->set('dispatcher', function() {
			$dispatcher = new Dispatcher();
			$dispatcher->setDefaultNamespace("Multiple\Backend\Controllers\\");
			return $dispatcher;
		});

		//Registering the view component
		$di->set('view', function() {
			$view = new View();
			$view->setViewsDir('../app/backend/views/');
			return $view;
		});

		//Set a different connection in each module
	}
}
