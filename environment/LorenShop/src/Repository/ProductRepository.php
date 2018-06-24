<?php

namespace LorenShop\Repository;

use LorenShop\Helper\SingletonDbConnector;

class ProductRepository
{
    public function findManProducts(): array {
        $db = SingletonDbConnector::connect();

       $result = $db->query("SELECT Products.id_product, Products.name, Products.image, Products.brand, Products.price, 
Products.color, Products.description, Products.id_category, ProductDetails.size, Categories.id_sex_category
FROM Products 
INNER JOIN Categories ON Categories.id_category = Products.id_category 
INNER JOIN ProductDetails ON Products.id_product=ProductDetails.id_product
WHERE Categories.id_sex_category=2")->fetchAll();

        return $result;
    }

    public function findWomanProducts(): array {
        $db = SingletonDbConnector::connect();

       $result = $db->query("SELECT Products.id_product, Products.name, Products.image, Products.brand, Products.price, 
Products.color, Products.description, Products.id_category, ProductDetails.size, Categories.id_sex_category
FROM Products 
INNER JOIN Categories ON Categories.id_category = Products.id_category 
INNER JOIN ProductDetails ON Products.id_product=ProductDetails.id_product
WHERE Categories.id_sex_category=1")->fetchAll();

        return $result;
    }

    public function findWomanProductsSizeXS(): array {
        $db = SingletonDbConnector::connect();

       $result = $db->query("SELECT Products.id_product, Products.name, Products.image, Products.brand, Products.price, 
Products.color, Products.description, Products.id_category, ProductDetails.size, Categories.id_sex_category
FROM Products 
INNER JOIN Categories ON Categories.id_category = Products.id_category 
INNER JOIN ProductDetails ON Products.id_product=ProductDetails.id_product
WHERE Categories.id_sex_category=1 AND ProductDetails.size = 'XS'")->fetchAll();

        return $result;
    }

    public function findWomanProductsSizeS(): array {
        $db = SingletonDbConnector::connect();

       $result = $db->query("SELECT Products.id_product, Products.name, Products.image, Products.brand, Products.price, 
Products.color, Products.description, Products.id_category, ProductDetails.size, Categories.id_sex_category
FROM Products 
INNER JOIN Categories ON Categories.id_category = Products.id_category 
INNER JOIN ProductDetails ON Products.id_product=ProductDetails.id_product
WHERE Categories.id_sex_category=1  AND ProductDetails.size = 'S'")->fetchAll();

        return $result;
    }

    public function findWomanProductsSizeM(): array {
        $db = SingletonDbConnector::connect();

       $result = $db->query("SELECT Products.id_product, Products.name, Products.image, Products.brand, Products.price, 
Products.color, Products.description, Products.id_category, ProductDetails.size, Categories.id_sex_category
FROM Products 
INNER JOIN Categories ON Categories.id_category = Products.id_category 
INNER JOIN ProductDetails ON Products.id_product=ProductDetails.id_product
WHERE Categories.id_sex_category=1  AND ProductDetails.size = 'M'")->fetchAll();

        return $result;
    }

    public function findWomanProductsSizeL(): array {
        $db = SingletonDbConnector::connect();

       $result = $db->query("SELECT Products.id_product, Products.name, Products.image, Products.brand, Products.price, 
Products.color, Products.description, Products.id_category, ProductDetails.size, Categories.id_sex_category
FROM Products 
INNER JOIN Categories ON Categories.id_category = Products.id_category 
INNER JOIN ProductDetails ON Products.id_product=ProductDetails.id_product
WHERE Categories.id_sex_category=1  AND ProductDetails.size = 'L'")->fetchAll();

        return $result;
    }

    public function findWomanProductsSizeXL(): array {
        $db = SingletonDbConnector::connect();

       $result = $db->query("SELECT Products.id_product, Products.name, Products.image, Products.brand, Products.price, 
Products.color, Products.description, Products.id_category, ProductDetails.size, Categories.id_sex_category
FROM Products 
INNER JOIN Categories ON Categories.id_category = Products.id_category 
INNER JOIN ProductDetails ON Products.id_product=ProductDetails.id_product
WHERE Categories.id_sex_category=1  AND ProductDetails.size = 'XL'")->fetchAll();

        return $result;
    }

    public function findManProductsSizeXS(): array {
        $db = SingletonDbConnector::connect();

       $result = $db->query("SELECT Products.id_product, Products.name, Products.image, Products.brand, Products.price, 
Products.color, Products.description, Products.id_category, ProductDetails.size, Categories.id_sex_category
FROM Products 
INNER JOIN Categories ON Categories.id_category = Products.id_category 
INNER JOIN ProductDetails ON Products.id_product=ProductDetails.id_product
WHERE Categories.id_sex_category=2  AND ProductDetails.size = 'XS'")->fetchAll();

        return $result;
    }

    public function findManProductsSizeS(): array {
        $db = SingletonDbConnector::connect();

       $result = $db->query("SELECT Products.id_product, Products.name, Products.image, Products.brand, Products.price, 
Products.color, Products.description, Products.id_category, ProductDetails.size, Categories.id_sex_category
FROM Products 
INNER JOIN Categories ON Categories.id_category = Products.id_category 
INNER JOIN ProductDetails ON Products.id_product=ProductDetails.id_product
WHERE Categories.id_sex_category=2  AND ProductDetails.size = 'S'")->fetchAll();

        return $result;
    }

    public function findManProductsSizeM(): array {
        $db = SingletonDbConnector::connect();

       $result = $db->query("SELECT Products.id_product, Products.name, Products.image, Products.brand, Products.price, 
Products.color, Products.description, Products.id_category, ProductDetails.size, Categories.id_sex_category
FROM Products 
INNER JOIN Categories ON Categories.id_category = Products.id_category 
INNER JOIN ProductDetails ON Products.id_product=ProductDetails.id_product
WHERE Categories.id_sex_category=2  AND ProductDetails.size = 'M'")->fetchAll();

        return $result;
    }

    public function findManProductsSizeL(): array {
        $db = SingletonDbConnector::connect();

       $result = $db->query("SELECT Products.id_product, Products.name, Products.image, Products.brand, Products.price, 
Products.color, Products.description, Products.id_category, ProductDetails.size, Categories.id_sex_category
FROM Products 
INNER JOIN Categories ON Categories.id_category = Products.id_category 
INNER JOIN ProductDetails ON Products.id_product=ProductDetails.id_product
WHERE Categories.id_sex_category=2  AND ProductDetails.size = 'L'")->fetchAll();

        return $result;
    }

    public function findManProductsSizeXL(): array {
        $db = SingletonDbConnector::connect();

       $result = $db->query("SELECT Products.id_product, Products.name, Products.image, Products.brand, Products.price, 
Products.color, Products.description, Products.id_category, ProductDetails.size, Categories.id_sex_category
FROM Products 
INNER JOIN Categories ON Categories.id_category = Products.id_category 
INNER JOIN ProductDetails ON Products.id_product=ProductDetails.id_product
WHERE Categories.id_sex_category=2  AND ProductDetails.size = 'XL'")->fetchAll();

        return $result;
    }

    public function findWomanProductsPriceOne(): array {
        $db = SingletonDbConnector::connect();

       $result = $db->query("SELECT Products.id_product, Products.name, Products.image, Products.brand, Products.price, 
Products.color, Products.description, Products.id_category, ProductDetails.size, Categories.id_sex_category
FROM Products 
INNER JOIN Categories ON Categories.id_category = Products.id_category 
INNER JOIN ProductDetails ON Products.id_product=ProductDetails.id_product
WHERE Categories.id_sex_category=1 AND Products.price < 100")->fetchAll();

        return $result;
    }

    public function findWomanProductsPriceTwo(): array {
        $db = SingletonDbConnector::connect();

       $result = $db->query("SELECT Products.id_product, Products.name, Products.image, Products.brand, Products.price, 
Products.color, Products.description, Products.id_category, ProductDetails.size, Categories.id_sex_category
FROM Products 
INNER JOIN Categories ON Categories.id_category = Products.id_category 
INNER JOIN ProductDetails ON Products.id_product=ProductDetails.id_product
WHERE Categories.id_sex_category=1 AND Products.price BETWEEN 100 AND 200")->fetchAll();

        return $result;
    }

    public function findWomanProductsPriceThree(): array {
        $db = SingletonDbConnector::connect();

       $result = $db->query("SELECT Products.id_product, Products.name, Products.image, Products.brand, Products.price, 
Products.color, Products.description, Products.id_category, ProductDetails.size, Categories.id_sex_category
FROM Products 
INNER JOIN Categories ON Categories.id_category = Products.id_category 
INNER JOIN ProductDetails ON Products.id_product=ProductDetails.id_product
WHERE Categories.id_sex_category=1 AND Products.price BETWEEN 200 AND 300")->fetchAll();

        return $result;
    }

    public function findWomanProductsPriceFour(): array {
        $db = SingletonDbConnector::connect();

       $result = $db->query("SELECT Products.id_product, Products.name, Products.image, Products.brand, Products.price, 
Products.color, Products.description, Products.id_category, ProductDetails.size, Categories.id_sex_category
FROM Products 
INNER JOIN Categories ON Categories.id_category = Products.id_category 
INNER JOIN ProductDetails ON Products.id_product=ProductDetails.id_product
WHERE Categories.id_sex_category=1 AND Products.price BETWEEN 300 AND 400")->fetchAll();

        return $result;
    }

    public function findWomanProductsPriceFive(): array {
        $db = SingletonDbConnector::connect();

       $result = $db->query("SELECT Products.id_product, Products.name, Products.image, Products.brand, Products.price, 
Products.color, Products.description, Products.id_category, ProductDetails.size, Categories.id_sex_category
FROM Products 
INNER JOIN Categories ON Categories.id_category = Products.id_category 
INNER JOIN ProductDetails ON Products.id_product=ProductDetails.id_product
WHERE Categories.id_sex_category=1 AND Products.price BETWEEN 400 AND 500")->fetchAll();

        return $result;
    }

    public function findWomanProductsPriceSix(): array {
        $db = SingletonDbConnector::connect();

       $result = $db->query("SELECT Products.id_product, Products.name, Products.image, Products.brand, Products.price, 
Products.color, Products.description, Products.id_category, ProductDetails.size, Categories.id_sex_category
FROM Products 
INNER JOIN Categories ON Categories.id_category = Products.id_category 
INNER JOIN ProductDetails ON Products.id_product=ProductDetails.id_product
WHERE Categories.id_sex_category=1 AND Products.price > 500")->fetchAll();

        return $result;
    }
public function findManProductsPriceOne(): array {
        $db = SingletonDbConnector::connect();

       $result = $db->query("SELECT Products.id_product, Products.name, Products.image, Products.brand, Products.price, 
Products.color, Products.description, Products.id_category, ProductDetails.size, Categories.id_sex_category
FROM Products 
INNER JOIN Categories ON Categories.id_category = Products.id_category 
INNER JOIN ProductDetails ON Products.id_product=ProductDetails.id_product
WHERE Categories.id_sex_category=1 AND Products.price BETWEEN 100 AND 200")->fetchAll();

        return $result;
    }

public function findManProductsPriceTwo(): array {
        $db = SingletonDbConnector::connect();

       $result = $db->query("SELECT Products.id_product, Products.name, Products.image, Products.brand, Products.price, 
Products.color, Products.description, Products.id_category, ProductDetails.size, Categories.id_sex_category
FROM Products 
INNER JOIN Categories ON Categories.id_category = Products.id_category 
INNER JOIN ProductDetails ON Products.id_product=ProductDetails.id_product
WHERE Categories.id_sex_category=1 AND Products.price BETWEEN 200 AND 300")->fetchAll();

        return $result;
    }

public function findManProductsPriceThree(): array {
        $db = SingletonDbConnector::connect();

       $result = $db->query("SELECT Products.id_product, Products.name, Products.image, Products.brand, Products.price, 
Products.color, Products.description, Products.id_category, ProductDetails.size, Categories.id_sex_category
FROM Products 
INNER JOIN Categories ON Categories.id_category = Products.id_category 
INNER JOIN ProductDetails ON Products.id_product=ProductDetails.id_product
WHERE Categories.id_sex_category=1 AND Products.price BETWEEN 300 AND 400")->fetchAll();

        return $result;
    }
public function findManProductsPriceFour(): array {
        $db = SingletonDbConnector::connect();

       $result = $db->query("SELECT Products.id_product, Products.name, Products.image, Products.brand, Products.price, 
Products.color, Products.description, Products.id_category, ProductDetails.size, Categories.id_sex_category
FROM Products 
INNER JOIN Categories ON Categories.id_category = Products.id_category 
INNER JOIN ProductDetails ON Products.id_product=ProductDetails.id_product
WHERE Categories.id_sex_category=1 AND Products.price > 400")->fetchAll();

        return $result;
    }

    public function findAllProductsByCategory($id): array {
        $db = SingletonDbConnector::connect();

       $result = $db->query("SELECT * FROM  Products WHERE id_category=$id")->fetchAll();

        return $result;
    }

    /**
     * @param int $id
     * @return array
     */
    public function findProductById(int $id): array {
        $db = SingletonDbConnector::connect();

       $result = $db->query("SELECT * FROM  Products WHERE id_product=$id")->fetch();

        return $result;
    }
}


