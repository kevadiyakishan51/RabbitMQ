<?php

namespace KK\RabbitMQ\Api;


interface ProductInterface
{
    /**
     * @return string
     */
    public function getSku();

    /**
     * @param $sku
     * @return $this
     */
    public function setSku($sku);
}
