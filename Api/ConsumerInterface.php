<?php

namespace Rick\RabbitMQExample\Api;

interface ConsumerInterface
{
    public function process(string $message): void;
}
