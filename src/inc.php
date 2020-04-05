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

if(file_exists($root . "/build")) {
    foreach (glob(__DIR__ . "/build/*.php") as $filename)
    {
        include $filename;
    }
    foreach (glob(__DIR__ . "/build/*Out/*.php") as $filename)
    {
        include $filename;
    }
    foreach (glob(__DIR__ . "/build/Edges/*.php") as $filename)
    {
        include $filename;
    }
}