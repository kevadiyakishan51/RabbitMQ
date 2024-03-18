<?php

namespace KK\RabbitMQ\Model;

use KK\RabbitMQ\Api\ProductImportInterface;
use KK\RabbitMQ\Api\ProductInterface;
use KK\RabbitMQ\Publisher\ProductImport as Publisher;

class ProductImport implements ProductImportInterface
{

     /**
     * @var Publisher
     */
    private $publisher;

    /**
     * ProductImport constructor.
     * @param Publisher $publisher
     */
    public function __construct(Publisher $publisher)
    {
        $this->publisher = $publisher;
    }

    public function update(ProductInterface $product)
    {
        return $this->publisher->publish([$product->getSku()]);
    }

}
