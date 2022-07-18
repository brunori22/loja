<?php

namespace APP\Model;

class Address
{
    private int $id;
    private string $publicPlace;
<<<<<<< HEAD
    private string $street_name;
=======
    private string $streetName;
>>>>>>> 9eb0ee9817dc9b668218981b4445bf94c801119c
    private string $numberOfStreet;
    private ?string $complement;
    private string $neighborhood;
    private string $city;
    private string $zipCode;

    public function __construct(
        int $id = 0,
        string $publicPlace,
<<<<<<< HEAD
        //string $street_name;
=======
        string $streetName,
>>>>>>> 9eb0ee9817dc9b668218981b4445bf94c801119c
        string $numberOfStreet,
        ?string $complement,
        string $neighborhood,
        string $city,
        string $zipCode
    )
    {
        $this->id = $id;
        $this->publicPlace = $publicPlace;
<<<<<<< HEAD
        //$this->street_name = $street_name;
=======
        $this->$streetName = $streetName;
>>>>>>> 9eb0ee9817dc9b668218981b4445bf94c801119c
        $this->numberOfStreet = $numberOfStreet;
        $this->complement = $complement;
        $this->neighborhood = $neighborhood;
        $this->city = $city;
        $this->zipCode = $zipCode;
    }

<<<<<<< HEAD
    public function __get($attribute){
        return $this->$attribute;
}

    public function __set($atribute, $value)
    {
        $this->$atribute = $value;
    }

=======
    public function __get($attribute)
    {
        return $this->$attribute;
    }

    public function __set($attribute, $value)
    {
        return $this->$attribute = $value;
    }
>>>>>>> 9eb0ee9817dc9b668218981b4445bf94c801119c
}
