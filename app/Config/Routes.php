<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Site::index');
$routes->get('/inovasi-daerah', 'Site::inovasi_daerah');
$routes->get('/account/profile', 'Site::profile');
