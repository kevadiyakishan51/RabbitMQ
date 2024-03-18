<?php

namespace KK\RabbitMQ\Model;

use KK\RabbitMQ\Api\ProductInterface;

class Product implements ProductInterface
{
    protected $sku;

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param $sku
     * @return $this|Product
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
        return $this;
    }
}
