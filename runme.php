<?php declare(strict_types = 1);
namespace IPC;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require __DIR__ . '/src/autoload.php';
require __DIR__ . '/vendor/autoload.php';

$factory = new Factory();
$app = $factory->createSlimApplication();

$app->post(
    '/defineBillingAddress',
    function(Request $request, Response $response) use ($factory) {
        $handler = $factory->createDefineBillingAddressRequestHandler();
        $handler->handle($request, $response);
});

$_SERVER['SCRIPT_NAME'] = 'runme.php';
$app->run();

