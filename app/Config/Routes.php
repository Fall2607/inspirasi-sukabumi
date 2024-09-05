<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// auth
$routes->get('/', 'Auth::index');
$routes->get('/auth/process', 'Auth::process');

// site
$routes->get('/dashboard', 'Site::index');
$routes->get('/inovasi-daerah', 'Site::inovasi_daerah');
$routes->get('/list/proposal', 'Site::list_proposal');
$routes->get('/list/penerapan', 'Site::list_penerapan');
$routes->get('/account/profile', 'Site::profile');
