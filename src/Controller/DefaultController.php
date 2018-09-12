<?php

namespace App\Controller;


use App\Message\Command\SendNotification;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
    public function index(MessageBusInterface $bus, Request $request)
    {
        $message = $request->query->get('message', 'Something.');

        $bus->dispatch(new SendNotification($message));

        return $this->render('default/index.html.twig');
    }

}