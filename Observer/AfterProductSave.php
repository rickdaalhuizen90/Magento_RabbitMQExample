<?php
declare(strict_types=1);
namespace Rick\RabbitMQExample\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Rick\RabbitMQExample\MessageQueue\Producer;

readonly class AfterProductSave implements ObserverInterface
{
    public function __construct(
        private readonly Producer $producer
    ) {
    }

    public function execute(Observer $observer): void
    {
        $product = $observer->getData('product');

        if ($product === null) {
            return;
        }

        $this->producer->send(json_encode($product->toArray()));
    }
}
