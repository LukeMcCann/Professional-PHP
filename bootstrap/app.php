<?php declare(strict_types = 1);

require_once dirname(__DIR__) . '/vendor/autoload.php';

$request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();

$controller = new App\Http\Controllers\FrontPageController();
$response = $controller->show($request);
if (!$response instanceof \Symfony\Component\HttpFoundation\Response) 
{
    throw new Exception(
        'Controller methods must return a Response object.'
    );
}

$response->prepare($request);
$response->send();

\Tracy\Debugger::enable();