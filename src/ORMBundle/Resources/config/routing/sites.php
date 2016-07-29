<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('sites_index', new Route(
    '/',
    array('_controller' => 'ORMBundle:Sites:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('sites_show', new Route(
    '/{id}/show',
    array('_controller' => 'ORMBundle:Sites:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('sites_new', new Route(
    '/new',
    array('_controller' => 'ORMBundle:Sites:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('sites_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'ORMBundle:Sites:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('sites_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'ORMBundle:Sites:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
