<?php

namespace App\Controller;


use App\Entity\User\User;
use App\Message\Command\SendNotification;
use Doctrine\ORM\EntityManagerInterface;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;
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
     * @param Request $request
     * @param MessageBusInterface $bus
     * @param EntityManagerInterface $em
     * @return Response
     */
    public function index(
        Request $request,
        MessageBusInterface $bus,
        EntityManagerInterface $em
    )
    {
        $users = $em->getRepository(User::class)->findAll();
        $message = $request->query->get('message', 'Something.');

        $bus->dispatch(new SendNotification($message, $users));

        return $this->render('default/index.html.twig');
    }

}