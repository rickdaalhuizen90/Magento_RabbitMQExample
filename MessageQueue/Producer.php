<?php
declare(strict_types=1);
namespace Rick\RabbitMQExample\MessageQueue;

use Magento\Framework\MessageQueue\PublisherInterface;

// This class is responsible for sending messages to the "test.product.save" topic.
readonly class Producer
{
    // The name of the topic to which messages will be published.
    private const TOPIC_NAME = 'test.product.save';

    public function __construct(
        private PublisherInterface $publisher
    ) {
    }

    // The "send" method is used to publish a message to the "test.product.save" topic.
    // The $message parameter contains the message payload as a string.
    public function send(string $message): void
    {
        $this->publisher->publish(self::TOPIC_NAME, $message);
    }
}
