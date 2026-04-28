<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ─── Public routes (Guest + Admin) ────────────────────────────
$routes->get('/',           'HomeController::dashboard');
$routes->get('/dashboard',  'HomeController::dashboard');
$routes->get('/history',    'HomeController::history');
$routes->get('/catalog',    'HomeController::catalog');
$routes->get('/login',      'AuthController::index');
$routes->post('/login',     'AuthController::login');
$routes->get('/logout',     'AuthController::logout');

// ─── Protected routes (Admin only — require auth filter) ───────
$routes->group('', ['filter' => 'auth'], function ($routes) {
    $routes->get('/promos',  'HomeController::promos');
    $routes->get('/contact', 'HomeController::contact');
    $routes->get('/laporan', 'HomeController::laporan');
});