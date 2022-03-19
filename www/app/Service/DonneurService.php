<?php

namespace App\Service;

use App\Repository\DonneurRepository;

class DonneurService
{
    /**
     *  Ajouter un Donneur
     */
    public static function addDonneurService(string $nomDonneur, string $numTel): bool
    {
        return (new DonneurRepository())->addDonneurDB($nomDonneur,$numTel);
    }

    public static function listDonneursService()
    {
        return DonneurRepository::getAllDonneur();
    }
}