<?php

namespace App\Controller;


use App\Message\Command\SendNotification;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;

/**
 * Class DefaultController
 * @package App\Controller
 */
class DefaultController extends AbstractController
{

    /**
     * @param MessageBusInterface $bus
     * @return Response
     */
    public function index(MessageBusInterface $bus)
    {
        $bus->dispatch(new SendNotification('A string to be sent...'));

        return $this->render('default/index.html.twig');
    }

}