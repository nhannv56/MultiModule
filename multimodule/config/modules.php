<?php

/**
 * Register application modules
 */
$application->registerModules(array(
    'frontend' => array(
        'className' => 'multimodule\Frontend\Module',
        'path' => __DIR__ . '/../apps/frontend/Module.php'
    )
));
