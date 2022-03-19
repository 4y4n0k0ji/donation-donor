<?php

namespace App\Router;

use App\Controllers\DonController;
use App\Controllers\DonneurController;

class Router
{
    /** @var array list of registered routes */
    private const ROUTES = [
        '/\/ajouter_donneur(.+)/' => [DonneurController::class, 'ajouterDonneur'],
        '/\/ajouter_don(.+)/' => [DonController::class, 'ajouterDon'],
        '/\/list_dons(.+)/' => [DonController::class, 'listDons']
    ];

    /** call the appropriate controller method of the requested uri */
    public static function handleRequest()
    {
        foreach (self::ROUTES as $url => $action) {
            $matches = preg_match($url, $_SERVER['REQUEST_URI'], $params);
            if ($matches > 0) {
                $controller = new $action[0];
                $controller->{$action[1]}($params);
                break;
            }
        }
    }
}