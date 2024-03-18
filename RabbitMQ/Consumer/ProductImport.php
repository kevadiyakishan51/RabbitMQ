<?php

namespace KK\RabbitMQ\Consumer;

use KK\Log\Logger\Logger;

class ProductImport
{
    /**
     * Logging instance
     * @var \KK\Log\Logger\Logger
     */
    protected $_logger;

    /**
     * Constructor
     * @param Logger $logger
     */
    public function __construct(
        Logger $logger
    ) {
        $this->_logger = $logger;
    }

    public function process($operation)
    {
        $this->_logger->info($operation);
    }
}
