<?php

namespace LorenShop\Repository;

use LorenShop\Helper\SingletonDbConnector;

class WomanRepository
{
    public function findAllWomanCategories(): array {
        $db = SingletonDbConnector::connect();

        $result = $db->query("SELECT * FROM Categories WHERE id_sex_category=1")->fetchAll();

        return $result;
    }
    // public function findAllManCategories(): array {
    //     $db = SingletonDbConnector::connect();

    //     $result = $db->query("SELECT * FROM Categories WHERE id_sex_category=2")->fetchAll();

    //     return $result;
    // }

    /**
     * @param int $id
     * @return array
     */
    public function findWomanCategoriesById(int $id): array {
        $db = SingletonDbConnector::connect();

       $result = $db->query("SELECT * FROM Categories WHERE id_category = $id")->fetch();

        return $result;
    }
}