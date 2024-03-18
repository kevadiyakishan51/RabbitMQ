<?php

namespace KK\RabbitMQ\Api;

use KK\RabbitMQ\Api\ProductInterface;

interface ProductImportInterface
{
    /**
     * @param ProductInterface $product[]
     * @return mixed
     */
    public function update(ProductInterface $product);
}
