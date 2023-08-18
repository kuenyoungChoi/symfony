<?php

namespace App\Service;

use Psr\Log\LoggerInterface;

class MessageGenerator
{

    private string $messageHash;
    public function __construct(
        private LoggerInterface $logger,
        callable $generateMessageHash,
    )
    {
        $this->messageHash = $generateMessageHash;
    }


    public function getHappyMessage(): string
    {
        $messages = [
            'You did it! You updated the system! Amazing!',
            'That was one of the coolest updates I\'ve seen all day!',
            'Great work! Keep going!',
        ];

        $index = array_rand($messages);

        return $messages[$index];
    }

    public function __invoke(): string
    {
        // Compute and return a message hash
    }
}
