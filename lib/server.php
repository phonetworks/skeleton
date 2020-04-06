<?php


/*
 * This file is part of the Pho package.
 *
 * (c) Emre Sokullu <emre@phonetworks.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Pho\Server\Rest\Server;
use Pho\Kernel\Kernel;

/**
 * Returns REST server
 * 
 * @param string $root Filesystem root
 * 
 * @return Server HTTP Server ready to run
 */
function get_server(string $root, Kernel $kernel): Server
{
    $kernel = run($root);
    $server = new \Pho\Server\Rest\Server($kernel);
    $server->port(getenv("PORT"));
    return $server;
}

