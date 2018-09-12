<?php

namespace App\Message\Command;


/**
 * Class SendNotification
 * @package App\Message\Command
 */
class SendNotification
{
    /** @var string - текст сообщения */
    private $message;


    /**
     * SendNotification constructor.
     * @param $message
     */
    public function __construct($message)
    {
        $this->message = $message;
    }


    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}