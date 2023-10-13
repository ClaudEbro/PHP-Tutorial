<?php

    class AnimalDAO {

        public static function getAnimalsDB(){

            $pdo = MyPDO::getPDO();
            
            $req = "SELECT * FROM animal";
            $stmt = $pdo->prepare($req);
            $stmt->execute();
            return $animals = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public static function getAnimalType($idAnimal){

            $pdo = MyPDO::getPDO();
            
            $req = "SELECT libelle
                    FROM type t
                    INNER JOIN animal a ON t.idType = a.idType
                    WHERE a.idAnimal = :idAnimal";
            $stmt = $pdo->prepare($req);
            $stmt->bindValue(":idAnimal", $idAnimal, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result['libelle'];
        }

        public static function getAnimalImage($idAnimal){

            $pdo = MyPDO::getPDO();
            
            $req = "SELECT libelle, url
                    FROM image i
                    INNER JOIN image_animal ia ON i.idImage = ia.idImage
                    WHERE ia.idAnimal = :idAnimal";
            $stmt = $pdo->prepare($req);
            $stmt->bindValue(":idAnimal", $idAnimal, PDO::PARAM_INT);
            $stmt->execute();
            return $animals = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }