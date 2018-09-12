<?php

namespace App\Message\CommandHandler;


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
        echo "Send notification to ...\n";
    }
}