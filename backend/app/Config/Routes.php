<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->get('/loginPage', 'Users::login');
$routes->get('/signupPage', 'Users::signup');
$routes->get('/moodboard', 'Users::moodboard');
$routes->get('/roadmap', 'Users::roadmap');

$routes->get('/admin/dashboard', 'Admin::showDashboardPage');


$routes->post('loginPage', 'Auth::login');
$routes->post('logout', 'Auth::logout');
$routes->post('signupPage', 'Auth::signup');
