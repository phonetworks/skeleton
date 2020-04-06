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
require  $root . "/vendor/autoload.php";
include $root . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "inc.php";
include $root . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "kernel.php";
$kernel = run($root);
include $root . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "server.php";
$server = get_server($root, $kernel);
$server->serve();