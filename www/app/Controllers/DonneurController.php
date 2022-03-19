<?php

namespace App\Controllers;

use App\Service\InputHandler;
use App\Service\DonneurService;
use App\Views\ViewManager;

class DonneurController
{
    public static function ajouterDonneur()
    {
            $nomDonneur = InputHandler::post('nom');
            $numTel = InputHandler::post('numTel');
            if (isset($_POST['nom']) && isset($_POST['numTel'])) {
                if (DonneurService::addDonneurService($nomDonneur,$numTel)) {
                    ViewManager::renderView('Don/ajouter_don.php');
                } else {
                    ViewManager::renderView('Donneur/ajouter_donneur.php');
                }
            } else {
                ViewManager::renderView('Donneur/ajouter_donneur.php');
            }
    }

    /** Handle logic of rendering Liste de donneurs */
    public static function listDonneurs()
    {
            $donneurs= DonneurService::listDonneursService();
            ViewManager::renderView('Don/ajouter_don.php', [
                'donneurs' => $donneurs
            ]);
    }

}