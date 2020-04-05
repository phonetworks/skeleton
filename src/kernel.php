<?php

/*
 * This file is part of the Pho package.
 *
 * (c) Emre Sokullu <emre@phonetworks.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require("inc.php");

use Pho\Kernel\Kernel;
use PhoNetworksAutogenerated\User;

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$_grapho = getenv("GRAPH_CLASS");
$_foundero = getenv("FOUNDER_CLASS"); 
$_usero = getenv("USER_CLASS");

$_user_params = getenv("FOUNDER_PARAMS"); 
$_user_params = explode("::", $_user_params); 

$configs = [
  "services"=> [
        "database" => [
            "type" => getenv('DATABASE_TYPE'), 
            "uri"  => getenv('DATABASE_URI')
        ],
        "storage"  => [
            "type" => getenv('STORAGE_TYPE'), 
            "uri"  =>  getenv("STORAGE_URI")
        ],
        "index"    => [
            "type" => getenv('INDEX_TYPE'), 
            "uri"  => getenv('INDEX_URI')
        ]
  ],
  "default_objects" => [
  		"graph"   => $_grapho,
  		"founder" => $_foundero,
  		"actor"   => $_usero
  ]
];

$kernel = new \Pho\Kernel\Kernel($configs);
$founder = new $_foundero($kernel, $kernel->space(), ...$_user_params);
$kernel->boot($founder);