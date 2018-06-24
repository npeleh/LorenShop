<?php

namespace LorenShop\Controller;

use LorenShop\Entity\Man;
use LorenShop\Mapper\ManMapper;
use LorenShop\Repository\ManRepository;

class ManController {

    public function manCategoryList() {

        $manMapper = new ManMapper(
            new ManRepository()
        );

        $man = $manMapper->findAllManCategories();

        return $man;
    }

    public function manCategoryShow(int $id): Man {
        $manMapper = new ManMapper(new ManRepository());

        $man = $manMapper->findManCategoriesById($id);

        return $man;
    }

}
?>