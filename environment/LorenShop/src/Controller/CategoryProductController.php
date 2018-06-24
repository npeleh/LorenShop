<?php

namespace LorenShop\Controller;

use LorenShop\Entity\CategoryProduct;
use LorenShop\Mapper\CategoryProductMapper;
use LorenShop\Repository\CategoryProductRepository;

class FilterProductController {

    public function categoryProductList() {

        $categoryProductMapper = new CategoryProductMapper(
            new CategoryProductRepository()
        );

        $categoryProduct = $categoryProductMapper->findAllProductsByCategories();

        return $categoryProduct;
    }

    // public function categoryProductShow(int $id): CategoryProduct {
    //     $categoryProductMapper = new CategoryProductMapper(new CategoryProductRepository());

    //     $categoryProduct = $categoryProductMapper->findProductByCategory($id);

    //     return $categoryProduct;
    // }

}
?>