<?php

namespace LorenShop\Entity;

class Product implements \JsonSerializable {

    public $id_product;
    public $name;
    public $image;
    public $brand;
    public $price;
    public $color;
    public $description;
    public $id_category;
    public $size;

   public function __construct($id_product, $name, $image, $brand, $price, $color, $description, $id_category, $size) {
        $this->id_product = $id_product;
        $this->name = $name;
        $this->brand = $brand;
        $this->image = $image;
        $this->price = $price;
        $this->color = $color;
        $this->description = $description;
        $this->id_category = $id_category;
        $this->size = $size;
    }
    public function jsonSerialize(){
        return [
            'id_product' => $this->id_product,
            'name' => $this->name,
            'image' => $this->image,
            'brand' => $this->brand,
            'price' => $this->price,
            'color' => $this->color,
            'description' => $this->description,
            'id_category' => $this->id_category,
            'size' => $this->size
        ];
    }

    public static function fromState(array $state): Product
    {
        // validate state before accessing keys!
        return new self(
            $state['id_product'],
            $state['name'],
            $state['image'],
            $state['brand'],
            $state['price'],
            $state['color'],
            $state['description'],
            $state['id_category'],
            $state['size']
        );
    }
}
?>