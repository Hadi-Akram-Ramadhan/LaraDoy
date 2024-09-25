<?php

/**
 * Main Entry Point
 * 
 * Ini adalah file utama yang nge-bootstrap seluruh aplikasi lo.
 * File ini nge-load semua komponen yang dibutuhin, setup routing, dan nge-dispatch request.
 * 
 * Flow:
 * 1. Load core classes dan helpers
 * 2. Inisialisasi Router
 * 3. Definisiin routes
 * 4. Ambil current URL
 * 5. Dispatch request ke controller yang sesuai
 * 
 * @package Main
 */

// Load core classes
require_once 'core/Router.php';
require_once 'core/Controller.php';

// Load helpers
require_once 'helpers/view.php';

// Instantiate the router
$router = new Router();

// Define your routes
$router->add('/', 'HomeController@index');
$router->add('/home', 'HomeController@index');
$router->add('/about', 'HomeController@about');

// Get the current URL
$url = isset($_GET['url']) ? '/' . $_GET['url'] : '/';

// Dispatch the router
$router->dispatch($url);
