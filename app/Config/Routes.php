<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Public routes
$routes->get('/', 'HomeController::index');
$routes->get('/login', 'AuthController::index');
$routes->post('/login', 'AuthController::login');
$routes->get('/logout', 'AuthController::logout');

// Protected routes (require auth)
$routes->group('', ['filter' => 'auth'], function ($routes) {
    $routes->get('/dashboard', 'HomeController::dashboard');
    $routes->get('/history', 'HomeController::history');
    $routes->get('/catalog', 'HomeController::catalog');
    $routes->get('/promos', 'HomeController::promos');
    $routes->get('/contact', 'HomeController::contact');
});
