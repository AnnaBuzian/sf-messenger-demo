<?php

namespace App\Message\CommandHandler;


use App\Entity\User\User;
use App\Message\Command\SendNotification;

/**
 * Class SendNotificationHandler
 * @package App\Message\CommandHandler
 */
class SendNotificationHandler
{
    /**
     * @param SendNotification $message
     */
    public function __invoke(SendNotification $message)
    {
        foreach ($message->getUsers() as $user) {
            echo 'Send notification to '
                . $user['credential']['username']
                . '. Message: '
                . $message->getMessage()
                . "\n";

        }
    }
}