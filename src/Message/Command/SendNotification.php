<?php

namespace App\Message\Command;


use App\Entity\User\User;

/**
 * Class SendNotification
 * @package App\Message\Command
 */
class SendNotification
{
    /** @var string - текст сообщения */
    private $message;

    /** @var User[] */
    private $users;


    /**
     * SendNotification constructor.
     * @param string $message
     * @param User[] $users
     */
    public function __construct($message, $users)
    {
        $this->message = $message;
        $this->users = $users;
    }


    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }


    /**
     * @return User[]
     */
    public function getUsers()
    {
        return $this->users;
    }
}