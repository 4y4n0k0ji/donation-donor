<?php

namespace App\Controllers;

use App\Service\DonneurService;
use App\Service\InputHandler;
use App\Views\ViewManager;
use App\Service\DonService;

class DonController
{
    public static function ajouterDon()
    {
        $nomDon = InputHandler::post('nom');
        $type = InputHandler::post('type');
        $donneur = InputHandler::post('donneur');
        if (isset($_POST['nom']) && isset($_POST['type']) && isset($_POST['donneur'])) {
            if (DonService::addDonService($nomDon,$type,$donneur)) {
                $donneurs= DonneurService::listDonneursService();
                ViewManager::renderView('Don/ajouter_don.php', [
                    'donneurs' => $donneurs
                ]);
            } else {
                $donneurs= DonneurService::listDonneursService();
                ViewManager::renderView('Don/ajouter_don.php', [
                    'donneurs' => $donneurs
                ]);
            }
        } else {
            $donneurs= DonneurService::listDonneursService();
            ViewManager::renderView('Don/ajouter_don.php', [
                'donneurs' => $donneurs
            ]);
        }

    }

    /** Handle logic of rendering List of Dons */
    public static function listDons()
    {
        $donneur = InputHandler::post('donneurSearch');
        if (isset($_POST['donneurSearch']))
        {
            $dons= DonService::listDonsService($donneur);
            ViewManager::renderView('Don/liste_dons.php', [
                'dons' => $dons
            ]);
        }
        else
        {
            ViewManager::renderView('Don/liste_dons.php');
        }
    }
}