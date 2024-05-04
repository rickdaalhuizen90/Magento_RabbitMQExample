<?php
declare(strict_types=1);
namespace Rick\RabbitMQExample\MessageQueue;

use Rick\RabbitMQExample\Api\ConsumerInterface;

// This class is responsible for processing messages from the "test_product_save_queue_one" queue.
readonly class ConsumerOne implements ConsumerInterface
{
    // The "process" method is called whenever a message is received from the queue.
    // The $message parameter contains the message payload as a string.
    public function process(string $message): void
    {
        echo "Message received from RabbitMQ queue 1: " . PHP_EOL;
        print_r(json_decode($message, true));
    }
}
