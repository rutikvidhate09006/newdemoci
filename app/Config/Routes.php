<?php

use App\Controllers\Home;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('sitemap.xml', 'SitemapController::html');
$routes->get('header', 'Home::header');

$routes->get('/', 'MainHomeController::Main_home');
$routes->get('Main_home', 'MainHomeController::Main_home');

$routes->get('about_us', 'AboutUsController::about_us');

$routes->get('service', 'home::service');

$routes->get('machinery', 'home::machinery');

$routes->get('clients', 'home::clients');

$routes->get('contact_us', 'ContactController::contact_us');

$routes->post('Submitform', 'ContactController::Submitform');

$routes->get('product', 'ProductController::product');

$routes->get('Cities', 'CityController::Cities');

// $routes->get('(:segment)', 'ProductController::category/$1');
$routes->get('(:segment)/(:segment)', 'CityController::productInLocation/$1/$2');

$routes->get('(:segment)', 'CityController::countryOrState/$1');












