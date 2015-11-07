<?php

namespace Multiple\Lecturers;

use Phalcon\Mvc\ModuleDefinitionInterface;
use Phalcon\Loader;
use Phalcon\DiInterface;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\View;

/**
 * configure for multi module in each module
 *
 * @author nhannv-pc
 *        
 */
class Module {
	const MODULE_NAME = 'Lecturers';
	const FOLDER_NAME = 'lecturers';
	
	/**
	 * register namespace for module
	 *
	 * {@inheritDoc}
	 *
	 * @see \Phalcon\Mvc\ModuleDefinitionInterface::registerAutoloaders()
	 */
	public function registerAutoloaders() {
		$loader = new Loader ();
		
		// register namespace for mvc
		$loader->registerNamespaces ( array (
				'Multiple\Lecturers\Controllers' => '../app/lecturers/controllers/',
				// 'Multiple\Lecturers\View' => '../app/lecturers/views',
				'Multiple\Lecturers\Models' => '../app/lecturers/models/' 
		) );
		$loader->register ();
	}
	/**
	 * register services for module
	 *
	 * {@inheritDoc}
	 *
	 * @see \Phalcon\Mvc\ModuleDefinitionInterface::registerServices()
	 */
	public function registerServices(DiInterface $di) {
		
		// register dispatcher
		$di->set ( 'dispatcher', function () {
			$dispatcher = new Dispatcher ();
			$dispatcher->setDefaultNamespace ( 'Multiple\Lecturers\Controllers\\' );
			return $dispatcher;
		} );
		
		// register view folder
		$di->set ( 'view', function () {
			$view = new View ();
			$view->setViewsDir ( '../app/lecturers/views/' );
			return $view;
		} );
	}
}