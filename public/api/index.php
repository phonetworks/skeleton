<?php

/*
 * This file is part of the Pho package.
 *
 * (c) Emre Sokullu <emre@phonetworks.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

 
$root = dirname(dirname(__DIR__));

require "{$root}/vendor/autoload.php";

$dotenv = \Dotenv\Dotenv::createImmutable($root);
$dotenv->load();

include( "{$root}/src/kernel.php");

$server = new \Pho\Server\Rest\Server($kernel);
$server->port(getenv("PORT"));
$server->serve();