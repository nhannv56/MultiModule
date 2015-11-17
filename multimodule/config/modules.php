<?php

/**
 * Register application modules
 */
$application->registerModules ( array (
		'frontend' => array (
				'className' => 'multimodule\Frontend\Module',
				'path' => __DIR__ . '/../apps/frontend/Module.php' 
		),
		'backend' => array (
				'className' => 'multimodule\Backend\Module',
				'path' => __DIR__ . '/../apps/backend/Module.php' 
		) 
)
 );
