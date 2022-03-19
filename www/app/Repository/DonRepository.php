<?php

namespace App\Repository;

use App\Service\DatabaseConnection;

class DonRepository
{
    public function addDonDB($nomDon,$type,$idDonneur): bool
    {
        $conn = DatabaseConnection::getInstance();
            $sql = "insert into don (nom_don,type,donneur_id) values(:don,:typedon,:donneur)";
            try{
                $handle = $conn->prepare($sql);
                $params = [
                    ':don'=>$nomDon,
                    ':typedon'=>$type,
                    ':donneur'=>$idDonneur
                ];
                $handle->execute($params);
                return true;
            }
            catch(\PDOException $e){
                return false;
            }
    }

    public static function getAllDonsByDonneur(string $donneur)
    {
        $conn = DatabaseConnection::getInstance();
        $statement = $conn->prepare('select d.* from don d inner join donneur dn on dn.id=d.donneur_id where dn.nom_donneur= :nom_donneur');
        $parametre = ['nom_donneur'=>$donneur];
        $statement->execute($parametre);
        //$dons = $statement->fetch();
        $dons = $statement->fetchAll(\PDO::FETCH_ASSOC);
        return $dons;
    }


}