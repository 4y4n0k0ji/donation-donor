<?php

namespace App\Repository;

use App\Service\DatabaseConnection;

class DonneurRepository
{
    public function addDonneurDB($nomDonneur,$numTel): bool
    {
        $conn = DatabaseConnection::getInstance();
        $sql = 'select * from donneur where nom_donneur = :nom_donneur';
        $stmt = $conn->prepare($sql);
        $parametre = ['nom_donneur'=>$nomDonneur];
        $stmt->execute($parametre);

        if($stmt->rowCount() === 0) {
            $sql = "insert into donneur (nom_donneur, num_tel) values(:nom,:tel)";
            try{
                $handle = $conn->prepare($sql);
                $params = [
                    ':nom'=>$nomDonneur,
                    ':tel'=>$numTel
                ];
                $handle->execute($params);
                return true;
            }
            catch(\PDOException $e){
                return false;
            }
        }
        return false;
    }
    public static function getAllDonneur()
    {
        $conn = DatabaseConnection::getInstance();
        $statement = $conn->query('SELECT id,nom_donneur FROM donneur');
        $donneurs = $statement->fetchAll(\PDO::FETCH_ASSOC);
        return $donneurs;
    }
}