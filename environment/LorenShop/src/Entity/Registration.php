<?php

namespace LorenShop\Entity;

class Registration implements \JsonSerializable {

    public $name;
    public $lastname;
    public $email;
    public $password;

    public function __construct( $name, $lastname, $email, $password ) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
    }
    public function jsonSerialize(){
        return [
            'name' => $this->name,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'password' => $this->password

        ];
    }

    public static function fromState(array $state): Registration
    {
        // validate state before accessing keys!
        return new self(
            $state['name'],
            $state['lastname'],
            $state['email'],
            $state['password']
        );
    }
}
?>