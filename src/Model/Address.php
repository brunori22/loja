<?php

namespace APP\Model;

class Address
{
    private string $publicPlace;
    private string $street_name;
    private string $numberOfStreet;
    private string $complement;
    private string $neighborhood;
    private string $city;


    private string $zipCode;

    public function __construct(
        string $publicPlace,
        //string $street_name;
        string $numberOfStreet,
        string $complement,
        string $neighborhood,
        string $city,
        string $zipCode
    )
    {
        $this->publicPlace = $publicPlace;
        //$this->street_name = $street_name;
        $this->numberOfStreet = $numberOfStreet;
        $this->complement = $complement;
        $this->neighborhood = $neighborhood;
        $this->city = $city;
        $this->zipCode = $zipCode;
    }

    public function __get($attribute){
        return $this->$attribute;
}

    public function __set($atribute, $value)
    {
        $this->$atribute = $value;
    }

}
