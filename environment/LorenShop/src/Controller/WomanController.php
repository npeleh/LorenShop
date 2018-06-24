<?php

namespace LorenShop\Controller;

use LorenShop\Entity\Woman;
use LorenShop\Mapper\WomanMapper;
use LorenShop\Repository\WomanRepository;

class WomanController {

    public function womanCategoryList() {

        $womanMapper = new WomanMapper(
            new WomanRepository()
        );

        $woman = $womanMapper->findAllWomanCategories();

        return $woman;
    }

    public function womanCategoryShow(int $id): Woman {
        $womanMapper = new WomanMapper(new WomanRepository());

        $woman = $womanMapper->findWomanCategoriesById($id);

        return $woman;
    }

}
?>