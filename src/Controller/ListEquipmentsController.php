<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ListEquipmentsController extends AbstractController
{
    /**
     * @Route("/equipments")
     */
    public function index(): Response

    {
       return new Response("hello world");
    }
}