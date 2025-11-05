<?php

/**
 * My Application bootstrap file.
 */
use Nette\Application\Routers\Route;

// Load Composer autoloader
require __DIR__ . '/../../vendor/autoload.php';

// Configure Tracy Logger manually for PHP 8.4 compatibility
// (Tracy Bar is not compatible with PHP 8.4, but we need Logger for error handling)
Tracy\Debugger::$logDirectory = __DIR__ . '/../log';
Tracy\Debugger::$strictMode = false;

// Configure application
$configurator = new Nette\Configurator;

// Disable Nette Debugger for PHP 8.x compatibility (Tracy 2.6 is not compatible with PHP 8.4)
$configurator->setDebugMode(false);
// Don't use Tracy debugger - not compatible with PHP 8.4
// $configurator->enableDebugger(__DIR__ . '/../log');

// Enable RobotLoader - this will load all classes automatically
$configurator->setTempDirectory(__DIR__ . '/../temp');
$configurator->createRobotLoader()
	->addDirectory(APP_DIR)
	->register();

// Create Dependency Injection container from config.neon file
$configurator->addConfig(__DIR__ . '/config/config.neon');
$container = $configurator->createContainer();

// Setup router
$container->router[] = new Route('index.php', 'Paylibo:default', Route::ONE_WAY);
$container->router[] = new Route('<presenter>/<action>[/<id>]', 'Paylibo:default');


// Configure and run the application!
$container->application->run();
