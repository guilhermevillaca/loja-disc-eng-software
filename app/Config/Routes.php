<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//$routes->get('/', 'HomeController::index');
/*

$routes->get('home', 'HomeController::index');
$routes->get('categoria', 'CategoriaController::index');
$routes->get('categoria/novo', 'CategoriaController::novo');
$routes->get('categoria/listar', 'CategoriaController::listar');
$routes->get('categoria/editar', 'CategoriaController::editar');
$routes->post('categoria/salvar', 'CategoriaController::salvar');*/

$routes->resource('categorias');
