<?php

namespace APP\MODEL;

class ShippingCompany
{

    private string $cnpj;
    private string $name;

      /** 
     * essa função o total do frete com
     *  base na distancia percorrida para a entrega
     * @param float $tax
     * @param int $period
     
     */
    public function shipPrice(float $distance):float
    {
        return $distance * 0.5;

    }
}