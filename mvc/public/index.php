<?php
require '../vendor/autoload.php';

use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGenerator;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use App\Controller;

require_once('../model/connexion.php');

try
{
    // Init basic routes
    $home_route = new Route(
      '/',
      array('controller' => 'HomeController')
    );
    $cards_route = new Route(
      '/cards',
      array('controller' => 'CardsController')
    );
 
    // Init route with dynamic placeholders
    $cards_placeholder_route = new Route(
      '/cards/{id}',
      array('controller' => 'CardsController', 'method'=>'load'),
      array('id' => '[0-9]+')
    );
 
    // Add Route object(s) to RouteCollection object
    $routes = new RouteCollection();
    $routes->add('home_route', $home_route);
    $routes->add('cards_route', $cards_route);
    $routes->add('cards_placeholder_route', $cards_placeholder_route);
 
    // Init RequestContext object
    $context = new RequestContext();
    $context->fromRequest(Request::createFromGlobals());
 
    // Init UrlMatcher object
    $matcher = new UrlMatcher($routes, $context);
 
    // Find the current route
    $parameters = $matcher->match($context->getPathInfo());
    /** 
     * Appel du controler avec les bons paramètres : 
     *  - le nom de la route
     *  - le nom du contrôleur impliqué
    */
    //var_dump($parameters);
    $controller = new Controller($parameters, $connexion);
    
    
    exit;
}
catch (ResourceNotFoundException $e)
{
  echo $e->getMessage();
}
