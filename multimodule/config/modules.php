<?php
/**
 * Register application modules
 */
$application->registerModules ( array (
		'frontend' => array (
				'className' => 'Multimodule\Frontend\Module',
				'path' => __DIR__ . '/../apps/frontend/Module.php' 
		),
		'backend' => array (
				'className' => 'Multimodule\Backend\Module',
				'path' => __DIR__ . '/../apps/backend/Module.php' 
		) 
)
 );