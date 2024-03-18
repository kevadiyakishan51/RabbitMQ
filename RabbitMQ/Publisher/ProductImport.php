<?php

namespace KK\RabbitMQ\Publisher;

use Magento\Framework\MessageQueue\PublisherInterface;

class ProductImport
{
    const TOPIC_NAME = "product.topic";

    /**
     * @var PublisherInterface
     */
    private $publisher;

    /**
     * productImport constructor.
     * @param PublisherInterface $publisher
     */
    public function __construct(
        PublisherInterface $publisher
    )
    {
        $this->publisher = $publisher;
    }

    public function publish(array $data)
    {
        return $this->publisher->publish(self::TOPIC_NAME, json_encode($data));
    }

}
