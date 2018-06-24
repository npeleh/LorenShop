<?php

namespace LorenShop\Entity;

class Woman implements \JsonSerializable {

     public $id_category;
     public $name;

   public function __construct( $id_category, $name ) {
        $this->id_category = $id_category;
        $this->name = $name;
    }
    public function jsonSerialize(){
        return [
            'id_category' => $this->id_category,
            'name' => $this->name

        ];
    }

    public static function fromState(array $state): Woman
    {
        // validate state before accessing keys!
        return new self(
            $state['id_category'],
            $state['name']
        );
    }
}
?>