<?php

namespace LorenShop\Entity;

class ProductItem implements \JsonSerializable {

    public $id_product;
    public $name;

   public function __construct($id_product, $name) {
        $this->id_product = $id_product;
        $this->name = $name;
    }
    public function jsonSerialize(){
        return [
            'id_product' => $this->id_product,
            'name' => $this->name
        ];
    }

    public static function fromState(array $state): Product
    {
        // validate state before accessing keys!
        return new self(
            $state['id_product'],
            $state['name']
        );
    }
}
?>