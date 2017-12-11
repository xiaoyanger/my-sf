<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('advertising_homepage', new Route('/', array(
    '_controller' => 'AdvertisingBundle:Default:index',
)));
$collection->add('advertising_index', new Route('/advertising_index', array(
    '_controller' => 'AdvertisingBundle:Default:index',
)));
return $collection;
