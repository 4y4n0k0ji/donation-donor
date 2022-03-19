<?php

namespace App\Service;

use App\Repository\DonRepository;

class DonService
{
    /**
     *  Ajouter un Donneur
     */
    public static function addDonService(string $nomDonneur, string $type,int $idDonneur): bool
    {
        return (new DonRepository())->addDonDB($nomDonneur,$type,$idDonneur);
    }

    public static function listDonsService(string $donneur)
    {
        return DonRepository::getAllDonsByDonneur($donneur);
    }

}