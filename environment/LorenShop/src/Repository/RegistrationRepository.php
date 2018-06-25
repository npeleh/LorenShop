<?php

namespace LorenShop\Repository;

use LorenShop\Helper\SingletonDbConnector;

class RegistrationRepository
{
    public function findAllRegistrationCategories(): array {
        $db = SingletonDbConnector::connect();




        $result = $db->query("SELECT * FROM Users")->fetchAll();

        return $result;
    }
    public function RegisterUser(){
        try
        {
            $name = $_GET['name'];
            $lastname=$_GET['lastname'];
            $email=$_GET['email'];
            $password=$_GET['password'];
            $db = SingletonDbConnector::connect();
            $statement = $db->prepare('INSERT INTO Users values (:name, :lastname, :email, :password, 1 )');
            $statement->bindParam(':name', $name);
            $statement->bindParam(':lastname', $lastname);
            $statement->bindParam(':email', $email);
            $statement->bindParam(':password', $password);
            $statement->execute();
        }catch(Exception $e)
        {

        }

    }


    public function findRegisteredUser(): array {
        $db = SingletonDbConnector::connect();

        $result = $db->query("SELECT * FROM Users" )->fetchAll();

        return $result;
    }
    /**
     * @param int $id
     * @return array
     */
    public function findRegistrationCategoriesById(int $id): array {
        $db = SingletonDbConnector::connect();

        $result = $db->query("SELECT * FROM Users")->fetch();

        return $result;
    }
}