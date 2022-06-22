<?php

namespace APP\MODEL;

CLASS SALE{
    private Client $client;

    private Employee $employee;

    private array $products;

    private string $dateOfSale;

    private float $total;

    public function calculateSpotPrice(float $discount):void
    {
        $total = self::calculatePrice();

        if(!empty($discount)){
            $this->$total - ($total * $discount);
        }else{
            $this->$total;
        }
    }

    /** 
     * essa função devera calcular o preço do
     *  produto com base em um parcelamento sob o regime de
     *  juros composto
     * @param float $tax
     * @param int $period
     * @return void
     */

    public function installmentPrice(float $tax,int
     $period):float
    {
        $total = self::calculatePrice();
        return $total * pow(1+$tax,$period);
    }

    


/**
 * Essa função irá calcular o total da venda, onde
 *  serão somados os subtotais de cada procuto
 *  relacionando a venda em questão
 * @return float
 */
private function calculatePrice():float
{
$subTotal = 0;
foreach($this->products as $products)
{
$subTotal += $products->price * $products->quantity;

    }

return $subTotal;
}

}