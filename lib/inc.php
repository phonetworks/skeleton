<?php

/*
 * This file is part of the Pho package.
 *
 * (c) Emre Sokullu <emre@phonetworks.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if(file_exists($root . "/build")) {
    foreach (glob($root . "/build/*.php") as $filename)
    {
        include $filename;
    }
    foreach (glob($root . "/build/*Out/*.php") as $filename)
    {
        include $filename;
    }
    foreach (glob($root . "/build/Edges/*.php") as $filename)
    {
        include $filename;
    }
}