<?php

/*
 * This file is part of the Pho package.
 *
 * (c) Emre Sokullu <emre@phonetworks.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$root = dirname(__DIR__);

require  $root . "/vendor/autoload.php";
include($root . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "inc.php");
include($root . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "kernel.php");

run($root);