<?php declare(strict_types = 1);

use App\Http\Controllers\HelloWorld;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$hello = new HelloWorld;
$hello->announce();