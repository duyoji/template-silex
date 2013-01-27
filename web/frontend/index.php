<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use App\Util\AlertUtil;

$app = new Silex\Application();
$app['debug'] = true;

/****************************************************************
 * Routing event method
 ****************************************************************/
$app->get('/', function() {
	return AlertUtil::alert();
});

$app->run();
